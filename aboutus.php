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
		<img class="person-head" src="img/people/gopal.jpg" alt="Gopal's Photo" />
		<p>
		Tea enthusiast and all-round nerd, Gopal likes all things computers and hates writing biography in third person. Wait...
		<a href="gopal.php">Gopal's Page</a>
		</p>
	</div>

	<!-- Andrew Bares -->
	<div class="person">
		<h3>Andrew Bares</h3>
		<img class="person-head" src="img/people/andrew.jpg" alt="Andrew's Photo" />
		<p>
		Andrew is a Windows Phone developer with a few web development skills. He also fights dragons in his free time. One of those facts is real.
		<a href="http://u.arizona.edu/~andrewbares/etcv403/final-individual/">Andrew's Page</a>
		</p>
	</div>
	
	<!-- Olivia Goldson -->
	<div class="person">
		<h3>Olivia Goldson</h3>
		<img class="person-head" src="img/people/olivia.jpg" alt="Olivia's Photo" />
		<p>
		Olivia is a junior at The University of Arizona where she studies Information Science and Arts. Originally from New York, she loves going 
		home to the big apple where she hangouts with friends and family.
		<a href="olivia.php">Olivia's Page</a>
		</p>
	</div>

	<!-- Aaron Stewart -->
	<div class="person">
		<h3>Aaron Stewart</h3>
		<img class="person-head" src="img/people/aaron.png" alt="Aaron's Photo" />
		<p>
		Just a college student from Annapolis, Maryland that recently discovered this super magical drink called ‘coffee’ that is now consumed on the daily. 
		Also, loves meeting new people and being surrounded by friends and family and has a strong passion for Web-Design.
		<a href="aaron.php">Aaron's Page</a>
		</p>
	</div>
	
	<!-- Jeannie Leonard -->
	<div class="person">
		<h3>Jeannie	Leonard</h3>
		<img class="person-head" src="img/people/jeannie.jpg" alt="Jeannie's Photo" />
		<p>
		Jeannie is currently attending University of Arizona South, working on her second bachelor of Network +. 
		Her first degree was on Art. She is Korean and bilingual. She loves traveling and meeting new people.
		<a href="jeannie.php">Jeannie's Page</a>
		</p>
	</div>
	
</section>

<?php include "footer.php"; ?>