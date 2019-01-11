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


<br />



<section class = "search2" >

    <div class="container" style="margin-top: 56px;">

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
                <select id="model" class="form-control" name="model" >
                </select>
            </div>

                        <div class="form-group col-sm-3">
<!--                            <label for="rok_od">Rok prod. od</label>-->
                            <select id="rok_od" class="form-control" name="rok_od">
                            </select>
<!--                            <input type="number" class="form-control" id="rok_od" placeholder="Rok prod. od">-->
                        </div>

                        <div class="form-group col-sm-3">
<!--                            <label for="rok_do">Rok prod. do</label>-->
                            <select id="rok_do" class="form-control" name="rok_do">
                            </select>
<!--                            <input type="number" class="form-control" id="rok_do" placeholder="Rok prod. do">-->
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="cena_od">Cena od</label>
<!--                            <select id="cena_od" class="form-control" name="cena_od">-->
<!--                            </select>-->
<!--                            <input type="number" class="form-control" id="cena_od" placeholder="Cena od">-->
                            <select id="cena_od" class="form-control" name="cena_od">
                                <option selected="" value="-1">Cena od</option>
                                <option value="2000">2,000</option>
                                <option value="4000">4,000</option>
                                <option value="6000">6,000</option>
                                <option value="8000">8,000</option>
                                <option value="10000">10,000</option>
                                <option value="15000">15,000</option>
                                <option value="20000">20,000</option>
                                <option value="25000">25,000</option>
                                <option value="30000">30,000</option>
                                <option value="35000">35,000</option>
                                <option value="40000">40,000</option>
                                <option value="45000">45,000</option>
                                <option value="50000">50,000</option>
                                <option value="60000">60,000</option>
                                <option value="70000">70,000</option>
                                <option value="80000">80,000</option>
                                <option value="90000">90,000</option>
                                <option value="100000">100,000</option>
                                <option value="125000">125,000</option>
                                <option value="150000">150,000</option>
                                <option value="175000">175,000</option>

                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="cena_do">Cena do</label>
<!--                            <select id="cena_do" class="form-control" name="cena_do">-->
<!--                            </select>-->
<!--                            <input type="number" class="form-control" id="cena_do" placeholder="Cena do">-->
                            <select id="cena_do" class="form-control" name="cena_od">
                                <option selected="" value="-1">Cena od</option>
                                <option value="2000">2,000</option>
                                <option value="4000">4,000</option>
                                <option value="6000">6,000</option>
                                <option value="8000">8,000</option>
                                <option value="10000">10,000</option>
                                <option value="15000">15,000</option>
                                <option value="20000">20,000</option>
                                <option value="25000">25,000</option>
                                <option value="30000">30,000</option>
                                <option value="35000">35,000</option>
                                <option value="40000">40,000</option>
                                <option value="45000">45,000</option>
                                <option value="50000">50,000</option>
                                <option value="60000">60,000</option>
                                <option value="70000">70,000</option>
                                <option value="80000">80,000</option>
                                <option value="90000">90,000</option>
                                <option value="100000">100,000</option>
                                <option value="125000">125,000</option>
                                <option value="150000">150,000</option>
                                <option value="175000">175,000</option>
                                <option value="1000000">1000000</option>
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
                <label for="przebieg_od">Przebieg od</label>
                <select id="przebieg_od" class="form-control" name="przebieg_od">

                </select>
<!--                <input type="number" class="form-control" id="przebieg_od" placeholder="Przebieg od">-->
            </div>

            <div class="form-group col-sm-3">
                <label for="przebieg_do">Przebieg do</label>
                <select id="przebieg_do" class="form-control" name="przebieg_do">

                </select>
<!--                <input type="number" class="form-control" id="przebieg_do" placeholder="Przebieg do">-->
            </div>



            <div class="col-sm-12">
