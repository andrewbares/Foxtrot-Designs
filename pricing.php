<?php

$pageTitle = "Foxtrot Designs | Pricing"; //sets the page title
$pageCss = "css/pricing.css"; //sets page-specific CSS file
$selectedNavId = "pricing"; //options are "home", "projects", "news", "pricing", and "aboutus". This sets a class called "nav-selected" on the nav item.

include "header.php";

?>

<!-- HTML for pricing goes here -->

<div class="pricing-table-container" data-min-col-width="300">

	<p>The following are <b>estimates</b> of what our typical website cost. For a quote specific to your own website, please contact us.</p>


	<div class="pricing-table">
		<ul>
			<li class="heading">Basic Site</li>
			<li class="price">$500</li>
			<li>Starter package</li>
			<li>A typical site, like this current one. Consists of a few static pages.</li>
			<li class="action">Sign up now!</li>
		</ul>

		<ul class="feature">
			<li class="heading">Average Site</li>
			<li class="price">$1,000</li>
			<li>Intermediate package</li>
			<li>A basic site+ some additional advanced functionality like dynamic pages, a user admin center, or simply more content.</li>
			<li class="action">Sign up now!</li>
		</ul>

		<ul>
			<li class="heading">Advanced site</li>
			<li class="price">$3,000</li>
			<li>Professional package</li>
			<li>A full-scale website with the dynamic content, user admin center and numerous pages of content.</li>
			<li class="action">Sign up now!</li>
		</ul>

		<div class="clearfix"></div>

	</div>

</div>

<?php include "footer.php"; ?>