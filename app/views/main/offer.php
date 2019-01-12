<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Strona glowna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    bootstrap,jquery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--    bootstrap,jquery-->

    <!--font-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!--font-->

    <!--    footer-->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../public/css/footer-distributed-with-address-and-phones.css">
    <!--    footer-->

    <link rel="stylesheet" href="../../../public/css/home_page.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/offer_item.css" type="text/css">


</head>
<body onload="load_login_form()">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand " href="indexx.php"><h3>Classic<span>4you.eu</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" id="home_page">
                <a class="nav-link" href="indexx.php" ><i class='fa fa-home'></i> Strona główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>

        </ul>

        <form class="form-inline my-2 my-lg-0">
            <!--            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">-->
            <!--            <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>-->
            <a href="#" id="load" class="btn btn btn-dark my-2 my-sm-0 mr-sm-2"><i class="fa fa-user"></i> Sing up</a>
            <a href="#" id="load_login_form" class="btn btn btn-dark my-2 my-sm-0 mr-sm-2"><i class="fa fa-sign-in"></i> Login</a>
        </form>

    </div>
</nav>





<div id="log_form" class="modal"></div>

<br /><br />

<!-- Page Content -->
<div class="container">

<div class="row">


  <div class="col-lg-9">

    <div class="card mt-4">
      <!-- <img class="card-img-top img-fluid" id ="zdjecie" src="http://placehold.it/900x400" alt=""> -->

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100 zdjecie" src="http://placehold.it/900x400" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100 zdjecie" src="http://placehold.it/900x400" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100 zdjecie" src="http://placehold.it/900x400" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h3 class="card-title" id="nazwa_samochodu">Nazwa Samochodu</h3>
            <h4 id="cena">cena</h4>
        </div>
        
        <p class="card-text" id="opis">opis</p>
      </div>
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        <h3>Szczegółowy opis:</h3>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4>Kraj pochodzenia: </h4>
            <div id="kraj">Kraj</div>
        </div>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <a href="#" class="btn btn-success">Leave a Review</a>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-lg-9 -->


  <div class="col-lg-3">
    <h1 class="my-4"> <div class="logo"> <a href="indexx.php"><h3>Classic<span>4you.eu</span></h3></a> </div> </h1>
    <div class="list-group">
      <a href="#" class="list-group-item">Dodaj do koszyka</a>
      <a href="#" class="list-group-item">Category 2</a>
      <a href="#" class="list-group-item">Category 3</a>
    </div>
  </div>
  <!-- /.col-lg-3 -->

</div>

</div>
<!-- /.container -->




<section class="cta py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Save time, save money!</h2>
                <p> Sign up and we'll send the best deals to you </p>
            </div>
        </div>
    </div>
</section>



<!-- Footer -->
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Classic<span>4you</span></h3>

        <p class="footer-links">
            <a href="#">Strona główna</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">projects</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Classic4you &copy; 2019</p>
    </div>

    <div class="footer-center">
        <div id ="footer-center-center" >

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Aleja Słowackiego Juliusza 46</span> Kraków, Polska</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+1 555 123456</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@Classic4you.com</a></p>
        </div>
        </div>
    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>

        </div>

    </div>

</footer>
<!-- Footer -->

<script>

var insert =
{
    data :function(resoult,place)
    {
        if(resoult != '')
        {
            document.getElementById(place).innerHTML = resoult;
        }

    }
}

var insert_photo =
{
    photo :function(resoult,place)
    {
        if(resoult != '')
        {
            document.getElementsByClassName(place)[0].src = resoult;
            document.getElementsByClassName(place)[1].src = resoult;
            document.getElementsByClassName(place)[2].src = resoult;
        }

    }
}

var ofer = <?php if(isset( $_GET['oferta'])) echo $_GET['oferta']; else echo -1;  ?>;

$(document).ready(function() {
$.ajax({
    type: "get",
    url: 'item.php',
    data: {id_oferta: ofer},


    success: function(data)
    {
        re = jQuery.parseJSON(data);
        var nazwa =' '+ re[0].marka +' '+re[0].model;
        var cena = Number(re[0].cena);


        insert.data(
            nazwa,
            'nazwa_samochodu',
            );
        
        insert.data(
            cena.toLocaleString()+ " PLN",
            'cena',
            );

        insert.data(
            re[0].opis,
            'opis',
            );

        insert.data(
            re[0].kraj,
            'kraj',
            );

        insert_photo.photo(
            '../../../public/img/'+re[0].zdjecie,
            'zdjecie',
            );
    }
});

});


</script>


<script>
    // $('#tabelka').hide();
    
    function load_login_form()
    {
        $("#log_form").load("../user/login.php");
    }

    $(document).ready( function() {
        // $('.listing_box').hide();
        $("#load_login_form").on("click", function() {
            document.getElementById('log_form').style.display='block';
            document.getElementById('indicators').style.display='none';

        });
    });

</script>

</body>
</html>