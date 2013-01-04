<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();  //checks sessions are validated
    }
    
    public function index(){
        // If the user is validated, then this function will run 
        echo 'Congratulations, you are logged in.';
          $this->search();
          //$this->load->view('employee_view');
          
       
    }
    
    private function check_isvalidated(){   
        if(! $this->session->userdata('validated')){
            redirect('login');   // if sessions are not validated it will redirect the user to login
        }
    }
     public function do_logout(){   
        $this->session->sess_destroy(); // this will destroy the sessions and redirects to login page
        redirect('login');
    }
                                                                                                                     
   public function search(){                          
       
       $limit=30;
       $emp_no = $this->input->get('emp_no');
       $birth_date = $this->input->get('birth_date');
       $first_name = $this->input->get('first_name');
       $last_name = $this->input->get('last_name');
       $dept_no = $this->input->get('dept_no');
       $title = $this->input->get('title');
       
       $this->load->model('employee_model');
       if (empty($emp_no) && empty($birth_date) && empty($first_name) && empty($last_name) && empty($dept_no) && empty($title)) {
       $data = ('');
       } else {
       $data['query'] = $this->employee_model->search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$limit);
       }
       
       $data['query'] = $this->employee_model->search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$limit);
       $this->load->view('employee_view', $data);
   }
   
   public function add_post(){
       
       $this->load->view('add_employee');
       
   }  
   
   public function add_main(){
       
       $emp_no = $this->input->post('emp_no');
       $birth_date = $this->input->post('birth_date');
       $first_name = $this->input->post('first_name');
       $last_name = $this->input->post('last_name');
       $gender = $this->input->post('gender');
       $hire_date = $this->input->post('hire_date');
       
       
       $salary = $this->input->post('salary');
       $from_date = $this->input->post('from_date');
       $to_date = $this->input->post('to_date');
       //$dept_no = $this->input->post('$dept_no');
       
       
       
       
       $this->load->model('employee_model');
       $this->employee_model->add($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$salary,$from_date,$to_date);
       $this->load->view('success');
       
   }
   
   public function delete_post(){
       
       $this->load->view('delete_view');
   }
   
    public function delete_main(){
       
      $emp_no = $this->input->post('emp_no');
      
      $this->load->model('employee_model');
      $this->employee_model->delete($emp_no);
      $this->load->view('success');
      
   }
   
    public function update_post(){
       
       $this->load->view('update_view');
   }
   
    public function update_main(){
       
      $emp_no = $this->input->post('emp_no');
     $salary = $this->input->post('salary');
      
      $this->load->model('employee_model');
      $this->employee_model->update($emp_no,$salary);
      $this->load->view('success');
      
   } 
             
 }
 ?>