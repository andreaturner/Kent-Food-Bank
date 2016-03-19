<!DOCTYPE html>
<html>

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Kent Food Bank & Emergency Services</title>
    
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">
    
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    </head>
    
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img src="images/kfbheaderlogo2.png" class="col-xs-10 img-responsive" alt="Kent Food Bank"></a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="donate.php">Donate</a>
                        </li>
                        <li>
                            <a href="volunteer.php">Volunteer</a>
                        </li>
                        <li>
                            <a href="events.php">Events</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
           
                <!-- /.navbar-collapse -->
            </div>
            <!-- Login -->
    <h1 align="center"> Login </h1>
        <div align="middle"> 
<label>
        Enter your username: &nbsp;
        
        <input type= "email" name="email" value="" required>
        </label>
<br>
    <label>
        Enter your password:&nbsp;
       
        <input type= "password" name="pass" value ="">
    </label><br>
    <input type="button" name="Submit" value="Submit">
</div>
            <!-- /.container -->
        </nav>
	</body>
</html>
<?php
    //ini_set("display_errors",true);
	//error_reporting(E_ALL);

    session_start("thunderb_kfb");

    
    $userSession = $_SESSION['userSession'];
    $_SESSION['start'] = time(); // Taking now logged in time.
    // Ending a session in 30 minutes from the starting time.
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
    
    include '../thunderbirds_db.php';
		//include('header-include.html');
    
    if(!strstr($_SERVER['HTTP_REFERER'], "thunderbirds.greenrivertech.net")) die();
    //second: if token is equals to the token stored in session...
    if ($_POST['token'] != $_SESSION['token']) die(); 
    
    $email = mysqli_real_escape_string($cnxn,$_POST['email']);
    $pass = mysqli_real_escape_string($cnxn,$_POST['pass']);
    $pass = sha1($pass);

	$chkUser = 'SELECT * FROM users WHERE email = "'.$email.'" and password = "'.$pass.'"';
	$result_chkUser = mysqli_query($cnxn,$chkUser); 
	$numLinesFound = mysqli_num_rows($result_chkUser); 
	$lineInfo = mysqli_fetch_object($result_chkUser); 
	$emailCheck = $lineInfo->email;
	$passCheck = $lineInfo->pass;

	
	if ($emailCheck == $email && $passCheck == $pass ){
        $_SESSION['update'] = 1;
        header('Location: index.php');
	} else {
        $_SESSION['update'] = 0;
        echo "<script>alert('Email or Password invalid !');</script>";
        echo "<script>window.location = 'index.php'; </script>";
    }

    mysqli_close($cnxn);
    
    // logout the user
  
    session_start("thunderb_kfb");
    session_destroy();
	session_write_close();
	header("location: index.php");
?>
