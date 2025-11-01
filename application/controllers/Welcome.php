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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	// public function index()
	// {
	// 	$this->load->view('coming');
	// }

	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('home');
		$this->load->view('web/footer');
	}

	public function profile()
	{
		$this->load->view('web/header');
		$this->load->view('profile');
		$this->load->view('web/footer');
	}

	public function about()
	{
		$this->load->view('web/header');
		$this->load->view('about');
		$this->load->view('web/footer');
	}

	public function profiled()
	{
		$this->load->view('web/header');
		$this->load->view('profile-detail');
		$this->load->view('web/footer');
	}

	public function plan()
	{
		$this->load->view('web/header');
		$this->load->view('plan');
		$this->load->view('web/footer');
	}

	public function blog()
	{
		$this->load->view('web/header');
		$this->load->view('blog');
		$this->load->view('web/footer');
	}

	public function blog_detail()
	{
		$this->load->view('web/header');
		$this->load->view('blog_details');
		$this->load->view('web/footer');
	}

	public function contact()
	{
		$this->load->view('web/header');
		$this->load->view('contact');
		$this->load->view('web/footer');
	}

	public function vendor()
	{
		$this->load->view('web/header');
		$this->load->view('vendor');
		// $this->load->view('web/footer');
	}

	public function gallery()
	{
		$this->load->view('web/header');
		$this->load->view('gallery');
		$this->load->view('web/footer');
	}

	public function upcoming()
	{
		$this->load->view('web/header');
		$this->load->view('upcoming');
		$this->load->view('web/footer');
	}

	public function completed()
	{
		$this->load->view('web/header');
		$this->load->view('completed');
		$this->load->view('web/footer');
	}

	public function register()
	{
		$this->load->view('web/header');
		$this->load->view('register');
		$this->load->view('web/footer');
	}

	public function login()
	{
		$this->load->view('web/header');
		$this->load->view('login');
		$this->load->view('web/footer');
	}

	public function basicinfo()
	{
		$this->load->view('web/header');
		$this->load->view('basicinfo');
		// $this->load->view('web/footer');
	}

	public function vendorlist()
	{
		$this->load->view('web/header');
		$this->load->view('vendorlist');
		$this->load->view('web/footer');
	}

	public function vendordetail()
	{
		$this->load->view('web/header');
		$this->load->view('viewdetail');
		$this->load->view('web/footer');
	}

	public function user_profile()
	{
		$this->load->view('web/header');
		$this->load->view('user-profile');
		$this->load->view('web/footer2');
	}

	public function user_plan()
	{
		$this->load->view('web/header');
		$this->load->view('user-plan');
		$this->load->view('web/footer2');
	}

	public function user_chat()
	{
		$this->load->view('web/header');
		$this->load->view('user-chat');
		$this->load->view('web/footer2');
	}

	public function user_setting()
	{
		$this->load->view('web/header');
		$this->load->view('user-setting');
		$this->load->view('web/footer2');
	}

	public function user_interests()
	{
		$this->load->view('web/header');
		$this->load->view('user-interests');
		$this->load->view('web/footer2');
	}

}
