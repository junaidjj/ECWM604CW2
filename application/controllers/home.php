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
        // If the user is validated, then this function will run search function
          $this->search();          
          
       
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
                                                                                                                     
   public function search(){ // search function starts                         
       
       $limit=30;             // limit for the database to show in tables 
       $emp_no = $this->input->get('emp_no');  // getting input value for employee number and same with all other fields
       $birth_date = $this->input->get('birth_date');
       $first_name = $this->input->get('first_name');
       $last_name = $this->input->get('last_name');
       $dept_no = $this->input->get('dept_no');
       $title = $this->input->get('title');
       $gender = $this->input->get('gender');
       $hire_date = $this->input->get('hire_date');
       $salary = $this->input->get('salary');
       
       $this->load->model('employee_model');  // this will load employee model
       if (empty($emp_no) && empty($birth_date) && empty($first_name) && empty($last_name) && empty($dept_no) && empty($title) && empty($gender) && empty($hire_date) && empty($salary)) {
       $data = (''); // if the data in the files are empty the it will process null value
       } else {     // else it will process the query 
       $data['query'] = $this->employee_model->search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$gender,$hire_date,$salary,$limit);
       }
       
       $data['query'] = $this->employee_model->search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$gender,$hire_date,$salary,$limit);
       $this->load->view('employee_view', $data);    // opens the employee view
   }
   
   public function add_post(){
       
       $this->load->view('add_employee');     // opens the add employee view
       
   }  
   
   public function add_main(){
        // getting input value for employee from the fields
       $emp_no = $this->input->post('emp_no');
       $birth_date = $this->input->post('birth_date');
       $first_name = $this->input->post('first_name');
       $last_name = $this->input->post('last_name');
       $gender = $this->input->post('gender');
       $hire_date = $this->input->post('hire_date');
       
       
       $salary = $this->input->post('salary');
       $from_date = $this->input->post('from_date');
       $to_date = $this->input->post('to_date');
       
       
       
       
       
       $this->load->model('employee_model');
       $this->employee_model->add($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$salary,$from_date,$to_date);
       $this->load->view('success'); // if the query is correct then it will process and show the view 
       
   }
   
   public function delete_post(){
       
       $this->load->view('delete_view'); // opens the add delete view
   }
   
    public function delete_main(){
         // getting input value for employee number from the fields
      $emp_no = $this->input->post('emp_no');
        // if the value is entered correctly it will procees the model and view 
      $this->load->model('employee_model');
      $this->employee_model->delete($emp_no);
      $this->load->view('success');   // opens the view if the query is succsessful
      
   }
   
    public function update_post(){
       
       $this->load->view('update_view');  // opens the add update view
   }
   
    public function update_main(){
        // getting input value for employee number and salary from the fields
      $emp_no = $this->input->post('emp_no');
     $salary = $this->input->post('salary');
  
     
      $this->load->model('employee_model');
      $this->employee_model->update($emp_no,$salary);
      $this->load->view('success');  // opens the view if the query is succsessful
      
   } 
        public function title_post(){
       
       $this->load->view('title_view');  // opens the add title view
   }
       public function title_main(){
        // getting input value for employee number from the fields
      $emp_no = $this->input->post('emp_no');
      $title = $this->input->post('title');
      
      $this->load->model('employee_model');
      $this->employee_model->title($emp_no,$title);
      $this->load->view('success'); // opens the view if the query is succsessful
      
   } 
    public function promote_post(){
       
       $this->load->view('promote_view');         // opens the add promote view
       
   }
   
    public function promote_main(){
          // getting input value for employee details from the fields
      $emp_no = $this->input->post('emp_no');
      $dept_no = $this->input->post('dept_no');
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      
      $this->load->model('employee_model');
      $this->employee_model->promote($emp_no,$dept_no,$from_date,$to_date);
      $this->load->view('success'); // opens the view if the query is succsessful
      
   }
   
    public function demote_post(){
       
       $this->load->view('demote_view');  // opens the add demote view
       
   }
   
    public function demote_main(){
           
        
      $this->load->model('employee_model');  // load the model
      $this->employee_model->demote($emp_no);   // this will check the model and demote employee number from database
      $this->load->view('success');   // opens the view if the query is succsessful
      
   }
             
 }
 ?>