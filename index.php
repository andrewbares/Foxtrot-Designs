<?php

$pageTitle = "Foxtrot Designs"; //sets the page title
$pageCss = "css/index.css"; //sets page-specific CSS file
$selectedNavId = "home"; //options are "home", "projects", "news", "pricing", and "aboutus". This sets a class called "nav-selected" on the nav item.

include "header.php";

?>


<div id="slide">
	<img src="images/someImage.jpg" alt="Main Page Image">
</div>
<div id="content-info">
	<div id="content-info-services">
		<!-- Left content box -->
		<div class="column column-left">
		<img src="images/someImage2.jpg" alt="Content Image (left)">
		<h3 class="content-info-headers">Website Design</h3>
		<p>We make websites that rock. Your customers will love our sites. We'll give you a professional look and feel.</p>
		</div>
		<!-- Center content box-->
		<div class="column column-center">
		<img src="images/someImage3.jpg" alt="Content Image (Center)">
		<h3 class="content-info-headers">Online Marketing</h3>
		<p>Make sure your business has a solid online presence. We have years of expertise to boost your business.</p>
		</div>
		<!-- Right content box-->
		<div class="column column-right">
		<img src="iamges/someImage4.jpg" alt="Content Image (Right)">
		<h3 class="content-info-headers">Mailing Lists</h3>
		<p>Reach out to your customer base to encourage future business.</p>
		</div>
	</div>
	<div id ="content-info-mobile">
		<div class="quotes"><p>
			Business has <strong>skyrocketed</strong> thanks to our new <strong>mobile-friendly</strong> website from Foxtrot Designs!<br>
	
			Customers can finally browse our selection and make purchases online, right from their iPhone - Tim Sockets, wallsockets.com
		</p></div>
			<img src="images/someImage5.jpg" alt="iPhone Mockup Image">
		
	</div>
	<div id="content-info-customers">
		<div class="quotes"><p>
			Our restaurant has served <strong>more customers</strong> in the last month than it ever has in the entire year!<br>
	
			Foxtrot Design's online marketing helped bring in an unbelievable amount of new customers - Pad Lu, tieyourthai.com
		</p></div>
			<img src="images/someImage6.jpg" alt="Search Results Image">
	</div>
</div>
			
			
		
		
		
<?php include "footer.php"; ?>