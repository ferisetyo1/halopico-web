<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skrining extends CI_Controller
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
		$params = $params != null ? $params : "";
		$this->load->view('header', array(
			"active" => 3,
			"title" => "Skrining"
		));
		$json = @file_get_contents("https://halo-pico.web.app/getjson/User");
		$json2 = @file_get_contents("https://halo-pico.web.app/getjson/HasilSkrinning");
		if ($json&&$json2&&$json!=='NO SERVERS AVAILABLE'&&$json2!=='NO SERVERS AVAILABLE') {
			$user = json_decode($json);
			$skrining = json_decode($json2);
			$this->load->view('skrining', array("user" => $user,"skrining"=>$skrining));
			$this->load->view('footer');
			$this->load->view('data_table_js', array("filter" => $params));
		} else {
			$this->load->view('errors/500');
			$this->load->view('footer');
		}
	}

	public function detail($params,$params2)
	{
		$this->load->view('header', array(
			"active" => 3,
			"title" => "Detail Skrinning"
		));
		if ($params != null&&$params2!=null) {
			$json = @file_get_contents("https://halo-pico.web.app/getDetaiUser/$params2");
			$json1 = @file_get_contents("https://halo-pico.web.app/getDetaiSkrining/$params");
			$json2 = @file_get_contents("https://halo-pico.web.app/getjson/Soal");
			if ($json&&$json1&&$json2&&$json!=='NO SERVERS AVAILABLE'&&$json1!=='NO SERVERS AVAILABLE'&&$json2!=='NO SERVERS AVAILABLE') {
				$user = json_decode($json);
				$skrining = json_decode($json1);
				$soal = json_decode($json2);
				$this->load->view('detail_skrining', array("user" => $user[0],"skrining"=>$skrining,"soal"=>$soal));
				$this->load->view('footer');
			} else {
				$this->load->view('errors/500');
				$this->load->view('footer');
			}
		} else {
			$this->load->view('errors/500');
			$this->load->view('footer');
		}
	}
}
