<!--@TODO panel klienta-->

<!--<div class="logo"><img src="/public/img/avatar/userK.png" class="bigavatar"/>-->
<div id="wrapper">
    <div id="sidebar">
        <ul class="nav flex-column nav-pills sidebar" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#dashboard1">
                    <i class="fa fa-dashboard"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " data-toggle="tab" href="#oferta">
                    <i class="fa fa-table"></i>
                    <span>Edytuj Profil</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " data-toggle="tab" href="#kupione">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Kupione</span>
                </a>
            </li>
        </ul>

    </div>


    <div class="tab-content" style="width: 100%;">

        <div id="dashboard1" class="tab-pane active dashboard"
             style="height:auto; background-color: white; width: 100%!important;"><br>

            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="color: #66AAFF;">
                    Użytkownik
                </li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
            <div class="container">
                <div class="row">


                    <div class="col-lg-9">

                        <div class="card mt-4">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title" id="nazwa_samochodu"><?php if (isset($data)) {
                                            echo $data['imie'] . ' ' . $data['nazwisko'];
                                        } else echo "Imie Nazwisko"; ?></h3>
                                    <h4 id="cena"><?php if (isset($data)) {
                                            echo $data['typ_konta'];
                                        } else echo "Typ Konta"; ?></h4>
                                </div>

                            </div>
                        </div>
                        <!-- /.card -->


                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">
                                <h3>Informacje o użytkowniku</h3>
                            </div>
                            <div class="card-body">

                                <div class="d-flex justify-content-between">
                                    <h4>Adres </h4>
                                    <div id=""><?php if (isset($data)) {
                                            echo $data['kod_pocztowy'] . ' ' . $data['miejscowosc'] . ",<br />" . $data['ulica'] . ' ' . $data['nr_domu'] . '/' . $data['nr_lokalu'];
                                        }; ?></div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h4>nazwa użytkownika </h4>
                                    <div id=""><?php if (isset($data)) {
                                            echo $data['login'];
                                        }; ?></div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h4>Email </h4>
                                    <div id=""><?php if (isset($data)) {
                                            echo $data['email'];
                                        }; ?></div>
                                </div>
                            </div>
                        </div>


                        <div id="firm"></div>

                        <script>

                            var myvar = '<div class="card card-outline-secondary my-4">' +
                                '                            <div class="card-header">' +
                                '                                <h3>Informacje o firmie</h3>' +
                                '                            </div>' +
                                '                            <div class="card-body">' +
                                '' +
                                '                                <div class="d-flex justify-content-between">' +
                                '                                    <h4>Nazwa firmy</h4>' +
                                '                                    <div id=""><?php if (isset($data)) {
                                    echo $data['nazwa_firmy'];
                                } ;?></div>' +
                                '                                </div>' +
                                '                                <hr>' +
                                '                                <div class="d-flex justify-content-between">' +
                                '                                    <h4>NIP</h4>' +
                                '                                    <div id=""><?php if (isset($data['NIP'])) {
                                    echo $data['NIP'];
                                } ;?></div>' +
                                '                                </div>' +
                                '                        </div>';


                            if (<?php if (isset($data['NIP']) || isset($data['nazwa_firmy'])) echo 1; else echo 0; ;?>) {
                                document.getElementById("firm").innerHTML = myvar;
                            }
                            ;

                        </script>
                        <!-- /.card -->

                    </div>
                    <!-- /.col-lg-9 -->


                    <div class="col-lg-3">
                        <div class="sticky-top" style="z-index: 100">
                            <br><br>
                            <h1 class="my-4">
                                <div class="logo">
                                    <div class="logo">
                                        <?php
                                        $plikT ="user";
                                        $plikP = "M.png";
                                        if($data['id_typ']==User::$ADMIN_TYPE) $plikT ="admin";
                                        if($data['plec']=="K") $plikP ="K.png";

                                        echo '<img src="/public/img/avatar/'.$plikT.$plikP.'" class="bigavatar"/>';

                                        ?>
                                    </div>
                                </div>
                            </h1>

                        </div>
                    </div>

                </div>
            </div>


        </div>


        <div id="oferta" class="tab-pane fade"
             style="min-height: 872px; height:auto; background-color: white; width: 100%!important;">

            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="color: #66AAFF;">
                    Użytkownik
                </li>
                <li class="breadcrumb-item active">Edytuj Profil</li>
            </ol>

            <!-- edycja profilu-->
            <!-- Nav pills -->
            <div class="container">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home" style="color: white;">Zmień hasło</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1" style="color: white;">Zmień Dane</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu2" style="color: white;">Zmień dane firmy</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div id="home" class="container tab-pane active"><br>

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
                    </div>

                    <div id="menu1" class="container tab-pane fade"><br>

                    </div>

                    <div id="menu2" class="container tab-pane fade"><br>
                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">
                                <h3>Zmień Dane Firmy</h3>
                            </div>
                            <div class="card-body">
                                <form  id="changeCompanyForm" class="login-form">

                                    <div class="d-flex justify-content-between">
                                        <h4>Nowy NIP </h4>
                                        <div class="form-group mb-2">
                                            <input type="text" id="NIP" class="form-control" placeholder="NIP" pattern="(?=.*\d).{10}?" onkeyup="this.value=this.value.replace(/\D/g,'')" required>
                                            <div class="invalid-feedback">
                                                NIP skłąda sie z 10 cyfr.
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <h4>Nowa nazwa firmy</h4>
                                        <div class="form-group mb-2">
                                            <input type="text" id="nazwa_firmy" class="form-control" placeholder="Nazwa firmy" required>
                                            <div class="invalid-feedback">
                                                Wpisz nazwę firmy.
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <h4>Podaj hasło </h4>
                                        <div class="form-group mb-2">
                                            <input type="password" class="form-control" id="password" placeholder="hasło" required>
