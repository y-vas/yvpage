<!--
<html>
  <h1> <a class="btn btn-xlarge font-weight-bold it" data-toggle="modal" data-target="#exampleModal" > CV </a> <a class="btn-lg">/</a>
  <a class="btn btn-xlarge font-weight-bold it" href="https://github.com/y-vas"> GitHub </a> </h1>
  <li>  <a class="btn btn-xlarge" href="files/CV2020.pdf" download> CV 2020 </a></li>
  <li>  <a class="btn btn-xlarge" href="files/CV2019.pdf" download> CV 2019 </a></li>
</html>
-->


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../assets/images/vylogo.png">
	<title> {{ $site_name }} </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ $site_name }} Website" />
	<meta name="keywords" content="vasyl yovdiy ikenas develo Vasyl Yovdiy leku {{ $site_name }}" />
	<meta name="author" content="Vasyl Yovdiy" />
	<meta property="og:title" content="{{ $site_name }} Website"/>
	<meta property="og:image" content="../assets/images/vylogo.png"/>
	<meta property="og:url" content="{{ $site_url }}"/>
	<meta property="og:site_name" content="{{ $site_name }}"/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="{{ $site_name }} Website" />
	<meta name="twitter:image" content="../assets/images/vylogo.png" />
	<meta name="twitter:url" content="{{ $site_url }}" />
	<meta name="twitter:card" content="{{ $site_name }}" />

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/index.css">

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
  <script src="../js/city.js"></script>

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">

		@include('navbar')

		<div class="gtco-container">
			<div class="row">
        <canvas id="city_animation"> </canvas>
				</div>
			</div>
		</div>

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<p>{{$presentation}}</p>
					</div>
				</div>
			</div>


		</div>
		<!-- END Work -->

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-6 gtco-news">
						<h2>News</h2>
						<ul>
							<li>
								<a href="#">
									<span class="post-date">September 10, 2016</span>
									<h3>Manila Bridge Re-construction</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod...</p>
								</a>
							</li>

							<li>
								<a href="#">
									<span class="post-date">September 10, 2016</span>
									<h3>Manila Bridge Re-construction</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod...</p>
								</a>
							</li>

							<li>
								<a href="#">
									<span class="post-date">September 10, 2016</span>
									<h3>Manila Bridge Re-construction</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod...</p>
								</a>
							</li>
						</ul>
						<p><a href="#" class="btn btn-sm btn-special">More News</a></p>
					</div>
					<!-- END News -->
					<div class="col-md-5 col-md-push-1 gtco-testimonials">
						<h2>Testimonials</h2>
						<blockquote>
							<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.&ldquo;</p>
							<p class="author"><cite>&mdash; John Doe Dueller</cite></p>
						</blockquote>
						<blockquote>
							<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.&ldquo;</p>
							<p class="author"><cite>&mdash; John Doe Dueller</cite></p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<!-- END  -->

		<div class="gtco-section gto-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-zip icon"></i>
							<div class="copy">
								<h3>Architect</h3>
								<p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
								<p><a href="#" class="gtco-more">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-hummer icon"></i>
							<div class="copy">
								<h3>Planning</h3>
								<p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
								<p><a href="#" class="gtco-more">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-plug icon"></i>
							<div class="copy">
								<h3>Parks &amp; Events</h3>
								<p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
								<p><a href="#" class="gtco-more">Learn more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget gtco-footer-paragraph">
						<h3>Beryllium</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod.</p>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6 gtco-footer-link">
								<h3>Links</h3>
								<ul class="gtco-list-link">
									<li><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Testimonial</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							<div class="col-md-6 gtco-footer-link">
								<h3>Work</h3>
								<ul class="gtco-list-link">
									<li><a href="#">New York Arena</a></li>
									<li><a href="#">Eagle Park</a></li>
									<li><a href="#">Nationals Park</a></li>
									<li><a href="#">Manila Park</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="" placeholder="Email">
						  </div>
						  <button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p><small>&copy; 2016 Free HTML5. All Rights Reserved. </small></p>
						</div>
						<div class="col-md-6 text-right">
							<p><small>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com" target="_blank">Unsplash</a></small> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
