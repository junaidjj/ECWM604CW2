<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Login </title>
        <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="screen" />
</head>
<body>
    <div id='login_form'>
    <?php if (!empty($msg)) {
        echo $msg;
    } ?>
        <form action="<?php echo str_replace('http','https',site_url('login/process')) ?>" method='post' name='process'>
            <h2>User Login</h2>
            <br />
            
                  
            <label for='username'>Username</label>
            <input type='text' name='username' id='username' size='25' /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='32' /><br />                            
        
            <input type='Submit' value='Login' />
            <a href="<?php echo site_url('public_user/search') ?>">Public User</a>            
        </form>
    </div>
</body>
</html>