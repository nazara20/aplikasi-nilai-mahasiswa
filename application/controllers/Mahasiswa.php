<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');
		$this->load->model('Nilai_model', 'nilai');
    }

	public function index()
	{
		$data['title'] = 'Nilai Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa->getAllMahasiswa();
		$this->load->view('template/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Nilai Mahasiswa';
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('program_studi', 'Program Studi', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('mahasiswa/create', $data);
			$this->load->view('template/header', $data);
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
			$this->load->view('template/header', $data);
			$this->load->view('mahasiswa/edit', $data);
			$this->load->view('template/header', $data);
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

	public function inputnilai($id)
	{
		$data['title'] = 'Tambah Nilai Mahasiswa';
		$data['mahasiswaselect'] = $this->mahasiswa->getMahasiswabyId($id);
		$this->form_validation->set_rules('mahasiswa', 'Mahasiswa', 'required|trim');
		$this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'required|trim');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('mahasiswa/inputnilai', $data);
			$this->load->view('template/footer', $data);
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

	public function hapus($id)
    {
        $this->mahasiswa->hapusMahasiswa($id);
        $this->session->set_flashdata('message', 'Success Delete');
        redirect('mahasiswa');
    }
}
