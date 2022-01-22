<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{

		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('admin', ['username' => $username])->row_array();
		// jika usernya ada
		if ($admin) {
			// jika usernya aktif

			// cek password
			if (password_verify($password, $admin['password'])) {
				$data = [
					'username' => $admin['username']
				];
				$this->session->set_userdata($data);

				redirect('mahasiswa');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password
                    </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered
        </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!
            </div>');
		redirect('auth');
	}
}
