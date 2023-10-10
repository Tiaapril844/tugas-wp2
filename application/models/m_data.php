<?php
class M_data extends CI_Model{

    function input_data($data,$table){
        $this->db->insert($table,$data);

    }

    function tampil_data (){
        return $this->db->get('mahasiswa');
    }
    function get_data_by_id($id) {
        return $this->db->get_where('mahasiswa', array(
            'id' => $id)
            )->row();
    }

    function update_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}
