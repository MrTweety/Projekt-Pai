<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Bootstrap Example</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-- asdfasdfasdfasdfdsaf dsafasdf-->
<div class="container">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#Login">Zaloguj się</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#Register">Rejestracja</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="Login" class="container tab-pane active"><br>
            <div class="container">
                <h2>Stacked form</h2>
                <form action="/user/auth" method="post">
                    <div class="form-block">
                        <label for="email" >Email:</label>
                        <input type="email" name="email" placeholder="e-mail" id="email"  />

                    </div>
                    <div class="form-block">
                        <label for="password" >Password:</label>
                        <input type="password" name="password" placeholder="Password" id="password"  />
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div id="Register" class="container tab-pane fade"><br>
            <div class="container">
                <div class="row">
                    <div class="form-block">
                        <form class="login-form" method="POST" action="/user/create">
                            <div class="field"><h1>Sign up</h1></div>
                            <div class="field">
                                <label for="email" >Email:</label>
                                <input type="email" name="email" placeholder="e-mail" id="email"  />
                            </div>
                            <div class="field">
                                <label for="password" >Password:</label>
                                <input type="password" name="password" placeholder="Password" id="password"  />
                            </div>
                            <div class="field">
                                <label for="password-confirmation" >Confirm Password:</label>
                                <input type="password" name="password-confirmation" placeholder="Confirm password" id="password-confirmation"  />
                            </div>

                            <div class="field">
                                <button class="btn" id="login-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