<!--                <button type="submit" class="btn btn-info ">-->
                <a href="#" id="button_search" class="btn btn-info"><i class="fa fa-sign-in"></i> <span class="glyphicon glyphicon-search"></span> Search</a>

<!--                </button>-->
            </div>
            </div>
        </form>

    </div>


</section>


<br />

<!--<div id="tabelka">-->
<!--    <table id="example" class="display" style="width:100%">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Imie</th>-->
<!--            <th>Tekst</th>-->
<!--            <th>Login</th>-->
<!--            <th>Hasło.</th>-->
<!--            <th>Imie</th>-->
<!--            <th>Tekst</th>-->
<!--            <th>Login</th>-->
<!--            <th>Hasło.</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!---->
<!--        <tfoot>-->
<!--        <tr>-->
<!--            <th>Imie</th>-->
<!--            <th>Tekst</th>-->
<!--            <th>Login</th>-->
<!--            <th>Hasło.</th>-->
<!--            <th>Imie</th>-->
<!--            <th>Tekst</th>-->
<!--            <th>Login</th>-->
<!--            <th>Hasło.</th>-->
<!--        </tr>-->
<!--        </tfoot>-->
<!--    </table>-->
<!---->
<!---->
<!---->
<!--</div>-->
<script>

    //// szukajka na start database!!!!!
    //$(document).ready(function()
    //{
    //    var mar = <?php //if(isset( $_POST['marka'])) echo $_POST['marka']; else echo -1  ?>//;
    //    var mod = <?php //if(isset( $_POST['model'])) echo $_POST['model']; else echo -1  ?>//;
    //
    //
    //    $.ajax(
    //        {
    //            type: "POST",
    //            url: 'search_easy.php',
    //            data: {marka :mar , model: mod},
    //
    //
    //            success: function(data)
    //            {
    //                var dane = jQuery.parseJSON(data);
    //                table = $('#example').DataTable(
    //                    {
    //                        "data": dane,
    //                        "dom": "<tabelka>",
    //                        "columns": [
    //                            { "data": "id_oferta" },
    //                            { "data": "imgg" },
    //                            { "data": "marka" },
    //                            { "data": "model" },
    //                            { "data": "kraj" },
    //                            { "data": "wyswietlenia" },
    //                            { "data": "cena_netto" },
    //                            { "data": "data_zlozenia" },
    //
    //                        ]
    //                    } );
    //            }
    //        });
    //
    //});

</script>



