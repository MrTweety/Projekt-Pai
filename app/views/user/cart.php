<br><br><br>

<section class="listings">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div id="listing">


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

$(document).ready(function() {
    var cia  = "<?php if(isset($_COOKIE['id'])) echo $_COOKIE['id']; else echo -1; ?>";
    $.ajax({
            type: "POST",
            url: '../app/views/main/cart_show_items.php',
            data: {id_sesja: cia},

            success: function(data)
            {
                // alert(data);
                build.buildListing_cart(
                    jQuery.parseJSON(data),
                    $('#listing'),
                );
            }
        });  
});

function usun_z_koszyka(id,cena) 
{
    var txt = 0;
    var oferta ="oferta"+id;
    

    
    var koszt = document.getElementById("koszt2").innerHTML;
    var ilosc = document.getElementById("ilosc").innerHTML;

    $.ajax({
        type: "POST",
        url: '../app/views/main/cart_delete.php',
        data: {id_oferta: id},

        success: function (data) 
        {
                // alert(data);
            document.getElementById(oferta).innerHTML = '';
            document.getElementById("koszt1").innerHTML = (koszt - cena).toLocaleString();
            document.getElementById("koszt2").innerHTML = (koszt - cena);
            document.getElementById("ilosc").innerHTML = ilosc - 1;
        }
    });
}

function kup(do_zaplaty) 
{
    var cia  = "<?php if(isset($_COOKIE['id'])) echo $_COOKIE['id']; else echo -1; ?>";

    $.ajax({
            type: "POST",
            url: '../app/views/main/buy_verification.php',
            data: {id_sesja: cia,
                   kwota_do_zaplaty: do_zaplaty},

            success: function(data)
            {
                document.getElementById('feedback_alert_cart').style.display='block';
                document.getElementById('feedback_alert_text_cart').innerHTML = data;
                // document.getElementById('feedback_alert_button_cart').style.display='none';
               
            }
        });
}


</script>

