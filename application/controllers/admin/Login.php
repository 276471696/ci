<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
    }


    public function login()
	{
        $this->load->helper(array('security'));
        $this->load->library('form_validation');
        if($this->input->post()){
            $params = $this->input->post();
            $this->form_validation->set_rules('user_name', '用户名', 'trim|required|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('password', '密码', 'trim|required|min_length[2]|max_length[30]');
            if ($this->form_validation->run() !== true) {
                $errmsg = validation_errors();
                exit(json_encode(array(40001,$errmsg), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            }
            $this->load->model("user_model");
            $result = $this->user_model->login($params);
            if(!empty($result)){
                $_SESSION['logged_in'] = 1;
                $_SESSION['user_name'] = $result['user_name'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['mobile'] = $result['mobile'];
                $_SESSION['sex'] = $result['sex'];
                $_SESSION['birthday'] = $result['birthday'];
                $_SESSION['email'] = $result['email'];
                echo "<script>window.location.href='/index.php/admin/index/index'</script>";
                exit;
            }else{
                exit(json_encode(array(40002,'账号密码错误'), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            }
        }else{
            $this->load->view("admin/login");
        }
	}
}
