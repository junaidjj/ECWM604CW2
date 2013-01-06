<?php $this->load->view('includes/header'); ?>
<div align="center" id="Sform">
     <h1 style="color: white;">Delete Employee</h1>
     <h3 style="color: green">Please enter employee number to delete</h3>
<form action="<?php echo site_url('home/delete_main')?>" method="post">
 
 <div class="control-group"> 
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
 </div>
 
 <div class="controls"> <input type= "submit" name="submit"></div>
     
 
 </form>
 </div>
 
<?php $this->load->view('includes/footer'); ?>