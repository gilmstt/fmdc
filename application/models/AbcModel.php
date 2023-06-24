<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AbcModel extends CI_Model{

    function get_articulos()
    {
        $this->db->limit(6);
        $this->db->order_by('FECHA_CREACION_ARTICULO','DESC');
        $query = $this->db->get('blog_abc');
        return $query->result();
    }
    public function getPost($id){
      return $this->db->get_where('blog',['blog_id' => $id])->row();
   }

}