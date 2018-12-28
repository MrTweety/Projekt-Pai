<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Strona glowna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>



    <link rel="stylesheet" href="../../../public/css/home_page.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/login.css" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">






</head>
<body onload="load_login_form()">

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
                <li class="active" id="home_page"><a href="#"> <span class="glyphicon glyphicon-home"></span> Strona główna </a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="load_login_form"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <div id="indicators">
        <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
    </div>

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
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" title="poprzednia oferta">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" title="następna oferta">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="log_form" class="modal"></div>


<div class=" bestCar ">

    <h3>What We Do</h3><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                 <figure>
                     <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                     <figcaption><p>Tekst</p></figcaption>
                 </figure>
            </div>

                <div class="col-sm-6 col-md-5">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>


                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-3">

                    <figure>
                        <a href="#"><img src="https://placehold.it/150x80?text=IMAGE" class="img-fluid" alt="Image"></a>
                        <figcaption><p>Tekst</p></figcaption>
                    </figure>

                </div>

            </div>
        </div>
</div>

<br />



<div class = "search" >
    <div class="container">
        <form class="container-fluid text-center" action="/action_page.php">

            <div class="row card-body py-2 mb-3 bg-dark twhite">
                <a href="#" class="link-dark"><h4><i class="fa fa-car"></i> Search Options</h4></a>
            </div>

            <div class="form-group col-sm-6">
                <label for="mark">Marka Pojazdu</label>
                <select id="mark" class="form-control" name="mark">

                </select>
            </div>

            <div class="form-group col-sm-6">
                <label for="model">Model Pojazdu</label>
                <select id="model" class="form-control" name="model">

                </select>
            </div>

<!--            <div class="form-group col-sm-6">-->
<!--                <label for="rok_od">typ</label>-->
<!--                <select id="rok_od" class="form-control" name="rok_od">-->
<!---->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group col-sm-6">-->
<!--                <label for="rok_do">typ</label>-->
<!--                <select id="rok_do" class="form-control" name="rok_do">-->
<!---->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group col-sm-6">-->
<!--                <label for="cena_od">typ</label>-->
<!--                <select id="cena_od" class="form-control" name="cena_od">-->
<!---->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group col-sm-6">-->
<!--                <label for="cena_do">typ</label>-->
<!--                <select id="cena_do" class="form-control" name="cena_do">-->
<!---->
<!--                </select>-->
<!--            </div>-->



            <div class="form-group row py-2 mb-3">
                <button type="button" class="btn btn-info ">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </div>

        </form>
    </div>
</div>



<br />

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->



<script>



    $('#mark').ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_marka.php',

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#mark'),
                    'Marka Pojazdu'

                );
            }
        });

    });

    $('#model').ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_model.php',

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


    $('#mark').change(function() {


        $.ajax({
            type: "POST",
            url: 'search_model.php',
            data: {marka :$('#mark').val()},

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





    var helpers =
        {
            buildDropdown: function(result, dropdown, emptyMessage)
            {
                // Remove current options
                dropdown.html('');
                // Add the empty option with the empty message
                dropdown.append('<option value="-1">' + emptyMessage + '</option>');
                // Check result isnt empty
                if(result != '')
                {
                    // Loop through each of the results and append the option to the dropdown
                    $.each(result, function(k, v) {
                        dropdown.append('<option value="' + v.id_tab + '">' + v.name_tab + '</option>');
                    });
                }
            }
        }

</script>


<script>

    function load_login_form()
    {
        $("#log_form").load("../user/login.php");
    }

    $(document).ready( function() {
        $("#load_login_form").on("click", function() {
            document.getElementById('log_form').style.display='block';
            document.getElementById('indicators').style.display='none';
        });
    });

</script>





</body>
</html>