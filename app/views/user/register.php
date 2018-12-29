<div id="Register" class="container tab-pane fade"><br>
    <div class="container">
        <div class="row">
            <div class="form-block">
                <form class="login-form" method="POST" action="/user/create">
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
                        <input type="password" name="password" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="W haśle musi wystąpić jedna duża, jedna mała litera oraz jedna cyfra." required />
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
                        <button class="btn" id="login-btn">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>