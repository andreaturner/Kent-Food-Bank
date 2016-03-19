<?php
    include('header-include.html');
?>

    <!-- Page Content -->
    <div class="container">


        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Breakfast Sponsors
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Pricing Table</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-8 col-lg-push-1">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-push-1">
                <p id="breaksfast-p">We are excited this year to provide you with a number of different
                options to support the Kent Food Bank Annual Breakfast with your monetary
                donations. We have two different payment options, a one-time sponsorship
                payment or monthly installments. Both options will make a direct difference
                for families in need.</span></p><br><br>
                <h3 id="breakfast-ty">Your generosity is greatly appreciated! Thank You!</h3><br><br>
                    
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading" id="gold-heading">
                        <h3 class="panel-title"><strong>Gold</strong></h3>
                    </div>
                    <div class="panel-body" id="gold-price">
                        <span class="price"><sup>$</sup>3,000</span>
                        <span class="period">or $250 per month for a year</span>
                    </div>
                    <ul class="list-group" id="gold-body">
                        <li class="list-group-item">Logo and Name Recognition on printed Materials</li>
                        <li class="list-group-item">Logo and Name Recognition in Annual Report</li>
                        <li class="list-group-item">Logo and Name Recognition on our Facebook Page</li>
                        <li class="list-group-item">Verbal Recognition on Day of Event</li>
                        <li class="list-group-item">Each Table of Honor guest will receive 7 Raffle Tickets</li>
                        <li class="list-group-item">Certificate of Appreciation</li>
                        <li class="list-group-item"><input type="radio" id="1" class="button big" name="level" value="gold" required><label for="1"><strong>Donate at Gold Level</strong></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading" id="silver-heading">
                        <h3 class="panel-title">Silver</h3>
                    </div>
                    <div class="panel-body" id="silver-price">
                        <span class="price"><sup>$</sup>1,500</span>
                        <span class="period">or $125 per month for a year</span>
                    </div>
                    <ul class="list-group" id="silver-body">
                        <li class="list-group-item">Logo and Name Recognition on Printed Materials</li>
                        <li class="list-group-item">Name Recognition in Annual Report<br><br></li>
                        <li class="list-group-item">Logo and Name Recognition on our Facebook Page</li>
                        <li class="list-group-item">Verbal Recognition on Day of Event<br><br></li>
                        <li class="list-group-item">Each Table of Honor guest will receive 3 Raffle Tickets<br><br></li>
                        <li class="list-group-item"><input type="radio" id="2" class="button big" name="level" value="silver" required><label for="2"><strong>Donate at Silver Level</strong></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading" id="bronze-heading">
                        <h3 class="panel-title">Bronze</h3>
                    </div>
                    <div class="panel-body" id="bronze-price">
                        <span class="price"><sup>$</sup>1,000</span>
                        <span class="period">or $85 per month for a year</span>
                    </div>
                    <ul class="list-group" id="bronze-body">
                        <li class="list-group-item">Name Recognition on Printed Materials<br><br></li>
                        <li class="list-group-item">Name Recognition in Annual Report<br><br></li>
                        <li class="list-group-item">Name Recognition on our Facebook Page</li>
                        <li class="list-group-item">Verbal recognition on Day of Event<br><br></li>
                        <li class="list-group-item">Table of Honor at Event<br><br><br></li>
                        <li class="list-group-item"><input type="radio" id="3" class="button big" name="level" value="bronze" required><label for="3"><strong>Donate at Bronze Level</strong></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <div class="row" id="sponsorContact">
            <div class="col-md-8">
                <h3></h3>
                <form name="sponsorLevel" id="sponsorLevel" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Contact Name:</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" placeholder="xxx-xxx-xxxx" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" placeholder="xxxxx@xxxxx.xxx" value="" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
    
        </div>

        <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>&diams;  515 WEST HARRISON STREET, SUITE 107 KENT, WA 98092  &diams;<br>
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
