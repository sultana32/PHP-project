<?php

class AboutMe extends Controller {

	function AboutMe()
	{
		parent::Controller();	
		
	}
	
	function index()

	{
/* clear session data at first if exists*/
		if($this->session->userdata('xam_id'))
		{
			$this->session->unset_userdata('xam_id');
		}
		$this->load->view('aboutMeView');
	}
}

