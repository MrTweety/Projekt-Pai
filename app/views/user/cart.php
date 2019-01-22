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
    if (confirm("Czy na pewno chcesz ofertę o id: " + id + "?")) {
        txt = 1;
    } else {
        txt = 0;
    }

    
    var koszt = document.getElementById("koszt2").innerHTML;
    var ilosc = document.getElementById("ilosc").innerHTML;

    if (parseInt(txt) == 1)
    {
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
}
</script>

