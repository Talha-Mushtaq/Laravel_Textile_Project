@extends('User/master')

@section('title','contact')

@section('main')



<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="" role="form" data-aos="fade-down" >
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
						
						
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map" data-aos="fade-right" >
						<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=nishatabad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://thevpndeal.com/nordvpn-coupon/">nordpvn coupon</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
					</div>
					<ul class="contact-short-info" data-aos="fade-up" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Nishatabad near kashmir pul, Punjab Faisalabad</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +92-3137170808</span>
						</li>
						<!-- <li>
							<i class="tf-ion-android-globe"></i>
							<span>Fax: +880-31-000-000</span>
						</li> -->
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: karachidyeing@gmail.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<!--<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-googleplus-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div>-->
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
	


@endsection

