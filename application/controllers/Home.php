<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$json = @file_get_contents("https://halo-pico.web.app/getjson/User");
		$json2 = @file_get_contents("https://halo-pico.web.app/getjson/ListPakar");
		$this->load->view('header', array(
			"active"=>0,
			"title" => "Dashboard"
		));
		$data = array();
		if ($json&&$json2&&$json!=='NO SERVERS AVAILABLE'&&$json2!=='NO SERVERS AVAILABLE') {
			$decode = json_decode($json);
			$decode2 = json_decode($json2);
			foreach ($decode as $val) {
				if (isset($val->selfReportCovidHasil)) {
					$data["covid"][$val->selfReportCovidHasil != null ? $val->selfReportCovidHasil : "Belum Test"][] = $val->nama;
				} else {
					$data["covid"]["Belum Test"][] = $val->nama;
				}
				if (isset($val->pekerjaan)) {
					$data["pekerjaan"][$val->pekerjaan != null ? $val->pekerjaan : "Tidak Bekerja"][] = $val->nama;
				} else {
					$data["pekerjaan"]["Tidak Bekerja"] = $val->nama;
				}
				if (isset($val->provinsi)) {
					$data["provinsi"][$val->provinsi != null ? $val->provinsi : "Tidak Punya"][] = $val->nama;
				} else {
					$data["pekerjaan"]["Tidak Bekerja"] = $val->nama;
				}
				if (isset($val->kondisiPsikologis)) {
					$data["kondisi"][$val->kondisiPsikologis != null ? $val->kondisiPsikologis : "Belum Test"][] = $val->nama;
				} else {
					$data["kondisi"]["belum Test"] = $val->nama;
				}
			}
			foreach ($decode2 as $val) {
				if (isset($val->tempat)) {
					$data["pakar_prov"][$val->tempat != null ? $val->tempat : "Tidak Punya"][] = $val->nama;
				} else {
					$data["pakar_prov"]["Tidak Punya"][] = $val->nama;
				}
			}
			// print_r($data);
			$this->load->view("home", $data);

			$data["labelCovid"] = json_encode(array_keys($data["covid"]));
			$data["labelPekerjaan"] = json_encode(array_keys($data["pekerjaan"]));
			$data["labelProvinsi"] = json_encode(array_keys($data["provinsi"]));
			$data["labelKondisi"] = json_encode(array_keys($data["kondisi"]));
			$data["labelPakarProv"] = json_encode(array_keys($data["pakar_prov"]));
			$data["valueCovid"] = json_encode(array_values(array_map(function ($array) {
				return count($array);
			}, $data['covid'])));
			$data["valueKondisi"] = json_encode(array_values(array_map(function ($array) {
				return count($array);
			}, $data['kondisi'])));
			$data["valuePekerjaan"] = json_encode(array_values(array_map(function ($array) {
				return count($array);
			}, $data['pekerjaan'])));
			$data["valueProvinsi"] = json_encode(array_values(array_map(function ($array) {
				return count($array);
			}, $data['provinsi'])));
			$data["valuePakarProv"] = json_encode(array_values(array_map(function ($array) {
				return count($array);
			}, $data['pakar_prov'])));
			$this->load->view('footer');
			$this->load->view("home_js", $data);
		} else {
			$this->load->view('errors/500');
			$this->load->view('footer');
		}
	}
}
