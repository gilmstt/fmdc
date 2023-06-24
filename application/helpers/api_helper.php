<?php

function varDump($data)
{
   echo '<pre>' . var_export($data, true) . '</pre>';
}
function getFormatDate($param)
{

   $date = date('Y-m-d',strtotime($param));
   $date = str_replace("-", "", $date);

   $year  = substr($date, 0, 4);
   $month = substr($date, 4, 2); 
   $day   = substr($date, 6);

   $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
   $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

   return $day . " de " . $meses[$month - 1] . ", " . $year;
}
function time_elapsed_string($datetime, $full = false) {
   $now = new DateTime;
   $ago = new DateTime($datetime);
   $diff = $now->diff($ago);

   $diff->w = floor($diff->d / 7);
   $diff->d -= $diff->w * 7;

   $string = array(
       'y' => 'año',
       'm' => 'mes',
       'w' => 'semana',
       'd' => 'día',
       'h' => 'hora',
       'i' => 'minuto',
       's' => 'segundo',
   );
   foreach ($string as $k => &$v) {
       if ($diff->$k) {
           $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
       } else {
           unset($string[$k]);
       }
   }

   if (!$full) $string = array_slice($string, 0, 1);
   return $string ? implode(', ', $string) . ' atrás' : 'justo ahora';
}
function getScript($file)
{
   echo "<script src='" . base_url('assets/js/pages/' . $file) . "'></script>";
}
function getScriptAdmin($file)
{
   echo "<script src='" . base_url('assets/admin/js/' . $file) . "'></script>";
}
function getScriptLink($link)
{
   echo "<script  type='text/javascript' src='" . $link . "'></script>";
}
function getCategories()
{
   $CI = &get_instance();
   $categories = $CI->Backoffice_m->getRowsCategories();
   foreach ($categories as $row) {
      echo "<option value='{$row['id']}'>{$row['category']}</option>";
   }
}
function api_captcha($token)
{
   define('CLAVE', '6LeDQiEgAAAAAAXs58gMUd0aMM2-DoiguhCEw0pg');

   $cu = curl_init();
   curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
   curl_setopt($cu, CURLOPT_POST, 1);
   curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
   curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($cu);
   curl_close($cu);

   return json_decode($response, true);
}


function getPagination($params)
{
   $data = array();

   $CI = &get_instance();

   $limit = $params['limit'];
   $header = $params['header'];
   $byPage = $params['byPage'];
   $totalRec = $params['count'];
   $function = $params['function'];

   // Pagination configuration 
   $config['target']      = '#dataList';
   $config['base_url']    = base_url($function);
   $config['total_rows']  = $totalRec;
   $config['per_page']    = $byPage;
   $config['link_func']   = 'searchFilter';

   // Initialize pagination library 
   $CI->ajax_pagination->initialize($config);

   $active[$header] = 'active';
   // Get records 
   $data = array(
      'posts' => $limit,
      'header' => $active,
      'totalRows' => $totalRec,
   );

   return $data;
}
function ajaxPagination($params)
{
   $CI = &get_instance();

   $totalRec = $params['totalRec'];
   $function = $params['function'];
   $byPage = $params['byPage'];
   $posts = $params['posts'];
   $view = $params['view'];

   // Pagination configuration 
   $config['target']      = '#dataList';
   $config['base_url']    = base_url($function);
   $config['total_rows']  = $totalRec;
   $config['per_page']    = $byPage;
   $config['link_func']   = 'searchFilter';

   // Initialize pagination library 
   $CI->ajax_pagination->initialize($config);

   //Set data posts
   $data['posts'] = $posts;
   $data['totalRows'] =  $totalRec;

   // Load the data list view 
   if (!empty($view)) {
      $CI->load->view($view, $data, false);
   } else {
      return $data;
   }
}
function paramsPagination($param, $byPage)
{
   $CI = &get_instance();

   $page = $CI->input->post('page');
   if (!$page) {
      $offset = 0;
   } else {
      $offset = $page;
   }

   $keywords = $CI->input->post('keywords');
   $sortBy = $CI->input->post('sortBy');
   $orderBy = $CI->input->post('orderBy');

   if (!empty($keywords)) {
      $conditions['search']['keywords'] = $keywords;
   }
   if (!empty($sortBy)) {
      $conditions['search']['sortBy'] = $sortBy;
      $conditions['search']['orderBy'] = $orderBy;
   }

   if ($param == 'count') {
      $conditions['returnType'] = 'count';
   } else {
      $conditions['start'] = $offset;
      $conditions['limit'] = $byPage;
   }
   // Get record count 

   return $conditions;
}
