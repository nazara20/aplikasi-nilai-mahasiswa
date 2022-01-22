<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function createNewMahasiswa($data)
    {

        $this->db->insert('mahasiswa', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    public function editMahasiswa($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function getMahasiswabyId($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }
   
    public function hapusMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

}
