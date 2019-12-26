<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yovdiy</title>
    <link rel="icon" href="../assets/images/vylogo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href="https://necolas.github.io/normalize.css/8.0.0/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
  </head>

  <body>
    <img id="VY" style="display:none;" src="../assets/images/vylogo.svg">
    <canvas id="floating_city" class="floating_city"> </canvas>

    <div class="contento">
      <div class="wrapper">
          <div class="txta container">

            <h3> Vasyl Yovdiy
              <br> Let's be honest and cut through the marketing fluff.
              <br> You need a website or a software project that looks amazing and actually works.
              <br> Bottom line, that's what I do. And if you want to learn more about working with me, pick up the phone and give me a call (or email).
            </h3>

          </div>

          <div class="txt2">
              <h1> <a class="btn btn-xlarge font-weight-bold it" data-toggle="modal" data-target="#exampleModal" > CV </a> <a class="btn-lg">/</a>
              <a class="btn btn-xlarge font-weight-bold it" href="https://github.com/y-vas"> GitHub </a> </h1>
          </div>

      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chose Your CV</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <ul>
              <li>  <a class="btn btn-xlarge" href="files/CV2020.pdf" download> CV 2020 </a></li>
              <!-- <li>  <a class="btn btn-xlarge" > CV 2020 Spanish </a></li> -->
              <li>  <a class="btn btn-xlarge" href="files/CV2019.pdf" download> CV 2019 </a></li>
            </ul>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </body>

  <script src="../assets/js/city.js"></script>
</html>
