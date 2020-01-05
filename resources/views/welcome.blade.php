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
  @include('head')
  <script src="../js/city.js"></script>


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
						<h2>Projects</h2>

            <ul>

							<li>
                <a href="https://github.com/y-vas/adaptative-query">
									<h3>Adaptative SQL Query</h3>
									<p> An PHP query helper to handdle the Database requests. </p>
                  <!-- <p><a href="/adaptative-query" class="btn btn-sm btn-special"> Test it </a></p> -->
                  <span class="post-date"> Forked From Dotravel </span>
								</a>
							</li>

						</ul>
					</div>
          <div class="col-md-6 gtco-news">
						<h2>&nbsp;&nbsp;</h2>

            <ul>
							<li>

                <a href="https://github.com/y-vas/autotrade">
									<h3>Automatic Trading on FXCM </h3>
									<p> Trading bot for FXCM plataform made with tensorflow. </p>
								</a>

							</li>

							<li>
                <a href="https://github.com/y-vas/game">
									<h3> GAME PROJECT </h3>
									<p> A game project made with python and c. </p>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>



    @include('footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

    @include('js')
	</body>
</html>
