
		</div>
		<!-- End Page Content-->
		<!-- Start Footer-->
		<footer id="footer">
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
		</footer>
		<!-- End Footer-->
	</div>
        
    
    <script>
        
        var selectedNavId = "<?php echo $selectedNavId; ?>";
        
        $(document).ready(function()
        {
            $("#" + selectedNavId).addClass("nav-selected");
        });
    
    </script>
        
        
</body>
</html>