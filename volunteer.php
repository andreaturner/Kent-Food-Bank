<?php
include('header-include.html');

$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['fname', 'lname', 'email', 'message'];
    $required = ['name', 'message'];
    $to = 'Paige Israel <paige@paigeisrael.com>';
    $subject = 'Feedback from Kent Food Bank Volunteer Form';
    $headers[] = '';
    $headers[] = 'From: paige@paigeisrael.com';
    $headers[] = 'Cc: paigeaisrael@gmail.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fpaige@paigeisrael.com';
    require 'process_mail.php';
    if ($mailSent) {
        header('Location: thanks.php');
        exit;
    }
}
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>

</head>

    <body>

    
        <!-- Page Content -->
        <div class="container">
    
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Volunteer
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="active">Volunteer</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
    
            <!-- Image Header -->
            
            <div class="row">
                <div class="col-md-8">
                    <div class="center">
                        <p>The Kent Food Bank and Emergency Services exists to serve the area of the
                        Kent School District.</p>
                        <p>The KFB supplies food, clothing, resource referrals and emergency financial
                        assistance to persons in need living within our service area.</p>
                    </div>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Date:</label>
                                <input type="text" class="form-control" id="date">
                            </div>
                            <br>
                            <div class="controls">
                                <label>Application Type:</label>
                                <input type="radio" name="type" value="individual" checked class="main-radio"> Individual 
                                <input type="radio" name="type" value="group" class="main-radio"> Group 
                                <input type="radio" name="type" value="organization" class="main-radio"> Organization 
                                <input type="radio" name="type" value="school" class="main-radio"> School
                                <label id="lblCourt" style="font-weight: normal;"><input type="radio" name="type" value="css" id="rdoCourt">Court Ordered Community Service</label>
                            </div>
                            <br>
                            <div class="controls">
                                <label class="required">First Name:</label>
                                <input type="text" class="form-control" id="fname" required>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label class="required">Last Name:</label>
                                <input type="text" class="form-control" id="lname">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
    
            </div>
    
 <!-- jQuery UI library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="../scripts/jquery-ui/jquery-ui.min.js"></script>
      <script>
        $(function() {
            $("#rdoCourt").click(function() {
                location.href="css-volunteer.php";
            });
            
            $(".main-radio").click(function() {
                $("#lblCourt").hide();
            });
        });
      </script>
    <hr>
    
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>&diams;  515 WEST HARRISON STREET, SUITE 107 KENT, WA 98032  &diams;<br>
                        &diams;   253-520-3550   &diams;   <a href="contact.php">CONTACT US</a>   &diams;</p>
                    </div>
                </div>
            </footer>
    
        </div>
        <!-- /.container -->
    
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
    
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>
