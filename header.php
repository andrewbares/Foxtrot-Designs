<!DOCTYPE html>
<html lang="en">
<head>
    <title>
    <?php
    
        if (isset($pageTitle))
            echo $pageTitle;
        else
            echo "Foxtrot Designs";
            
    ?>
    </title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--stylesheet for header and footer-->
    <link rel="stylesheet" type="text/css" href="css/global.css">
        
    <!--jQuery-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <!--My own responsive grid view-->
    <script src="js/responsive-grid.js"></script>
    
    <!--stylesheet for individual page-->
    <?php
    
        if (isset($pageCss))
            echo "<link rel='stylesheet' type='text/css' href='$pageCss'>";
            
    ?>
    
    
    <!--script for handling header clicked when in mobile view-->
    <script>
        
        var cancel_header_toggle = false;
        
        /* this is used so that when they click a nav link, it doesn't collapse the menu and look choppy */
        function header_link_click() {
            cancel_header_toggle = true;
        }
        
        function header_click()
        {
            if (cancel_header_toggle) {
                cancel_header_toggle = false;
                return;
            }
            
            if (is_mobile())
                $("#hero-header").toggleClass("expanded");
        }
        
        function is_mobile()
        {
            return $(window).width() <= 690;
        }
        
    </script>
    
</head>
    
<body>
    <div class="wrapper hero-wrapper">
        <!-- Start Page Header -->
        <header id="hero-header" onclick="header_click();">
            <img id="logo-hero" src="img/logo.png" alt="Foxtrot logo"/>
            <!-- Start Navigation-->
            <nav id="hero-nav">
                <ul>
                    <li id="home"><a href="." onclick="header_link_click()">Home</a></li>
                    <li id="projects"><a href="projects.php" onclick="header_link_click()">Projects</a></li>
                    <li id="news"><a href="news.php" onclick="header_link_click()">News</a></li>
                    <li id="pricing"><a href="pricing.php" onclick="header_link_click()">Pricing</a></li>
                    <li id="aboutus"><a href="aboutus.php" onclick="header_link_click()">About Us</a></li>
                </ul>
            </nav>
            <!-- End Navigation-->
        </header>
        <!-- End Page Header-->

        <!-- Start Page Content-->
        <div class="wrapper content-wrapper">
