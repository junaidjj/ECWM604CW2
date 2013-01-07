<?php $this->load->view('includes/header'); ?> 
 
 <div align="center" id="Sform">
   <form action="<?php echo site_url('home/search')?>" id="searchform" method="GET" style="" >
   
         <label>Enter Your Search</label><br />
         
          <label >Employee No:</label><input type= "text" name="emp_no"><br />
           
           <label >Birth Date:</label>
           <input type= "text" name="birth_date"><br />
             
           <label >First Name:</label>
           <input type= "text" name="first_name"><br />
           
           <label >Last Name:</label>
           <input type= "text" name="last_name"> <br />
           
           <label >Gender:</label>
           <input type= "text" name="gender"> <br />
           
            
           
           <label >Current job Title:</label> 
           <input type= "text" name="title"> <br />
           
           <label >Salary:</label> 
           <input type= "text" name="salary"> <br /> 
           
           <label >Hire Date:</label> 
           <input type= "text" name="hire_date"> <br />
           
           <label >Departments</label> 
            <select name="dept_no">
            <option value="d009" selected="d009">Customer Service</option>
            <option value="d005" selected="d005">Development</option>
            <option value="d002" selected="d002">Finance</option>
            <option value="d003" selected="d003">Human Resources</option>
            <option value="d001" selected="d001">Marketing</option>
            <option value="d004" selected="d004">Production</option>
            <option value="d006" selected="d006">Quality Management</option>
            <option value="d008" selected="d008">Research</option>
            <option value="d007" selected="d007">Sales</option>
            <option value="" selected="">Select</option>
            </select><br />
           
           
        <input type= "submit" name="submit">  <br /><br /><br /> 
    </form> 
    
    </div>      
     
     <table align="center">  
    <thead>
    
    <th>Employee Number</th>
    <th>Birth Date</th>
    <th>First Name</th> 
    <th>Last Name</th>
    <th>Gender</th>
    <th>Department Name</th>
    <th>Current Job Title</th>    
    <th>Salary</th>    
    <th>Hire Date</th>    
    </thead>
                                   
    <tbody>  
    <?php foreach($query as $employee):?>
            <tr>
                <td><?php echo ($employee->emp_no); ?> </td>  
                <td><?php echo ($employee->birth_date); ?> </td>                    
                <td><?php echo ($employee->first_name); ?> </td>
                <td><?php echo ($employee->last_name); ?> </td> 
                <td><?php echo ($employee->gender); ?> </td> 
                <td><?php echo ($employee->dept_name); ?> </td> 
                <td><?php echo ($employee->title); ?> </td>
                <td><?php echo ($employee->salary); ?> </td>
                <td><?php echo ($employee->hire_date); ?> </td>
                
             <?php endforeach; ?>
            </tr>
                      
        </tbody>  
        
        </table>
        
<?php $this->load->view('includes/footer'); ?> 