<!--                                            <div class="invalid-feedback">-->
<!--                                                Wpisz poprawne hasło.-->
<!--                                            </div>-->
                                        </div>
                                    </div>

                                </form>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h4>
                                        <div id="changeCompanyAlert"></div>
                                    </h4>
                                    <div class="form-group mb-2">
                                        <button id="changeCompany" type="submit"  value="Submit"  class="btn btn-dark mb-2">Zmień hasło</button>
                                    </div>
                                </div>
                                <script>




                                    $('#NIP').blur(function () {
                                        var element = document.getElementById("NIP");
                                        var element2 = document.getElementById("nazwa_firmy");
                                        if(element.value==''){
                                            element.required = false;
                                            element2.required = false;
                                        }
                                        else{
                                            element.required = true;
                                            element2.required = true;
                                        }

                                        if($("#NIP")[0].checkValidity()) {
                                            element.classList.remove("is-invalid");
                                            element.classList.add("is-valid");
                                        }else{
                                            element.classList.add("is-invalid");
                                            element.classList.remove("is-valid");
                                        }

                                    });

                                    $('#nazwa_firmy').blur(function () {
                                        var element = document.getElementById("NIP");
                                        var element2 = document.getElementById("nazwa_firmy");
                                        if(element2.value==''){
                                            ;
                                        }
                                        else{
                                            element.required = true;
                                            element2.required = true;
                                        }

                                        if($("#nazwa_firmy")[0].checkValidity()) {
                                            element2.classList.remove("is-invalid");
                                            element2.classList.add("is-valid");
                                        }else{
                                            element2.classList.add("is-invalid");
                                            element2.classList.remove("is-valid");
                                        }

                                    });


                                    $('#changeCompany').click(function () {
                                        var element = document.getElementById("NIP").value;
                                        var element2 = document.getElementById("nazwa_firmy").value;

                                        if($("#changeCompanyForm")[0].checkValidity() && ((element == '' && element2=='') || (element != '' && element2!='')) ) {

                                            $.ajax({
                                                type: "post",
                                                url: '/user/changeCompany',
                                                data: {
                                                    NIP: $('#NIP').val(),
                                                    nazwaFirmy: $('#nazwa_firmy').val(),
                                                    password: $('#password').val(),
                                                },


                                                success: function (data) {
                                                    alert(data);

                                                    if (parseInt(data) == 1)
                                                        $("#changeCompanyAlert").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                                            '  <strong>Well done! </strong>' + "Dane zostały zmienione." +
                                                            '</div>');
                                                    else
                                                        $("#changeCompanyAlert").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                                            '  <strong>Uwaga! </strong>' + data +
                                                            '</div>');


                                                }
                                            });

                                        }else {
                                            $("#changeCompanyAlert").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                                '  <strong>Uwaga! </strong>' + 'Wpisz poprawne dane.' +
                                                '</div>');
                                        }


                                    });

                                </script>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div id="kupione" class="tab-pane  dashboard"
             style="height:auto; background-color: white; width: 100%!important;"><br>

            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="color: #66AAFF;">
                    Użytkownik
                </li>
                <li class="breadcrumb-item ">Kupione</li>
            </ol>
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

            <script>

                $(document).ready(function() 
                {
                    var cia  = "<?php if(isset($_COOKIE['id'])) echo $_COOKIE['id']; else echo -1; ?>";
                        $.ajax({
                                type: "POST",
                                url: '../app/views/main/user_show_items.php',
                                data: {id_sesja: cia},

                                success: function(data)
                                {
                                build.buildListing_user(
                                    jQuery.parseJSON(data),
                                    $('#listing'),
                                );
                            }
                        });  
                });
            </script>

        </div>


    </div>

</div>


</body>
</html>