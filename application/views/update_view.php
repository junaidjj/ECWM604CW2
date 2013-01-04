<?php $this->load->view('includes/header'); ?> 

<form action="<?php echo site_url('home/update_main')?>" method="post">
 
 <div class="control-group"> 
 <label>Please enter your details to update.</label>
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
  <div class="controls"> <input type="text" id="salary" name="salary" value=""/></div>
 </div>
 
 
 <div class="controls"> <input type= "submit" name="submit"></div>
 

 
 
 </form>
 
<?php $this->load->view('includes/footer'); ?> 