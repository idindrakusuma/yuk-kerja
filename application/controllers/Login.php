<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
	}
	public function index()
	{

		$var['var_title']      = "Login dulu..";
		$var['var_deskripsi']  = "Login Yuk KerjaID";
		//$var['var_modul']      = "content/event";
		$var['var_page']	   = "Event";

		$this->load->view('login', $var);
	}



	public function cek_login(){

		
		$user = $this->input->post('user');
		$pass = $this->input->post('password');

		if ($user == 'indrakusuma' && $pass == 'indrakusuma') {
			$this->session->set_userdata('user',$user);
			$this->session->set_flashdata('notif', 'Selamat Datang, Indra Kusuma !');
			redirect('main');
		}
		else{
			$this->session->set_flashdata('notif','<center>Username atau Password Salah ! </center>');
			redirect(base_url());
		}
	}

	public function registrasi()
	{
		$var['var_title']      = "Silahkan Daftar Terlebih Dahulu";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/event";
		$var['var_page']	   = "Daftar";

		$this->load->view('register', $var);
	}
	public function daftar(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');

		if ($username == 'indrakusuma') {
			$this->session->set_flashdata('info', '<center> Maaf, Username sudah digunakan !<br> Silahkan ganti yang lain</center>');
			redirect('login/registrasi');
		}else if ($email == 'indrakusuma@gmail.com') {
			$this->session->set_flashdata('info', '<center> Maaf, Email sudah digunakan !<br> Silahkan ganti yang lain</center>');
			redirect('login/registrasi');
		}else if ($password != $password2) {
			$this->session->set_flashdata('info', '<center> Password tidak cocok!</center>');
			redirect('login/registrasi');
		}else{
			redirect('login/sukses');
		}
	}

	public function sukses(){
		$this->session->set_flashdata('info', '<center> Pendaftaran sukses, silahkan login menggunakan Username dan Password Anda !<br> Semoga Sukses ! </center>');
		$var['var_title']      = "Selamat ! Pendaftaran Sukses !";
		$var['var_deskripsi']  = "";
		$var['var_page']	   = "Pendaftaran Sukses !";

		$this->load->view('sukses', $var);
	}

	public function lupas(){
		$this->session->set_flashdata('info', '<center> Password baru sudah dikirimkan ke Email Anda, silahkan ikuti petunjuk yang telah kami kirimkan di email Anda. Terima Kasih !</center>');
		$var['var_title']      = "Selamat ! Pendaftaran Sukses !";
		$var['var_deskripsi']  = "";
		$var['var_page']	   = "Pendaftaran Sukses !";

		$this->load->view('sukses', $var);
	}

	public function lupa_password(){
		$var['var_title']      = "Lupa Password ";
		$var['var_deskripsi']  = "Lupa Password Yuk KerjaID";
		//$var['var_modul']      = "content/event";
		$var['var_page']	   = "Event";

		$this->load->view('lupa_password', $var);
	}
	public function logout(){
		$this->session->unset_userdata(array('user' => ''));
		redirect(base_url());
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */