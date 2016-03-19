<?php

include('header-include.html');

$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['fname', 'lname', 'email', 'message'];
    $required = ['name', 'message'];
    $to = 'Paige Israel <paige@paigeisrael.com>';
    $subject = 'Feedback from Kent Food Bank Volunteer Form';
    $headers = [];
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
    
        <!-- Page Content -->
        <div class="container">
    
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Volunteer
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
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
                        assistance to persons in need living withing out service area.</p>
                    </div>
                    
                            <div class="controls">
                                <label>Do you have a court order community service with doecumentation?</label>
                                <input type="radio" name="type" value="yes" checked > yes 
                                <input type="radio" name="type" value="no" > No 
                            </div>
                            
                            <div class="controls">
                                <label>I have <em>NOT</em> committed any of the following crimes; theft, fraud, assault of any kind or
                                crimes against children.</label>
                                <input type="radio" name="type" value="yes" > yes 
                                <input type="radio" name="type" value="no" checked > No 
                            </div>
                            
                            <div class="controls">
                                <label>Are you available the following days: Mon / Tue, Wed / Fri 9:15 a.m. to 2:45 p.m.:</label>
                                <input type="radio" name="type" value="yes" checked> yes 
                                <input type="radio" name="type" value="no"  > No 
                            </div>
                            
                            <div class="controls">
                                <label>Can you stand, walk, move, lift 40 lbs consistentenly over a 4 - 5 hout period?</label>
                                <input type="radio" name="type" value="yes" checked> yes 
                                <input type="radio" name="type" value="no"  > No 
                            </div>
                            
                            <div class="center">
                                <p>If you marked YES (true) to all four of the above questions bring your court paperwork ot KFB
                                Tuesday, Wednesday or Friday from 11:00 a.m. to 1:00 p.m. Community Service hours are not guaranteed,
                                You may be put on a waiting list, depending on food bank schedule.
                                </p>
                            </div>
                            
                            <div class="center">
                                <p>You must have court paperwork for community service in hand and above questions answered to
                                fill out an application and be considered on Monday or Tuesday from 12-1 p.m.  Community Service hours are not guaranteed. You
                                may be put on a waiting list, depending on food bank schedule.
                                </p>
                            </div>
                            
                            <div style="border: 1px black solid; text-align: center; font-weight: bold;">
                                <P>If you answer NO to any of the above questions you do not qualify to complete your<br> community service
                                at Kent Food Bank.</p>
                                
                                <p style="text-align: center">Cal 2-1-1 to find other community service accepting agencies.</p>
                            </div>
                            
                            <br>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label class="required">First Name:</label>
                                <input type="text" class="form-control" id="fname" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label class="required">Last Name:</label>
                                <input type="text" class="form-control" id="lname" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label class="required">Phone Number:</label>
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
<hr>
    
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>&diams;  515 WEST HARRISON STREET, SUITE 107 KENT, WA 98032  &diams;<br>
                        &diams;   253-520-3550   &diams;   <a href="contact.html">CONTACT US</a>   &diams;</p>
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
