<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_model
{
    public function getAllNilai()
    {
        return $this->db->get('nilai')->result_array();
    }

    public function createNewNilai($data)
    {

        $this->db->insert('nilai', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    public function editNilai($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('nilai', $data);
    }

    public function getNilaibyId($id)
    {
        return $this->db->get_where('nilai', ['id' => $id])->row_array();
    }
   
    public function hapusNilai($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nilai');
    }

}
