<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION["login"])) {
			redirect(base_url('login'));
		}
		$db = $this->load->database();
	}

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		redirect('home');
	}
	public function gantipassword()
	{
		$this->load->view('header', array(
			"active" => -1,
			"title" => "Ganti Password"
		));
		$this->load->view('ganti_password', isset($_GET) ? $_GET : array());
		$this->load->view('footer');
	}
	public function prosesgantipassword()
	{
		$lama = $_POST['password_lama'];
		$baru = $_POST['password_baru'];
		$konfir = $_POST['password_konfirmasi'];
		$result = $this->db->get_where('user', array('username' => $_SESSION['login']))->result();
		if (count($result)) {
			if (password_verify($lama, $result[0]->password)) {
				if ($konfir == $baru) {
					$result2 = $this->db->update(
						'user',
						array('password' => password_hash($baru, PASSWORD_DEFAULT)),
						array('username' => $_SESSION['login'])
					);
					if ($result2) {
						redirect(base_url('settings/gantipassword?status=sukses'));
					} else {
						redirect(base_url('settingsgantipassword?status=failed'));
					}
				}else{
					redirect(base_url('settings/gantipassword?status=tidak_cocok'));
				}
			} else {
				redirect(base_url('settings/gantipassword?status=password_salah'));
			}
		} else {
			unset($_SESSION['login']);
			redirect('login');
		}
	}
}
