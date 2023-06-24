<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backoffice_m extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      //Do your magic here
      $this->table = 'blog b';
   }
   
   
   public function PostBlog($post)
   {
      try {
         $cover_image = [];
         /*  $config['max_size'] = 2000;

         $config['max_width'] = 1100; */
         /* $config['min_width'] = 1100; */

         /*  $config['min_height'] = 1100; */
         /*  $config['max_height'] = 1100; */
         $config['allowed_types'] = 'jpeg|JPEG|JPG|jpg|png|PNG';
         $config['upload_path'] = './assets/img/blog';
         $this->load->library('upload', $config);

         $emptyInputs = $this->CheckEmptyInputs($post);

         if ($emptyInputs > 0) {
            $this->ResponseJson(false, 'Faltan campos por llenar.');
            return;
         }

         if (empty($_FILES['file']['name'])) {           
            // Update info product
            $this->db->where('blog_id',$this->input->post('blog_id'));
            $this->db->update('blog', $post);         
            // Send response           
            $this->ResponseJson(true, 'Cambios guardados correctamente.');

            return;
         }        
         
         if (!empty($_FILES['file']['name']) && file_exists($this->input->post('cover_image'))) {
            unlink($this->input->post('cover_image'));
         }
        
         if ($this->upload->do_upload('file')) {
            $data_file = $this->upload->data();
            //Set image in data blog
            $post['cover_image'] = 'assets/img/blog/' . $data_file['file_name'];
            //Insert blog
            if(empty($this->input->post('blog_id'))){
               $this->db->insert('blog', $post);
               $blog_id = $this->db->insert_id();
            }else{
               $blog_id =$this->input->post('blog_id');
               $this->db->where('blog_id', $blog_id);
               $this->db->update('blog', $post);
            }
           
            if ($blog_id > 0) {
               $this->ResponseJson(true, 'Post publicado exitosamente.');
               return;
            } else {
               if (file_exists($post['cover_image'])) {
                  unlink($post['cover_image']);
               }
               $this->ResponseJson(false, 'Hubo un error al publicar el post.');
               return;
            }
         } else {
            $this->ResponseJson(false, 'Hubo un error al subir la imagen principal. asegurate de que tu archivo sea .jpg .png .jpeg e inferior a 1100px');
            return;
         }
      } catch (Exception $ex) {
         return $ex->getMessage();
      }
   }
   public function ResponseJson($bool, $msg)
   {
      echo json_encode(array(
         'success' => $bool,
         'message' => $msg,
      ));
   }
   public function CheckEmptyInputs($data)
   {
      $emptyInputs = 0;

      foreach ($data as $key => $value) {
         if ($data[$key] == '') {
            $emptyInputs++;
         }
      }

      return $emptyInputs;
   }
   public function getFormatDate($param)
   {

      $date = date('Y-m-d', strtotime($param));
      $date = str_replace("-", "", $date);

      $year = substr($date, 0, 4);
      $month = substr($date, 4, 2);
      $day = substr($date, 6);

      $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
      $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

      return $day . " de " . $meses[$month - 1] . ", " . $year;
   }
   public function getRowsCategories()
   {
      try {
         return $this->db->get('categories')->result_array();
      } catch (Exception $exception) {
         return $exception->getMessage();
      }
   }
   public function getRowsBlog($params = array())
   {
    

      $this->db->select('c.category, b.*');
      $this->db->from($this->table);

      if (array_key_exists("where", $params)) {
         foreach ($params['where'] as $key => $val) {
            $this->db->where($key, $val);
         }
      }

      if (array_key_exists("search", $params)) {
         // Filter data by searched keywords
         if (!empty($params['search']['keywords'])) {
            $this->db->like('title', $params['search']['keywords']);
         }
      }

      // Sort data by ascending or desceding order
      if (!empty($params['search']['sortBy'])) {
         $this->db->order_by($params['search']['orderBy'], $params['search']['sortBy']);
      } else {
         $this->db->order_by('b.blog_id', 'desc');
      }

      if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
         $result = $this->db->count_all_results();
      } else {
         if (array_key_exists("b.blog_id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')) {
            if (!empty($params['b.blog_id'])) {
               $this->db->where('b.blog_id', $params['b.blog_id']);
            }
            $query = $this->db->get();
            $result = $query->row_array();
         } else {
            $this->db->order_by('b.blog_id', 'desc');
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
               $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
               $this->db->limit($params['limit']);
            }
            $this->db->join('categories c', 'b.category_id = c.id');
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : false;
         }
      }

      // Return fetched data
      return $result;
   }
   public function getInfoPost($id)
   {
      try {
         $this->db->select('c.category, u.name, u.last_name, b.*');
         $this->db->from($this->table);
         $this->db->join('categories c', 'b.category_id = c.id');
         $this->db->join('users u', 'b.user_id = u.user_id');
         $this->db->where('b.blog_id', $id);
         return $this->db->get()->row();
      } catch (Exception $e) {
         return $e->getMessage();
      }
   }
}

/* End of file Backoffice.php */
