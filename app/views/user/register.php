<!--@TODO do zrobienie od nowa, name i id inputu zaleceane zostawić bez zmian, proces rejestracji dziala, ajax działa zajebiscie z MVC!!!!!! -->
<!--@TODO dodac adres-->

<!--<div id="Register" class="container tab-pane"  style="margin-top: 66px;"><br>-->
    <div class="container" style="margin-top: 80px;">
        <div class="card card-outline-secondary my-4">
            <div class="card-header">
                <h3>Zmień hasło</h3>
            </div>
            <div class="card-body">
                <form  id="changePasswordForm" class="login-form">

                    <div class="d-flex justify-content-between">
                        <h4>Stare hasło </h4>
                        <div class="form-group mb-2">
                            <input type="password" class="form-control" id="oldPassword"
                                   placeholder="Stare hasło">
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4>Nowe hasło </h4>
                        <div class="form-group mb-2">
                            <input type="password" class="form-control" id="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="W haśle musi wystąpić jedna duża, jedna mała litera oraz jedna cyfra."  placeholder="Nowe hasło" required >
                            <div class="invalid-feedback">
                                W haśle musi wystąpić:<br />  duża litera, mała litera, cyfra, 8 znaków.
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4>Powtórz hasło </h4>
                        <div class="form-group mb-2">
                            <input type="password" class="form-control" id="newPassword2" placeholder="Powtórz hasło">
                            <div class="invalid-feedback">
                                Hasła nie są identyczne.
                            </div>
                        </div>
                    </div>

                </form>
                <hr>
                <div class="d-flex justify-content-between">
                    <h4>
                        <div id="changePasswordAlert"></div>
                    </h4>
                    <div class="form-group mb-2">
                        <button id="changePassword" type="submit"  value="Submit"  class="btn btn-dark mb-2">Zmień hasło</button>
                    </div>
                </div>
                <script>




                    $('#newPassword').blur(function () {
                        var element = document.getElementById("newPassword");
                        if($("#changePasswordForm")[0].checkValidity()) {
                            element.classList.remove("is-invalid");
                        }else{
                            element.classList.add("is-invalid");
                        }

                    });

                    $('#newPassword2').blur(function () {
                        var element = document.getElementById("newPassword");
                        var element2 = document.getElementById("newPassword2");

                        if(element.value ==element2.value ) {
                            element2.classList.remove("is-invalid");
                        }else{
                            element2.classList.add("is-invalid");
                        }
                    });


                    $('#changePassword').click(function () {

                        if($("#changePasswordForm")[0].checkValidity()) {
                            $.ajax({
                                type: "post",
                                url: '/user/changePassword',
                                data: {
                                    oldPassword: $('#oldPassword').val(),
                                    newPassword: $('#newPassword').val(),
                                    newPassword2: $('#newPassword2').val(),
                                },


                                success: function (data) {
                                    alert(data);

                                    if (parseInt(data) == 1)
                                        $("#changePasswordAlert").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                            '  <strong>Well done! </strong>' + "hasło zostało zmienione" +
                                            '</div>');
                                    else
                                        $("#changePasswordAlert").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                            '  <strong>Warning! </strong>' + data +
                                            '</div>');


                                }
                            });

                        }else {
                            $("#changePasswordAlert").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '  <strong>Warning! </strong>' + 'Wpisz poprawne dane!' +
                                '</div>');
                        }


                    });

                </script>
            </div>


        </div>











<!--        <div class="row">-->
<!--            <div class="form-block">-->
<!--                <form class="login-form" action="#">-->
<!--                    <div class="field"><h1>Sign up</h1></div>-->
<!--                    <div class="field">-->
<!--                        <label for="imie" >Imię:</label>-->
<!--                        <input type="text" name="imie" placeholder="Imię" id="imie"  />-->
<!--                    </div>-->
<!--                    <div class="field">-->
<!--                        <label for="nazwisko" >Nazwisko:</label>-->
<!--                        <input type="text" name="nazwisko" placeholder="Nazwisko" id="nazwisko"  />-->
<!--                    </div>-->
<!---->
<!--                    <div class="field">-->
<!--                        <label for="email" >Email:</label>-->
<!--                        <input type="email" name="email" placeholder="e-mail" id="email"  />-->
<!--                    </div>-->
<!---->
<!--                    <div class="field">-->
<!--                        <label for="login" >Login:</label>-->
<!--                        <input type="text" name="login" placeholder="Login" id="login"  />-->
<!--                    </div>-->
<!---->
<!--                    <div class="field">-->
<!--                        <label for="password" >Password:</label>-->
<!--                        <input type="password" name="password" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło musi posiadac 8znaków. W haśle musi wystąpić jedna duża, jedna mała litera oraz jedna cyfra." required />-->
<!--                    </div>-->
<!--                    <div class="field">-->
<!--                        <label for="cpassword" >Potwierdź hasło:</label>-->
<!--                        <input type="password" name="cpassword" placeholder="Potwierdź hasło" id="cpassword"  />-->
<!--                    </div>-->
<!---->
<!--                    <div class="field">-->
<!--                        <label for="NIP" >NIP:</label>-->
<!--                        <input type="text" name="NIP" placeholder="NIP" id="NIP"  />-->
<!--                    </div>-->
<!---->
<!--                    <div class="field">-->
<!--                        <label for="nazwa_firmy" >Nazwa firmy:</label>-->
<!--                        <input type="text" name="nazwa_firmy" placeholder="Nazwa firmy" id="nazwa_firmy"  />-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!--                    <div class="field">-->
<!--                        <button class="btn" id="login-btn" type="button">Register</button>-->
<!--                    </div>-->
<!--                </form>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                <script>-->
<!---->
<!--                    $('#login-btn').click(function () {-->
<!---->
<!--                        $.ajax({-->
<!--                            type: "POST",-->
<!--                            url: '/user/create',-->
<!--                            data: {-->
<!--                                login: $('#login').val(),-->
<!--                                cpassword: $('#cpassword').val(),-->
<!--                                password: $('#password').val(),-->
<!---->
<!--                                imie: $('#imie').val(),-->
<!--                                nazwisko: $('#nazwisko').val(),-->
<!--                                email: $('#email').val(),-->
<!--                                NIP: $('#NIP').val(),-->
<!--                                nazwa_firmy: $('#nazwa_firmy').val(),-->
<!--                            },-->
<!--                            // data: {marka : 1 , model: -1},-->
<!---->
<!---->
<!--                            success: function (data) {-->
<!--                                alert(data);-->
<!--                            }-->
<!--                        });-->
<!---->
<!--                    });-->
<!---->
<!--                </script>-->
<!--                -->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>