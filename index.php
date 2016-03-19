<?php
    include('header-include.html');
?>

        
        <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('images/kfbvolunteers.png');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/kfbdonate.png');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/kfballiance.png');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
    
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
    
    
        <!-- Page Content -->
        <div class="container">
        
     
            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-8 col-lg-push-1">
                    <h2 class="page-header">Mission Statement</h2>
                </div>
                <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-push-1">
                    <p>The Kent Food Bank and Emergency Services exist to serve the citizens of the Greater Kent Area.</p>
                    <p>In order to fulfill its mission the Kent Food Bank will:</p>
                    <ul>
                        <li>Operate a center to supply food, clothing and referral to persons in need living within the service area</li>
                        <li>Furnish financial assistance in an emergency situation for emergency needs</li>
                        <li>Work in conjunction with government agencies, churches and other organizations to serve the surrounding people</li>
                        <li>Operate primarily as a volunteer agency, obtaining a majority of its support and donations from the community</li>
                    </ul>
                    <p></p>
                    
                </div>
            </div>
            <!-- Facebook Embed
            <div class="row">
                <div class="fb-page col-md-6" data-href="https://www.facebook.com/kentfoodbank/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/kentfoodbank/">
                            <a href="https://www.facebook.com/kentfoodbank/">Kent Food Bank &amp; Emergency Services</a>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- /facebook -->
            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        Need Help? Want to Help?
                    </h2>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Services Provided</h4>
                        </div>
                        <div class="panel-body">
                            <p>The Kent Food Bank offers food and clothing to those families in need, as well as provide financial assistance for emergencies.  We also have a network of other agencies to provide assistance and aid to those in need.</p>
                            <a href="services.php" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Donations Welcome</h4>
                        </div>
                        <div class="panel-body">
                            <p>The Kent Food Bank acquires all of its materials from the community, and demand is always high.  Donations of food and clothing for adults and children are always appreciated.</p>
                            <a href="donate.php" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i>Directions and Contact Information</h4>
                        </div>
                        <div class="panel-body">
                            <p>Whether you require assistance, or wish to donate or volunteer, we provide ways to contact us through email, over the phone, or in person.  We also include local bus and train routes, and easy-to-plan directions directly to the Alliance Center.</p>
                            <a href="contact.php" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
    
            <hr>
    
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
    
        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>
    
    </body>

</html>
