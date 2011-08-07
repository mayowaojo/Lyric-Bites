<?php 

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	function index()
	{
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = 'mayowaojo@gmail.com';
			$config['smtp_pass'] = 'ultimatum9';
		
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		
		$this->email->from('mayowaojo@gmail.com', 'Mayowa Ojo');
		$this->email->to('mayowaojo@gmail.com');
		$this->email->subject('This is an email test');
		$this->email->message('Its working. Great!');
		
		if($this->email->send())
		{
			echo 'Your email was sent, dude.';
		}
		
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}
			