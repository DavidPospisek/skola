<?php
class skolamodel extends CI_Model  
{
public function get_menu() 
        {
        $this->db->order_by('id_menu', 'ASC');
        $query = $this->db->get('menu');

        
        return $query->result();
        } 
}