<?php

$pageTitle = "Foxtrot Designs | About Us"; //sets the page title
$pageCss = "css/aboutus.css"; //sets page-specific CSS file
$selectedNavId = "aboutus"; //options are "home", "projects", "news", "pricing", and "aboutus". This sets a class called "nav-selected" on the nav item.

include "header.php";

?>

<!-- HTML for about us goes here -->
<section class="about">
	
	<h2>The People Behind Foxtrot Design</h2>
	
	<!-- Gopal Adhikari -->
	<div class="person">
		<h3>Gopal Adhikari</h3>
		<img class="person-head" src="img/people/gopal.jpg">
		<div class="person-description">
			Tea enthusiast and all-round nerd, Gopal likes all things computers and hates writing biography in third person. Wait...
		</div>
		<div class="person-link"><a href="gopal.php">Gopal's Page</a></div>
	</div>

	<!-- Andrew Bares -->
	<div class="person">
		<h3>Andrew Bares</h3>
		<img class="person-head" src="http://placehold.it/150x150">
		<div class="person-description">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor ante, euismod vel quam ut, mattis blandit turpis. Donec nec ex sit amet ex pulvinar 
		gravida dapibus sit amet quam. Aenean tempus velit velit, et laoreet felis mattis et. Nulla finibus sed turpis ac sodales. Praesent sit amet risus nisl.
		</div>
		<div class="person-link"><a href="andrew.php">Andrew's Page</a></div>
	</div>
	
	<!-- Olivia Goldson -->
	<div class="person">
		<h3>Olivia Goldson</h3>
		<img class="person-head" src="http://placehold.it/150x150">
		<div class="person-description">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor ante, euismod vel quam ut, mattis blandit turpis. Donec nec ex sit amet ex pulvinar 
		gravida dapibus sit amet quam. Aenean tempus velit velit, et laoreet felis mattis et. Nulla finibus sed turpis ac sodales. Praesent sit amet risus nisl.		</div>
		<div class="person-link"><a href="olivia.php">Olivia's Page</a></div>
	</div>

	<!-- Aaron Stewart -->
	<div class="person">
		<h3>Aaron Stewart</h3>
		<img class="person-head" src="http://placehold.it/150x150">
		<div class="person-description">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor ante, euismod vel quam ut, mattis blandit turpis. Donec nec ex sit amet ex pulvinar 
		gravida dapibus sit amet quam. Aenean tempus velit velit, et laoreet felis mattis et. Nulla finibus sed turpis ac sodales. Praesent sit amet risus nisl.
		</div>
		<div class="person-link"><a href="aaron.php">Aaron's Page</a></div>
	</div>
	
	<!-- Jeannie Leonard -->
	<div class="person">
		<h3>Jeannie	Leonard</h3>
		<img class="person-head" src="http://placehold.it/150x150">
		<div class="person-description">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor ante, euismod vel quam ut, mattis blandit turpis. Donec nec ex sit amet ex pulvinar 
		gravida dapibus sit amet quam. Aenean tempus velit velit, et laoreet felis mattis et. Nulla finibus sed turpis ac sodales. Praesent sit amet risus nisl.
		</div>
		<div class="person-link"><a href="jeannie.php">Jeannie's Page</a></div>
	</div>
	
	
	
	
	
</section>

<?php include "footer.php"; ?>