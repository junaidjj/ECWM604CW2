<?php $this->load->view('includes/findheader'); ?> 
 
 
   <form action="<?php echo site_url('find/findemp')?>"  id="#search_submit"  method="GET">
   
         <label>Enter Your Search</label><br />
         
             
           <label >First Name:</label>
           <input type= "text" name="firstname" id="firstname"><br />
           
           <label >Last Name:</label>
           <input type= "text" name="lastname" id="lastname"> <br />
           
           <input type="hidden" name="format" value="format">
           
            
           
           <label >Current job Title:</label> 
           <input type= "text" name="jobtitle" id="jobtitle"> <br />
           
           <label >Departments</label> 
            <select name="dept" id="dept">
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
                
     
     <table class="#search_results" align="center">  
    <thead>
    
 
    <th>First Name</th> 
    <th>Last Name</th>
    <th>Department Name</th>
    <th>Current Job Title</th>    
    </thead>
                                   
    <tbody id="">  
    <?php foreach($query['results'] as $employee):?>
            <tr>                   
                <td><?php echo ($employee['first_name']); ?> </td>
                <td><?php echo ($employee['last_name']); ?> </td> 
                <td><?php echo ($employee['dept_name']); ?> </td> 
                <td><?php echo ($employee['title']); ?> </td>
                
             <?php endforeach; ?>
            </tr>
                      
        </tbody>  
        
        </table>
        
<?php $this->load->view('includes/footer'); ?> 