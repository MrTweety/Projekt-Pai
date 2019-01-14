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

    <!--    gallery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="../../../public/css/compact-gallery.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <!--    gallery-->

<!--    dataTables-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<!--    dataTables-->


<!--dataTablesEdit-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<!--dataTablesEdit-->



    <link rel="stylesheet" href="../../../public/css/home_page.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/adminpanel.css" type="text/css">
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


<div id="wrapper">
    <div id="sidebar" >
            <ul class="nav flex-column nav-pills sidebar" role="tablist">
            <li class="nav-item active">
                <a class="nav-link "   data-toggle="tab" href="#dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Pages</span>
                    <i class="fa fa-chevron-down "></i>
                </a>
                <div class="dropdown-menu"  >
                    <h6 class="dropdown-header">Oferta:</h6>
                            <a class="dropdown-item " data-toggle="tab" href="#usersAdmin">Użytkownicy</a>
                            <a class="dropdown-item" data-toggle="tab" href="#menu1">Menu 1</a>
                            <a class="dropdown-item" data-toggle="tab" href="#menu2">Menu 2</a>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="404.html">404 Page</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"data-toggle="tab"  href="#charts">
                    <i class="fa fa-area-chart"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tables">
                    <i class="fa fa fa-table"></i>
                    <span>Tables</span></a>
            </li>
        </ul>

    </div>
    <div id="content-wrapper">
            <div class="tab-content" style="width: 100%;">
                <div id="dashboard" class="tab-pane active" style="height:auto; background-color: white; width: 100%!important;"><br>
                    <h3>dashboard</h3>

                        <div class="container myadd" style="margin-top: 56px;">
                        <form class=" cointeiner text-center " method="post">
                            <div class="row">
                                <div class=" col-sm-12  ">

                                    <h4><i class="fa fa-car"></i> Search Options</h4>
                                </div>



                                <div class="form-group col-sm-6">
                                    <label for="marka">Marka Pojazdu</label>
                                    <select id="marka" class="form-control" name="marka" >
                                    </select>
                                </div>

                                <div class="form-group  col-sm-6">
                                    <label for="model">Model Pojazdu</label>
                                    <select id="model" class="form-control " name="model"  disabled>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="kolor">Kolor</label>
                                    <select id="kolor" class="form-control" name="kolor">

                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="kraj">Kraj</label>
                                    <select id="kraj" class="form-control" name="kraj">
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="cena">Cena</label>
                                    <input type="number" class="form-control" id="cena" placeholder="Cena">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="przebieg">Przebieg</label>
                                    <input type="number" class="form-control" id="przebieg" placeholder="Przebieg">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="kraj">Napęd</label>
                                    <select id="naped" class="form-control" name="naped">
                                        <option selected value="-1">Napęd</option>
                                        <option  value="przód"> przód</option>
                                        <option  value="tył"> tył</option>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="przebieg_od">Rodzaj paliwa</label>
                                    <!--                                <input type="number" class="form-control" id="paliwo" placeholder="Rodzaj paliwa">-->
                                    <select id="paliwo" class="form-control" name="paliwo">
                                        <option selected value="-1">Rodzaj paliwa</option>
                                        <option  value="benzyna"> benzyna</option>
                                        <option  value="olej napędowy"> olej napędowy</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="nadwozie">Typ nadwozia</label>
                                    <!--                                <input type="number" class="form-control" id="nadwozie" placeholder="Typ nadwozia">-->
                                    <select id="nadwozie" class="form-control" name="nadwozie">
                                        <option selected value="-1">Typ nadwozia</option>
                                        <option  value="pick up"> pick up </option>
                                        <option  value="sedan"> sedan </option>
                                        <option  value="cabrio"> cabrio </option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="skrzynia">Typ skrzyni</label>
                                    <!--                                <input type="number" class="form-control" id="skrzynia" placeholder="Typ skrzyni">-->
                                    <select id="nadwozie" class="form-control" name="nadwozie">
                                        <option selected value="-1">Typ nadwozia</option>
                                        <option  value="manualna"> manualna </option>
                                        <option  value="automatyczna"> automatyczna </option>
                                        <option  value="półautomatyczna"> półautomatyczna </option>
                                    </select>
                                </div>


                                <div class="form-group col-sm-3">
                                    <label for="rok">Rok prod</label>
                                    <input type="number" class="form-control" id="rok" placeholder="Rok prod">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="pojemnosc">Pojemność </label>
                                    <input type="number" class="form-control" id="pojemnosc" placeholder="Pojemność">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="moc">Moc</label>
                                    <input type="number" class="form-control" id="moc" placeholder="Moc">

                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="drzwi">Liczba drzwi</label>
                                    <input type="number" class="form-control" id="drzwi" placeholder="Liczba drzwi">
                                </div>



                                <div class="form-group col-sm-3">
                                    <label for="miejsca">Liczba miejsc</label>
                                    <input type="number" class="form-control" id="miejsca" placeholder="Liczba miejsc">
                                </div>

                                <div class="custom-file col-sm-9">
                                    <label for="Zdjecie">Zdjecie</label>
                                    <input type="file" class="form-control-file border" id="profile_pic" name="profile_pic"
                                           accept=".jpg, .jpeg, .png">
