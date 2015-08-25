<?php
include('../Controller/session.php');
?>

<!doctype html>
<html >

    <head>
        <meta charset="utf-8"/>
        <title>FAMILIAR BUDGET PLAN</title>

        <link rel="stylesheet" media="all" href="css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- JS -->
        <script src="js/jquery-1.6.4.min.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/tabs.js"></script>


        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="css/superfish.css" /> 
        <script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script  src="js/superfish-1.4.8/js/superfish.js"></script>
        <script  src="js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- prettyPhoto -->
        <script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- poshytip -->
        <link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
        <link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
        <script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>

        <!-- Flex Slider -->
        <link rel="stylesheet" href="css/flexslider.css" >
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- ENDS Flex Slider -->

        <!-- Less framework -->
        <link rel="stylesheet" media="all" href="css/lessframework.css"/>

        <!-- modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- SKIN -->
        <link rel="stylesheet" media="all" href="css/skin.css"/>


    </head>

    <body lang="en">
        <header class="clearfix">
            <div class="wrapper clearfix">

                <a href="profile.php" id="logo"><img src="img/logo.png" alt="Zeni" style=" height: 130px"></a>

                <nav>
                    <ul id="nav" class="sf-menu">
                        <li class="current-menu-item"><a href="profile.php">HOME</a></li>
                        <li class="current-menu-item"><a href="../Controller/logout.php">LOGOUT</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- MAIN -->
        <div id="main">	
            <div class="wrapper">
                <!-- slider holder -->
                <div id="slider-holder" class="clearfix">
                    <!-- slider -->
                    <div class="flexslider home-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/slides/01.jpg" alt="alt text" />
                            </li>
                        </ul>
                    </div>
                    <!-- ENDS slider -->
                    <!-- Headline -->
                    <div id="headline">
                        <h1>MAKE A PLAN</h1>
                        <p>Try to keep safe your money.</p>
                        <?php require_once './alerts.php'; ?>
                        <em id="corner"></em>
                    </div>
                    <!-- ENDS headline -->
                </div>
                <!-- ENDS slider holder -->

                <!-- home-block -->
                <div class="home-block" >
                    <h2 class="home-block-heading"><span>YOU CAN:</span></h2>
                    <div class="one-third-thumbs clearfix" >
                        <figure>
                            <a href="new_ingress.php"  class="thumb"><img src="img/dummies/featured-1.jpg" alt="Alt text" /></a>
                        </figure>
                        <figure>
                            <a href="new_egress.php"  class="thumb"><img src="img/dummies/featured-4.jpg" alt="Alt text" /></a>
                        </figure>
                        <figure class="last">
                            <a href="ingress_egress_chart.php"  class="thumb"><img src="img/dummies/featured-5.jpg" alt="Alt text" /></a>
                        </figure>
                        <?php
                        if ($rol_session == 1) {
                            ?>
                            <figure>
                                <a href="new_egress_category.php"  class="thumb"><img src="img/dummies/featured-2.jpg" alt="Alt text" /></a>
                            </figure>    
                            <figure>
                                <a href="new_regular_egress.php"  class="thumb"><img src="img/dummies/featured-3.jpg" alt="Alt text" /></a>
                            </figure>    
                            <figure class="last">
                                <a href="new_member.php"  class="thumb"><img src="img/dummies/featured-4.jpg" alt="Alt text" /></a>
                            </figure>
                            <?php
                        }
                        ?>



                    </div>
                </div>
                <!-- ENDS home-block -->

            </div>
        </div>
        <!-- ENDS MAIN -->
        <footer>
            <div class="wrapper">
            </div>
        </footer>

    </body>

</html>