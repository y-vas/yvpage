<!DOCTYPE HTML>
<html>
	@include('head')

	<body>

	<div class="gtco-loader"></div>

	<div id="page">

		@include("navbar")

		<div class="gtco-section">
			<div class="gtco-container">

				<div class="row">
					<div class="col-md-6">
						<form action="#">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="name">Email</label>
								<input type="text" class="form-control" id="email" value="{{$_GET['mail'] ?? ''}}">
							</div>
							<div class="form-group">
								<label for="message"></label>
								<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn btn-special btn-block" value="Send Message">
							</div>
						</form>
					</div>
					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<h3>Address</h3>
							<br>
							<ul >
								<li class="address">Passeo St. Juan 146 1-1 | Spain\Catalunya\Manlleu </li>
								<li class="phone"><a href="tel://+34 611412443">+34 611412443</a></li>
								<li class="email"><a href="#">yovdiyvasyl@gmail.com</a></li>
								<li class="url"><a href="/">www.yovdiyvasyl.xyz</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END Contact -->

		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10485.170315109452!2d2.276955101300382!3d42.00383746774727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a525bd81d5cb25%3A0x8468395589a997ac!2sPasseig%20de%20Sant%20Joan%2C%2008560%20Manlleu%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses!2sua!4v1578190128067!5m2!1ses!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

		@include('footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	@include('js')

	</body>
</html>
