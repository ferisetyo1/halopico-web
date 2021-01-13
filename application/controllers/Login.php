<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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
        if (isset($_SESSION["login"])) {
            redirect(base_url('home'));
        }
        $params = isset($_GET["status"]) ? $_GET["status"] : "";
        $this->load->view('login', array('status' => $params));
    }

    public function proses()
    {
        $user = $_POST["user"];
        $pw = $_POST["password"];
        $result = @$this->db->get_where('user', array('username' => $user))->result();
        if (count($result)) {
            if (password_verify($pw, $result[0]->password)) {
                $_SESSION["login"] = $_POST['user'];
                redirect(base_url("home"));
            } else {
                redirect('login?status=password_salah');
            }
        } else {
            redirect('login?status=password_salah');
        }
    }
    public function logout()
    {
        unset($_SESSION['login']);
        redirect('login');
    }
}
