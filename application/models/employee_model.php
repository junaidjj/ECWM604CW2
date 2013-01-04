<?php
                                      
class Employee_model extends CI_Model{
           
    function __construct(){
        parent::__construct();
        $this->load->database();
        
    }
    
  function search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$limit){
                   
            $this->db->select('*');
            $this->db->from('employees');
            $this->db->join('dept_emp','employees.emp_no = dept_emp.emp_no');
            $this->db->join('titles','dept_emp.emp_no = titles.emp_no');
            $this->db->join('salaries', 'dept_emp.emp_no = salaries.emp_no');
            $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
            $this->db->where('titles.to_date', '9999-01-01' );
            $this->db->where('salaries.to_date', '9999-01-01' );
            $this->db->limit($limit);  
            
            if(!empty($emp_no)) {

            $this->db->where('employees.emp_no',$emp_no);

                }
                
            if(!empty($birth_date)) {

            $this->db->where('employees.birth_date',$birth_date);

                }
                
            if(!empty($first_name)) {

            $this->db->where('employees.first_name',$first_name);

                }
                
            if(!empty($last_name)) {

            $this->db->where('employees.last_name',$last_name);

                }
                
           if(!empty($dept_no)) {

           $this->db->where('dept_emp.dept_no',$dept_no);

                }
                
          if(!empty($title)) {

          $this->db->where('titles.title',$title);

                }
                
                $query = $this->db->get();
                return $query->result();   
  }
  
     public function add($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$salary,$from_date,$to_date) {
      
      // inserting data into employee table    
      $this->db->set('emp_no',$emp_no);
      $this->db->set('birth_date',$birth_date);
      $this->db->set('first_name',$first_name);
      $this->db->set('last_name',$last_name);
      $this->db->set('gender',$gender);
      $this->db->set('hire_date',$hire_date);
      
      $query = $this->db->insert('employees');
      
      
     // $this->db->set('emp_no',$emp_no);
    //  $this->db->set('from_date',$from_date);
     // $this->db->set('to_date',$to_date);
   //   $this->db->set('dept_no',$dept_no);
      
    //  $query = $this->db->insert('dept_emp');
      
      // inserting data into employee table  
      $this->db->set('emp_no',$emp_no);
      $this->db->set('salary',$salary);
      $this->db->set('from_date',$from_date);
      $this->db->set('to_date',$to_date);
      
      $query = $this->db->insert('salaries');
      
  } 
  
  public function delete($emp_no){
      
       $this->db->set('emp_no',$emp_no);
       $this->db->delete('employees', array('emp_no' => $emp_no));
      
      
  }
    public function update($emp_no,$salary){
        
        $data = array(
        'emp_no' => $emp_no,
        'salary' => $salary
        );
       
       $this->db->where('emp_no',$emp_no);
       $this->db->update('salaries', $data);
      
      
  }    
    }
    
    ?>