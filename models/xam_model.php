<?php
class Xam_model extends Model{
	
	  function Xam_model()
	  {
		parent::Model();
		$this->load->helper('url');				
	  }
  
  
	function get_by_id($id)  
		{
			$query_str="SELECT * FROM ques WHERE x_no=? ORDER BY q_no ASC";
			$query=$this->db->query($query_str,array($id));

			return $query->result();
		}
	
	function get_by_idC($id)   // get all of a exam set
	{
		$query_str="SELECT * FROM question WHERE x_no=? ORDER BY q_no ASC";
		$query=$this->db->query($query_str,array($id));

		return $query->result();
	}
	
	function get_ans($id)
		{
			
			
			$query_str="SELECT q_ans FROM ques WHERE x_no=? ORDER BY q_no ASC";
			$query=$this->db->query($query_str,array($id));
			return $query;
		}
	function get_ansC($id)
	{
		
		
		$query_str="SELECT q_ans FROM question WHERE x_no=? ORDER BY q_no ASC";
		$query=$this->db->query($query_str,array($id));
		return $query;
	}
	
	function check_record($idd,$marks)	// get number of students getting a specific marks in a exam
	{
		
			$query_str="SELECT xr_std FROM xamrecord WHERE x_no=? and xr_mark=?";
			$query=$this->db->query($query_str,array($idd,$marks));
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
					return $row->xr_std;
				
			}
			else
				return 0;
	}

	function total_std($idd)	// how many students took this exam
	{
		
			$query_str="SELECT SUM(xr_std) FROM xamrecord WHERE x_no=?";
			$query=$this->db->query($query_str,array($idd));
			$row = $query->row_array();
			return $row['SUM(xr_std)'];
	}

	function good_std($idd,$marks)	// how many stidents got better than this marks in this exam
	{
		
			$query_str="SELECT SUM(xr_std) FROM xamrecord WHERE x_no=? AND xr_mark>?";
			$query=$this->db->query($query_str,array($idd,$marks));
			$row = $query->row_array();
			return $row['SUM(xr_std)'];
	}

	function update_record($xno,$xmark) // increase student number by 1, getting this number in this exam
	{
			$query_str1="UPDATE xamrecord SET xr_std=xr_std+1 WHERE x_no=? and xr_mark=?";
			$this->db->query($query_str1,array($xno,$xmark));
			
			
			
	}

	function enter_record($data) 
	{
			$this->db->insert('xamrecord',$data);
			
	}


}
?>