<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 56px" >
    <!--<div id="myCarousel" class="carousel slide " data-ride="carousel" style="margin-top: 56px" >-->
    <ul class="carousel-indicators" id="indexToSlider">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner" id="indexCarousel" >



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


        <form id ="form_search" class="" method="GET" action="/user/search">
            <div class="form-row text-center">
                <div class="form-group col-12">
                    <a href="/user/search" class="link-dark"><h4><i class="fa fa-car"></i> Search Options</h4></a>
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


    $( document ).ajaxComplete(function() {
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    });

</script>
