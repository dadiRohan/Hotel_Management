<?php
defined('BASEPATH') or exit('Script Access does not Allowed');

class search extends CI_Model{


	public function __construct(){

		parent :: __construct();

		// $this->load->helper('url');

		$this->load->database();
	}


	public function login($username,$password){

		/*$query=	$this->db->where('username like binary',$username)
			         	 ->where('password like binary',$password)
			         	 // ->select('rights')
			         	 ->get('tbl_login_master');*/
		$start = 0;
		$end   = 1;	         	 
		$query = $this->db->get_where('tbl_login_master', array('username like binary' => $username, 'password like binary' => $password), $start, $end);	         	 

		if($query->num_rows()>0){

			// return $query->result();
			return true;
		}else{

			return false;
		}         
	}

	public function visiters(){

		$query = $this->db->order_by('id','desc')
		                  ->get('tbl_visiter_details');

		return $query->result_array();
	}

	
	public function insertion(){
 
		$inputs = array(
				'name' 			=> $this->input->post('name'),
				'room_no' 		=> $this->input->post('room_no'),
				'members' 		=> $this->input->post('members'),
				'check_in_date' => date('Y-m-d'),
				'total_amount' 	=> $this->input->post('total_amount')
			);

		$this->db->insert('tbl_visiter_details',$inputs);

		return true;
	}


	public function deactivation(){

		$deupdate = array(
				/*'name' 			=>	$this->input->post('d_name'),
				'room_no'		=>	$this->input->post('d_room_no'),
				'members'		=>	$this->input->post('d_members'),
				'check_in_date'	=>	$this->input->post('d_check_in_date'),*/
				'check_out_date'=>  $this->input->post('d_check_out_date'),
				'total_amount'	=>	$this->input->post('d_total_amount'),
				'status'        =>  $this->input->post('d_status')
			);

		$id = $this->input->post('d_id');

		$this->db->where('id', $id);
		$this->db->update('tbl_visiter_details',$deupdate);

		return true;
	}


	public function updation(){

		$forupdate = array(
				/*'name' 			=>	$this->input->post('u_name'),
				'room_no'		=>	$this->input->post('u_room_no'),
				'members'		=>	$this->input->post('u_members'),
				'check_in_date'	=>	$this->input->post('u_check_in_date'),*/
				'check_out_date'=>  $this->input->post('u_check_out_date'),
				'total_amount'	=>	$this->input->post('u_total_amount')
			);

		$id = $this->input->post('u_id');

		$this->db->where('id',$id);
		$this->db->update('tbl_visiter_details',$forupdate);

		return true;
	}
}

