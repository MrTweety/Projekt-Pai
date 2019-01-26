<!-- Page Content -->
<div class="container" style="margin-top: 66px;">

    <div class="row">

        <div class="col-lg-9">

            <div class="card mt-4">
                <!-- <img class="card-img-top img-fluid" id ="zdjecie" src="http://placehold.it/900x400" alt=""> -->

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="z-index: 1;">
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

                    <div class="row justify-content-end">
                        <p>
                            Ilość wyświetleń:
                        <p id="ilosc_wyswietlen">
                            liczba
                        </p>
                        </p>
                    </div>
                </div>
            </div><!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    <h3>Szczegółowy opis:</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4>Kraj pochodzenia: </h4>
                        <div id="kraj">Kraj</div>
                    </div>
                    <div id="offers">
                    </div>
                </div>
            </div><!-- /.card -->
        </div><!-- /.col-lg-9 -->


        <div class="col-lg-3">
            <div class="sticky-top" style="z-index: 1">
                <br><br>
                <h1 class="my-4">
                    <div class="logo"><a href="index.php"><h3>Classic<span>4you.eu</span></h3></a></div>
                </h1>
                <div class="list-group" id="DivBuyButton">
                    <a onclick="add_to_cart()" class="list-group-item btn btn-success" id="buy_button"> <i
                                class="fa fa-shopping-cart" style="text-align: left; font-size: 25px;"></i> Dodaj do
                        koszyka</a>
                </div>
                <div id="buy_alert" class="alert alert-danger alert-dismissible my_alert">
                    <div class="row">
                        <div class="col-12"><strong>Uwaga!</strong> Musisz być zalogowany aby dodawać produkty do
                            koszyka.
                        </div>
                    </div>
                </div>
                <div id="feedback_alert" class="alert alert-danger alert-dismissible my_alert">
                    <div class="row">
                        <div class="col-12" id="feedback_alert_text"></div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <!--        <div class="sticky-top" style="z-index: 1">-->
            <!--            <div id="buy_alert" class="alert alert-danger alert-dismissible">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-12"><strong>Uwaga!</strong> Musisz być zalogowany aby dodawać produkty do koszyka.</div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
        </div>
    </div>
</div>
<!-- /.container -->


<br><br>
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


<script>

    var insert =
        {
            data: function (resoult, place) {
                if (resoult != '') {
                    document.getElementById(place).innerHTML = resoult;
                }

            },

            photo: function (resoult, place) {
                if (resoult != '') {
                    document.getElementsByClassName(place)[0].src = resoult;
                    document.getElementsByClassName(place)[1].src = resoult;
                    document.getElementsByClassName(place)[2].src = resoult;
                }

            },

            buildOffer: function (result, listing) {
                // Remove current options
                listing.html('');
                var size = Object.keys(result).length;
                if (result != '') {
                    for (var x = 1; x <= size; x++) {
                        listing.append(
                            '<hr>' +
                            '<div class="d-flex justify-content-between">' +
                            '<h4>' + result[x].a + ': ' + '</h4>' +
                            '<div >' + result[x].b + '</div>' +
                            '</div>'
                        );
                    }

                }
            }
        }

    // document.getElementById("DivBuyButton").style.display ='none';
    var ofer = <?php if (isset($_GET['oferta'])) echo $_GET['oferta']; else echo -1;  ?>;


    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: '../app/views/main/buyButton.php',
            data: {id_oferta: ofer},
            
            success: function (data) {
                if(data!=1)
                    document.getElementById("buy_button").style.display ='none';

            }
        });
    });



    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: '../app/views/main/item.php',
            data: {id_oferta: ofer},


            success: function (data) {
                // alert(data);
                re = jQuery.parseJSON(data);

                var nazwa = ' ' + re[0].marka + ' ' + re[0].model;
                var cena = Number(re[0].cena);


                insert.data(
                    nazwa,
                    'nazwa_samochodu',
                );

                insert.data(
                    cena.toLocaleString() + " PLN",
                    'cena',
                );

                insert.data(
                    re[0].opis,
                    // re[4].kolor,
                    'opis',
                );

                insert.data(
                    re[0].kraj,
                    'kraj',
                );

                insert.data(
                    re[0].wyswietlenia,
                    'ilosc_wyswietlen',
                );

                insert.photo(
                    '../../../public/img/' + re[0].zdjecie,
                    'zdjecie',
                );

                insert.buildOffer(
                    re,
                    $('#offers'),
                );
            }
        });

    });
</script>
<script>

    function add_to_cart() {
        //var is_logged = <?php //if(isset($_COOKIE['id'])) echo 1;else echo -1; ?>//;

        if (<?php if ($data) echo 0; else echo 1;?>) {
            document.getElementById('buy_alert').style.display = 'block';
            $("#buy_alert").delay(3000).slideUp(200, function () {
                document.getElementById('buy_alert').style.display = 'none';
            });
        } else {
            var cia = "<?php if (isset($_COOKIE['id'])) echo $_COOKIE['id']; else echo -1; ?>";
            var ofer = <?php if (isset($_GET['oferta'])) echo $_GET['oferta']; else echo -1;  ?>;
            // alert(cia);
            $.ajax({
                type: "POST",
                url: '../app/views/main/add_to_cart.php',
                data: {
                    id_oferta: ofer,
                    id_sesja: cia
                },

                success: function (data) {
                    document.getElementById('feedback_alert').style.display = 'block';
                    document.getElementById('feedback_alert_text').innerHTML = data;
                    $("#feedback_alert").delay(3000).slideUp(200, function () {
                        document.getElementById('feedback_alert').style.display = 'none';
                    });
                }
            });
        }

    }


</script>


