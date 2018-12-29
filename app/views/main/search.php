<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Strona glowna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


    <!--    database-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <!--    database-->


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" id="bootstrap-css">

    <link rel="stylesheet" href="../../../public/css/home_page.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/login.css" type="text/css">
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





<div id="log_form" class="modal"></div>


<br />



<section class = "search" >

    <div class="container">

        <form class=" cointeiner text-center " action="/action_page.php">
            <div class="row">
            <div class=" col-sm-12  ">
                <h4><i class="fa fa-car"></i> Search Options</h4>
            </div>



            <div class="col-sm-6">
                <label for="marka">Marka Pojazdu</label>
                <select id="marka" class="form-control" name="marka">

                </select>
            </div>

            <div class=" col-sm-6">
                <label for="model">Model Pojazdu</label>
                <select id="model" class="form-control" name="model">

                </select>
            </div>

                        <div class="form-group col-sm-3">
                            <label for="rok_od">Rok prod. od</label>
                            <select id="rok_od" class="form-control" name="rok_od">

                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="rok_do">Rok prod. do</label>
                            <select id="rok_do" class="form-control" name="rok_do">

                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="cena_od">Cena od</label>
                            <select id="cena_od" class="form-control" name="cena_od">

                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="cena_do">Cena do</label>
                            <select id="cena_do" class="form-control" name="cena_do">

                            </select>
                        </div>

                <div class="form-group col-sm-3">
                    <label for="cena_do">Kolor</label>
                    <select id="cena_do" class="form-control" name="cena_do">

                    </select>
                </div>

            <div class="form-group col-sm-3">
                <label for="cena_do">Kraj</label>
                <select id="cena_do" class="form-control" name="cena_do">

                </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="cena_do">Stan pojazdu</label>
                <select id="cena_do" class="form-control" name="cena_do">

                </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="cena_do">Cechy</label>
                <select id="cena_do" class="form-control" name="cena_do">

                </select>
            </div>



            <div class="col-sm-12">
                <button type="button" class="btn btn-info ">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </div>
            </div>
        </form>

    </div>


</section>


<br />



<section id="tabelka">
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Imie</th>
            <th>Tekst</th>
            <th>Login</th>
            <th>Hasło.</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>Imie</th>
            <th>Tekst</th>
            <th>Login</th>
            <th>Hasło.</th>
        </tr>
        </tfoot>

</section>

<script>
    //tabelka
    $(document).ready(function() {
        table = $('#example').DataTable( {
            "ajax": "search_easy.php",
            "columns": [
                { "data": "imie" },
                { "data": "nazwisko" },
                { "data": "login" },
                { "data": "pswd" },
            ]
        } );
    } );

</script>


<section class="listings">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class ="listing_box">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="https://stmed.net/sites/default/files/old-car-wallpapers-32461-3779533.jpg">
                                        </div>
                                        <div class="col-md-6  card-body">
                                            <div class="list-title">
                                                <ul class="list-inline list-unstyled">
                                                    <li class="list-inline-item"><a href="#"><h4>1969 Dodge Charger</h4></a></li>
                                                    <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                                    <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                                </ul>
                                            </div>
                                            <div class="list-location">
                                                <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                                            </div>
                                            <div class="list-descrip">
                                                <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                                            </div>



                                        </div>
                                        <div class="col-md-3 border-left h-100 ">
                                            <ul class="list-unstyled">
                                                <li><h3>200 000$</h3></li>
                                                <li class="text-secondary"><small>8067 Reviews  </small></li>
                                            </ul>
                                            <button type="button" class="btn btn-outline-primary">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class ="listing_box">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="https://stmed.net/sites/default/files/old-car-wallpapers-32461-9153660.jpg">
                                        </div>
                                        <div class="col-md-6  card-body">
                                            <div class="list-title">
                                                <ul class="list-inline list-unstyled">
                                                    <li class="list-inline-item"><a href="#"><h4>1962 Ferrari 250 GTE</h4></a></li>
                                                    <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                                    <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                                </ul>
                                            </div>
                                            <div class="list-location">
                                                <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                                            </div>
                                            <div class="list-descrip">
                                                <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                                            </div>



                                        </div>
                                        <div class="col-md-3 border-left card-body">
                                            <ul class="list-unstyled">
                                                <li><h3>1 000 000zł</h3></li>
                                                <li class="text-secondary"><small>8067 Reviews  </small></li>
                                            </ul>
                                            <button type="button" class="btn btn-outline-primary">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class ="listing_box">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="https://cmzone-vzbqbxhynotw9ion96xv.netdna-ssl.com/wp-content/uploads/2012/05/1969-Chevrolet-Camaro.jpg">
                                            </div>
                                            <div class="col-md-6  card-body">
                                                <div class="list-title">
                                                    <ul class="list-inline list-unstyled">
                                                        <li class="list-inline-item"><a href="#"><h4>1969 Chevrolet Camaro</h4></a></li>
                                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="list-location">
                                                    <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                                                </div>
                                                <div class="list-descrip">
                                                    <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                                                </div>



                                            </div>
                                            <div class="col-md-3 border-left card-body">
                                                <ul class="list-unstyled">
                                                    <li><h3>1 000 000zł</h3></li>
                                                    <li class="text-secondary"><small>8067 Reviews  </small></li>
                                                </ul>
                                                <button type="button" class="btn btn-outline-primary">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="row mb-3">
                    <div class="col-md-12">
                        <small> 42 properties found in Reno.  </small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
<footer class="page-footer font-small special-color-dark pt-4">

    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>


</footer>
<!-- Footer -->

<script>




    $('#marka').ready(function() {
        $.ajax({
            type: "POST",
            url: 'search_marka.php',
            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#marka'),
                    'Marka Pojazdu',
                    <?php if(isset( $_POST['marka'])) echo $_POST['marka']; else echo -1  ?>
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
                    'Model Pojazdu',
                    <?php if(isset( $_POST['model'])) echo $_POST['model']; else echo -1  ?>

                );
            }
        });

    });


    $('#marka').change(function() {


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
            buildDropdown: function(result, dropdown, emptyMessage, def = -1)
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
                        if (v.id_tab!= def)
                            dropdown.append('<option value="' + v.id_tab + '">' + v.name_tab + '</option>');
                        else
                            dropdown.append('<option selected="selected" value="' + v.id_tab + '">' + v.name_tab + '</option>');

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