

<div id="wrapper">
    <div id="sidebar">
        <ul class="nav flex-column nav-pills sidebar" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#dashboard1">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " data-toggle="tab" href="#oferta">
                    <i class="fa fa-table"></i>
                    <span>Oferta</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Pages</span>
                    <i class="fa fa-chevron-down "></i>
                </a>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Oferta:</h6>
                    <a class="dropdown-item " data-toggle="tab" href="#usersAdmin">Użytkownicy</a>
                    <a class="dropdown-item" data-toggle="tab" href="#menu1">Menu 1</a>
                    <a class="dropdown-item" data-toggle="tab" href="#menu2">Menu 2</a>
                    <!--                    <h6 class="dropdown-header">Other Pages:</h6>-->
                    <!--                    <a class="dropdown-item" href="404.html">404 Page</a>-->

                    <!--                    <div class="dropdown-divider"></div>-->
                    <!--                    <a class="dropdown-item" href="blank.html">Blank Page</a>-->
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#charts">
                    <i class="fa fa-area-chart"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tables">
                    <i class="fa fa-table"></i>
                    <span>Tables</span></a>
            </li>
        </ul>

    </div>
    <div id="content-wrapper">
        <div class="tab-content" style="width: 100%;">

            <div id="dashboard1" class="tab-pane active dashboard"
                 style="height:auto; background-color: white; width: 100%!important;"><br>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: #66AAFF;">
                        Dashboard
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>


                <!--                <div id="aabb"></div>-->
                <script>
                    //        function getCookie(name) {
                    //            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
                    //            return v ? v[2] : null;
                    //        }
                    //
                    //var b = "<?php //echo $_COOKIE['id']; ?>//";
                    //        var a = getCookie('id');
                    //        document.getElementById('aabb').innerHTML = a+" "+b;
                </script>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">
                                    <div id="aktU"></div>
                                    Aktywnych Użytkowników!
                                </div>
                            </div>
                            <!--                            <a class="card-footer text-white clearfix small z-1" href="#">-->
                            <!--                                <span class="float-left">View Details</span>-->
                            <!--                                <span class="float-right">-->
                            <!--                                    <i class="fa fa-angle-right"></i>-->
                            <!--                                </span>-->
                            <!--                            </a>-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">
                                    <div id="nowO"></div>
                                    Nowych Ofert!
                                </div>
                            </div>
                            <!--                            <a class="card-footer text-white clearfix small z-1" href="#">-->
                            <!--                                <span class="float-left">View Details</span>-->
                            <!--                                <span class="float-right">-->
                            <!--                    <i class="fa fa-angle-right"></i>-->
                            <!--                  </span>-->
                            <!--                            </a>-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">
                                    <div id="nowZ"></div>
                                    Nowych Zamówień!
                                </div>
                            </div>
                            <!--                            <a class="card-footer text-white clearfix small z-1" href="#">-->
                            <!--                                <span class="float-left">View Details</span>-->
                            <!--                                <span class="float-right">-->
                            <!--                    <i class="fa fa-angle-right"></i>-->
                            <!--                  </span>-->
                            <!--                            </a>-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="mr-5">
                                    <div id="nowU"></div>
                                    Nowych Użytkowników!
                                </div>
                            </div>
                            <!--                            <a class="card-footer text-white clearfix small z-1" href="#">-->
                            <!--                                <span class="float-left">View Details</span>-->
                            <!--                                <span class="float-right">-->
                            <!--                    <i class="fa fa-angle-right"></i>-->
                            <!--                  </span>-->
                            <!--                            </a>-->
                        </div>
                    </div>

                    <script>

                        $(document).ready(function () {

                            $.ajax({
                                type: "POST",
                                url: '/admin/dashboardInfo',

                                success: function (data) {
                                    dane = jQuery.parseJSON(data);
                                    $('#aktU').append(dane.CountActiveUser);
                                    $('#nowO').append(dane.CnewOrder);
                                    $('#nowZ').append(dane.CountNewOrder);
                                    $('#nowU').append(dane.CountNewUser);


                                }
                            });

                        });
                    </script>


                </div>


                <div id="myChart"></div>


                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-area-chart"></i>
                        Nowi Użytkownicy!</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated <?php echo date("Y-m-d H:i:s"); ?></div>
                </div>

            </div>


            <div id="oferta" class="tab-pane fade" style="height:auto; background-color: white; width: 100%!important;">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: #66AAFF;">
                        Dashboard
                    </li>
                    <li class="breadcrumb-item active">Oferta</li>

                </ol>


                <a href="#" id="button_1" class="btn btn-info"><i class="fa fa-sign-in"></i> <span
                            class="glyphicon glyphicon-search"></span>Dodaj Oferte</a>


                <div class="container myAddOfert" style="margin-top: 56px;">
                    <form class=" cointeiner text-center " enctype="multipart/form-data" id="fupForm">
                        <div class="row">
                            <div class=" col-sm-12  ">

                                <h4><i class="fa fa-car"></i> Search Options</h4>
                            </div>


                            <div class="form-group col-sm-6">
                                <label for="marka">Marka Pojazdu</label>
                                <select id="marka" class="form-control" name="marka">
                                </select>
                            </div>

                            <div class="form-group  col-sm-6">
                                <label for="model">Model Pojazdu</label>
                                <select id="model" class="form-control " name="model" disabled>
                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="kolor">Kolor</label>
                                <select id="kolor" class="form-control" name="kolor">

                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="kraj">Kraj</label>
                                <select id="kraj" class="form-control" name="kraj">
                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="cena">Cena</label>
                                <input type="number" class="form-control" id="cena" placeholder="Cena" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="przebieg">Przebieg</label>
                                <input type="number" class="form-control" id="przebieg" placeholder="Przebieg">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="naped">Napęd</label>
                                <select id="naped" class="form-control" name="naped">
                                    <option selected value="-1">Napęd</option>
                                    <option value="przód"> przód</option>
                                    <option value="tył"> tył</option>
                                </select>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="paliwo">Rodzaj paliwa</label>
                                <!--                                <input type="number" class="form-control" id="paliwo" placeholder="Rodzaj paliwa">-->
                                <select id="paliwo" class="form-control" name="paliwo">
                                    <option selected value="-1">Rodzaj paliwa</option>
                                    <option value="benzyna"> benzyna</option>
                                    <option value="olej napędowy"> olej napędowy</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="nadwozie">Typ nadwozia</label>
                                <!--                                <input type="number" class="form-control" id="nadwozie" placeholder="Typ nadwozia">-->
                                <select id="nadwozie" class="form-control" name="nadwozie">
                                    <option selected value="-1">Typ nadwozia</option>
                                    <option value="pick up"> pick up</option>
                                    <option value="sedan"> sedan</option>
                                    <option value="cabrio"> cabrio</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="skrzynia">Typ skrzyni</label>
                                <!--                                <input type="number" class="form-control" id="skrzynia" placeholder="Typ skrzyni">-->
                                <select id="skrzynia" class="form-control" name="skrzynia">
                                    <option selected value="-1">Typ nadwozia</option>
                                    <option value="manualna"> manualna</option>
                                    <option value="automatyczna"> automatyczna</option>
                                    <option value="półautomatyczna"> półautomatyczna</option>
                                </select>
                            </div>


                            <div class="form-group col-sm-3">
                                <label for="rok">Rok prod</label>
                                <input type="number" class="form-control" id="rok" placeholder="Rok prod">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="pojemnosc">Pojemność </label>
                                <input type="number" class="form-control" id="pojemnosc" placeholder="Pojemność">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="moc">Moc</label>
                                <input type="number" class="form-control" id="moc" placeholder="Moc">

                            </div>

                            <div class="form-group col-sm-3">
                                <label for="drzwi">Liczba drzwi</label>
                                <input type="number" class="form-control" id="drzwi" placeholder="Liczba drzwi">
                            </div>


                            <div class="form-group col-sm-3">
                                <label for="miejsca">Liczba miejsc</label>
                                <input type="number" class="form-control" id="miejsca" placeholder="Liczba miejsc">
                            </div>

                            <div class="custom-file col-sm-9">
                                <label for="Zdjecie">Zdjecie</label>
                                <input type="file" class="form-control-file border" id="profile_pic" name="profile_pic"
                                       accept=".jpg, .jpeg, .png">
                                <!--                                    <input type="file" class="custom-file-input" id="customFile">-->
                                <!--                                    <label class="custom-file-label" for="customFile">Choose file</label>-->
                            </div>


                            <div class="form-group col-sm-12">
                                <label for="opis">Opis</label>
                                <textarea class="form-control" rows="5" id="opis">At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
                                </textarea>
                            </div>


                            <div class="col-sm-12">
                                <!--                <button type="submit" class="btn btn-info ">-->
                                <a href="#" id="button_dodaj" class="btn btn-info"><i class="fa fa-sign-in"></i> <span
                                            class="glyphicon glyphicon-search"></span>Dodaj</a>
                                <button id="reset" type="reset" class="btn btn-info" value="Reset">Reset</button>

                                <!--                </button>-->
                            </div>

                            <div id="alert"></div>
                        </div>
                    </form>


                </div>


                <div id="alert2" style="margin-top: 10px;"></div>
                <div id="tabelkaOfera">
                    <table id="tabOferta" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zdjecie</th>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Kraj pochodzenia</th>
                            <th>cena</th>
                            <th>opis</th>
                            <th>cechy</th>
                            <th>akcja</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Zdjecie</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>E-mail.</th>
                            <th>Login</th>
                            <th>TYP Konta</th>
                            <th>akcja</th>
                        </tr>
                        </tfoot>
                    </table>


                </div>


                <script>

                    $('#reset').click(function () {
                        $('#model').attr('disabled', true);
                    });


                    $(document).ready(function () {
                        oferta = $('#tabOferta').DataTable({

                            "ajax": {
                                "url": "../app/views/main/admin_select.php",
                                "type": "POST",
                                "data": {"select": 'oferta'}
                            },
                            "columns": [
                                {"data": "id_oferta"},
                                {"data": "imgg"},
                                {"data": "marka"},
                                {"data": "model"},
                                {"data": "kraj"},
                                {"data": "cena_netto"},
                                {"data": "opis"},
                                {"data": "cechy"},
                                {"data": "usun"},
                            ]
                        });
                    });


                </script>

                <script>


                    $(document).ready(function () {
                        $(".myAddOfert").hide();
                        $("#sidebarToggle").show();

                    });

                    $('#button_1').click(function () {
                        $(".myAddOfert").toggle();
                    });

                    $("#sidebarToggle").click(function () {
                        $("#sidebar").toggle();
                    });


                    function myFunction(id, name) {
                        //alert(id+' '+name);
                        if (parseInt(name) == 2) {
                            var select = "oferta";
                        }

                        var txt = 0;
                        if (confirm("Czy na pewno chcesz usunąć pozycję o id = " + id + "?")) {
                            txt = 1;
                        } else {
                            txt = 0;
                        }

                        if (parseInt(txt) == 1) {
                            $.ajax({
                                type: "POST",
                                url: '../app/views/main/admin_delete.php',
                                data: {select: select, oferta: id},


                                success: function (php_script_response) {

                                    var dane = jQuery.parseJSON(php_script_response);

                                    if (parseInt(dane.flaga) == 1)
                                        $("#alert2").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                            '  <strong>Well done! </strong>' + dane.Alert +
                                            '</div>');
                                    else
                                        $("#alert2").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                            '  <strong>Warning! </strong>' + dane.Alert +
                                            '</div>');
                                }
                                ,
                                complete: function () {
                                    oferta.ajax.reload();

                                }


                            });
                        }


                    }


                    $('#button_dodaj').click(function () {

                        var file_data = $('#profile_pic').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('fileToUpload', file_data);
                        form_data.append('marka', $('#marka').val());
                        form_data.append('model', $('#model').val());
                        form_data.append('cena', $('#cena').val());
                        form_data.append('kraj', $('#kraj').val());
                        form_data.append('kolor', $('#kolor').val());
                        form_data.append('naped', $('#naped').val());
                        form_data.append('rok', $('#rok').val());
                        form_data.append('pojemnosc', $('#pojemnosc').val());
                        form_data.append('moc', $('#moc').val());
                        form_data.append('drzwi', $('#drzwi').val());
                        form_data.append('miejsca', $('#miejsca').val());
                        form_data.append('przebieg', $('#przebieg').val());
                        form_data.append('paliwo', $('#paliwo').val());
                        form_data.append('skrzynia', $('#skrzynia').val());
                        form_data.append('opis', $('#opis').val());
                        form_data.append('nadwozie', $('#nadwozie').val());
                        form_data.append('select', "oferta");
                        //alert(form_data);


                        $.ajax({
                            type: "POST",
                            url: '../app/views/main/admin_add.php',
                            // dataType: 'text',
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,

                            success: function (php_script_response) {
                                //alert(php_script_response);
                                var dane = jQuery.parseJSON(php_script_response);


                                if (parseInt(dane.flaga) == 1)
                                    $("#alert").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                        '  <strong>Well done! </strong>' + dane.zdjecie +
                                        '</div>');
                                else
                                    $("#alert").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                        '  <strong>Warning! </strong>' + dane.zdjecie +
                                        '</div>');
                            }
                            ,
                            complete: function () {
                                oferta.ajax.reload();
                                //alert("abxw");
                            }


                        });

                    });


                    $('#marka').ready(function () {
                        $.ajax({
                            type: "POST",
                            url: '../app/views/main/search_select.php',
                            data: {select: "marka"},
                            success: function (data) {
                                helpers.buildDropdown(
                                    jQuery.parseJSON(data),
                                    $('#marka'),
                                    'Marka Pojazdu',
                                    <?php if (isset($_GET['marka'])) echo $_GET['marka']; else echo -1;  ?>
                                );
                            }
                        });


                    });

                    $('#model').ready(function () {

                        $.ajax({
                            type: "POST",
                            url: '../app/views/main/search_select.php',
                            data: {select: "model"},

                            success: function (data) {
                                helpers.buildDropdown(
                                    jQuery.parseJSON(data),
                                    $('#model'),
                                    'Model Pojazdu',
                                    <?php if (isset($_GET['model'])) echo $_GET['model']; else echo -1  ?>

                                );
                            }
                        });

                    });


                    $('#kolor').ready(function () {

                        $.ajax({
                            type: "POST",
                            url: '../app/views/main/search_select.php',
                            data: {select: "kolor"},

                            success: function (data) {
                                helpers.buildDropdown(
                                    jQuery.parseJSON(data),
                                    $('#kolor'),
                                    'Kolor Pojazdu',
                                    <?php if (isset($_GET['kolor'])) echo '"' . $_GET['kolor'] . '"'; else echo -1; ?>


                                );
                            }
                        });

                    });

                    $('#kraj').ready(function () {

                        $.ajax({
                            type: "POST",
                            url: '../app/views/main/search_select.php',
                            data: {select: "kraj"},


                            success: function (data) {
                                helpers.buildDropdown(
                                    jQuery.parseJSON(data),
                                    $('#kraj'),
                                    'Kraj pochodzenia',
                                    <?php if (isset($_GET['kraj'])) echo $_GET['kraj']; else echo -1  ?>

                                );
                            }
                        });

                    });


                    $('#marka').change(function () {


                        $.ajax({
                            type: "POST",
                            url: '../app/views/main/search_select.php',
                            data: {marka: $('#marka').val(), select: "model"},

                            success: function (data) {
                                helpers.buildDropdown(
                                    jQuery.parseJSON(data),
                                    $('#model'),
                                    'Model Pojazdu'
                                );
                            }
                        });

                        $('#model').attr('disabled', false);

                    });


                </script>


            </div>

            <div id="usersAdmin" class="tab-pane  w-100 fade "><br>
                <h3>Administratorzy </h3>

                <div id="alert3" style="margin-top: 10px;"></div>

                <div id="tabelkaAdmin">
                    <table id="tabAdmin" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>E-mail.</th>
                            <th>Login</th>
                            <th>TYP Konta</th>
                            <th>akcja</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>E-mail.</th>
                            <th>Login</th>
                            <th>TYP Konta</th>
                            <th>akcja</th>
                        </tr>
                        </tfoot>
                    </table>


                </div>
                <script>

                    function myFunction2(id, name) {
                        //alert(id+' '+name);
                        if (parseInt(name) == 3) {
                            var select = "admin";
                        }

                        var txt = 0;
                        if (confirm("Czy na pewno chcesz usunąć pozycję o id = " + id + "?")) {
                            txt = 1;
                        } else {
                            txt = 0;
                        }

                        if (parseInt(txt) == 1) {
                            $.ajax({
                                type: "POST",
                                url: '../app/views/main/admin_delete.php',
                                data: {select: select, admin: id},


                                success: function (data) {

                                    var dane = jQuery.parseJSON(data);

                                    if (parseInt(dane.flaga) == 1)
                                        $("#alert3").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                            '  <strong>Well done! </strong>' + dane.Alert +
                                            '</div>');
                                    else
                                        $("#alert3").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                            '  <strong>Warning! </strong>' + dane.Alert +
                                            '</div>');
                                },
                                complete: function () {
                                    admintab.ajax.reload();
                                }


                            });
                        }


                    }


                </script>

                <script>

                    $(document).ready(function () {
                        admintab = $('#tabAdmin').DataTable({

                            "ajax": {
                                "url": "../app/views/main/admin_select.php",
                                "type": "POST",
                                "data": {"select": "admin"}
                            },
                            "columns": [
                                {"data": "id_uzyt"},
                                {"data": "imie"},
                                {"data": "nazwisko"},
                                {"data": "email"},
                                {"data": "login"},
                                {"data": "typKonta"},
                                {"data": "usun"},
                            ]
                        });
                    });

                </script>
            </div>


            <div id="menu1" class="tab-pane fade" style="height:400px; background-color: #f08a24; width: 100%;"><br>
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>


            <div id="menu2" class="tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>


            <div id="menu4" class="tab-pane fade"><br>
                <h3>Menu 4</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>


            <div id="tables" class="tab-pane fade"><br>
                <h3>tables</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>


            <div id="charts" class="tab-pane fade"><br>
                <h3>charts</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>
        </div>


        <div id="rozmiar" class="alert alert-danger alert-dismissible">
            <div class="row">
                <div class="col-9"><strong>Uaaga!</strong> Zalecane jest stosowania wyswietlaczy o wiekszym rozmiarze.
                </div>
                <div class="col-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            </div>


        </div>

    </div>

</div>
<script src="/public/js/chart.js/Chart.min.js"></script>
<script src="/public/js/chart.js/chart-area-data.js"></script>

</body>
</html>