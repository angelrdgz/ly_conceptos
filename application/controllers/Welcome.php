<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	}
	public function index()
	{
		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('master', 'contents' , 'index', $data);
	}
	public function services()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('master', 'contents' , 'services', $data);
	}
	public function projects()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('master', 'contents' , 'projects', $data);
	}
	public function contact()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('master', 'contents' , 'contact', $data);
	}
	public function detail()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('master', 'contents' , 'detail', $data);
	}
}
