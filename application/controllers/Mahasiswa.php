<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');
    }

	public function index()
	{
		$data['title'] = 'Nilai Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa->getAllMahasiswa();
		$this->load->view('mahasiswa/index', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Nilai Mahasiswa';
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('program_studi', 'Program Studi', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('mahasiswa/create', $data);
		} else {
			$data = [
				"nim" => $this->input->post('nim', true),
				"nama" => $this->input->post('nama', true),
				"program_studi" => $this->input->post('program_studi', true),
				"no_hp" => $this->input->post('email', true),
			];
			if ($this->mahasiswa->createNewMahasiswa($data)) {
				$this->session->set_flashdata('message', 'Data Mahasiswa berhasil ditambahkan');
				redirect('mahasiswa');
			} else {
				$this->session->set_flashdata('message', 'Data Mahasiswa gagal ditambahkan');
				redirect('mahasiswa');
			}
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Data Mahasiswa';
		$data['editmahasiswa'] = $this->mahasiswa->getMahasiswabyId($id);
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('program_studi', 'Program Studi', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('mahasiswa/edit', $data);
		} else {
			$data = [
				"nim" => $this->input->post('nim', true),
				"nama" => $this->input->post('nama', true),
				"program_studi" => $this->input->post('program_studi', true),
				"no_hp" => $this->input->post('no_hp', true),
			];
			$this->mahasiswa->editMahasiswa($data);
			$this->session->set_flashdata('message', 'Data Mahasiswa berhasil diubah');
			redirect('mahasiswa');
		}
	}

	public function hapus($id)
    {
        $this->mahasiswa->hapusMahasiswa($id);
        $this->session->set_flashdata('message', 'Success Delete');
        redirect('mahasiswa');
    }
}
