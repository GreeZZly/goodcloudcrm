<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index() {
		echo "Hello!";
	}

}