<!--                                    <input type="file" class="custom-file-input" id="customFile">-->
<!--                                    <label class="custom-file-label" for="customFile">Choose file</label>-->
                                </div>



                                <div class="form-group col-sm-12">
                                    <label for="opis">Opis</label>
                                    <textarea class="form-control" rows="5" id="opis">At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
                                </textarea>
                                </div>






                                <div class="col-sm-12">
                                    <!--                <button type="submit" class="btn btn-info ">-->
                                    <a href="#" id="button_dodaj" class="btn btn-info"><i class="fa fa-sign-in"></i> <span class="glyphicon glyphicon-search"></span>Dodaj</a>
                                    <button id="reset" type="button" class="btn btn-info" value="Reset">Reset</button>
                                    <a href="#" id="button_s" class="btn btn-info"><i class="fa fa-sign-in"></i> <span class="glyphicon glyphicon-search"></span>zapisz</a>

                                    <!--                </button>-->
                                </div>
                            </div>
                        </form>

                            <form action="admin_add.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">
                            </form>


                            <form action="admin_add.php" method="POST" ENCTYPE="multipart/form-data">
                                <input type="file" name="plik"/><br/>
                                <input type="submit" value="Wyślij plik"/>

                            </form>

                    </div>



                    <div id="tabelkaOfera">
                        <table id="tabOferta" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Zdjecie</th>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Kraj pochodzenia</th>
                                <th>cena</th>
                                <th>opis</th>
                                <th>cechy</th>
                                <th>akcja</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Zdjecie</th>
                                <th>Imie</th>
                                <th>Nazwisko</th>
                                <th>E-mail.</th>
                                <th>Login</th>
                                <th>TYP Konta</th>
                                <th>akcja</th>
                            </tr>
                            </tfoot>
                        </table>



                    </div>
<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');


                    if(isset($_GET['usun'])){
                    $_GET['usun']  = mysqli_real_escape_string($link, $_GET['usun']);
                    //$link->query( "delete from uzytkownik where id_uzyt = '$_GET[usun]' limit 1;");
                    //echo mysqli_error($link);
                        //table.reload();
                    }
