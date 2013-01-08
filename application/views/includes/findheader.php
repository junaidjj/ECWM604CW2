<html> 
<head>

<title>Find Employee</title>

<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>css/table.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('js/jquery-1.8.3.min.js') ?>"></script>

<!--
<script>
$(document).ready(function(){
//all code goes here
$('#search_submit').submit(function(e){
$.get($('#search_submit').prop('action'),$('#search_submit').serialize, function(result){
alert(result);
}, "json");
e.preventDefault();
});
});
    
</script>
  -->
 <script>
 
 $(document).ready(function(){
    $('#search_submit').click(function(e) {
        e.preventDefault();
        var querystring = "find/findemp?";
        if ($('#firstname').val() != ''){
            querystring += "&firstname=" + $('#firstname').val();
        }
        if ($('#lastname').val() != ''){
            querystring += "&lastname=" + $('#lastname').val();
        }
        if ($('#dept').val() != ''){
            querystring += "&dept=" + $('#dept').val();
        }
        if ($('#jobtitle').val() != ''){
            querystring += "&jobtitle=" + $('#jobtitle').val();
        }
        $.getJSON(querystring,
            null,
            function(data){
		$('.search_results tbody').html();
            $.each(data, function() {
                $.each(this, function(i, item) {
                    $('.search_results tbody').append(
                    '<tr>' +
                    '<td>' + item.firstname + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.dept + '</td>' +
                    '<td>' + item.jobtitle + '</td>' +
                    '</tr>'
                    );
                });
            });
        });
    });
});
 
 </script>




</head>
<body style="background-color: #4E0000;">
 <div id="header">
 <div id="navbar">
 
       
  <ul> 
        <li><a href="<?php echo site_url('login')?>"><b> Click here to Login</b></a></li> 
  </ul> 
</div> 
 
 </div>