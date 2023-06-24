<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
   	{
      parent::__construct();
      $this->load->model('AbcModel');
      $this->perPage = 10;
      $this->load->library('ajax_pagination');
      $this->load->helper('api');

	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/index');
		$this->load->view('layout/footer');
	}
    public function disnea()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/disnea');
		$this->load->view('layout/footer');
	}
	public function insuficiencia_cardiaca()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/insuficiencia_cardiaca');
		$this->load->view('layout/footer');
	}
	public function infarto_miocardio()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/infarto_miocardio');
		$this->load->view('layout/footer');
	}
   public function miocardiopatias()
   {
		$this->load->view('layout/header');
		$this->load->view('pages/miocardiopatias');
		$this->load->view('layout/footer');
	}
   public function cardiopatias()
   {
		$this->load->view('layout/header');
		$this->load->view('pages/cardiopatias');
		$this->load->view('layout/footer');
	}
   public function valvulopatias()
   {
		$this->load->view('layout/header');
		$this->load->view('pages/valvulopatias');
		$this->load->view('layout/footer');
	}
   public function donation()
   {
		$this->load->view('layout/header');
		$this->load->view('pages/donation');
		$this->load->view('layout/footer');
	}
	public function view($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewpadecimientos($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/padecimientos/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewfactores($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/factoresriesgo/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewtratamientos($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/tratamientos/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewfarmaco($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/tratamientos/farmacologicos/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewquirurgico($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/tratamientos/quirurgicos/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewintervencionismo($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/tratamientos/intervencionismo/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function viewpruebasdiag($view)
   {
      $this->load->view('layout/header');
      $this->load->view('pages/prevencion/pruebas_diagnosticas/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function testimonios($view)
   {
      
      $this->load->view('layout/header');
      $this->load->view('pages/testimonios/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
   public function ciencia($view)
   {
      
      $this->load->view('layout/header');
      $this->load->view('pages/ciencia/'.str_replace('-','/',$view));
      $this->load->view('layout/footer');
   }
	public function post($id)
   {
      $data['post'] = $this->AbcModel->getPost($id);

      $this->load->view('layout/header');
      $this->load->view('pages/abc/post_abc',$data);
      $this->load->view('layout/footer');
   }
   public function abc_corazon()
	{
		/* $this->load->view('layout/header');
		$data['articulos'] = $this->AbcModel->get_articulos();
		$this->load->view('pages/abc_corazon', $data);
		$this->load->view('layout/footer'); */
      $this->load->model('Backoffice_m');

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

      $this->load->view('layout/header', $data);
      $this->load->view('pages/abc/abc_corazon', $data);
      $this->load->view('layout/footer');
	}
   public function BlogPagination()
   {
      // Define offset
      $this->load->model('Backoffice_m');

      $conditions = paramsPagination('count', $this->perPage);
      $totalRec = $this->Backoffice_m->getRowsBlog($conditions);

      $params = paramsPagination('', $this->perPage);
      $posts = $this->Backoffice_m->getRowsBlog($params);

      ajaxPagination(array(
         'view' => 'pages/abc/abc_corazon_search',
         'posts' => $posts,
         'byPage' => $this->perPage,
         'function' => 'Dashboard/BlogPagination',
         'totalRec' => $totalRec,
      ));
   }

	
}
