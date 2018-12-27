<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Strona glowna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }


    .bestCar
    {
        text-align: center;
    }

    .bestCar img
    {
        width: 100%;
        height: auto;
    }

    .bestCar p
    {
        margin-bottom: 30px;
    }

    .bestCar figcaption
    {
        margin-top: 8px;
    }
  </style>


</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Classic4you.eu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>Zdjęcie 1</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>Zdjęcie 2</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>Zdjęcie 3</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>Zdjęcie 4</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="bestCar">

    <h3>What We Do</h3><br>

    <div class="container">


        <div class="row">

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>


            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>

            <div class="col-sm-3">

                <figure>
                    <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                    <figcaption>Tekst</figcaption>
                </figure>

            </div>








      </div>
    </div>
</div>


<br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>



</body>
</html>