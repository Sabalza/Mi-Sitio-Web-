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

	public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
    }

	public function index()
	{
		
		$data2 = array(
            'cart' => $this->UserModel->listingCart(),
        );
		
		$data = array(
			'products' => $this->UserModel->listingProducts(),
		);

		$this->load->view('user/layouts/index_header', $data2);
		$this->load->view('user/layouts/index' , $data);
		$this->load->view('user/layouts/index_footer');

	}
	public function add_adress()
    {
        $data2 = array(
            'cart' => $this->UserModel->listingCart(),
        );
		
        $this->load->view('user/layouts/index_header', $data2);
        $this->load->view("user/add_adress");
        $this->load->view('user/layouts/index_footer');
    } 
}
