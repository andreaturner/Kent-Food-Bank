<?php
    include('header-include.html');
?>
    
        <div style="clear: both;"></div>
        <!-- Page Content -->
        <div class="container">
    
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
    
            <!-- Content Row -->
            <div class="row">
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.513777590259!2d-122.24086688437717!3d47.38240757917045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905bfdbff40b47%3A0x90411350f8829531!2s515+W+Harrison+St%2C+Kent%2C+WA+98032!5e0!3m2!1sen!2sus!4v1454138634191"></iframe>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Contact Details</h3>
                    <p>
                        515 W Harrison St SUITE 107<br>Kent, WA 98032<br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">P</abbr>: (253) 520-3550</p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E</abbr>: <a href="mailto:Kentfoodbank@gmail.com">Kentfoodbank@gmail.com</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday, Tuesday, Wednesday, Friday: 10:00 AM to 2:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/kentfoodbank/"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <!-- /.row -->
    
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-md-8">
                    <h3>Send us a Message</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
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
            <!-- /.row -->
    
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
    
        <!-- Contact Form JavaScript -->
        <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
    
    </body>

</html>