?>

                    <script>

                        $('#reset').click(function() {
                            $('#model').attr('disabled', true);
                        });




                                               $(document).ready(function() {
                                                   oferta = $('#tabOferta').DataTable( {

                                                       "ajax": {"url":"admin_select.php","type": "POST","data": {"select" :'oferta'}},
                                                       "columns": [
                                                               { "data": "id_oferta" },
                                                               { "data": "imgg" },
                                                               { "data": "marka" },
                                                               { "data": "model" },
                                                               { "data": "kraj" },
                                                               { "data": "cena_netto" },
                                                               { "data": "opis" },
                                                               { "data": "cechy" },
                                                               { "data": "usun" },
                                                       ]
                                                   } );
                                               } );

                        // oferta = $(document).ready(function()
                        // {
                        //
                        //      $.ajax(
                        //         {
                        //             type: "POST",
                        //             url: 'admin_select.php',
                        //             data: {select :'oferta'},
                        //
                        //
                        //             success: function(data)
                        //             {
                        //                 var dane = jQuery.parseJSON(data);
                        //                 table = $('#tabOferta').DataTable(
                        //                     {
                        //                         "data": dane,
                        //                         // "dom": "<tabelkaAdmin>",
                        //                         "columns": [
                        //                             { "data": "id_oferta" },
                        //                             { "data": "imgg" },
                        //                             { "data": "marka" },
                        //                             { "data": "model" },
                        //                             { "data": "kraj" },
                        //                             //{ "data": "wyswietlenia" },
                        //                             { "data": "cena_netto" },
                        //                             { "data": "opis" },
                        //                             { "data": "cechy" },
                        //                             { "data": "usun" },
                        //
                        //                         ]
                        //                     } );
                        //             }
                        //         });
                        //
                        // });
                        //
                        //
                        // $( document ).ajaxComplete(function() {
                        //     //table.ajax.reload();
                        // });

                    </script>

                    <script>

                        $('#button_dodaj').click(function() {

                            $.ajax({
                                type: "POST",
                                url: 'admin_add.php',
                                data: {select:"oferta", marka :$('#marka').val() , model: $('#model').val(), kolor: $('#kolor').val(), kraj: $('#kraj').val(),
                                    naped :$('#naped').val() , rok: $('#rok').val(), pojemnosc: $('#pojemnosc').val(), moc: $('#moc').val(),
                                    drzwi: $('#drzwi').val(), miejsca: $('#miejsca').val(), przebieg: $('#przebieg').val(), paliwo :$('#paliwo').val(),
                                    skrzynia: $('#skrzynia').val(), opis: $('#opis').val(), nadwozie: $('#nadwozie').val(), cena: $('#cena').val(), profile_pic: $('#profile_pic').val()},


                                // success: function()
                                // {
                                //     oferta.ajax.reload();
                                //     alert("abx");
                                //
                                //
                                // },
                                complete: function()
                                {
                                    oferta.ajax.reload();
                                    //alert("abxw");
                                }


                            });

                        });



                        $('#marka').ready(function() {
                            $.ajax({
                                type: "POST",
                                url: 'search_select.php',
                                data:{select:"marka"},
                                success: function(data)
                                {
                                    helpers.buildDropdown(
                                        jQuery.parseJSON(data),
                                        $('#marka'),
                                        'Marka Pojazdu',
                                        <?php if(isset( $_GET['marka'])) echo $_GET['marka']; else echo -1;  ?>
                                    );
                                }
                            });



                        });

                        $('#model').ready(function() {

                            $.ajax({
                                type: "POST",
                                url: 'search_select.php',
                                data:{select:"model"},

                                success: function(data)
                                {
                                    helpers.buildDropdown(
                                        jQuery.parseJSON(data),
                                        $('#model'),
                                        'Model Pojazdu',
                                        <?php if(isset( $_GET['model'])) echo $_GET['model']; else echo -1  ?>

                                    );
                                }
                            });

                        });





                        $('#kolor').ready(function() {

                            $.ajax({
                                type: "POST",
                                url: 'search_select.php',
                                data:{select:"kolor"},

                                success: function(data)
                                {
                                    helpers.buildDropdown(
                                        jQuery.parseJSON(data),
                                        $('#kolor'),
                                        'Kolor Pojazdu',
                                        <?php if(isset( $_GET['kolor'])) echo '"'.$_GET['kolor'].'"'; else echo -1; ?>


                                    );
                                }
                            });

                        });

                        $('#kraj').ready(function() {

                            $.ajax({
                                type: "POST",
                                url: 'search_select.php',
                                data:{select:"kraj"},


                                success: function(data)
                                {
                                    helpers.buildDropdown(
                                        jQuery.parseJSON(data),
                                        $('#kraj'),
                                        'Kraj pochodzenia',
                                        <?php if(isset($_GET['kraj'])) echo $_GET['kraj']; else echo -1  ?>

                                    );
                                }
                            });

                        });


                        $('#marka').change(function() {


                            $.ajax({
                                type: "POST",
                                url: 'search_select.php',
                                data: {marka :$('#marka').val(),select:"model"},

                                success: function(data)
                                {
                                    helpers.buildDropdown(
                                        jQuery.parseJSON(data),
                                        $('#model'),
                                        'Model Pojazdu'

                                    );
                                }
                            });

                            $('#model').attr('disabled', false);

                        });



                    </script>


                </div>


                <div id="usersAdmin" class="tab-pane  w-100 fade " ><br>
                    <h3>Administratorzy </h3>
                    <div id="tabelkaAdmin">
                        <table id="tabAdmin" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imie</th>
                                <th>Nazwisko</th>
                                <th>E-mail.</th>
                                <th>Login</th>
                                <th>TYP Konta</th>
                                <th>akcja</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Imie</th>
                                <th>Nazwisko</th>
                                <th>E-mail.</th>
                                <th>Login</th>
                                <th>TYP Konta</th>
                                <th>akcja</th>
                            </tr>
                            </tfoot>
                        </table>



                    </div>
                    <?php
                    $host = "localhost";
                    $db_user = "root";
                    $db_password = "";
                    $db_name = "mgaczorek";
                    $link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
                    $link -> query ('SET NAMES utf8');
                    $link -> query ('SET CHARACTER_SET utf8_unicode_ci');


                    if(isset($_GET['usun'])){
                        $_GET['usun']  = mysqli_real_escape_string($link, $_GET['usun']);
                        //$link->query( "delete from uzytkownik where id_uzyt = '$_GET[usun]' limit 1;");
                        //echo mysqli_error($link);
                        //table.reload();
                    }
                    ?>

                    <script>

                        // szukajka na start database!!!!!
                        $(document).ready(function()
                        {

                            $.ajax(
                                {
                                    type: "POST",
                                    url: 'admin_select.php',
                                    data: {select :'admin'},


                                    success: function(data)
                                    {
                                        var dane = jQuery.parseJSON(data);
                                        table = $('#tabAdmin').DataTable(
                                            {
                                                "data": dane,
                                                // "dom": "<tabelkaAdmin>",
                                                "columns": [
                                                    { "data": "id_uzyt" },
                                                    { "data": "imie" },
                                                    { "data": "nazwisko" },
                                                    { "data": "email" },
                                                    { "data": "login" },
                                                    { "data": "typKonta" },
                                                    { "data": "usun" },
                                                    // { "data": "data_zlozenia" },

                                                ]
                                            } );
                                    }
                                });

                        });




                    </script>
                </div>





                <div id="menu1" class="tab-pane fade" style="height:400px; background-color: #f08a24; width: 100%;"><br>
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>



                <div id="menu2" class="tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>




                <div id="menu4" class="tab-pane fade"><br>
                    <h3>Menu 4</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>




                <div id="tables" class="tab-pane fade"><br>
                    <h3>tables</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>



                <div id="charts" class="tab-pane fade"><br>
                    <h3>charts</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>



        <div><?php include_once '../partials/footer.php'?></div>

    </div>

</div>






</body>
</html>