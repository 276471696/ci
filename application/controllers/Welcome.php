<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->view('index');
    }

	public function index1()
	{
		$this->load->view('index1');
	}

    public function index2()
    {
        $this->load->view('index2');
    }

    public function index3()
    {
        $this->load->view('index3');
    }

    public function index4()
    {
        $this->load->view('index4');
    }

    public function index5()
    {
        $this->load->view('index5');
    }
}
