<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function seniker()
	{
		$this->load->view('home/head');
		$this->load->view('home/navbar');
		$this->load->view('Kategori/sneakers');
		$this->load->view('home/foot');

	}
	public function flatsus()
	{
		$this->load->view('kategori/flatshoes');
	}


}
