<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct() {	
		  parent::__construct();        
	   }

	
	public function index()
	{
		

	$data = array();
	$postData = array();
	
	
	if($this->input->post('submit')){
		
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('designation', 'designation', 'required');
		$this->form_validation->set_rules('emp_id', 'emp_id', 'required');
		$this->form_validation->set_rules('phn_no', 'phn_no', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pwd', 'pwd', 'required');

		$postData = array(
			'name' => $this->input->post('name'),
			'designation' => $this->input->post('designation'),
			'emp_id' => $this->input->post('emp_id'),
			'phn_no' => $this->input->post('phn_no'),
			'email' => $this->input->post('email'),
			'pwd' => $this->input->post('pwd')
		);
		
		if($this->form_validation->run() == true){
			$insert = $this->post->insert($postData);

			if($insert){
				$this->session->set_userdata('success_msg', 'Post has been added successfully.');
				redirect('/posts');
			}else{
				$data['error_msg'] = 'Some problems occurred, please try again.';
			}
		}
	}
	
	$data['post'] = $postData;
	$data['title'] = 'Create Post';
	$data['action'] = 'Add';
	
	$this->load->view('Form',$data);
	   $this->load->model('FormModel'); 
}
}
