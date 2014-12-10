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
    
    <!--stylesheet for header and footer-->
    <link rel="stylesheet" type="text/css" href="css/global.css">
        
    <!--jQuery-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
    
    <!--stylesheet for individual page-->
    <?php
    
        if (isset($pageCss))
            echo "<link rel='stylesheet' type='text/css' href='$pageCss'>";
            
    ?>
    
</head>
    
<body>
    <div class="wrapper hero-wrapper">
        <!-- Start Page Header -->
        <header>
            <img id="logo-hero" src="img/logo.png" alt="Foxtrot logo"/>
            <!-- Start Navigation-->
            <nav id="hero-nav">
                <ul>
                    <li id="home"><a href=".">Home</a></li>
                    <li id="projects"><a href="projects.php">Projects</a></li>
                    <li id="news"><a href="news.php">News</a></li>
                    <li id="pricing"><a href="pricing.php">Pricing</a></li>
                    <li id="aboutus"><a href="aboutus.php">About Us</a></li>
                </ul>
            </nav>
            <!-- End Navigation-->
        </header>
        <!-- End Page Header-->

        <!-- Start Page Content-->
        <div class="wrapper content-wrapper">
