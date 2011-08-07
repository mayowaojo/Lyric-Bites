<?php

class Site extends CI_Controller {
	
	
	

	function index() {
		
		$data['main_content'] = 'options_view';
  if($q =$this->site_model->get_records())
  {
  $data['records'] = $q; 
  }
  $this->load->view('includes/template', $data);
		
	}
	
	function create ()
	{
		$data = array(
			'bite' => $this->input->post ('bite'),
			'artist' => $this->input->post('artist'),
			'song_title' => $this->input->post('song_title'),
			'song_artist' => $this->input->post('song_artist')
			
			);
			
			$this->site_model->add_record($data);
			redirect('/site');
				
	}
	
	function update()
	{
		$data = array(
			'title' => 'My Updated title',
			'contents' => 'Conetnt should go here. It has been updated!'
			
			);	
			
			$this->site_model->update_record($data);
	}
	
	
}