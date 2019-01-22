<br><br><br><br><br>
    <div class="container">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4" id="listing">
          
        </div>
        
        <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate id="spr">
            <h4 class="mb-3">Płatność</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="karta_platnicza" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="karta_platnicza">Karta płatnicza</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="gotowka" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="gotowka">Gotówka</label>
              </div>
            </div>
            <div id="karta">
                <div class="row" >
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Dane właściciela karty</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Pełne imie i nazwisko znajdujące się na karcie</small>
                        <div class="invalid-feedback">
                        Pełne imie i nazwisko są wymagane
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Numer karty</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                        Numer karty jest wymagany
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Data wygaśnięcia</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                            Data wygaśnięcia jest wymagana
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                        Kod bezpieczeństwa jest wymagany
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <a class="btn btn-primary btn-lg btn-block" id="kup_teraz" >Kup</a>
          </form>
          <div id="karta_alert"></div>
        </div>
      </div>
    </div>

    <br><br><br>

<script>
var flag = -1;

$('#cc-name').blur(function () {
    var element = document.getElementById("cc-name");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});

$('#cc-number').blur(function () {
    var element = document.getElementById("cc-number");
    if($("#cc-number")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }
});

$('#cc-expiration').blur(function () {
    var element = document.getElementById("cc-expiration");
    if($("#cc-expiration")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }
});

$('#cc-cvv').blur(function () {
    var element = document.getElementById("cc-cvv");
    if($("#cc-cvv")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }
});




$('#karta_platnicza').click(function () {
    document.getElementById("karta").style.display='block';
    flag = -1;
});

$('#gotowka').click(function () {
    document.getElementById("karta").style.display='none';
    flag = 1;
});

$(document).ready(function() {
    var cia  = "<?php if(isset($_COOKIE['id'])) echo $_COOKIE['id']; else echo -1; ?>";
    $.ajax({
            type: "POST",
            url: '../app/views/main/cart_show_items.php',
            data: {id_sesja: cia},

            success: function(data)
            {
                build.buildListing_buy(
                    jQuery.parseJSON(data),
                    $('#listing'),
                );
            }
        });
});

$('#kup_teraz').click(function () 
{
    if($("#spr")[0].checkValidity() || flag >0) {
        $.ajax({
            type: "POST",
            url: '../app/views/main/buy_verification.php',
            data: { 
                name: $('#cc-name').val(),
                card: $('#cc-number').val(),
                date: $('#cc-expiration').val(),
                cvv: $('#cc-cvv').val(),
                sposob_zaplaty: flag
                },

            success: function (data) 
            {
                alert(data);
            }
        });
    }else {
                $("#karta_alert").html('<br><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '  <strong>Uwaga! </strong>' + 'Wpisz poprawne dane!' +
                    '</div>');
            }
    

});
</script>