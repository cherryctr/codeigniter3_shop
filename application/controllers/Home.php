<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Tes');
}
	
	public function index()
	{
        $data['pria']=$this->Tes->getProduk();
        var_dump($data['pria']);exit;
		$this->load->view('body/navbar');
        $this->load->view('produk/produk');
        $this->load->view('body/footer');
	}
}
