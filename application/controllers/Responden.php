<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
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
		$params=$_GET["filter"];
		$params = $params!=null ? $params : "";
		$this->load->view('header', array(
			"active" => 1,
			"title" => "Responden"
		));
		$json = @file_get_contents("https://halo-pico.web.app/getjson/User");
		if ($json) {
			$user = json_decode($json);
			$this->load->view('responden', array("user" => $user));
			$this->load->view('footer');
			$this->load->view('responden_js', array("filter" => $params));
		} else {
			$this->load->view('errors/500');
			$this->load->view('footer');
		}
	}

	public function detail($params)
	{
		echo $params;
	}
}
