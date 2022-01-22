<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model', 'nilai');
        $this->load->model('Mahasiswa_model', 'mahasiswa');
    }

	public function index()
	{
		$data['title'] = 'Nilai Mahasiswa';
		$data['nilai'] = $this->nilai->getAllNilai();
		$this->load->view('nilai/index', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Nilai Mahasiswa';
        $data['nilaiselect'] = $this->mahasiswa->getAllMahasiswa();
		$this->form_validation->set_rules('mahasiswa', 'Mahasiswa', 'required|trim');
		$this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'required|trim');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('nilai/create', $data);
		} else {
			$data = [
				"mahasiswa" => $this->input->post('mahasiswa', true),
				"mata_kuliah" => $this->input->post('mata_kuliah', true),
				"nilai" => $this->input->post('nilai', true),
				"grade" => $this->input->post('grade', true),
			];
			if ($this->nilai->createNewNilai($data)) {
				$this->session->set_flashdata('message', 'Data Nilai berhasil ditambahkan');
				redirect('nilai');
			} else {
				$this->session->set_flashdata('message', 'Data Nilai gagal ditambahkan');
				redirect('nilai');
			}
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Nilai Mahasiswa';
		$data['editnilai'] = $this->nilai->getNilaibyId($id);
		$data['nilaiselect'] = $this->mahasiswa->getAllMahasiswa();
		$this->form_validation->set_rules('mahasiswa', 'Mahasiswa', 'required|trim');
		$this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'required|trim');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('nilai/edit', $data);
		} else {
			$data = [
				"mahasiswa" => $this->input->post('mahasiswa', true),
				"mata_kuliah" => $this->input->post('mata_kuliah', true),
				"nilai" => $this->input->post('nilai', true),
				"grade" => $this->input->post('grade', true),
			];
			$this->nilai->editNilai($data);
			$this->session->set_flashdata('message', 'Data Nilai berhasil diubah');
			redirect('nilai');
		}
	}

	public function hapus($id)
    {
        $this->nilai->hapusNilai($id);
        $this->session->set_flashdata('message', 'Success Delete');
        redirect('nilai');
    }
}
