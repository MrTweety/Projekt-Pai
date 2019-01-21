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
                                    <option selected="selected" value="N">Nie chce podawać</option>
                                    <option value="K">Kobieta</option>
                                    <option value="M">Mężczyzna</option>
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
                <div id="Adres_form" style="display: block;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="miejscowosc" class="form-control" placeholder="Miejscowosc" required>
                                    <label for="miejscowosc">Miejscowosc</label>
                                    <div class="invalid-feedback">
                                        Wpisz poprawne dane
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="ulica" class="form-control" placeholder="Ulica"
                                           required>
                                    <label for="ulica">Ulica</label>
                                    <div class="invalid-feedback">
                                        Wpisz poprawne dane
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-4">
                                <div class="form-label-group">
                                    <input type="text" id="zipcode" class="form-control" placeholder="Kod pocztowy" pattern="[0-9]{2}[\-]?[0-9]{3}" required>
                                    <label for="zipcode">Kod pocztowy</label>
                                    <div class="invalid-feedback">
                                        Wpisz poprawne dane. (nn-nnn)
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-label-group">
                                    <input type="text" id="nrDomu" class="form-control" placeholder="Numer domu"
                                           required>
                                    <label for="nrDomu">Numer domu</label>
                                    <div class="invalid-feedback">
                                        Wpisz poprawne dane
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-label-group">
                                    <input type="text" id="nrLok" class="form-control" placeholder="Numer lokalu"
                                    >
                                    <label for="nrLok">Numer lokalu</label>
                                    <div class="invalid-feedback">
                                        Wpisz poprawne dane.
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




    <script src="/public/js/reg_js.js"></script>

</div>