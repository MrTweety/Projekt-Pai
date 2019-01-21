<!--@TODO do zrobienie od nowa, name i id inputu zaleceane zostawić bez zmian, proces rejestracji dziala, ajax działa zajebiscie z MVC!!!!!! -->
<!--@TODO dodac adres-->


<!--<div id="Register" class="container tab-pane"  style="margin-top: 66px;"><br>-->
<div class="container" style="margin-top: 80px;">
    <div class="card card-outline-secondary my-4">

        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form id="RegisterForm">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="imie" class="form-control" placeholder="Imię" required="required"
                                       autofocus="autofocus">
                                <label for="imie">Imię</label>
                                <div class="invalid-feedback">Podaj imie.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="nazwisko" class="form-control" placeholder="Nazwisko"
                                       required="required">
                                <label for="nazwisko">Nazwisko</label>
                                <div class="invalid-feedback">Podaj nazwisko.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="login" class="form-control" placeholder="Login" pattern="(?=.*[a-zA-Z]).{5,}"
                                       required="required" autofocus="autofocus">
                                <label for="login">Login</label>
                                <div class="invalid-feedback" id="Login-invalid-feedback">
                                    Login musi zawierac litere i składać sie z 5 znaków.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-select-group">

                                <select id="plec" class="form-control" name="plec">
                                    <option selected="selected" value="3">Nie chce podawać</option>
                                    <option value="1">Kobieta</option>
                                    <option value="2">Mężczyzna</option>
                                </select>
                                <label for="plec">Podaj swoją płeć</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Adres email"
                               required="required">
                        <label for="inputEmail">Adres email</label>
                        <div class="invalid-feedback" id="Email-invalid-feedback">
                            Wpisz poprawny email.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" class="form-control" id="inputPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="W haśle musi wystąpić jedna duża, jedna mała litera oraz jedna cyfra."  placeholder="Nowe hasło" required >
<!--                                <input type="password" id="inputPassword" class="form-control" placeholder="Hasło" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="W haśle musi wystąpić jedna duża, jedna mała litera oraz jedna cyfra." required="required">-->
                                <label for="inputPassword">Hasło</label>
                                <div class="invalid-feedback">
                                    W haśle musi wystąpić:<br />  duża litera, mała litera, cyfra, 8 znaków.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control"
                                       placeholder="Potwierdź hasło" required="required">
                                <label for="confirmPassword">Potwierdź hasło</label>
                                <div class="invalid-feedback">
                                    Hasła nie są identyczne.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-select-group">

                                <select id="RodzajK" class="form-control" name="RodzajK">
                                    <option value="1">Prywatne</option>
                                    <option value="2">Firmowe</option>
                                </select>
                                <label for="RodzajK">Rodzaj konta</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Firm_form" style="display: none;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="NIP" class="form-control" placeholder="NIP" pattern="(?=.*\d).{10}" onkeyup="this.value=this.value.replace(/\D/g,'')"
                                           >
                                    <label for="NIP">NIP</label>
                                    <div class="invalid-feedback">
                                        NIP skłąda sie z 10 cyfr.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="nazwa_firmy" class="form-control" placeholder="Nazwa firmy"
                                           >
                                    <label for="nazwa_firmy">Nazwa firmy</label>
                                    <div class="invalid-feedback">
                                       Wpisz nazwę Firmy.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="RegisterFormAlert"></div>
                <a class="btn btn-primary btn-block" id="btn-register">Register</a>
            </form>
            <div class="text-center">

                <a href="#" onclick="load_login_form()" id="load_login_form2" class="d-block small mt-3" >Login Page</a>
<!--                <a class="d-block small" href="#">Forgot Password?</a>-->
            </div>
        </div>


    </div>


    <script>



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



        $('#btn-register').click(function () {

            if($("#RegisterForm")[0].checkValidity()) {
                $.ajax({
                    type: "POST",
                    url: '/user/create',
                    data: {
                        login: $('#login').val(),
                        cpassword: $('#confirmPassword').val(),
                        password: $('#inputPassword').val(),

                        imie: $('#imie').val(),
                        nazwisko: $('#nazwisko').val(),
                        email: $('#inputEmail').val(),
                        NIP: $('#NIP').val(),
                        nazwa_firmy: $('#nazwa_firmy').val(),
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

    </script>
</div>