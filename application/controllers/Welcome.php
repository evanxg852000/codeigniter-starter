<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function users(){
		$this->load->model('foo');   	
		$users = Users::all();
	}

	public function about(){
		$this->load->view('about.php');
	}

}
