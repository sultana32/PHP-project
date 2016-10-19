<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
		$this->load->helper('url');
	}
	
	function index()
	{
//clear session if exists
		if($this->session->userdata('xam_id'))
		{
			$this->session->unset_userdata('xam_id');
		}
		$this->load->view('home_view');
	}
}

