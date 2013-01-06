<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Find extends CI_Controller{
    function __construct(){
        parent::__construct();
     
    }
    
    public function index(){
      
          $this->findemp(); // this will run the search function  
          
       
    }
    
                                                                                                                     
   public function findemp(){ // findemp function starts                          
        $limit=30;             // limit for the database to show in tables 
         // getting input value for employee number and same with all other fields       
       $first_name = $this->input->get('first_name');
       $last_name = $this->input->get('last_name');
       $dept_no = $this->input->get('dept_no');
       $title = $this->input->get('title');
       
       $this->load->model('find_model');  // this will load employee model
       if (empty($first_name) && empty($last_name) && empty($dept_no) && empty($title)) {
       $data = (''); // if the data in the files are empty the it will process null value
       } else {     // else it will process the query 
       $data['query'] = $this->find_model->find($first_name,$last_name,$dept_no,$title,$limit);
       }
       
       $data['query'] = $this->find_model->find($first_name,$last_name,$dept_no,$title,$limit);
       $this->load->view('find_view', $data);    // opens the employee view
      
       
      //  $data['count'] = count($results['rows']);
        //$data['results'] = $results['rows']; // inside array
    
        //echo json_encode($data);
   }
       
             
 }
 ?>