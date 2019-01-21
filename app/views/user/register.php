<!--@TODO do zrobienie od nowa, name i id inputu zaleceane zostawić bez zmian, proces rejestracji dziala, ajax działa zajebiscie z MVC!!!!!! -->
<!--@TODO dodac adres-->


<!--<div id="Register" class="container tab-pane"  style="margin-top: 66px;"><br>-->
<div class="container" style="margin-top: 80px;">
    <div class="card card-outline-secondary my-4">

        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="imie" class="form-control" placeholder="Imię" required="required"
                                       autofocus="autofocus">
                                <label for="imie">Imię</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="nazwisko" class="form-control" placeholder="Nazwisko"
                                       required="required">
                                <label for="nazwisko">Nazwisko</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="login" class="form-control" placeholder="Login"
                                       required="required" autofocus="autofocus">
                                <label for="login">Login</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">

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
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Hasło"
                                       required="required">
                                <label for="inputPassword">Hasło</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control"
                                       placeholder="Potwierdź hasło" required="required">
                                <label for="confirmPassword">Potwierdź hasło</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">

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
                                    <input type="text" id="NIP" class="form-control" placeholder="NIP"
                                           required="required">
                                    <label for="NIP">NIP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="nazwa_firmy" class="form-control" placeholder="Nazwa firmy"
                                           required="required">
                                    <label for="nazwa_firmy">Nazwa firmy</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <a class="btn btn-primary btn-block" id="btn-register">Register</a>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>


    </div>


    <script>
        $('#RodzajK').change(function () {
            if (document.getElementById("RodzajK").value == 1) {
                document.getElementById("Firm_form").style.display = "none";
            } else {
                document.getElementById("Firm_form").style.display = "block";
            }
        });

        
        $('#btn-register').click(function () {

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
                // data: {marka : 1 , model: -1},


                success: function (data) {
                    alert(data);
                }
            });

        });

    </script>
</div>