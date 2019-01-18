<?php echo password_hash("user", PASSWORD_DEFAULT )?>

<!DOCTYPE html>
<html lang="pl">
<head>s
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

    <!--    gallery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="../../../public/css/compact-gallery.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <!--    gallery-->

<!--    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <link rel="stylesheet" href="../../../public/css/home_page.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/login.css" type="text/css">
    <script src="../../../public/js/my_js.js"></script>





    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            max-height: 500px;
        }
    </style>

</head>
<body onload="load_login_form()" style="background-color: white !important;m">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand " href="#"><h3>Classic<span>4you.eu</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" id="home_page">
                <a class="nav-link" href="/app/views/main/indexx.php" ><i class='fa fa-home'></i> Strona główna <span class="sr-only">(current)</span></a>
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


<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 56px" >
<!--<div id="myCarousel" class="carousel slide " data-ride="carousel" style="margin-top: 56px" >-->
    <ul class="carousel-indicators" id="indexToSlider">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner" id="indexCarousel" >

<!--        <div  class="carousel-item active " >-->
<!--            <a href="search.php">-->
<!--            <img class="d-block " src="../../../public/img/slider/slider1.jpg" alt="Los Angeles" " >-->
<!--              <img class="d-block " src="https://dummyimage.com/1500/600/4f4f4f.jpg" alt="Los Angeles" " >-->
<!--            <div class="carousel-caption">-->
<!--                <h3>Los Angeles</h3>-->
<!--                <p>We had such a great time in LA!</p>-->
<!--            </div>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="carousel-item">-->
<!--            <img class="d-block " src="../../../public/img/slider/slider2.jpg" alt="Chicago" w>-->
<!--            <div class="carousel-caption">-->
<!--                <h3>Chicago</h3>-->
<!--                <p>Thank you, Chicago!</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="carousel-item">-->
<!--            <img class="d-block " src="../../../public/img/slider/slider3.jpg" alt="New York" >-->
<!--            <div class="carousel-caption">-->
<!--                <h3>New York</h3>-->
<!--                <p>We love the Big Apple!</p>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<div id="log_form" class="modal"></div>


<div class="bestCar ">

    <section class="gallery-block compact-gallery">
        <div class="container">
            <div class="heading">
                <h2>Proponowane Oferty:</h2>
            </div>


            <div class="row no-gutters" id="indexOffer">

            </div>

        </div>
    </section>




</div>

<br />



<div class = "search bg-white" >
    <div class="container">


        <form id ="form_search" class="" method="GET" action="main/search">
            <div class="form-row text-center">
                <div class="form-group col-12">
                    <a href="main/search" class="link-dark"><h4><i class="fa fa-car"></i> Search Options</h4></a>
                </div>

                <div class="form-group col-md-6">
                    <label for="marka">Marka Pojazdu</label>
                    <select id="marka" class="form-control" name="marka"
                    ></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="model">Model Pojazdu</label>
                    <select id="model" class="form-control" name="model" ></select>
                </div>
                <div class="form-group col-md-12">
                    <button id="sub" type="submit" class="btn btn-info " >
                        <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



<br />

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

    $(document).ready(function() {

        $.ajax({
            type: "get",
            url: 'app/views/main/search_easy.php',
            data:{page:"index"},

            success: function(data)
            {
                //alert(window.location.pathname );

                build.buildIndexOffer(
                    jQuery.parseJSON(data),
                    $('#indexOffer'),

                );
            }
        });

    });

    $(document).ready(function() {

        $.ajax({
            type: "POST",
            url: 'app/views/main/slider.php',

            success: function(data)
            {
                //alert(window.location.pathname );

                build.buildIndexSlider(
                    jQuery.parseJSON(data),
                    $('#indexCarousel'),

                );
            }
        });

    });


    $('#marka').ready(function() {

        $.ajax({
            type: "POST",
            url: 'app/views/main/search_select.php',
            data:{select:"marka"},

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#marka'),
                    'Marka Pojazdu'

                );
            }
        });

    });

    $('#model').ready(function() {

        $.ajax({
            type: "POST",
            url: 'app/views/main/search_select.php',
            data:{select:"model"},

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#model'),
                    'Model Pojazdu'

                );
            }
        });

    });


    $('#marka').change(function() {


        $.ajax({
            type: "POST",
            url: 'app/views/main/search_select.php',
            data: {marka :$('#marka').val(), select:"model"},

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#model'),
                    'Model Pojazdu'

                );
            },
            complete: function() {}
        });

    });

</script>


<script>

    $('.carousel').carousel({
        interval: 3000
    })


    function load_login_form()
    {
        $("#log_form").load("../app/views/user/login.php");
    }

    $(document).ready( function() {
        $("#load_login_form").on("click", function() {
            document.getElementById('log_form').style.display='block';
            document.getElementById('indicators').style.display='none';

        });
    });


    $( document ).ajaxComplete(function() {
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    });

</script>



</body>
</html>