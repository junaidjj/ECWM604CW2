<?php $this->load->view('includes/header'); ?>
     
     <div align="center" id="Sform">
     <h1 style="color: white;">Promote Employee</h1>
     <h3 style="color: green">Please enter employee details to promote</h3>
<form action="<?php echo site_url('home/promote_main')?>" method="post">
 
 <div class="control-group"> 
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
 </div>
 
<div class="control-group"> 
<label class="control-group"> Department No: </label>
<div class="controls"> <input type="text" id="dept_no" name="dept_no" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Hire From Date: </label>
<div class="controls"> <input type="text" id="from_date" name="from_date" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Hire To Date: </label>
<div class="controls"> <input type="text" id="to_date" name="to_date" value=""/></div>
</div>

 
 <div class="controls"> <input type= "submit" name="submit"></div>
 </form>
 </div>
 
<?php $this->load->view('includes/footer'); ?>