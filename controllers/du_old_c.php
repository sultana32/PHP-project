<?php
class Du_old_c extends Controller {

  
	function  Du_old_c()
	{
		parent::Controller();	
		$this->load->helper('url','form','html');
		$this->load->library(array('table','validation','javascript','session'));
		$this->load->model('xam_model');
	}
	
	function index()
	{
	
		$id=$this->uri->segment(2); /* get xam id */
	
		if($this->session->userdata('xam_id'))  /* clears previous session data */
		{
			$this->session->unset_userdata('xam_id');
		}
		if($this->session->userdata('ans_array'))
		{
			$this->session->unset_userdata('ans_array');  // clear session data if exists
		}
		
		$this->session->set_userdata(array('xam_id'=>$id));
					//show questions
		
		$data['query'] = $this->xam_model->get_by_idC($id);	
		$this->load->view('du_old_c_view',$data);
	}

	
	public function check_ans()
	{
	//check answers
		$i_marks=0;			// for keeping marks 
		$i_correct=0;		// for keeping correct ans 
		$i_wrong=0;			// for keeping wrong ans of four sections
		
		$idd=$this->session->userdata('xam_id');  //set session with current xam_id
		
		$ans_array=array();
		$query= $this->xam_model->get_ansC($idd);  // get right ans from database
		
		for ($var=0;$var<5;$var++)  // only 5 ques
		{
			
			$ques_no=(string)($var+1);
			$final_ques_no='ques'.$ques_no ;
			
			$row=$query->row_array($var);    // get var'th right ans from prev dbs query
			
			if(!empty($_POST[$final_ques_no])) // if any check box has been clicked
			{
				$ans="";
				foreach($_POST [$final_ques_no] as $check)  // all clicked check box are merged
				{
					$ans.=$check;
				}
				

				if($row['q_ans']==$ans)     // checking right ans of dbs with given ans and if they match
					{	
						$ans_array[$var]=$ans;
						
							$i_marks++;
							$i_correct++;
							
					}
				else  // dbs ans and given ans did not match
				{
						$ans.='vul';  // token to mark the ans is wrong
						$ans_array[$var]=$ans;
						
							$i_marks=$i_marks-.25;  // deduct .25 marks as penalty of wrong ans
							$i_wrong++;
				}
			}
			else
			  // check box was not clicked
			  {
					$ans_array[$var]='z';  // a token to mention that no check box was clicked by the student
			  }
		}
		$this->session->set_userdata($ans_array);  // set session with given ans array
		$marks=$i_marks ;
		$std_no=$this->xam_model->check_record($idd,$marks);  // get how many students got this mark
		
		if($std_no>0)  // same marks got by another students
		{
				
				$this->xam_model->update_record($idd,$marks);   // this marks now has been get by 1 more student
			// save for show to user
				$ndata['i_marks']=$i_marks;
				$ndata['i_correct']=$i_correct;
				$ndata['i_vul']=$i_wrong;
				
				
				
				$ndata['total']=$this->xam_model->total_std($idd);  // how many students took this exam
				if($this->xam_model->good_std($idd,$marks))  // how many students got better marks in this exam
				{
					$ndata['better']=$this->xam_model->good_std($idd,$marks);
				}
				else 
				{
				// no student got better than this user
					$ndata['better']=0;
				}
				$ndata['same']=$std_no;
				 $this->session->set_userdata($ndata);
				$this->load->view('result_viewC',$ndata);
				
				
		}
		
		else // only this user got this marks in this xam
		{
				$std_no=1;
				$data = array(
							'x_no'=>$idd,
							'xr_mark'=>$marks,
							'xr_std'=>$std_no,
							);
				$this->xam_model->enter_record($data);  
				// to show  to user
				$ndata['i_marks']=$i_marks;
				$ndata['i_correct']=$i_correct;
				$ndata['i_vul']=$i_wrong;
				
				
				
				$ndata['total']=$this->xam_model->total_std($idd); // how many students took this exam
				if($this->xam_model->good_std($idd,$marks))
				{
					$ndata['better']=$this->xam_model->good_std($idd,$marks);  // how many students did better in this xam
				}
				else 
				{
					$ndata['better']=0;
				}
				$ndata['same']=$std_no;
				$this->session->set_userdata($ndata);
				$this->load->view('result_viewC',$ndata);
		}
		
	}
	
	function all_ans()
	{
			// show all ans
			$id=$this->session->userdata('xam_id');
			$data['query'] = $this->xam_model->get_by_idC($id);	// get all data of a ques set
			$data['ans_array']=$this->session->all_userdata('ans_array'); // put user ans data in session
			$this->load->view('all_ans_view',$data);
			
	
	}
	
	function wrong_ans()  // show wrong ans of the student
	{
			$id=$this->session->userdata('xam_id');
			$data['query'] = $this->xam_model->get_by_idC($id);	
			$data['ans_array']=$this->session->all_userdata('ans_array');
			$data['ndata']=$this->session->all_userdata('ndata');
			$this->load->view('wrong_ans_view',$data);
				
	}
	function uncheck_ans()  // what ans was blank
	{
			$id=$this->session->userdata('xam_id');
			$data['query'] = $this->xam_model->get_by_idC($id);	
			$data['ans_array']=$this->session->all_userdata('ans_array');
			$data['ndata']=$this->session->all_userdata('ndata');
			$this->load->view('not_ans_view',$data);
				
	}
	
	function result_card()   // show hus number, his position etc
	{
			$id=$this->session->userdata('xam_id');
				
			$data['ndata']=$this->session->all_userdata('ndata');
			$this->load->view('result_card_view',$data);
		
	}
}