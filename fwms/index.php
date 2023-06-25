<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Food Waste Management System|||Home Page</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
    </script>
</head>

<body>
    <?php include_once("includes/header.php");?>
    <div class="banner">
        <div class="container">

            <script src="js/responsiveslides.min.js"></script>
            <script>
            $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
            });
            });
            </script>

            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-info">
                            <h3>WE NEED YOUR SUPPORT</h3>
                            <p>Reduce the amount of food waste already in the planning phase with Ragini's
                                Food Waste Tracking System.

                                Monitor the amount of waste, and utilize that information for future plans.

                                PRODUCTS AND LICENSES: Real-time waste monitoring via an easy-to-use interface. The
                                solution can be used as standalone web service without separate devices or applications.
                                The customer uses standard scales to weigh the loss and makes entries manually. Data
                                collection can be accelerated with the wireless Waste Scale accessory of the solution.
                                Start reducing food waste with Food Waste Tracker. Scroll down to learn more!</p>
                            <a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h3>HELP TURN TEARS TO SURES</h3>
                            <p>Reduce the amount of food waste already in the planning phase with Sai's and Pushkar's
                                Food Waste Tracking System.

                                Monitor the amount of waste, and utilize that information for future plans.

                                PRODUCTS AND LICENSES: Real-time waste monitoring via an easy-to-use interface. The
                                solution can be used as standalone web service without separate devices or applications.
                                The customer uses standard scales to weigh the loss and makes entries manually. Data
                                collection can be accelerated with the wireless Waste Scale accessory of the solution.
                                Start reducing food waste with Food Waste Tracker. Scroll down to learn more!</p>
                            <a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="welcome">
        <div class="container">
            <?php

$ret=mysqli_query($con,"select * from tblpages where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <div class="welcome-head">

                <p><?php  echo $row['PageDescription'];?></p>
            </div>

        </div><?php } ?>
    </div>

    <div class="mission">
        <div class="container">
            <div class="mission-header">
                <h3>OUR MISSION</h3>
            </div>
            <div class="mission-grids">
                <div class="col-md-6 mission-left">
                    <img src="images/333.jpg" alt="" />
                </div>
                <div class="col-md-6 mission-right">
                    <div class="mis-one">
                        <div class="mis-left">
                            <img src="images/444.png" alt="" />
                        </div>
                        <div class="mis-right">
                            <h3>HELP & SUPPORT</h3>
                            <p>Reduce the amount of food waste already in the planning phase with Ragini's Food Waste
                                Tracking System.

                                Monitor the amount of waste, and utilize that information for future plans.

                                PRODUCTS AND LICENSES: Real-time waste monitoring via an easy-to-use interface. The
                                solution can be used as standalone web service without separate devices or applications.
                                The customer uses standard scales to weigh the loss and makes entries manually. Data
                                collection can be accelerated with the wireless Waste Scale accessory of the solution.
                                Start reducing food waste with Food Waste Tracker. Scroll down to learn more!</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mis-one">
                        <div class="mis-left">
                            <img src="images/555.png" alt="" />
                        </div>
                        <div class="mis-right">
                            <h3>Starve Free World</h3>
                            <p>Reduce the amount of food waste already in the planning phase with Sai's and Pushkar's
                                Food Waste Tracking System.

                                Monitor the amount of waste, and utilize that information for future plans.

                                PRODUCTS AND LICENSES: Real-time waste monitoring via an easy-to-use interface. The
                                solution can be used as standalone web service without separate devices or applications.
                                The customer uses standard scales to weigh the loss and makes entries manually. Data
                                collection can be accelerated with the wireless Waste Scale accessory of the solution.
                                Start reducing food waste with Food Waste Tracker. Scroll down to learn more!</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mis-one">
                        <div class="mis-left">
                            <img src="images/666.png" alt="" />
                        </div>
                        <div class="mis-right">
                            <h3>Helping Hand</h3>
                            <p>Quis autem vel eum iure reprehenderit qui
                                in ea voluptate velit esse quam nihil molestiae</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <?php include_once("includes/footer.php");?>

    <script type="text/javascript">
    $(document).ready(function() {

        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>

</html>