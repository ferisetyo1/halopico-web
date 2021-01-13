<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION["login"])) {
            redirect(base_url('login'));
        }
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
		$params = isset($_GET["filter"]) ? $_GET["filter"] : "";
		$params2 = isset($_GET["status"]) ? $_GET["status"] : "";
		$params = $params != null ? $params : "";
		$params2 = $params2 != null ? $params2 : "";
		$this->load->view('header', array(
			"active" => 2,
			"title" => "Pakar"
		));
		$json = @file_get_contents("https://halo-pico.web.app/getjson/ListPakar");
		if ($json && $json !== 'NO SERVERS AVAILABLE') {
			$pakar = json_decode($json);
			$this->load->view('listpakar', array("pakar" => $pakar, "status" => $params2));
			$this->load->view('footer');
			$this->load->view('data_table_js', array("filter" => $params));
		} else {
			$this->load->view('errors/500');
			$this->load->view('footer');
		}
	}

	public function tambah()
	{
		$this->load->view('header', array(
			"active" => 2,
			"title" => "Tambah Pakar"
		));
		$this->load->view('tambah_pakar');
		$this->load->view('footer');
	}

	public function prosestambah()
	{
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('nohp');
		$tempat = $this->input->post('tempat');
		$json = @file_get_contents("https://halo-pico.web.app/tambahpakar/$nama/$nohp/$tempat");
		if ($json) {
			if (json_decode($json) === "sukses")
				redirect('pakar?status=sukses_insert');
		} else {
			redirect('pakar?status=gagal_insert');
		}
	}
	public function delete($id)
	{
		if ($id != null) {
			$json = @file_get_contents("https://halo-pico.web.app/deletepakar/$id");
			if ($json) {
				if (json_decode($json) === "sukses")
					redirect('pakar?status=sukses_delete');
			} else {
				redirect('pakar?status=gagal_delete');
			}
		}
	}
}
