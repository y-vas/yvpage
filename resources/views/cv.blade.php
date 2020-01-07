<html>
	@include('head')

	<body>

	<div class="gtco-loader"></div>

	<div id="page">

		@include('navbar')
		@include('utils.cv')
		@include('footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	@include('js')

	</body>
</html>
