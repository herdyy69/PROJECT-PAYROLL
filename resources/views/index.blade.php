<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo/Walls.png') }}" />
    <title>Home | PRA</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Oswald&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <style>
      body {
        background-color: #191c24;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #191c24; padding-bottom: 1rem">
      <div class="container">
        <style>
          .navbar-brand {
            font-family: 'Cinzel', serif;
            font-size: 1.3rem;
          }
          .navbar-brand:hover {
            color: red;
          }
        </style>
        <a class="navbar-brand mt-3" href="#">PRIMA RASA ABADI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto"></ul>
          <ul class="navbar-nav">
            <!-- login -->
            <li class="nav-item">
              <!-- button icon login -->
              <a class="nav-link btn btn-secondary mt-2" style="background-color: #191c24" href="{{ Route('login') }}">
                <i class="fa fa-user"></i>
                Login
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-md">
      <div class="row mt-2">
          <div class="col-md-6" style="margin-top: 10rem ;">
            <style>
                h1,h6{
                    color: white;
                }
            </style>
            <h6 class="text-center">SELAMAT DATANG DI WEBSITE</h6>
            <h1 class="text-center">
              <strong>PRIMA RASA ABADI</strong>
            </h1>
          </div>
           <div class="col-md-6">
            <img src=" {{ asset('images/logo/Walls.png') }}" class="img-fluid opacity-25" alt="...">
          </div>
        </div>
      </div>
    </div>

        <style>
            footer {
                /* dibawah */
                padding-top: 1rem;
                padding-bottom: 1rem;
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:#191c24;
                color: white;
                text-align: center;
            }
        </style>
    <!-- fotter -->
    <footer class="text-white mt-5 shadow">
        <hr>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Prima Rasa Abadi 2022</span>
            </div>
        </div>
      </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
