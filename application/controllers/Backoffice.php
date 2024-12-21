<?php
defined('BASEPATH') or exit('No direct script access allowed');
//http://localhost/fmdc/admin/blogs?ci=1qa23#
class Backoffice extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      $this->load->model('Backoffice_m');
      $this->load->helper('api');
      $this->load->library('ajax_pagination');
      $this->perPage = 10;
      $this->ci = '1qa23';
   }
   /* ------------------------------------------------------------------------------------------------ */
   /* ------------------------------------------------ Views ----------------------------------------- */
   /* ------------------------------------------------------------------------------------------------ */
   public function index()
   {
      $key = $this->input->get('ci');

      if (!empty($this->session->userdata('user')['user_id'])) {
         redirect('admin/blogs');
      }

      if (!isset($key) || $key !== $this->ci) {
         show_404();
      }

      $this->load->view('admin/layout/header');
      $this->load->view('admin/pages/blogs');
      $this->load->view('admin/layout/footer');
   }
   public function blogs()
   {
      //$this->isAunthenticated();
      $key = $this->input->get('ci');

      if (!isset($key) || $key !== $this->ci) {
         show_404();
      }
      $count['returnType'] = 'count';
      $totalRec = $this->Backoffice_m->getRowsBlog($count);

      $items_page['limit'] = $this->perPage;
      $posts = $this->Backoffice_m->getRowsBlog($items_page);

      $data = getPagination(array(
         'limit' => $posts,
         'count' => $totalRec,
         'header' => 'blogs',
         'byPage' => $this->perPage,
         'function' => 'Backoffice/BlogPagination',
      ));

      $this->load->view('admin/layout/header', $data['header']);
      $this->load->view('admin/pages/blogs', $data);
      $this->load->view('admin/layout/footer');
   }
   public function new_blog()
   {
      //$this->isAunthenticated();
      $data['new_blog'] = 'active';

      $this->load->view('admin/layout/header', $data);
      $this->load->view('admin/pages/postblog');
      $this->load->view('admin/layout/footer');
   }
   public function edit_blog($id)
   {
      //$this->isAunthenticated();
      $data['new_blog'] = 'active';
      $data['post'] = $this->Backoffice_m->getInfoPost($id);

      $this->load->view('admin/layout/header', $data);
      $this->load->view('admin/pages/postblog', $data);
      $this->load->view('admin/layout/footer');
   }
   /* ------------------------------------------------------------------------------------------------ */
   /* ----- Ajax categories Functions ------- */
   /* ------------------------------------------------------------------------------------------------ */
   public function getCategories()
   {
      echo $this->Backoffice_m->getCategories();
   }
   public function CrudCategory()
   {
      if ($this->input->is_ajax_request()) {
         $category_id = !empty($this->input->post('category_id')) ? $this->input->post('category_id') : 0;

         if ($category_id != 0 && !$this->input->post('category')) {
            echo $this->Backoffice_m->CrudCategory(null, $category_id, 'delete');
         } else {
            $data = array(
               'slug' => $this->input->post('slug'),
               'category' => $this->input->post('category'),
               'description' => $this->input->post('description'),
            );
            echo $this->Backoffice_m->CrudCategory($data, $category_id);
         }
      }
   }
   /* ------------------------------------------------------------------------------------------------ */
   /* ------- Ajax Blog Functions -------- */
   /* ------------------------------------------------------------------------------------------------ */
   public function uploadImageBlog()
   {
      if (isset($_FILES["file"]["name"])) {
         $config['upload_path'] = './assets/img/blog/';
         $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $this->load->library('upload', $config);
         if (!$this->upload->do_upload('file')) {
            $this->upload->display_errors();
            return false;
         } else {
            $data = $this->upload->data();
            echo base_url() . 'assets/img/blog/' . $_FILES['file']['name'];
         }
      }
   }
   public function PostBlog()
   {
      $data = array(
         'title' => $this->input->post('title'),
         'user_id' => 1,
         'content' => $this->input->post('editordata'),
         'category_id' => $this->input->post('category'),
         'description' => $this->input->post('description'),
      );

      echo $this->Backoffice_m->PostBlog($data);
   }
   public function BlogPagination()
   {
      // Define offset
      $conditions = paramsPagination('count', $this->perPage);
      $totalRec = $this->Backoffice_m->getRowsBlog($conditions);

      $params = paramsPagination('', $this->perPage);
      $posts = $this->Backoffice_m->getRowsBlog($params);

      ajaxPagination(array(
         'view' => 'admin/pages/blog_search',
         'posts' => $posts,
         'byPage' => $this->perPage,
         'function' => 'Backoffice/BlogPagination',
         'totalRec' => $totalRec,
      ));
   }
   /* ------------------------------------------------------------------------------------------------ */
   /* ------- Session ---------------- */
   /* ------------------------------------------------------------------------------------------------ */
   public function UserLogin()
   {
      if ($this->input->is_ajax_request()):

         if (!empty($this->input->post('user')) && !empty($this->input->post('password'))):
            $this->load->model('Users_m');
            $data['user'] = $this->input->post('user');
            $data['password'] = $this->input->post('password');
            $result = $this->Users_m->login($data);

            if (count($result)):

               $datosSesion = array(
                  'user_id' => $result[0]["user_id"],
                  'user' => $result[0]["user"],
                  'name' => $result[0]["name"],
                  'lastname' => $result[0]["last_name"],
                  'rol' => $result[0]["rol"],
               );

               $this->session->set_userdata('user', $datosSesion);
               echo 'success';

            else:
               echo '<b class="messages"> Datos de acceso incorrectos </b>';
            endif;
         else:
            echo '';
            //redirect('login/salir');
         endif;
      else:
         redirect('Login/salir');
      endif;
   }
   public function LogoutAdmin()
   {
      $this->session->unset_userdata('user');
      redirect(base_url('admin?ci=' . $this->ci));
   }
   public function isAunthenticated()
   {
      if (empty($this->session->userdata('user')['user_id'])) {
         redirect('admin');
      }
   }
}
