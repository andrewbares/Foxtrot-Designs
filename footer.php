
		</div>
		<!-- End Page Content-->
		
		
		<!-- Start Footer-->
		<footer id="footer">
			<div class="footer-inner">
				<div id="social">
					<ul>
						<li><a href="#" id="facebook-icon" class="icon"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
						<li><a href="#" id="twitter-icon" class="icon"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
					</ul>
				</div>
				<div id="copyright">Copyright 2014 &copy;<br>
					Foxtrot Designs LLC <br>
					Tucson, AZ
				</div>
			</div>
			<nav id="bottom-nav">
			    <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="projects.php">Projects</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="pricing.php">Pricing</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			    </ul>
			</nav>
		</footer>
		<!-- End Footer-->
		
		
	</div>
	<!-- End top-level div wrapper-->
        
    
    <script>
        
        var selectedNavId = "<?php echo $selectedNavId; ?>";
        
        $(document).ready(function()
        {
		$("#" + selectedNavId).addClass("nav-selected");
        });
    
    </script>
        
        
</body>
</html>