<section class="listings">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row ">
                    <div id ="listing">


                    </div>


                <div id="strony"><div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>

    var mar    = <?php if(isset( $_GET['marka'])) echo $_GET['marka']; else echo -1;  ?>;
    var mod    = <?php if(isset( $_GET['model'])) echo $_GET['model']; else echo -1; ?> ;
    var cenaOd = <?php if(isset( $_GET['cenaOd'])) echo $_GET['cenaOd']; else echo -1; ?> ;
    var cenaDo = <?php if(isset( $_GET['cenaDo'])) echo $_GET['cenaDo']; else echo -1; ?> ;
    var rokOd = <?php if(isset( $_GET['rokOd'])) echo $_GET['rokOd']; else echo -1; ?> ;
    var rokDo = <?php if(isset( $_GET['rokDo'])) echo $_GET['rokDo']; else echo -1; ?> ;
    var przebiegOd = <?php if(isset( $_GET['przebiegOd'])) echo $_GET['przebiegOd']; else echo -1; ?> ;
    var przebiegDo = <?php if(isset( $_GET['przebiegDo'])) echo $_GET['przebiegDo']; else echo -1; ?> ;
    var kolor =  <?php if(isset( $_GET['kolor'])) echo '"'.$_GET['kolor'].'"'; else echo -1; ?>;
    var kraj   = <?php if(isset($_GET['kraj'])) echo $_GET['kraj']; else echo -1  ?>;
    // kolor ="niebieski";

    console.log(kolor);
    console.log(mod);

    $(document).ready(function() {

        $.ajax({
            type: "get",
            url: 'search_easy.php',

            data: {marka :mar , model: mod, cenaOd: cenaOd, cenaDo: cenaDo, rokOd: rokOd, rokDo: rokDo, przebiegOd: przebiegOd, przebiegDo: przebiegDo, kolor: kolor, kraj: kraj},


            success: function(data)
            {
                //alert(window.location.pathname );

                build.buildListing(
                    jQuery.parseJSON(data),
                    $('#listing'),

                );
            }
        });

    });


    $('#button_search').click(function() {

        $.ajax({
            type: "get",
            url: 'search_easy.php',
             data: {marka :$('#marka').val() , model: $('#model').val(), cenaOd: $('#cena_od').val(), cenaDo: $('#cena_do').val(), rokOd: $('#rok_od').val(), rokDo: $('#rok_do').val(), przebiegOd: $('#przebieg_od').val(), przebiegDo: $('#przebieg_do').val(), kolor: $('#kolor').val(), kraj: $('#kraj').val()},
            // data: {marka : 1 , model: -1},


                success: function(data)
                {

                   // window.location.replace(window.location.pathname+this.url.substring(15));
                    history.pushState({}, "search", window.location.pathname+this.url.substring(15));
                    build.buildListing(
                        jQuery.parseJSON(data),
                        $('#listing'),

                    );
                }
            });

    });


    var build =
        {



            buildListing: function(result, listing )
            {
                // Remove current options
                listing.html('');
                var count = 0;
                // Check result isnt empty
                if(result != '')
                {
                    // Loop through each of the results and append the option to the dropdown
                    $.each(result, function(k, v) {
                            //listing.append('<div class="ada"><img src="../../../public/img/'+v.imga +'.jpg"/></div>');
                        ++count;
                        listing.append(

                        '<div class ="listing_box" id ="oferta'+v.id_oferta+'" >'+
                            '                        <div class="row mb-3">'+
                            '                            <div class="col-md-12">'+
                            '                                <div class="card">'+
                            '                                    <div class="card-body">'+
                            '                                        <div class="row">'+
                            '                                            <div class="col-md-4">'+
                            v.imgg+
                            '                                            </div>'+
                            '                                            <div class="col-md-6  card-body">'+
                            '                                                <div class="list-title">'+
                            '                                                    <ul class="list-inline list-unstyled">'+
                            '                                                        <li class="list-inline-item"><a href="#"><h4>'+ v.marka+' '+v.model +'</h4></a></li>'+
                            // '                                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>'+
                            // '                                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>'+
                            '                                                    </ul>'+
                            '                                                </div>'+
                            '                                                <div class="list-location">'+
                            '                                                    <a href="#"><i class="fa fa-map-marker"></i><small> '+ v.kraj+' '+v.data_zlozenia +'</small> </a>'+
                            '                                                </div>'+
                            '                                                <div class="list-descrip">'+
                            '                                                    <small>'+v.opis.substring(0,137)+'...<br /><br />'+
                              v.cechy +
                            '                                                </div>'+
                            '</small>'+
                            ''+
                            ''+
                            '                                            </div>'+
                            '                                            <div class="col-md-2 border-left h-100 ">'+
                            '                                                <ul class="list-unstyled">'+
                            '                                                    <li><h3>'+ v.cena_netto +' zł '+'</h3></li>'+
                            '                                                    <li class="text-secondary"><small>'+ v.wyswietlenia +' Reviews</small></li>'+
                            '                                                </ul>'+
                            '                                                <button type="button" class="btn btn-outline-primary">Buy Now</button>'+
                            '                                            </div>'+
                            '                                        </div>'+
                            '                                    </div>'+
                            '                                </div>'+
                            '                            </div>'+
                            '                        </div>'+
                            '                        </div>'

                    );




                    });
                }

                listing.append('<div class="row mb-3">'+
                '                        <div class="col-md-12">'+
                '                            <small>'+ count +' properties found in Classic4you.  </small><br /><br />'+
                '                        </div>'+
                '                    </div>');



            }
        }

