<?php
//3rd party API : https://www.youtube.com/watch?v=qsK2CIxr_SU
defined('BASEPATH') OR exit('Script access not allowed');


class hotel extends CI_Controller{

	public function __Construct(){

		parent :: __construct();

		$this->load->model('search');

		$this->load->helper('html');
	}

	public function index(){

		/*$data['title'] = 'Welcome to Login Page';

		$this->load->view('login',$data);*/
		$this->load->view('log');
	}

	public function validate(){
		// $this->load->library('form_validation');

		if($this->input->post('submit')){

			$this->form_validation->set_rules('username','USERNAME','required|trim');

			$this->form_validation->set_rules('password','PASSWORD','required|trim');

			if($this->form_validation->run() === TRUE){
				// echo 'RUN';
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				if($this->search->login($username,$password)){
				// if($this->search->login()){
					//For Session set
					// echo 'Welcome to Home Page';
                     
                    $sess_name = array('firstname' => $username);
                    
                    $this->session->set_userdata($sess_name); 

                    // $this->search->login();
                    $this->homePage();
                }else{
					//For Session unset

					echo '<script type="text/javascript">alert("Unauthorized Login Credentials !");</script>';

					$this->session->set_flashdata('error','Invalid username or password !');

					$this->index();
				}
			}else{
				$this->index();
				// echo 'NOT RUN';
			}
		}else{
			// echo 'Please Enter All the fields';
			echo '<script type="text/javascript">alert("Please Enter All the fields !");</script>';
		}
	}

	public function homePage(){

		if($this->session->userdata('firstname') != ''){

			$arr['uname'] = $this->session->userdata('firstname');

			$this->load->view('homepage',$arr);

			if( $arr['uname'] == 'administrator' ){
				// echo '1';
				$this->administrator();
			}else if( $arr['uname'] == 'preparer' ){

				$this->preparer();
			}else if( $arr['uname'] == 'editor' ){

				$this->editor();
			}else if( $arr['uname'] == 'reviewer' ){

				$this->reviewer();
			}
		}else{

			$this->index();
		}
	}

	public function preparer(){

		$this->load->view('view_preparer');
	}

	public function editor(){

		$data['visiters'] =	$this->search->visiters();

		$this->load->view('view_editor',$data);
	}

	public function reviewer(){

		$data['visiters'] =	$this->search->visiters();

		$this->load->view('view_reviewer',$data);
	}

	public function administrator(){

		$data['visiters'] = $this->search->visiters();

		$this->load->view('view_administrator',$data);
	}

	public function insert(){

		if($this->input->post('enter')){
			// echo 'One';
			$this->form_validation->set_rules('name','NAME','required|trim');

			$this->form_validation->set_rules('room_no','Room No','required|trim');

			$this->form_validation->set_rules('members','Members','required|trim');

			$this->form_validation->set_rules('total_amount','Total Amount','required|trim');

			if($this->form_validation->run() === TRUE ){

				// echo '';
				echo '<script type="text/javascript">alert("Data has been Successfully Inserted!");</script>';				

				$this->search->insertion();

				$this->homePage();
			}else{

				// echo '<script type="text/javascript">alert("Please Enter All Fields!");</script>';	
				$this->homePage();
			}			
		}else{

			echo '<script type="text/javascript">alert("Please Enter Again data is not Inserted!");</script>';		

			// $this->session->unset_userdata('firstname');		
			$this->homePage();
		}
	}

	public function delete(){

		if($this->input->post('d_delete')){

			$this->form_validation->set_rules('d_id','User ID','required|trim');
			/*$this->form_validation->set_rules('d_name','Username','required|trim');
			$this->form_validation->set_rules('d_room_no','Room No','required|trim');
			$this->form_validation->set_rules('d_members','Members','required|trim');
			$this->form_validation->set_rules('d_check_in_date','Checked In Date','required|trim');*/
			$this->form_validation->set_rules('d_check_out_date','Checked Out Date','required|trim');
			$this->form_validation->set_rules('d_total_amount','Total Amount','required|trim');
			$this->form_validation->set_rules('d_status','STATUS','required|trim');

			if($this->form_validation->run() === TRUE){
				
				$this->search->deactivation();

				echo '<script type="text/javascript">alert("Data has been Deactivated for'.set_value('d_id').'!");</script>';			
				$this->homePage();
			}else{
				echo '<script type="text/javascript">alert("Please Enter All Fields for'.set_value('d_id').'!");</script>';						
				$this->homePage();
			}
		}else{
			echo 'Data hasn`t updated';
			$this->homePage();
		}
	}

	public function update(){

		if($this->input->post('u_update')){

			$this->form_validation->set_rules('u_id','User ID','required|trim');
			/*$this->form_validation->set_rules('u_name','Username','required|trim');
			$this->form_validation->set_rules('u_room_no','Room No','required|trim');
			$this->form_validation->set_rules('u_members','Members','required|trim');
			$this->form_validation->set_rules('u_check_in_date','Checked In Date','required|trim');*/
			$this->form_validation->set_rules('u_check_out_date','Checked Out Date','required|trim');
			$this->form_validation->set_rules('u_total_amount','Total Amount','required|trim');

			if($this->form_validation->run() === TRUE){

				$this->search->updation();

				echo '<script type="text/javascript">alert("Data has been Updated for '.set_value('u_id').'!");</script>';
				$this->homePage();
			}else{

				echo '<script type="text/javascript">alert("Please Enter All Fields for '.set_value('u_id').'!");</script>';

				$this->homePage();
			}
		}else{
			echo '<script type="text/javascript">alert("Data hasn`t updated!");</script>';			
			$this->homePage();
		}
	}

	public function logout(){

		$this->session->unset_userdata('firstname');
		$this->index();
	}
}
