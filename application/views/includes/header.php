<html>
<head>

<title>HR Department</title>

<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>css/table.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('js/jquery-1.8.3.min.js') ?>"></script>
 <!--   
<script>
$(document).ready(function(){
//all code goes here
$('#searchform').submit(function(e){
$.get($('#searchform').prop('action'),$('#searchform').serialize, function(result){
alert(result);
}, "json");
e.preventDefault();
});
});
    
</script>
 -->
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
        <li><a href="<?php echo site_url('home/add_post')?>"><b>Add Employee</b></a></li> 
        <li><a href="<?php echo site_url('home/delete_post')?>"><b>Delete</b></a></li> 
        <li><a href="<?php echo site_url('home/update_post')?>"><b>Update</b></a></li> 
        <li><a href="<?php echo site_url('home')?>"><b>Manage Employee</b></a></li> 
        <li><a href="<?php echo site_url('home/do_logout')?>"><font color="red">Logout</font></a></li> 
  </ul> 
</div> 
 
 </div>