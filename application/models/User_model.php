<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    // mysql 连接对象
    protected $mysql = null;
    protected $_user_name = "user_name";

    public function __construct() {
        parent::__construct();
        if(!isset($this->mysql)){
            $this->mysql = $this->load->database('default', true);
        }
    }

    public function index(){
        $this->mysql->from($this->_user_name);
        $data = $this->mysql->get()->result_array();
        return $data;
    }

    /**
     * 登录
     */
    public function login($params){
        $this->mysql->from($this->_user_name);
        $this->mysql->where("user_name",$params['user_name']);
        $this->mysql->where("password",md5($params['password'].'881222'));
        $result = $this->mysql->get()->row_array();
        return $result;
    }
}

