<br/>
<section class="search2">

    <div class="container" style="margin-top: 56px;">

        <form class=" cointeiner text-center " method="post">
            <div class="row">
                <div class=" col-sm-12  ">

                    <h4><i class="fa fa-car"></i> Opcje wyszukiwania</h4>
                </div>


                <div class="form-group col-sm-6">
                    <label for="marka">Marka Pojazdu</label>
                    <select id="marka" class="form-control" name="marka">
                    </select>
                </div>

                <div class="form-group  col-sm-6">
                    <label for="model">Model Pojazdu</label>
                    <select id="model" class="form-control" name="model">
                    </select>
                </div>

                <div class="form-group col-sm-3">
                    <select id="rok_od" class="form-control" name="rok_od">
                    </select>
                </div>

                <div class="form-group col-sm-3">
                    <select id="rok_do" class="form-control" name="rok_do">
                    </select>
                </div>

                <div class="form-group col-sm-3">
                    <label for="cena_od">Cena od</label>

                    <select id="cena_od" class="form-control" name="cena_od">
                        <option selected="" value="-1">Cena od</option>

                    </select>
                </div>

                <div class="form-group col-sm-3">
                    <label for="cena_do">Cena do</label>

                    <select id="cena_do" class="form-control" name="cena_od">

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
                </div>

                <div class="form-group col-sm-3">
                    <label for="przebieg_do">Przebieg do</label>
                    <select id="przebieg_do" class="form-control" name="przebieg_do">

                    </select>
                </div>


                <div class="col-sm-12">
                    <a href="#" id="button_search" class="btn btn-info"><i class="fa fa-sign-in"></i> <span
                                class="glyphicon glyphicon-search"></span> Szukaj</a>


                </div>
            </div>
        </form>

    </div>


</section>

<br/>

<section class="listings">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row ">
                    <div id="listing">


                    </div>


                    <div id="strony">
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
        </div>
    </div>
</section>


<script>

    var mar = <?php if (isset($_GET['marka'])) echo $_GET['marka']; else echo -1;  ?>;
    var mod = <?php if (isset($_GET['model'])) echo $_GET['model']; else echo -1; ?> ;
    var cenaOd = <?php if (isset($_GET['cenaOd'])) echo $_GET['cenaOd']; else echo -1; ?> ;
    var cenaDo = <?php if (isset($_GET['cenaDo'])) echo $_GET['cenaDo']; else echo -1; ?> ;
    var rokOd = <?php if (isset($_GET['rokOd'])) echo $_GET['rokOd']; else echo -1; ?> ;
    var rokDo = <?php if (isset($_GET['rokDo'])) echo $_GET['rokDo']; else echo -1; ?> ;
    var przebiegOd = <?php if (isset($_GET['przebiegOd'])) echo $_GET['przebiegOd']; else echo -1; ?> ;
    var przebiegDo = <?php if (isset($_GET['przebiegDo'])) echo $_GET['przebiegDo']; else echo -1; ?> ;
    var kolor =  <?php if (isset($_GET['kolor'])) echo '"' . $_GET['kolor'] . '"'; else echo -1; ?>;
    var kraj = <?php if (isset($_GET['kraj'])) echo $_GET['kraj']; else echo -1  ?>;


    $(document).ready(function () {

        $.ajax({
            type: "get",
            url: '../app/views/main/search_easy.php',

            data: {
                marka: mar,
                model: mod,
                cenaOd: cenaOd,
                cenaDo: cenaDo,
                rokOd: rokOd,
                rokDo: rokDo,
                przebiegOd: przebiegOd,
                przebiegDo: przebiegDo,
                kolor: kolor,
                kraj: kraj
            },


            success: function (data) {


                build.buildListing(
                    jQuery.parseJSON(data),
                    $('#listing'),
                );
            }
        });

    });


    $('#button_search').click(function () {

        $.ajax({
            type: "get",
            url: '../app/views/main/search_easy.php',
            data: {
                marka: $('#marka').val(),
                model: $('#model').val(),
                cenaOd: $('#cena_od').val(),
                cenaDo: $('#cena_do').val(),
                rokOd: $('#rok_od').val(),
                rokDo: $('#rok_do').val(),
                przebiegOd: $('#przebieg_od').val(),
                przebiegDo: $('#przebieg_do').val(),
                kolor: $('#kolor').val(),
                kraj: $('#kraj').val()
            },



            success: function (data) {


                history.pushState({}, "search", window.location.pathname + this.url.substring(33));
                build.buildListing(
                    jQuery.parseJSON(data),
                    $('#listing'),
                );
            }
        });

    });


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


<script>


    $('#marka').ready(function () {
        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "marka"},
            success: function (data) {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#marka'),
                    'Marka Pojazdu',
                    <?php if (isset($_GET['marka'])) echo $_GET['marka']; else echo -1;  ?>
                );
            }
        });


    });

    $('#model').ready(function () {

        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "model"},

            success: function (data) {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#model'),
                    'Model Pojazdu',
                    <?php if (isset($_GET['model'])) echo $_GET['model']; else echo -1  ?>

                );
            }
        });

    });


    $('#kolor').ready(function () {

        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "kolor"},

            success: function (data) {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#kolor'),
                    'Kolor Pojazdu',
                    <?php if (isset($_GET['kolor'])) echo '"' . $_GET['kolor'] . '"'; else echo -1; ?>


                );
            }
        });

    });

    $('#kraj').ready(function () {

        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "kraj"},


            success: function (data) {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#kraj'),
                    'Kraj pochodzenia',
                    <?php if (isset($_GET['kraj'])) echo $_GET['kraj']; else echo -1  ?>

                );
            }
        });

    });


    $('#marka').change(function () {


        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {marka: $('#marka').val(), select: "model"},

            success: function (data) {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#model'),
                    'Model Pojazdu'
                );
            }
        });

    });


    $(document).ready(function () {

        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "rok"},


            success: function (data) {
                helpers2.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#rok_od'),
                    $('#rok_do'),
                    'Rok od',
                    'Rok do',
                    <?php if (isset($_GET['rokOd'])) echo $_GET['rokOd']; else echo -1; ?>,
                    <?php if (isset($_GET['rokDo'])) echo $_GET['rokDo']; else echo -1; ?>,
                    "1",
                    "-1"
                );
            }
        });

    });


    $(document).ready(function () {

        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "przebieg"},


            success: function (data) {
                helpers2.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#przebieg_od'),
                    $('#przebieg_do'),
                    'Przebieg od',
                    'Przebieg do',
                    <?php if (isset($_GET['przebiegOd'])) echo $_GET['przebiegOd']; else echo -1; ?>,
                    <?php if (isset($_GET['przebiegDo'])) echo $_GET['przebiegDo']; else echo -1; ?>,
                    "100000",
                    "100000"
                );
            }
        });

    });


    $(document).ready(function () {

        $.ajax({
            type: "POST",
            url: '../app/views/main/search_select.php',
            data: {select: "cena"},


            success: function (data) {
                helpers2.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#cena_od'),
                    $('#cena_do'),
                    'Cena od',
                    'Cena do',
                    <?php if (isset($_GET['cenaOd'])) echo $_GET['cenaOd']; else echo -1; ?>,
                    <?php if (isset($_GET['cenaDo'])) echo $_GET['cenaDo']; else echo -1; ?>,
                    "100000",
                    "100000"
                );
            }
        });

    });


</script>


<script>
    $('#strony').hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });

</script>

