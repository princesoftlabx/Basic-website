<?php include 'incl/fx.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quadron - Responsive HTML5 Template</title>
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Quadron - Responsive HTML5 Template">
	<meta name="author" content="Quadron">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<!-- Load google font
	================================================== -->
	<script>
		WebFontConfig = {
			google: { families: [ 'Roboto:300,400,400i,500,700', 'Montserrat:700'] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>
	<style>
		.container{
			top: -500px;
		}
		.error{
			color:red;
		}
		.good{
			color:green;
			text-align: center;
			font-size: 25px;
			border-bottom: grey;
		}
	</style>

</head>
<body>
<!-- start Header -->
<header id="top-bar">
<div class="container-fluid">
		<div class="row justify-content-between no-gutters ">
			<div class="col-auto side-col d-flex align-items-center text-nowrap">
				<!-- start navigation-toggle -->
				<a href="#" id="top-bar__navigation-toggler">
					<span></span>
				</a>
				<!-- end navigation-toggle -->
				<!-- start logo -->
				<a href="index.php" class="top-bar__logo">
					Quadron.
				</a>
				<!-- end logo -->
			</div>
			<div class="col-auto">
				<!-- start desktop menu -->
				<nav id="top-bar__navigation">
					<ul>
						<li>
							<a href="index.php"><span>HOME</span></a>
						</li>
						<li><a href="#"><span>PROJECTS</span></a></li>
						<li><a href="#"><span>BLOG</span></a></li>
						<li><a href="contact.php"><span>CONTACTS</span></a></li>
					</ul>
				</nav>
				<!-- end desktop menu -->
			</div>
			<div class="col-auto side-col">
				<!-- start btn cart -->
				<a href="shop_cart.html" target="_blank" class="btn-cart">
					<span class="btn-cart__icon">
						<svg width="8.94" height="13.88">
							<use xlink:href="#shopping-bag01"></use>
						</svg>
					</span>
					<span class="btn-cart__badge">1</span>
				</a>
				<!-- end btn cart -->
				<!-- start custom btn -->
				<a href="#" class="top-bar__custom-btn"><span>MAKE ORDER</span></a>
				<!-- end custom btn -->
			</div>
		</div>
	</div>
</header>
<!-- end Header -->
<main id="mainContent">
	<div class="section--bg-wrapper-02">
		<!-- start section -->
		<section class="section--no-padding section">
			<div class="subpage-header">
				<div class="subpage-header__bg" data-bg="images/subpage-title-img/subpage-title-img07.jpg">
					<img class="subpage-header__bg"src="images/subpage-title-img/subpage-title-img07.jpg" alt="">
					<div class="container">
						<div class="subpage-header__block">
							<div class="subpage-header__caption">Quadron.</div>
							<h1 class="subpage-header__title">Contact Us</h1>
							<div class="subpage-header__line"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->
		<!-- start section -->
		<section class="section section__indent-15">
			<div class="container">
				<div class="section-heading section-heading_indentg02">
					<div class="description"><i></i>Contact Form</div>
					<h2 class="title">Please use the Form</h2>
				</div>
				<form class="contact-form form-default" id="contactform" method="POST" novalidate="novalidate" action="#">
					<div class="row">
						<div class="col-md-5 col-lg-4">
							<div class="notes d-md-none d-lg-none d-xl-none">
								* – fields are required
							</div>
							<div class="form-group">
                            <div class="wrapper-select-for-title">
								<label class="placeholder-label">First name *</label>
								<input type="text" name="name" class="form-control" id="inputName" >
								<span class="error"><?php echo $fnameerr;  ?></span>
							</div></div>
							<div class="form-group">
                            <div class="wrapper-select-for-title">
								<label class="placeholder-label">Last name *</label>
								<input type="text" name="name2" class="form-control" id="inputLast">
								<span class="error"><?php echo $lnameerr;  ?></span>
							</div></div>
							<div class="form-group">
                            <div class="wrapper-select-for-title">
								<label class="placeholder-label">Email *</label>
								<input type="text" name="email" class="form-control" id="cf-inputEmail">
								<span class="error"><?php echo $emailerr;  echo $emailer; ?></span>
    </div>
							</div>
							<div class="form-group">
								<div class="wrapper-select-for-title">
									<label class="placeholder-label">Industry *</label>
									<select name="industry" class="js-init-select select-custom-02 nice-select">
										<option>Please select</option>
										<option>Agriculture</option>
										<option>Delivery</option>
										<option>MasMedia</option>
										<option>Entertaiment</option>
									</select>
								</div>
							</div>
							<div class="notes d-none d-md-block d-lg-block d-xl-block">
								* – fields are required
							</div>
						</div>
						<div class="divider divider__md notes d-md-none d-lg-none d-xl-none"></div>
						<div class="col-md-7 col-lg-8">
							<div class="form-group">
                            <div class="wrapper-select-for-title">
								<label class="placeholder-label">Message</label>
								<textarea name="message" class="form-control" id="textareaMessage"></textarea>
							</div>
                            </div>

							<button type="submit" name="submit" class="btn">SEND MESSAGE</button>
							<span class="good">Thank you, Your details are Submitted</span>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- end section -->
		<!-- start section -->
		<section class="section section-default-top">
			<div class="contact-info">
				<div class="contact-info__item">
					<div class="contact-info__img">
						<div class="googlemap" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y" data-marker="images/map-marker.png" data-longitude="-117.2697074" data-latitude="34.0887252"></div>
					</div>
					<div class="contact-info__description">
						<address>
							<p>
								<strong>Address</strong>
								4706 Skillman Ave,<br>Long Island City, NY 1110
							</p>
							<p>
								<strong>Phone number</strong>
								+91 9718 123 829
							</p>
							<p>
								<strong>Email</strong>
								<a href="mailto:princesharma@softlabx.com">princesharma@softlabx.com</a>
							</p>
						</address>
					</div>
				</div>
				<div class="contact-info__item">
					<div class="contact-info__img">
						<div class="googlemap" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y" data-marker="images/map-marker.png" data-longitude="-117.2697074" data-latitude="34.0887252"></div>
					</div>
					<div class="contact-info__description">
						<address>
							<p>
								<strong>address</strong>
								315 S Peoria St<br>Chicago, IL 60607
							</p>
							<p>
								<strong>Phone number</strong>
								+91 9718 123 829
							</p>
							<p>
								<strong>Email</strong>
								<a href="mailto:princesharma@softlabx.com">princesharma@softlabx.com</a>
							</p>
						</address>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->
	</div>
</main>
<?php

include 'incl/footer.php';
?>