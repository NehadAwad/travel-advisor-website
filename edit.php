<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Contact - Travel</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
       

        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="images/logo.png" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="events.php">Events</a></li>
                                	<li><a href="about.php">About Us</a></li>
                                    <li class="active"><a href="contact.php">Contact</a></li>
                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li class="active"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->

        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->


        <?php
		require 'config.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM messages WHERE ID='$id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
       
		$Name = $row['Name'];
		$Phone  = $row['Phone'];
        $Email = $row['Email'];
        $Message = $row['Message'];
       
     ?>

        <div class="contact-page">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-7 col-sm-6">
                        <h3 class="widget-title">Update Info</h3>
                        <div class="contact-form">
                            <form name="contactform" id="contactform" action="update.php" method="post">

                                <p>
                                    <input type="hidden" name="id" type="text" id="id" placeholder="Id" value="<?php echo $id?>" required="true"> 
                                </p>
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name" value="<?php echo $Name?>" required="true">
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" placeholder="Your Email" value="<?php echo $Email?>" required="true"> 
                                </p>
                                <p>
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number" value="<?php echo $Phone?>" required="true"> 
                                </p>
                                
                                <input type="submit" class="mainBtn" id="submit" value="Update">
                            </form>
                        </div> <!-- /.contact-form -->

                      
                        
                       

                        


                    </div>
                </div>
            </div>
        </div>




        



        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                        <span>Copyright &copy;<?php echo date("Y");?><a href="#"> Travel</a></span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

      
       
    </body>
</html>