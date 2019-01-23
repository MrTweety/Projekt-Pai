
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand " href="/"><h3>Classic<span>4you.eu</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" id="home_page">
                <a class="nav-link" href="/" ><i class='fa fa-home'></i> Strona główna <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <!--            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">-->
            <!--            <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>-->
            <a href="/user/register" id="load" class="btn btn btn-dark my-2 my-sm-0 mr-sm-2" style="color: white;"><i class="fa fa-user"></i> Sing up</a>
            <a onclick="load_login_form()" id="load_login_form" class="btn btn btn-dark my-2 my-sm-0 mr-sm-2"  style="color: white;"><i class="fa fa-sign-in"></i> Login</a>
        </form>

    </div>
</nav>

<div id="log_form" class="modal"></div>