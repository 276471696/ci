<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
    }


    public function index()
	{
        //$this->load->model("user_model");
        //$result['data'] = $this->user_model->index();
		$this->load->view('admin/index');
	}
}
