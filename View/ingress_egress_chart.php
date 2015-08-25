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
            <div class="wrapper clearfix">
                <div id="slider-holder" class="clearfix">
                    <div id="headline">
                        <h1>MAKE A PLAN</h1>
                        <p>Try to keep safe your money.</p>
                        <?php require_once './alerts.php';?>
                        <em id="corner"></em>
                    </div>
                    <h1>COMPARATIVE CHART</h1>
                    <br /><br />
                    <table>

                        <tr>
                            <th><h2>INGRESS</h2></th>
                        <th><h3>Ingress DATE</h3></th>
                        <th><h2>EGRESS</h2></th>
                        <th><h3>Egress DATE</h3></th>
                        <th><h2>TOTAL</h2></th>
                        </tr>
                        <?php
                        require_once '../Model/conexion.php';
                        $query = 'SELECT DISTINCT i.amount, e.amount, i.date, e.date
                                    FROM ingress i, egress e
                                    WHERE i.member_idmember = e.member_idmember AND i.idingress != e.idegress;';
                        $result = mysql_query($query, $connection) or die('Consulta fallida: ' . mysql_error());
                        while ($line = mysql_fetch_row($result)) {
                            echo "<tr>";
                            echo "<th><h3>" . $line[0] . "</h3></th>";
                            echo "<th><h4>" . $line[2] . "</h4></th>";
                            echo "<th><h3>" . $line[1] . "</h3></th>";
                            echo "<th><h4>" . $line[3] . "</h4></th>";
                            echo "<tr>";
                        }

                        $query_sum = 'SELECT DISTINCT sum(i.amount), SUM(e.amount) '
                                . 'FROM ingress i, egress e '
                                . 'WHERE i.member_idmember = e.member_idmember AND i.idingress != e.idegress';
                        $result_sum = mysql_query($query_sum, $connection) or die('Consulta fallida: ' . mysql_error());
                        while ($line = mysql_fetch_row($result_sum)) {
                            echo "<tr>";
                            echo "<th><h2>" . $line[0] . "</h2></th>";
                            echo "<th></th>";
                            echo "<th><h2>" . $line[1] . "</h2></th>";
                            echo "<th></th>";
                            echo "<th><h2>" . ($line[0] - $line[1]) . "</h2></th>";
                            echo "<tr>";
                        }
                        ?>
                    </table>

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