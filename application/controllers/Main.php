<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

	}
	public function index()
	{
		$var['var_title']      = "Home";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/home";
		$var['var_page']	   = "dasboard";


 		$this->load->view('main', $var);
	}
	//--> lowongan 
	public function dLowongan()
	{
		$var['var_title']      = "Lowongan";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/lowongan";
		$var['var_page']	   = "Daftar Lowongan";

		$this->load->view('main', $var);

	}

	public function sLowongan()
	{
		$var['var_title']      = "Lowongan berhasil disimpan";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/s_lowongan";
		$var['var_page']	   = "Simpan Lowongan";

		$this->load->view('main', $var);

	}
	public function kLowongan()
	{
		$var['var_title']      = "lamaran berhasil dikirim";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/k_lowongan";
		$var['var_page']	   = "Kirim lamaran";

		$this->load->view('main', $var);

	}
	public function deLowongan()
	{
		$var['var_title']      = "Detail Lowongan";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/d_lowongan";
		$var['var_page']	   = "Detail Lowongan";

		$this->load->view('main', $var);

	}

	public function h_pencarian()
	{
		$var['var_title']      = "Detail Lowongan";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/h_pencarian";
		$var['var_page']	   = "Pencarian";

		$this->load->view('main', $var);

	}

	public function nearby()
	{
		$var['var_title']      = "Nearby Jobs";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/nearby";
		$var['var_page']	   = "Nearby";

		$this->load->view('main', $var);

	}

	public function rekomendasi()
	{
		$var['var_title']      = "Rekomendasi Pekerjaan";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/rekomendasi";
		$var['var_page']	   = "Rekomendasi";

		$this->load->view('main', $var);

	}

	//--> user profile
	public function profile()
	{
		$var['var_title']      = "Profile";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/profile";
		$var['var_page']	   = "Profil Pengguna";

		$this->load->view('main', $var);
	}

	//-->event
	public function event()
	{
		$var['var_title']      = "Event Yang Akan Datang";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/event";
		$var['var_page']	   = "Event";

		$this->load->view('main', $var);
	}

	public function sEvent()
	{
		$var['var_title']      = "Event berhasil disimpan";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/s_event";
		$var['var_page']	   = "Simpan Event";

		$this->load->view('main', $var);
	}

	public function kEvent()
	{
		$var['var_title']      = "berhasil bergabung Event";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/k_event";
		$var['var_page']	   = "Gabung Event";

		$this->load->view('main', $var);
	}
	public function dEvent()
	{
		$var['var_title']      = "Event Yang Akan Datang";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/d_event";
		$var['var_page']	   = "Detail Event";

		$this->load->view('main', $var);
	}

	public function feedback(){
		$var['var_title']      = "Umpan Balik";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/feedback";
		$var['var_page']	   = "Umpan Balik";

		$this->load->view('main', $var);
	}

	public function feedback_h(){
		$var['var_title']      = "Umpan Balik";
		$var['var_deskripsi']  = "Yuk Kerja merupakan web bla bla bla";
		$var['var_modul']      = "content/feedback_t";
		$var['var_page']	   = "Terima Kasih";

		$this->load->view('main', $var);
	}
	public function access_denied(){
		$this->load->view('denied');
	}

	public function logout() {
        $data = ['user_id', 'email'];
        $this->session->unset_userdata($data);
 
        redirect('login');
    }
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */