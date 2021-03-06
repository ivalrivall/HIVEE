<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if($this->session->userdata('role') =='perusahaan'){
			redirect('perusahaan');
		}
		else if($this->session->userdata('role') =='admin'){
			redirect('Admin');
		}
	}

	public function index()
	{
		$this->load->view('kandidat/header');
		$this->load->view('home/home_kandidat/content');
		$this->load->view('home/footer');
	}

	public function search()
	{
		$this->load->view('kandidat/header');
		$this->load->view('kandidat/search');
		$this->load->view('home/footer');
	}

	public function detail()
	{
		$this->load->view('kandidat/header');
		$this->load->view('kandidat/detail');
		$this->load->view('home/footer');
	}

	public function history()
	{
		$this->load->view('kandidat/header');
		$this->load->view('kandidat/history');
		$this->load->view('home/footer');
	}

	public function profile()
	{
		$this->load->view('kandidat/header');
		$this->load->view('kandidat/profile');
		$this->load->view('home/footer');
	}

	public function change()
	{
		$this->load->view('kandidat/header');
		$this->load->view('kandidat/changepassword');
		$this->load->view('home/footer');
	}

}
?>