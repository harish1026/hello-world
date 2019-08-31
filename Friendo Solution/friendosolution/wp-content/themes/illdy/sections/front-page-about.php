<?php
/**
 *  The template for displaying about section in front page.
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$general_title = get_theme_mod( 'illdy_about_general_title', __( 'About', 'illdy' ) );
	$general_entry = get_theme_mod( 'illdy_about_general_entry', __( 'It is an amazing one-page theme with great features that offers an incredible experience. It is easy to install, make changes, adapt for your business. A modern design with clean lines and styling for a wide variety of content, exactly how a business design should be. You can add as many images as you want to the main header area and turn them into slider.', 'illdy' ) );
} else {
	$general_title = get_theme_mod( 'illdy_about_general_title' );
	$general_entry = get_theme_mod( 'illdy_about_general_entry' );
}
$custom_css = 'padding-top: 0px;padding-bottom: 0px;';
if ( ! $general_title && ! $general_entry ) {
	$custom_css = 'padding-top: 130px;';
}
?>

<?php if ( '' != $general_title || '' != $general_entry || is_active_sidebar( 'front-page-about-sidebar' ) ) { ?>

<section class="front-page-section" style="<?php echo $custom_css; ?>">
	<?php if ( $general_title || $general_entry ) : ?>
		<div id="about" class="section-header" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/about.jpg);background-repeat: no-repeat;background-size: cover;margin-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-xs-12 about_div">
						<h3>About Us</h3>
						Friendo Solution is a marketing based agency we leads the services of offline and online marketing The perception of good brand turnaround your business. A brand can be made genuinely exciting by integrating consistent design with crisp messaging to build a strong strategy . Friendo Solution specializes in Marketing campaign , advertisement and communication that is require to build brands. With this in mind it is important that your brand is presented in a way that lifts expectation, creates conversation and builds excitement. We follows the brand principles which give us fuel to build the brand and this is our core expertise.
					</div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
		<div id="why-us" class="section-header" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/why-choose-us.jpg);background-repeat: no-repeat;background-size: cover;margin-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-5 col-xs-11 why_us_div">
						<h3>Why choose us?</h3>
						<ol style="list-style-type:none;padding: 0px;">
							<li style="display: -webkit-box;color: #000;margin-bottom: 10px;"><div style="width: 30px;height: 30px;margin-right: 10px;color: #fff;text-align: center;background: #000;border-radius: 15px;">1</div>Quality product and services to ensure the long durability and build the customer trust.</li>
							<li style="display: -webkit-box;color: #000;margin-bottom: 10px;"><div style="width: 30px;height: 30px;margin-right: 10px;color: #fff;text-align: center;background: #000;border-radius: 15px;">2</div>We provide higher level of customer services to our valuable clients</li>
							<li style="display: -webkit-box;color: #000;margin-bottom: 10px;"><div style="width: 30px;height: 30px;margin-right: 10px;color: #fff;text-align: center;background: #000;border-radius: 15px;">3</div>We provide design assistance</li>
							<li style="display: -webkit-box;color: #000;margin-bottom: 10px;"><div style="width: 30px;height: 30px;margin-right: 10px;color: #fff;text-align: center;background: #000;border-radius: 15px;">4</div>Support system for small businesses owners</li>
							<li style="display: -webkit-box;color: #000;margin-bottom: 10px;"><div style="width: 30px;height: 30px;margin-right: 10px;color: #fff;text-align: center;background: #000;border-radius: 15px;">5</div>Our pricing is genuine and transparent</li>
						</ol>	
					</div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
		<div id="mission" class="section-header" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/mision.jpg);background-repeat: no-repeat;background-size: cover;margin-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 col-xs-12 mission_div">
						<h3>Mission and Vision</h3>
						Our mission and vision is to providing services to every small and large businesses ,Enterprises ,  manufacturer , Retail outlet , Shops , Malls and establish brands to increase the footfall of the customer through our expertise of offline and online Marketing and  make their product as their trustable brand and support them to build the brand of their product .	
					</div>
					<div class="col-md-3"></div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
		<div id="products" class="section-header" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/Product_and_services.jpg);background-repeat: no-repeat;background-size: cover;margin-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 col-xs-12 products_div">
						<h3>Product & Services</h3>
						<h5>Promotion Activity Material</h5>
						<div class="row">
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/Canopy.png);">CANOPY</div>
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/umberalla.png);">LONG UMBRELLA</div>
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/Mascot.png);">MASCOT</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/promo_table.png);">PROMO TABLE</div>
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/Standee.png);">STANDEE</div>
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/Look_walker.png);">LOOK WALKER</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/printing_cap.png);">PRINTED CAP</div>
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/mdf_standee.png);">MDF STANDEE</div>
							<div class="col-md-4 col-xs-12 product" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/t-shirt.png);">PRINTED T-SHIRT</div>
						</div>	
					</div>
					<div class="col-md-1"></div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
		<div id="services" class="section-header" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/brandingservices.jpg);background-repeat: no-repeat;background-size: cover;margin-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 col-xs-12 services_div">
						<h3>Services</h3>
						<h5>Branding Services</h5>
						<div class="branding_services">SUNBOARD</div>
						<div class="branding_services">ONE WAY VISION</div>
						<div class="branding_services">VINYL</div>
						<div class="branding_services">NON LIT BOARD</div>
						<div class="branding_services">FLEX</div>
						<div class="branding_services">SUNPACK</div>
						<div class="branding_services">GLOW SHINE BOARD</div>
						<div class="branding_services">ACP BOARD</div>
						<div class="branding_services">CLADDING</div>
					</div>
					<div class="col-md-1"></div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
		<div class="section-header" style="background-image:url(http://friendosolution.com/wp-content/uploads/2019/02/popservices.jpg);background-repeat: no-repeat;background-size: cover;margin-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 col-xs-12 service_pop">
						<h3>Services</h3>
						<h5>POP Services</h5>
						<div class="row">
							<div class="col-md-3 col-xs-12 pop_services">FLYER</div>
							<div class="col-md-3 col-xs-12 pop_services">LEAFLET</div>
							<div class="col-md-3 col-xs-12 pop_services">DANGLER</div>
							<div class="col-md-3 col-xs-12 pop_services">POSTER</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-xs-12 pop_services">BROCHURE</div>
							<div class="col-md-3 col-xs-12 pop_services">WOOBLER</div>
							<div class="col-md-3 col-xs-12 pop_services">VISITING CARD</div>
							<div class="col-md-3 col-xs-12 pop_services">ID CARD</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-xs-12 pop_services">PRINTED RIBBONS</div>
							<div class="col-md-3 col-xs-12 pop_services">CARD CASE</div>
							<div class="col-md-3 col-xs-12 pop_services">CALENDAR</div>
							<div class="col-md-3 col-xs-12 pop_services">DIARY</div>
						</div>	
					</div>
					<div class="col-md-1"></div>
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
		
		</div><!--/.section-header-->
	<?php endif; ?>
<?php }// End if().
	?>
