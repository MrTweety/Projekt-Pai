<!--@TODO do zrobienie od nowa, name i id inputu zaleceane zostawić bez zmian, proces rejestracji dziala, ajax działa zajebiscie z MVC!!!!!! -->
<!--@TODO dodac adres-->

<div id="Register" class="container tab-pane"  style="margin-top: 66px;"><br>
    <div class="container">
        <div class="row">
            <div class="form-block">
<!--                <form class="login-form" method="POST" action="/user/create">-->
                <form class="login-form" action="#">
                    <div class="field"><h1>Sign up</h1></div>
                    <div class="field">
                        <label for="imie" >Imię:</label>
                        <input type="text" name="imie" placeholder="Imię" id="imie"  />
                    </div>
                    <div class="field">
                        <label for="nazwisko" >Nazwisko:</label>
                        <input type="text" name="nazwisko" placeholder="Nazwisko" id="nazwisko"  />
                    </div>

                    <div class="field">
                        <label for="email" >Email:</label>
                        <input type="email" name="email" placeholder="e-mail" id="email"  />
                    </div>

                    <div class="field">
                        <label for="login" >Login:</label>
                        <input type="text" name="login" placeholder="Login" id="login"  />
                    </div>

                    <div class="field">
                        <label for="password" >Password:</label>
                        <input type="password" name="password" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło musi posiadac 8znaków. W haśle musi wystąpić jedna duża, jedna mała litera oraz jedna cyfra." required />
                    </div>
                    <div class="field">
                        <label for="cpassword" >Potwierdź hasło:</label>
                        <input type="password" name="cpassword" placeholder="Potwierdź hasło" id="cpassword"  />
                    </div>

                    <div class="field">
                        <label for="NIP" >NIP:</label>
                        <input type="text" name="NIP" placeholder="NIP" id="NIP"  />
                    </div>

                    <div class="field">
                        <label for="nazwa_firmy" >Nazwa firmy:</label>
                        <input type="text" name="nazwa_firmy" placeholder="Nazwa firmy" id="nazwa_firmy"  />
                    </div>



                    <div class="field">
                        <button class="btn" id="login-btn" type="button">Register</button>
                    </div>
                </form>

                <script>

                    $('#login-btn').click(function () {

                        $.ajax({
                            type: "POST",
                            url: '/user/create',
                            data: {
                                login: $('#login').val(),
                                cpassword: $('#cpassword').val(),
                                password: $('#password').val(),

                                imie: $('#imie').val(),
                                nazwisko: $('#nazwisko').val(),
                                email: $('#email').val(),
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
        </div>
    </div>
</div>