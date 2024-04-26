
	<!-- contact start-->
    <div id="contact" class="contact_section">
    	<div class="container">	
    	<div class="contact-taital">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="contact_text"><strong>Contact Us</strong></h1>
    			</div>
    		</div>
    	</div>
    		<div class="row">	
    			<div class="col-sm-6 col-md-6 col-lg-3">
    				<h2 class="adderess_text">Adderess</h2>
    				<div class="image-icon"><img src="images/map-icon.png"><span class="email_text">Gb road 123 London </span></div>
    				<div class="image-icon"><img src="images/phone-icon.png"><span class="email_text">(+71) 56982424536</span></div>
    				<div class="image-icon"><img src="images/email-icon.png"><span class="email_text">bacerim@gmail.com</span></div>
    			</div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
    				<h2 class="adderess_text">Useful Links</h2>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">Bacerim Dictionary</span></div>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">Help Links</span></div>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">bacerim Attitudes</span></div>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">Call a Cutumer</span></div>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">Help a Bacerim</span></div>
    			</div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
    				<h2 class="adderess_text">Overview</h2>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">Bacerim Dictionary</span></div>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">Help Links</span></div>
    				<div class="image-icon"><img src="images/bulit-icon.png"><span class="email_text">bacerim Attitudes</span></div>
    				<div class="social_icon">
    					<ul>
    						<li><a href="#"><img src="images/fb-icon.png"></a></li>
    						<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    						<li><a href="#"><img src="images/google-icon.png"></a></li>
    						<li><a href="#"><img src="images/linkedin-icon.png"></a></li>
    					</ul>
    				</div>
    			</div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
    				<h2 class="adderess_text">Instagram</h2>
    				<div class="row">
    					<div class="col-md-6">
    						<div class="footer-img"><img src="../assets/images/footer-img1.png" style="width: 100%;"></div>
    					</div>
    					<div class="col-md-6">
    						<div class="footer-img"><img src="images/footer-img2.png" style="width: 100%;"></div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-md-6">
    						<div class="footer-img"><img src="images/footer-img2.png" style="width: 100%;"></div>
    					</div>
    					<div class="col-md-6">
    						<div class="footer-img"><img src="images/footer-img3.png" style="width: 100%;"></div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- contact end-->
	<!-- copyright start-->
    <div class="copyright_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<p class="copyright_taital">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</p>
    			</div>
    		</div>
    	</div>
    </div>


	<!-- copyright end-->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 

         <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

        var image = 'images/location_point.png';
          var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
          });
        }
        </script>
        <!-- google map js -->
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
        <!-- end google map js -->




</body>
</html>