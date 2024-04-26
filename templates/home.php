<?php
include('partials/header.php');
?>
	<!-- banner end-->
	<!-- about start-->
	<div id="about" class="layout_padding about_section">
		<div class="container">
			<div class="row">
		        <div class="col-md-6">
		        	<div><img src="images/cupcake-img.png" style="max-width: 100%;"></div>
		        </div>
		        <div class="col-md-6">
		        	<h1 class="about_text"><strong>About pekerka <span class="color">Shop</span></strong></h1>
		        	<p class="about_taital">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve niam, quis nostrud exercitationconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
		        	<button class="read_more"><a href="#">Read More</a></button>
		        </div>
			</div>
		</div>
	</div>
	<!-- product start-->
	<div id="products" class="layout_padding product_section ">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="product_text"><strong><span class="den">Den</span>Products</strong></h1>
				</div>
			</div>
		    <div class="product_section_2 images">
			    <div class="row">
			    	<?php 
						$shop_obj = new Shop();
						echo $shop_obj->get_shop();
					?>
			    </div>
		    </div>
		</div>
	</div>
	<!-- product end-->
	<!-- Gallery start-->
	<div id="gallery" class="layout_padding2 gallery_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="gallery_main">
					    <h1 class="gallery_taital"><strong><span class="our_text">Our</span> Gallery</strong></h1>
					</div>
				</div>
				<div class="col-sm-12 gallery_maain">
					<div class="row">
						<?php
							$gallery_obj = new Gallery();
							echo $gallery_obj->get_gallery();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Gallery-->
	<!-- Touch start-->
	<div class="layout_padding gallery_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="gallery_main">
					    <h1 class="gallery_taital"><strong><span class="our_text">Get in</span>Touch</strong></h1>
					</div>
				</div>
			</div>
			<div class="touch_main">
				<div class="row">
					<div class="col-md-6">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="YOUR NAME" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="EMAIL" name="Email">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="PHONE NUMBER" name="Email">
                            </div>
                            <div class="form-group">
                               <textarea class="massage-bt" placeholder="MASSAGE" rows="5" id="comment" name="text"></textarea>
                            </div>
                          </form> 
                       </div> 
                    </div>
                        <div class="send_btn">
                           <button type="button" class="main_bt"><a href="#">SEND</a></button>                  
                        </div>
			    </div>
					<div class="col-md-6">
						<div class="images">
							<img src="images/bread-img.png" style="max-width: 100%;">
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<div class="map_section">
		<div class="row">
			<div class="col-sm-12">
	
                     <div id="map">
                     </div>
                   </div>

		</div>
	</div>
	<!-- Touch end-->
<?php
include("partials/footer.php");
?>

