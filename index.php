<?php

$pageTitle = "Foxtrot Designs"; //sets the page title
$pageCss = "css/index.css"; //sets page-specific CSS file
$selectedNavId = "home"; //options are "home", "projects", "news", "pricing", and "aboutus". This sets a class called "nav-selected" on the nav item.

include "header.php";

?>


<div id="slide">
	<!--<img src="img/featured.jpg" alt="Main Page Image">-->
</div>
<div id="content-info">
	<div id="content-info-services">
		
		<!-- Left content box -->
		<div class="column column-left">
			<img src="img/service1.jpg" alt="Screenshot of CSS document in editor"/>
			<h3 class="content-info-headers">Website Design</h3>
			<p>We make websites that rock. Your customers will love our sites. We'll give you a professional look and feel.</p>
		</div>
		
		<!-- Center content box-->
		<div class="column column-center">
			<img src="img/service2.jpg" alt="Screenshot of Google Search advertisements"/>
			<h3 class="content-info-headers">Online Marketing</h3>
			<p>Make sure your business has a solid online presence. We have years of expertise to boost your business.</p>
		</div>
		
		<!-- Right content box-->
		<div class="column column-right">
			<img src="img/service3.jpg" alt="Screenshot of email inbox"/>
			<h3 class="content-info-headers">Mailing Lists</h3>
			<p>Reach out to your customer base to encourage future business.</p>
		</div>
	</div>
	<div id ="content-info-mobile">
		<div class="quotes">
			<p>Business has <strong>skyrocketed</strong> thanks to our new <strong>mobile-friendly</strong> website from Foxtrot Designs!<br>
	
			Customers can finally browse our selection and make purchases online, right from their iPhone - Tim Sockets, wallsockets.com</p>
		</div>
		<img src="img/quote1.png" alt="Mobile friendly site on a Windows Phone. Lumia 800 PSD from livven.me."/>
		
	</div>
	<div id="content-info-customers">
		<div class="quotes">
			<p>Our restaurant has served <strong>more customers</strong> in the last month than it ever has in the entire year!<br>
	
			Foxtrot Design's online marketing helped bring in an unbelievable amount of new customers - Pad Lu, tieyourthai.com</p>
		</div>
		<img src="img/quote2.jpg" alt="People dining at restaurant. Image from http://adventurejay.com/blog/index.php?m=05&y=13 under creative commons."/>
	</div>
</div>
			
			
		
		
		
<?php include "footer.php"; ?>