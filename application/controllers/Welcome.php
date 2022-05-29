<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function do_login(){
		$data = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];
		$getData = $this->ModelUser->getUsername($data['username']);
		if($getData){
			if($getData['level'] == 1){
				if($data['password'] == $getData['password']){
					$d1 = [
						'username' => $getData['username'],
						'level' => $getData['level'] 
					];
					$this->session->set_userdata($d1);
					redirect('Welcome/dashboard/'.$getData['level']);
				}else{
					echo 'password anda salah';
				}
			}else if($getData['level'] == 2){
				if($data['password'] == $getData['password']){
					$d2 = [
						'username' => $getData['username'],
						'level' => $getData['level'] 
					];
					$this->session->set_userdata($d2);
					redirect('Welcome/dashboard/'.$getData['level']);
				}else{
					echo 'password anda salah';
				}
			}else if($getData['level'] == 3){
				if($data['password'] == $getData['password']){
					$d3 = [
						'username' => $getData['username'],
						'level' => $getData['level'] 
					];
					$this->session->set_userdata($d3);
					redirect('Welcome/dashboard/'.$getData['level']);
				}else{
					echo 'password anda salah';
				}
			}else if($getData['level'] == 4){
				if($data['password'] == $getData['password']){
					$d4 = [	
						'username' => $getData['username'],
						'level' => $getData['level'] 
					];
					$this->session->set_userdata($d4);
					redirect('Welcome/dashboard/'.$getData['level']);
				}else{
					echo 'password anda salah';
				}
			}
		}else{
			echo 'user belum terdaftar';
		}
	}

	public function dashboard($level){
		if($level == 1){
			$data = [
				'judul' => 'Dashboard Admin',
				'konten' => 'admin/dashboard',
				'title' => 'dashboard',
				'level' => $level
			];
		}else if($level == 2){
			$data = [
				'judul' => 'Dashboard QC',
				'konten' => 'qc/dashboard',
				'title' => 'dashboard',
				'level' => $level
			];
		}else if($level == 3){
			$data = [
				'judul' => 'Dashboard Picker',
				'konten' => 'picker/dashboard',
				'title' => 'dashboard',
				'level' => $level
			];
		}else if($level == 4){
			$data = [
				'judul' => 'Dashboard Kepala Gudang',
				'konten' => 'kepala/dashboard',
				'title' => 'dashboard',
				'level' => $level
			];
		}
		return $this->load->view('template',$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome/index');
	}
}
