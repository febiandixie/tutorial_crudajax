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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('books_model');
	}
	public function index()
	{
		$data['title'] = "List Ebook";
		$this->load->view('list_buku',$data);
	}

	function ebook_data(){
		$data=$this->books_model->ebook_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->books_model->save_ebook();
		echo json_encode($data);
	}

	function update(){
		$data=$this->books_model->update_ebook();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->books_model->delete_ebook();
		echo json_encode($data);
	}
}
