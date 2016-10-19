<?php

class Project extends Controller {

	function Project()
	{
		parent::Controller();	
		
	}
	
	function index()

	{
/* clear session data at first */
		if($this->session->userdata('xam_id'))
		{
			$this->session->unset_userdata('xam_id');
		}
		$this->load->view('projectView');
	}
}

