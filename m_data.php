<?php
class m_data extends CI_Model{
    function ambil_data(){
        return $this->db->get("user");
    }
}
?>