<?php
include('../Controller/session.php');
$rol = $rol_session;
$user = $login_session;
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

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>

        <!-- Flex Slider -->
        <link rel="stylesheet" href="css/flexslider.css" >
        <script src="js/jquery.flexslider-min.js"></script>

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

                <a href="../View/profile.php" id="logo"><img src="img/logo.png" alt="Zeni" style=" height: 130px"></a>

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
            <div class="wrapper clearfix">
                <div id="slider-holder" class="clearfix">
                    <div id="headline">
                        <h1>MAKE A PLAN</h1>
                        <p>Try to keep safe your money.</p>
                        <?php require_once './alerts.php';?>
                        <em id="corner"></em>
                    </div>
                    
                   
                    
                    <form id="contactForm" action="../Controller/new_egress_recorder.php" method="post" style="    margin-top: -330px; margin-left: 120px;">
                        <fieldset>
                            <div>
                                <br />
                                <label>Category</label>
                                <select name="category_id" style="    background-color: #ebebe8; height: 45px; width: 180px;">
                                    <?php
                                    require_once '../Model/conexion.php';
                                    $query = 'SELECT name, idCategory FROM category;';
                                    $result = mysql_query($query, $connection) or die('Consulta fallida: ' . mysql_error());
                                    while ($line = mysql_fetch_row($result)) {
                                            echo "<option value=".$line[1].">".$line[0]."</option>";

                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <br />
                                <label>Amount</label>
                                <input name="egress_amount"  id="name" type="text" class="form-poshytip" style="width: 150px; height: 25px;" required="required"/>
                            </div>
                            <div>
                                <label>Date</label>
                                <input name="egress_date"  id="password" type="date" class="form-poshytip" style="width: 150px; height: 25px;" required="required"/>
                            </div>
                            <input name="submit" type="submit" value=" OK " style="width: 80px; height: 40px; font-size: 16px;">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- ENDS MAIN -->
        <footer>
            <div class="wrapper">
            </div>
        </footer>

    </body>

</html>