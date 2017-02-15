<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
// require(APPPATH.'libraries/REST_Controller.php');
// class Welcome extends CI_Controller {
class Welcome extends REST_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index_get()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */