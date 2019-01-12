<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Strona glowna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    bootstrap,jquery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--    bootstrap,jquery-->

    <!--font-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!--font-->

    <!--    footer-->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../public/css/footer-distributed-with-address-and-phones.css">
    <!--    footer-->

    <!--    gallery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="../../../public/css/compact-gallery.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <!--    gallery-->

    <link rel="stylesheet" href="../../../public/css/home_page.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/adminpanel.css" type="text/css">
    <script src="../../../public/js/my_js.js"></script>





    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            max-height: 500px;
        }
    </style>

</head>
<body onload="load_login_form()" style="background-color: white !important;m">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand " href="#"><h3>Classic<span>4you.eu</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" id="home_page">
                <a class="nav-link" href="/app/views/main/indexx.php" ><i class='fa fa-home'></i> Strona główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>

        </ul>

        <form class="form-inline my-2 my-lg-0">
<!--            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>-->
            <a href="#" id="load" class="btn btn btn-dark my-2 my-sm-0 mr-sm-2"><i class="fa fa-user"></i> Sing up</a>
            <a href="#" id="load_login_form" class="btn btn btn-dark my-2 my-sm-0 mr-sm-2"><i class="fa fa-sign-in"></i> Login</a>
        </form>

    </div>
</nav>


<div id="wrapper">
    <div id="sidebar" >
            <ul class="nav flex-column nav-pills sidebar" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active"   data-toggle="tab" href="#dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Pages</span>
                    <i class="fa fa-chevron-down "></i>
                </a>
                <div class="dropdown-menu dropdown-toggle"  >
                    <h6 class="dropdown-header">Oferta:</h6>
                            <a class="dropdown-item " data-toggle="tab" href="#home">Home</a>
                            <a class="dropdown-item" data-toggle="tab" href="#menu1">Menu 1</a>
                            <a class="dropdown-item" data-toggle="tab" href="#menu2">Menu 2</a>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="404.html">404 Page</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"data-toggle="tab"  href="#charts">
                    <i class="fa fa-area-chart"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tables">
                    <i class="fa fa fa-table"></i>
                    <span>Tables</span></a>
            </li>
        </ul>

    </div>
    <div id="content-wrapper">
            <div class="tab-content" style="width: 100%;">

                <div id="dashboard" class="container tab-pane active " style="height:1400px; background-color: white; width: 100%!important;"><br>
                    <h3>dashboard</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="home" class=" tab-pane fade w-100" style="height:1200px; background-color: #0000bf; width: 100%!important;"><br>
                    <h3>HO2ME</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="container tab-pane fade" style="height:400px; background-color: #f08a24; width: 100%;"><br>
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>

                <div id="menu4" class="container tab-pane fade"><br>
                    <h3>Menu 4</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="tables" class="container tab-pane fade"><br>
                    <h3>tables</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="charts" class="container tab-pane fade"><br>
                    <h3>charts</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>


        <div style="height:200px; background-color: #0000bf;"></div>
        <div style="height:400px; background-color: #f08a24"></div>


<!--        <footer class="footer-distributed" >-->
<!---->
<!--            <div class="footer-left">-->
<!---->
<!--                <h3>Classic<span>4you</span></h3>-->
<!---->
<!--                <p class="footer-links">-->
<!--                    <a href="#">Strona główna</a>-->
<!--                    ·-->
<!--                    <a href="#">About</a>-->
<!--                    ·-->
<!--                    <a href="#">projects</a>-->
<!--                    ·-->
<!--                    <a href="#">Faq</a>-->
<!--                    ·-->
<!--                    <a href="#">Contact</a>-->
<!--                </p>-->
<!---->
<!--                <p class="footer-company-name">Classic4you &copy; 2019</p>-->
<!--            </div>-->
<!---->
<!--            <div class="footer-center">-->
<!--                <div id ="footer-center-center" >-->
<!---->
<!--                    <div>-->
<!--                        <i class="fa fa-map-marker"></i>-->
<!--                        <p><span>Aleja Słowackiego Juliusza 46</span> Kraków, Polska</p>-->
<!--                    </div>-->
<!---->
<!--                    <div>-->
<!--                        <i class="fa fa-phone"></i>-->
<!--                        <p>+1 555 123456</p>-->
<!--                    </div>-->
<!---->
<!--                    <div>-->
<!--                        <i class="fa fa-envelope"></i>-->
<!--                        <p><a href="mailto:support@company.com">support@Classic4you.com</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="footer-right">-->
<!---->
<!--                <p class="footer-company-about">-->
<!--                    <span>About the company</span>-->
<!--                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.-->
<!--                </p>-->
<!---->
<!--                <div class="footer-icons">-->
<!---->
<!--                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>-->
<!--                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>-->
<!--                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>-->
<!--                    <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </footer>-->
        <div><?php include_once '../partials/footer.php'?></div>

    </div>

</div>






</body>
</html>