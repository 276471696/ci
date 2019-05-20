<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        session_start();
        $exec_uri = array();
        !empty($this->uri->segment(1)) && array_push($exec_uri, strtolower($this->uri->segment(1)));
        !empty($this->uri->segment(2)) && array_push($exec_uri, strtolower($this->uri->segment(2)));
        !empty($this->uri->segment(3)) && array_push($exec_uri, strtolower($this->uri->segment(3)));
        $this->sys_exec_uri =  !empty($exec_uri) ? implode('/', $exec_uri) : "admin/index";
        $this->is_login();
    }

    /**
     * 验证是否登录
     */
    public function is_login()
	{
        if (!isset($_SESSION) || !isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            $this->config->load('censor_config');
            $api_list = $this->config->item('api');
            if (!in_array(strtolower($this->sys_exec_uri), $api_list)) {
                echo "<script>window.location.href='/index.php/admin/login/login'</script>";
                exit;
            }

        }
	}
}
