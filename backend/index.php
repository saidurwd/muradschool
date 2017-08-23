<?php error_reporting(0); ?>
<?php include('dbconnect.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        $result = mysql_query("select * from hdr_tbl") or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            ?>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <title>Welcome to <?php echo $row['hdr_en']; ?></title>
            <link rel="stylesheet" href="http://upworks.net78.net/mboss/mboss.css" />
            <script type="text/javascript" src="http://upworks.net78.net/mboss/mboss.js"></script>
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
            <LINK href="css/c.css" type=text/css rel=stylesheet>
                <script type="text/javascript" src="js/script.js"></script>
                <?php
                include"dbconnect.php";
                include"function.php";
                ?>
        </head>
        <body>
            <div id="wrapper">
                <div id="logo">
                    <h1><a style="margin-left: 10px; font-size: 35px;" href="index.php"><?php echo $row['hdr_bn']; ?></a></h1>
                </div>
                <hr />
                <!-- end #logo -->
                <div id="header">
                    <div id="menu">
                        <ul>
                            <li><a href="index.php" class="first">Home</a></li>
                            <?php if (!empty($_SESSION['UserType'])) { ?>
                                <li><a href="index.php?action=Logout">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- end #menu -->
                    <div id="search">
                        <form method="get" action="">
                            <fieldset>
                                <input type="text" name="s" id="search-text" size="15" />
                                <input type="submit" id="search-submit" value="GO" />
                            </fieldset>
                        </form>
                    </div>
                    <!-- end #search -->
                </div>
                <!-- end #header -->
                <!-- end #header-wrapper -->
                <div id="page">
                    <div id="page-bgtop">
                        <div id="content">
                            <div class="post">
                                <?php
                                if (empty($_REQUEST['action'])) {
                                    include "home.php";
                                } else {
                                    include $_REQUEST['action'] . ".php";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- end #content -->

                        <?php include("user_sidebar.php"); ?>

                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
                <!-- end #page -->
                <div id="footer-bgcontent">
                    <div id="footer">
                        <p>Copyright &copy; 2015 Momtaj Trading(Pvt.)Ltd. All rights reserved.</p>
                    </div>
                </div>
                <!-- end #footer -->
            </div>
        <?php } ?>
    </body>
</html>
