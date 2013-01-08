<?php
                                      
class Find_model extends CI_Model{
           
    function __construct(){ 
        parent::__construct();
        $this->load->database();   // loads the database
        
    }
    
  function find($first_name,$last_name,$dept_no,$title,$limit){
                   
            $this->db->select('*');
            $this->db->from('employees');
            $this->db->join('dept_emp','employees.emp_no = dept_emp.emp_no');
            $this->db->join('titles','dept_emp.emp_no = titles.emp_no');
            $this->db->join('salaries', 'dept_emp.emp_no = salaries.emp_no');
            $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
            $this->db->where('titles.to_date', '9999-01-01' );
            $this->db->where('salaries.to_date', '9999-01-01' );
            $this->db->limit($limit);  
                
            if(!empty($first_name)) {

            $this->db->where('employees.first_name',$first_name);

                }
                
            if(!empty($lastname)) {

            $this->db->where('employees.last_name',$last_name);

                }
                
           if(!empty($dept_no)) {

           $this->db->where('dept_emp.dept_no',$dept_no);

                }
                
          if(!empty($title)) {

          $this->db->where('titles.title',$title);
                                                  
                }
                
                $query = $this->db->get();
		  $result['results'] = $query->result_array();
		  $result['count'] = $query->num_rows();
                return $result; 
                      
  }
  
}    
    
    ?>