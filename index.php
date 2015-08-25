<?php
include('./Controller/login.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
    header("location: ./View/profile.php");
}
?>

<!doctype html>
<html >

    <head>
        <meta charset="utf-8"/>
        <title>FAMILIAR BUDGET PLAN</title>

        <link rel="stylesheet" media="all" href="View/css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- JS -->
        <script src="View/js/jquery-1.6.4.min.js"></script>
        <script src="View/js/css3-mediaqueries.js"></script>
        <script src="View/js/custom.js"></script>
        <script src="View/js/tabs.js"></script>


        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="View/css/superfish.css" /> 
        <script  src="View/js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script  src="View/js/superfish-1.4.8/js/superfish.js"></script>
        <script  src="View/js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- prettyPhoto -->
        <script  src="View/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="View/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- poshytip -->
        <link rel="stylesheet" href="View/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
        <link rel="stylesheet" href="View/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
        <script  src="View/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>

        <!-- Flex Slider -->
        <link rel="stylesheet" href="View/css/flexslider.css" >
        <script src="View/js/jquery.flexslider-min.js"></script>
        <!-- ENDS Flex Slider -->

        <!-- Less framework -->
        <link rel="stylesheet" media="all" href="View/css/lessframework.css"/>

        <!-- modernizr -->
        <script src="View/js/modernizr.js"></script>

        <!-- SKIN -->
        <link rel="stylesheet" media="all" href="View/css/skin.css"/>


    </head>

    <body lang="en">
        <header class="clearfix">
            <div class="wrapper clearfix">
                <a href="./View/profile.php" id="logo"><img src="View/img/logo.png" alt="Zeni" style=" height: 130px"></a>
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
                                <img src="View/img/logo_index.jpg" alt="alt text" />
                            </li>
                        </ul>
                    </div>
                    <!-- ENDS slider -->
                    <!-- Headline -->
                    <div id="headline">
                        <h1>LOG IN</h1>
                        <form id="contactForm" action="" method="post">
                            <fieldset>
                                <div>
                                    <label>Username</label>
                                    <input name="username"  id="name" type="text" class="form-poshytip" style="width: 150px; height: 15px;"/>
                                </div>
                                <div>
                                    <label>Password</label>
                                    <input name="password"  id="password" type="password" class="form-poshytip" style="width: 150px; height: 15px;"/>
                                </div>
                                <input name="submit" type="submit" value=" Login " style="width: 80px; height: 40px; font-size: 16px;">
                            </fieldset>
                            
                        </form>
                        <em id="corner"></em>
                    </div>
                    <!-- ENDS headline -->
                </div>
                <!-- ENDS slider holder -->

            </div>
        </div>
        <!-- ENDS MAIN -->
        <footer>
            <div class="wrapper">
            </div>
        </footer>

    </body>

</html>