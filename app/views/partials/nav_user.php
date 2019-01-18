<!--@TODO user navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand " href="/"><h3>Classic<span>4you.eu</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" id="home_page">
                <a class="nav-link" href="/" ><i class='fa fa-home'></i> Strona główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Contact</a>
            </li>

        </ul>

        <form class="form-inline my-2 my-lg-0">
            <!--            <a  id="load" class=" btn btn-dark my-2 my-sm-0 mr-sm-2" style="color: white;"><i class="fa fa-user"></i> Sing up</a>-->

            <div class=" dropdown profile-dropdown" style="z-index: 100;">
                <a  class=" btn btn-dark dropdown-toggle" data-toggle="dropdown" style="color: white;">
                    <img src="/public/img/avatar/userK.png" alt="Avatar" class="avatar">

                    <span class="hidden-xs">User User</span> <b class="caret"></b>
                </a>

                <ul class="dropdown-menu" style="z-index: 100 !important; background-color: white">
                    <li><a class="dropdown-item " href="user-profile.html" style="color: black;"><i class="fa fa-user"></i>Profil</a></li>
<!--                    <li><a class="dropdown-item " href="#" style="color: black;"><i class="fa fa-cog"></i>Panel Admina</a></li>-->
                    <!--                    <li><a class="dropdown-item " href="#" style="color: black;"><i class="fa fa-envelope-o"></i>Messages</a></li>-->
                    <li><a class="dropdown-item " href="/user/logout" style="color: black;"><i class="fa fa-power-off"></i>Wyloguj</a></li>
                </ul>
            </div>

            <a href="/user/logout" id="load_login_form" class="btn btn-dark my-2 my-sm-0 mr-sm-2" style="color: white;"><i class="fa fa-sign-out"></i>
                Wyloguj</a>
        </form>

    </div>
</nav>

<div id="log_form" class="modal"></div>