<?php

$pageTitle = "Foxtrot Designs | Projects"; //sets the page title
$pageCss = "css/projects.css"; //sets page-specific CSS file
$selectedNavId = "projects"; //options are "home", "projects", "news", "pricing", and "aboutus". This sets a class called "nav-selected" on the nav item.

include "header.php";

?>



<p>Our expertise comes from <b>experience.</b> We have been designing web pages <b>since 2011.</b> Choosing an experienced wed design company like Foxtrot Designs ensures that your website will be professional and created in a timely manner.
</p>

<p>Browse some of our pervious projects to get a sample of our work.</p>

<div class="row">
    
    <a href="http://hiking.andrewbares.net" target="_blank">
        <div class="large-4 columns">
            <img src="img/project1.jpg"/>
            <h4>Hiking Website</h4>
            <p>A website for posting trip logs and hiking articles.</p>
        </div>
    </a>
    
    <a href="http://u.arizona.edu/~andrewbares/etcv403/assignment9/" target="_blank">
        <div class="large-4 columns">
            <img src="img/project2.jpg"/>
            <h4>Strange Planes</h4>
            <p>Responsive site documenting odd planes.</p>
        </div>
    </a>
    
    <a href="http://gopaladhikari.com/" target="_blank">
        <div class="large-4 columns">
            <img src="img/project3.jpg"/>
            <h4>Personal Blog</h4>
            <p>A personal blog for Gopal, with the theme created by himself</p>
        </div>
    </a>
    
    <a href="http://apps.microsoft.com/windows/en-us/app/power-planner-homework-planner/7bb00b6b-7332-42e5-82a8-61da90418594" target="_blank">
        <div class="large-4 columns">
            <img src="img/project4.jpg"/>
            <h4>Homework Planner for Windows 8.1</h4>
            <p>A modern Windows 8.1 app that helps students manage their academic life.</p>
        </div>
    </a>
    
    <a href="http://www.windowsphone.com/en-us/store/app/8list-for-craigslist/efefb246-54cf-45d6-b039-492c3060f1ad" target="_blank">
        <div class="large-4 columns">
            <img src="img/project5.jpg"/>
            <h4>Craigslist client for Windows Phone</h4>
            <p>Browse craigslist seamlessly on your Windows Phone.</p>
        </div>
    </a>
</div>


<?php include "footer.php"; ?>