</script>


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
            data:{cecha:"kolor",select:"kolor"},

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

    });





    var helpers =
        {
            buildDropdown: function(result, dropdown, emptyMessage, def = -1)
            {

                dropdown.html('');
                dropdown.append('<option value="-1">' + emptyMessage + '</option>');
                if(result != '' )
                {
                    $.each(result, function(k, v) {
                        if (v.id_tab!= def)
                            dropdown.append('<option value="' + v.id_tab + '">' + v.name_tab + '</option>');
                        else
                            dropdown.append('<option selected="selected" value="' + v.id_tab + '">' + v.name_tab + '</option>');

                    });
                }
            }
        }




    $(document).ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_select.php',
            data:{select:"rok"},


            success: function(data)
            {
                helpers2.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#rok_od'),
                    $('#rok_do'),
                    'Rok od',
                    'Rok do',
                    <?php if(isset( $_GET['rokOd'])) echo $_GET['rokOd']; else echo -1; ?>,
                    <?php if(isset( $_GET['rokDo'])) echo $_GET['rokDo']; else echo -1; ?>
                );
            }
        });

    });





    $(document).ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_select.php',
            data:{select:"przebieg"},


            success: function(data)
            {
                helpers2.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#przebieg_od'),
                    $('#przebieg_do'),
                    'Przebieg od',
                    'Przebieg do',
                    <?php if(isset( $_GET['przebiegOd'])) echo $_GET['przebiegOd']; else echo -1; ?>,
                    <?php if(isset( $_GET['przebiegDo'])) echo $_GET['przebiegDo']; else echo -1; ?>,
                    "100000",
                    "100000"
                );
            }
        });

    });


    $(document).ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_select.php',
            data:{select:"cena"},


            success: function(data)
            {
                helpers2.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#cena_od'),
                    $('#cena_do'),
                    'Cena od',
                    'Cena do',
                    <?php if(isset( $_GET['cenaOd'])) echo $_GET['cenaOd']; else echo -1; ?>,
                    <?php if(isset( $_GET['cenaDo'])) echo $_GET['cenaDo']; else echo -1; ?>,
                    "100000",
                    "100000"
                );
            }
        });

    });



    var helpers2 =
        {
            buildDropdown: function(result, dropdown,dropdown2, emptyMessage,emptyMessage2, def = -1, def2 = -1,inter = 1,start = 0)
    {

                dropdown.html('');
                dropdown2.html('');
                dropdown.append('<option value="-1">' + emptyMessage + '</option>');
                dropdown2.append('<option value="-1">' + emptyMessage2 + '</option>');
                if(result != '' )
                {



                    inter= parseInt(inter);
                    $.each(result, function(k, v) {
                        var Maxx = parseInt(v.id_tab);
                        var Minn = parseInt(v.name_tab);


                        // console.log(inter);
                        // console.log(Maxx);
                        // console.log(Minn);


                        if(parseInt(start)){
                            start=parseInt(start);
                            if(Minn>start){
                                Minn = start;
                            }else Minn = 0;

                        }


                        // console.log(start);

                        while(Minn <= (Maxx+inter) ) {

                            if (Minn != def)
                                dropdown.append('<option value="' + Minn + '">' + Minn + '</option>');
                            else
                                dropdown.append('<option selected="selected" value="' + Minn + '">' + Minn + '</option>');

                            if (Minn != def2)
                                dropdown2.append('<option value="' + Minn + '">' + Minn + '</option>');
                            else
                                dropdown2.append('<option selected="selected" value="' + Minn + '">' + Minn + '</option>');

                            Minn+=inter;
                        }

                    });
                }
            }
        }




</script>


<script>
    // $('#tabelka').hide();
    $('#strony').hide();
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