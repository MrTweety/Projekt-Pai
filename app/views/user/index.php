<!--@TODO panel klienta-->


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




                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">26 Aktywnych Użytkowników!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">11 Nowych Ofert!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">123 Nowych Zamówień!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="mr-5">13 Nowych Użytkowników!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
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


</body>
</html>