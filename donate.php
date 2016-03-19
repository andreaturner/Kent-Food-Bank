<?php
    include('header-include.html');
?>
    
        <!-- Page Content -->
        <div class="container">
    
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Donate
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="active">Donate</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
    
            <!-- Image Header
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="images/kfbtable.png" alt="">
                </div>
            </div>
            <!-- /.row -->
    
            <!-- Service Tabs -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">How Can You Help?</h2>
                </div>
                <div class="col-lg-12">
    
                    <ul id="myTab" class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-database"></i> Donate In Person</a>
                        </li>
                        <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-database"></i> Donate Online</a>
                        </li>
                        <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Donate Time</a>
                        </li>
                        <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Sponsor Contributors </a>
                        </li>
                    </ul>
    
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="service-one">
                            <h4>How To Donate</h4>
                            
                            <?php
                            
                            //Turn on error reporting
                             ini_set('Display_errors',1);
                             error_reporting(E_ALL);
  
                             //Connect to the database(my root directory is one level up from the public_html directory)
                             require '../thunderbirds_db.php';
                             
                             //echo "Thunderbirds";
                             $sql= "SELECT * FROM items";
                             
                             // Send the query to the database
                             $kfb = @mysqli_query($cnxn, $sql)
                             or die ("Error executing query: $sql");
                             
                            echo "<ul>";
                            //Process the rows
                            while ($row = mysqli_fetch_assoc($kfb)) {
                                $name = $row['name'];
                                
                                echo "<li>$name";
                            }
                            echo "</ul>";
                            ?>
                            
                            <a href = "print_top.php" class="btn btn-default"> Print the List </a></br>
                            
                            <p>
                            The Kent Food Bank accepts donations on <br>Tuesday to Friday from 9 am – 2 pm of unopened,
                            packaged foods (canned goods, boxed meals, etc) as well as gently used men’s, women’s, children’s
                            clothing along with small household items at 515 W. Harrison Street, Suite 107 Kent, WA 98032.</p>
                            <p><a href="contact.html">Need a Map, Directions, or have additional questions?  Click Here.</a></p>
                        </div>
                        <div class="tab-pane fade" id="service-two">
                            <h4>Donate Through PayPal</h4>
                            <p>We understand not everyone has time to come down to donate in person.  PayPal offers a safe,
                            secure ability to donate money online using any Mastercard, Visa, American Express, or Discover
                            Debit, Credit, or Gift Card.  Click the button that reads "Donate" in order to be redirected
                            to the Kent Food Bank's PayPal page, where you will be prompted to enter your credit card
                            and billing information through a secure website to donate an amount of your choosing.  Your
                            information will only be used to verify your identity for the donation.</p>
                                
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" align="middle">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="HPNP9YXHUXN4G">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
                        </div>
                        <div class="tab-pane fade" id="service-three">
                            <h4><a href="volunteer.php"></a></h4>
                            <p></p>
                        </div>
                        <div class="tab-pane fade" id="service-four">
                            <h4>Community Contributors</h4>
                            <a href="https://org.amazon.com/agreement?p=progDetails"><img src="images/amzn_btn.png"></a>
                            <p>Amazon donates 0.5% of the price of your eligible AmazonSmile purchases to the
                            charitable organization of your choice. AmazonSmile is the same Amazon you know.
                            Same products, same prices, same service. Support your charitable organization by
                            starting your shopping at <a href="https://smile.amazon.com/">smile.amazon.com</a></p>
                            <br><br><br>
                            <a href="https://www.fredmeyer.com/topic/community-rewards-4"><img src="images/fmcr_btn.png"></a>
                            <p>You are now able to link your Rewards Card to your favorite nonprofit by following
                            <a href="https://www.fredmeyer.com/topic/community-rewards-4">this link</a>. 
                            Whenever you use your Rewards Card when shopping at Freddy’s, you will be helping that organization
                            earn a donation from Fred Meyer. If you do not have a Rewards Card, you can sign up for one
                            at the Customer Service Desk of any Fred Meyer store.</p>
                        </div>
                    </div>
    
                </div>
            </div>
    
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
