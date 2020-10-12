<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetba extends CI_Controller {

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
//	public function __construct() {
//        parent::__construct();
//        $this->load->model('Cetba_model');
//    }
	public function index()
	{
		$page = 'index';
		$this->load->model('Cetba_model');
		$data['polozky'] = $this->Cetba_model->get_menu_polozky();
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/'.$page);
	}
        public function menu()
	{
		$this->load->model('Cetba_model');
            $data['polozky'] = $this->Cetba_model->get_menu_polozky();
            
            $this->load->view('layout/navbar', $data);
	}
	
	public function dila()
	{
		$this->load->model('Cetba_model');
		$config = array();
		$data['knihy'] = $this->Cetba_model->get_knihy();
		$page = 'dila';
		$data['polozky'] = $this->Cetba_model->get_menu_polozky();	

		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/'.$page, $data);
		//$this->load->view('pages/footer');
	}
	public function view_knihy($id)
	{
		$this->load->model('Cetba_model');
		$page = 'kniha';
		$data['polozky'] = $this->Cetba_model->get_menu_polozky();
		$data['knihy'] = $this->Cetba_model->load_kniha($id);	
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/'.$page, $data);
		//$this->load->view('pages/footer');
	}
	public function autori()
	{	
		$this->load->model('Cetba_model');
		$page = 'autori';
		$data['knihy'] = $this->Cetba_model->get_autdilo();
		
		$data['polozky'] = $this->Cetba_model->get_menu_polozky();		

		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/'.$page, $data);
		//$this->load->view('pages/footer');
	}
	public function autor_dilo()
	{
		$this->load->model('Cetba_model');
		$config = array();
		$data['info'] = $this->Cetba_model->get_autdilo();
		$page = 'autor_dilo';
		$data['polozky'] = $this->Cetba_model->get_menu_polozky();	

		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/'.$page, $data);
		//$this->load->view('pages/footer');
	}
	/* if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
		} */
	
}	