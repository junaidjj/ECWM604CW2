<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Public_user extends CI_Controller{
    function __construct(){
        parent::__construct();
        //$this->check_isvalidated();
    }
    
    public function index(){
        // If the user is validated, then this function will run 
        //echo 'Congratulations, you are logged in.';
          $this->search();
          //$this->load->view('employee_view');
          
       
    }
    
 //   private function check_isvalidated(){
 //       if(! $this->session->userdata('validated')){
 //           redirect('login');
 //       }
  //  }
  //   public function do_logout(){
  //      $this->session->sess_destroy();
   //     redirect('login');
    //}
                                                                                                                     
   public function search(){                          
       
       $limit=40;
       $emp_no = $this->input->get('emp_no');
       $birth_date = $this->input->get('birth_date');
       $first_name = $this->input->get('first_name');
       $last_name = $this->input->get('last_name');
       $dept_no = $this->input->get('dept_no');
       $title = $this->input->get('title');
       
       $this->load->model('employee_model');
       $data['query'] = $this->employee_model->search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$limit);
       $this->load->view('employee_view', $data);
   }
       
             
 }
 ?>