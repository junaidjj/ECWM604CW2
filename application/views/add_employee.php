<?php $this->load->view('includes/header'); ?>

<form action="<?php echo site_url('home/add_main')?>" method="post">
 
 <div class="control-group"> 
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
 </div>
 
<div class="control-group"> 
<label class="control-group"> Birth Date: </label>
<div class="controls"> <input type="text" id="birth_date" name="birth_date" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> First Name: </label>
<div class="controls"> <input type="text" id="first_name" name="first_name" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Last Name: </label>
<div class="controls"> <input type="text" id="last_name" name="last_name" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Gender: </label>
<div class="controls"> <input type="text" id="gender" name="gender" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Hire Date: </label>
<div class="controls"> <input type="text" id="hire_date" name="hire_date" value=""/></div>
</div>
<!--
<div class="control-group"> 
<label class="control-group"> From Date: </label>
<div class="controls"> <input type="text" id="from_date" name="from_date" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> To Date: </label>
<div class="controls"> <input type="text" id="to_date" name="to_date" value=""/></div>
</div>
     -->
<div class="control-group"> 
<label class="control-group"> Salary: </label>
<div class="controls"> <input type="text" id="salary" name="salary" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Salary From Date: </label>
<div class="controls"> <input type="text" id="from_date" name="from_date" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Salary To Date: </label>
<div class="controls"> <input type="text" id="to_date" name="to_date" value=""/></div>
</div>

 
 <div class="controls"> <input type= "submit" name="submit"></div>
 

 
 
 </form>
 
<?php $this->load->view('includes/footer'); ?>