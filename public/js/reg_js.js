
$('#imie').blur(function () {
    var element = document.getElementById("imie");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});

$('#nazwisko').blur(function () {
    var element = document.getElementById("nazwisko");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});



$('#login').blur(function () {
    var element = document.getElementById("login");
    if($("#login")[0].checkValidity()) {

        $.ajax({
            type: "POST",
            url: '/user/checkLogin',
            data: {
                login: $('#login').val(),
            },


            success: function (data) {

                if (parseInt(data) == 1) {
                    element.classList.remove("is-invalid");
                    element.classList.add("is-valid");}

                else{

                    document.getElementById("Login-invalid-feedback").innerHTML = "Login jest zajety.";
                    element.classList.add("is-invalid");
                    element.classList.remove("is-valid");}



            }
        });


    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});


$('#plec').blur(function () {
    var element = document.getElementById("plec");

    element.classList.remove("is-invalid");
    element.classList.add("is-valid");

});




$('#inputEmail').blur(function () {
    var element = document.getElementById("inputEmail");
    if($("#inputEmail")[0].checkValidity()) {

        $.ajax({
            type: "POST",
            url: '/user/checkEmail',
            data: {
                email: $('#inputEmail').val(),
            },


            success: function (data) {

                if (parseInt(data) == 1) {
                    element.classList.remove("is-invalid");
                    element.classList.add("is-valid");}

                else{

                    document.getElementById("Email-invalid-feedback").innerHTML = "Email jest zajety.";
                    element.classList.add("is-invalid");
                    element.classList.remove("is-valid");}



            }
        });


    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});






$('#inputPassword').blur(function () {
    var element = document.getElementById("inputPassword");
    if($("#inputPassword")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});


$('#confirmPassword').blur(function () {
    var element = document.getElementById("inputPassword");
    var element2 = document.getElementById("confirmPassword");

    if(element.value ==element2.value ) {
        element2.classList.remove("is-invalid");
        element2.classList.add("is-valid");
    }else{
        element2.classList.add("is-invalid");
        element2.classList.remove("is-valid");
    }
});




$('#inputEmail').blur(function () {
    var element = document.getElementById("inputEmail");
    if($("#inputEmail")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});




$('#RodzajK').change(function () {
    if (document.getElementById("RodzajK").value == 1) {
        document.getElementById("Firm_form").style.display = "none";
        document.getElementById("NIP").required = false;
        document.getElementById("nazwa_firmy").required = false;

    } else {
        document.getElementById("Firm_form").style.display = "block";
        document.getElementById("NIP").required = true;
        document.getElementById("nazwa_firmy").required = true;
    }
});


$('#NIP').blur(function () {
    var element = document.getElementById("NIP");
    if($("#NIP")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});

$('#nazwa_firmy').blur(function () {
    var element = document.getElementById("nazwa_firmy");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});

$('#ulica').blur(function () {
    var element = document.getElementById("ulica");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});

$('#miejscowosc').blur(function () {
    var element = document.getElementById("miejscowosc");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});


$('#nrDomu').blur(function () {
    var element = document.getElementById("nrDomu");
    if(element.value!='') {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");

    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});



$('#nrLok').blur(function () {
    var element = document.getElementById("nrLok");
    element.classList.add("is-valid");
});





$('#zipcode').blur(function () {
    var element = document.getElementById("zipcode");
    if($("#zipcode")[0].checkValidity()) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }else{
        element.classList.add("is-invalid");
        element.classList.remove("is-valid");
    }

});




 function hashCodeVerbose (s) {
    var hash = 0,
        i, char;
    if (s.length == 0) return hash;
    for (i = 0, l = s.length; i < l; i++) {
        char = s.charCodeAt(i);
        hash = ((hash << 5) - hash) + char;
        hash |= 0; // Convert to 32bit integer
    }
    return hash;
}




$('#btn-register').click(function () {





   var confirmPassword = hashCodeVerbose($('#confirmPassword').val());

   var inputPassword = hashCodeVerbose($('#inputPassword').val());



    if($("#RegisterForm")[0].checkValidity()) {
        $.ajax({
            type: "POST",
            url: '/user/create',
            data: {
                login: $('#login').val(),
                cpassword: confirmPassword,
                password: inputPassword,
                plec:$('#plec').val(),
                imie: $('#imie').val(),
                nazwisko: $('#nazwisko').val(),
                email: $('#inputEmail').val(),
                NIP: $('#NIP').val(),
                nazwa_firmy: $('#nazwa_firmy').val(),

                ulica: $('#ulica').val(),
                miejscowosc: $('#miejscowosc').val(),
                zipcode: $('#zipcode').val(),
                nrDomu: $('#nrDomu').val(),
                nrLok: $('#nrLok').val(),
            },


            success: function (data) {


                if (parseInt(data) == 1)
                    $("#RegisterFormAlert").html('<div class="alert alert-success alert-dismissible  " role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '  <strong>Well done! </strong>' + "Możesz sie zalogować" +
                        '</div>');
                else
                    $("#RegisterFormAlert").html('<div class="alert alert-danger alert-dismissible  " role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '  <strong>Warning! </strong>' + "Coś poszło nie tak." +
                        '</div>');


            }
        });

    }else {
        $("#RegisterFormAlert").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '  <strong>Warning! </strong>' + 'Wpisz poprawne dane!' +
            '</div>');
    }


});