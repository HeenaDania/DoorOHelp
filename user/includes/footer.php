<!-- <footer class="page_footer ds parallax section_padding_top_100 section_padding_bottom_100 columns_padding_25" id="contact" >
				<div class="container">
					<div class="row">

						<div class="col-md-4 col-sm-12 text-center" data-aos="fade-right">
							<div class="widget">
								<h3 class="widget-title">
									Contact Us
								</h3>
								<div class="media small-teaser inline-block topmargin_0">
									<div class="media-left">
										<i class="fa fa-map-marker highlight"></i>
									</div>
									<div class="media-body">
										#15, Model Town, Ludhiana
									</div>
								</div>
								<br>
								<div class="media small-teaser inline-block">
									<div class="media-left">
										<i class="fa fa-envelope highlight"></i>
									</div>
									<div class="media-body">
										doorohelp@gmail.com
									</div>
								</div>
								<br>
								<div class="media small-teaser inline-block" >
									<div class="media-left">
										<i class="fa fa-phone highlight"></i>
									</div>
									<div class="media-body">
										9855445055
									</div>
								</div>
								<div class="darklinks topmargin_40">
									<a class="social-icon border-icon soc-facebook" target="_blank" href="https://en-gb.facebook.com/login/" title="Facebook"></a>
									<a class="social-icon border-icon soc-twitter" target="_blank" href="https://twitter.com/login?lang=en" title="Twitter"></a>
									<a class="social-icon border-icon soc-linkedin" target="_blank" href="https://www.linkedin.com/uas/login"" title="LinkedIn"></a>
									<a class="social-icon border-icon soc-google" target="_blank" href="https://accounts.google.com/signin/v2/identifier?hl=EN&flowName=GlifWebSignIn&flowEntry=ServiceLogin" title="Google"></a>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 text-center" data-aos="fade-down">
							<div class="widget">
								<h3 class="widget-title">
									Send Message
								</h3>

								<form class="contact-form topmargin_35" method="post" enctype="multipart/form-data">
									<p class="form-group">
										<label for="footer-name">Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control text-center" placeholder="Full Name" required>
									</p>
									<p class="form-group">
										<label for="footer-email">Display Picture <span class="required">*</span></label>
										<input type="file" aria-required="true" name="img" id="footer-img" class="form-control text-center" required>
									</p>
									<p class="form-group">
										<label for="footer-message">Message</label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control text-center" placeholder="Your Message..." required></textarea>
									</p>
									<p class="footer_contact-form-submit topmargin_20">
										<button type="submit" id="footer_contact_form_submit" name="send" class="theme_button color1 wide_button">Send Feedback</button>
									</p>
									<?php 
									if (isset($_POST['send'])) {
										$name=mysql_real_escape_string($_POST['name']);
										  $message=mysql_real_escape_string($_POST['message']);
										  $name = $_FILES["img"]["name"];
										  $size = $_FILES["img"]["size"];
										  $type = $_FILES["img"]["type"];
										  $temp_name = $_FILES["img"]["tmp_name"];
										  $location='./../images/';
										  $path=$location.$name;

										  if (move_uploaded_file($temp_name,$path)){ 
										    $query="insert into testimonials (name,image,feedback) VALUES ('$name','$path','$message')";
										    mysqli_query($con,$query) or die(mysqli_error($con));
										  }
										    header("location:index.php");
										  }
										?>
								</form>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 text-center" data-aos="fade-down">
							<div class="widget widget_twitter">
								<h3 class="widget-title">Why Choose Us?</h3>
								<p>
									<i>' Save on time and money '</i><br><br>
									<i>' Get personalised care and attention '</i><br><br>
									<i>' Trained, Certified and Experienced Professionals '</i><br><br>
									<i>' Ideal for users with limited mobility or busy schedules '</i>
								</p>
							</div>
						</div>

					</div>
				</div>
			</footer> -->
<section class="ds parallax page_copyright section_padding_15 with_top_border_container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center" >
				<p class="grey regular">Services provided with ♥ by Door O Help</p>
			</div>
		</div>
	</div>
</section>
