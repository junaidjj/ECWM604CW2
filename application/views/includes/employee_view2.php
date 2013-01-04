<html>
<head><title>Search</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css" type="text/css" media="screen" />
   <style type="text/css">
<!--
 #navbar ul { 
        margin: 0; 
        padding: 10px; 
        list-style-type: none; 
        text-align: center; 
        background-color: #000;
        font-family: sans-serif; 
        } 
 
#navbar ul li {  
        display: inline;
        font-family: sans-serif; 
        } 
 
#navbar ul li a { 
        text-decoration: none; 
        padding: .2em 5em; 
        color: #fff; 
        background-color: #000;
        font-family: sans-serif; 
        } 
 
#navbar ul li a:hover { 
        color: #000; 
        background-color: #fff;
        font-family: sans-serif; 
        }
#navbar label { 
font: 100;
color: white;
font-family: sans-serif; 
}
#Sform form { 
font: 100;
text-align: center;
color: green;
font-weight:bolder;
}
#Sform input {  
        font: 100;
        color: red;
        display:inline;
        font-weight: bolder;
        } 
</style>

</head>
<body style="background-color: #4E0000;">
 <div id="header">
 <div id="navbar"> 
  <ul> 
        <li><a href="<?php echo site_url('home/search')?>"><b>Home</b></a></li> 
        <li><a href="#"><b>Add Employee</b> New</a></li> 
        <li><a href="#"><b>Delete Employee</b></a></li> 
        <li><a href="#"><b>Update Employee</b></a></li> 
        <li><a href="<?php echo site_url('home/do_logout')?>"><font color="red">Logout</font></a></li> 
  </ul> 
</div> 
 
 </div>
 
 <div align="center" id="Sform">
   <form action="<?php echo site_url('home/search')?>" method="GET" style="" >
   
         <label>Enter Your Search</label><br />
         
          <label >Employee No:</label><input type= "text" name="emp_no"><br />
           
           <label >Birth Date:</label>
           <input type= "text" name="birth_date"><br />
             
           <label >First Name:</label>
           <input type= "text" name="first_name"><br />
           
           <label >Last Name:</label>
           <input type= "text" name="last_name"> <br />
           
            <label >Department No:</label>    
           <input type= "text" name="dept_no"> <br />
           
           <label >Current job Title:</label> 
           <input type= "text" name="title"> <br />
           
           
        <input type= "submit" name="submit">  <br /><br /><br /> 
    </form> 
    
    </div>      
     
     <table align="center">  
    <thead>
    
    <th>Employee Number</th>
    <th>Birth Date</th>
    <th>First Name</th> 
    <th>Last Name</th>
    <th>Department Number</th>
    <th>Current Job Title</th>    
    </thead>
                                   
    <tbody>  
    <?php foreach($query as $employee):?>
            <tr>
                <td><?php echo ($employee->emp_no); ?> </td>  
                <td><?php echo ($employee->birth_date); ?> </td>                    
                <td><?php echo ($employee->first_name); ?> </td>
                <td><?php echo ($employee->last_name); ?> </td> 
                <td><?php echo ($employee->dept_no); ?> </td> 
                <td><?php echo ($employee->title); ?> </td>
                
             <?php endforeach; ?>
            </tr>
                      
        </tbody>  
        
        </table>
        <br/>
        <div id="footer">
         <div id="navbar"> 
  <ul> 
   <label><b> Created by: Junaid Javed - w1270167</b></label> 
    
  </ul> 
</div> 
        </div>       
   </body>
</html>