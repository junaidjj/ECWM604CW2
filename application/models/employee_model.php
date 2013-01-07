<?php
                                      
class Employee_model extends CI_Model{
           
    function __construct(){
        parent::__construct();
        $this->load->database(); // loads the database
        
    }
    
  function search($emp_no,$birth_date,$first_name,$last_name,$dept_no,$title,$gender,$hire_date,$salary,$limit){
                   
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
                
            if(!empty($gender)) {

            $this->db->where('employees.gender',$gender);

                }  
            
            if(!empty($hire_date)) {

            $this->db->where('employees.hire_date',$hire_date);

                }
                
           if(!empty($dept_no)) {

           $this->db->where('dept_emp.dept_no',$dept_no);

                }
                
          if(!empty($title)) {

          $this->db->where('titles.title',$title);

                } 
                
          if(!empty($salary)) {

          $this->db->where('salaries.salary',$salary);

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
      
       // inserting data into salary table 
      $this->db->set('emp_no',$emp_no);
      $this->db->set('salary',$salary);
      $this->db->set('from_date',$from_date);
      $this->db->set('to_date',$to_date);
      
      $query = $this->db->insert('salaries');
      
  } 
  
  public function delete($emp_no){
      
       $this->db->set('emp_no',$emp_no);
       $this->db->delete('employees', array('emp_no' => $emp_no));  // using array to delete from employee table
      
      
  }
    public function update($emp_no,$salary){
        
        $data = array(    // using array to update data in salaries table and storing into $data
        'emp_no' => $emp_no,
        'salary' => $salary
        );
       
       $this->db->where('emp_no',$emp_no);
       $this->db->update('salaries', $data); // updating in data in salaries table     
      
  } 
      public function title($emp_no,$title){
        
        $data = array(       // using array to update data in title table and storing into $data
        'emp_no' => $emp_no,
        'title' => $title
        );
       
       $this->db->where('emp_no',$emp_no);
       $this->db->update('titles', $data); // updating in data in salaries table     
      
  }
  
   public function promote($emp_no,$dept_no,$from_date,$to_date){
       
       // inserting data into department managers table    
       $this->db->set('emp_no',$emp_no);
       $this->db->set('dept_no',$dept_no);
       $this->db->set('from_date',$from_date);
       $this->db->set('to_date',$to_date);    
       
       $query = $this->db->insert('dept_manager'); // inserting data into the dept_manager table
       
   }
     public function demote($emp_no){
       
       $this->db->delete('dept_manager', array('emp_no' => $emp_no)); // deletes the array of employee number in dept_manager table
       
   }
     
    }
    
    ?>