<?php


class UserController extends Controller
{

    public function index()
    {

        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->redirect("/");
        } else {

            $this->partial("header");

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_admin", $dataP);
                    break;
                case User::$CLIENT_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_user", $dataP);
                    break;
            }
            $data = $user->get_all();
            $this->view('user/index',$data);
//            $this->partial("footer");

        }
        $this->partial("noscript");
    }


    public function login()
    {
        $this->view('user/login');
    }

    public function register()
    {

        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->partial('header');
            $this->partial('nav');

            $this->view('user/register');
//            $this->partial('footer');

        } else {

            $this->redirect("/");
        }

        $this->partial("noscript");
    }

    public function auth()
    {

        if (!isset($_POST) || empty($_POST)) {
            $this->redirect("/");
            die();
        } else {
            $user = $this->model('User');
            if ($user->auth($_POST)) {
                $this->redirect("/user/index");


            } else {
                $this->redirect("/");

            }
        }
    }

    public function logout()
    {
        if (!isset($_COOKIE['id'])) {
            $this->redirect("/");
        } else {
            $user = $this->model('User');
            if ($user->logout()) {
                $this->redirect("/");
            }
        }
    }

    public function create()
    {
        if (!isset($_POST) || empty($_POST)) {
            $this->redirect("/");
            die();
        } else {
            $user = $this->model('User');
            if ($user->insert($_POST)) {
//                $this->redirect("/home/Registered");
                echo "1";
            } else {
//                $this->redirect("/home/notRegister");
                echo "2";
            }
        }
    }


    public function changePassword()
    {
        if (!isset($_POST) || empty($_POST)) {
            $this->redirect("/");
            die();
        } else {
            $user = $this->model('User');
            if ($user->changePassword($_POST)) {
//                $this->redirect("/home/Registered");
                return true;
            } else {
//                $this->redirect("/home/notRegister");
                return false;
            }
        }
    }

    public function checkLogin()
    {
        if (!isset($_POST) || empty($_POST)) {
            $this->redirect("/");
            die();
        } else {
            $user = $this->model('User');
            if (!$user->find_by_login($_POST['login'])) {
                echo 1;
            } else {
                echo 0;
            }
        }
    }

    public function checkEmail()
    {
        if (!isset($_POST) || empty($_POST)) {
            $this->redirect("/");
            die();
        } else {
            $user = $this->model('User');
            if (!$user->find_by_email($_POST['email'])) {
                echo 1;
            } else {
                echo 0;
            }
        }
    }




    public function noscript(){
        $this->partial("header");
        $this->partial("noscriptinfo");
    }

//search page @TODO jak zostanie czas stworzyć własny kontroler dla ofert
    public function search()
    {
        $this->partial("header");
        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->partial("nav");
        } else {

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_admin", $dataP);
                    break;
                case User::$CLIENT_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_user", $dataP);
                    break;
            }


        }
        $this->view('user/search');
        $this->partial("footer");
        $this->partial("noscript");


    }


    public function offer()
    {
        $this->partial("header");
        $user = $this->model('User');
        $login = $user->is_logged_in();
        if (!$login) {
            $this->partial("nav");
        } else {

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_admin", $dataP);
                    break;
                case User::$CLIENT_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_user", $dataP);
                    break;
            }


        }
        $this->view('user/offer',$login);
        $this->partial("footer");
        $this->partial("noscript");

    }
    
    public function cart()
    {
        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->redirect("/");
        } else {

            $this->partial("header");

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_admin", $dataP);
                    break;
                case User::$CLIENT_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_user", $dataP);
                    break;
            }

        $this->view('user/cart');
        $this->partial("footer");
        $this->partial("noscript");

        }

    }

    public function buy()
    {
        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->redirect("/");
        } else {

            $this->partial("header");

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_admin", $dataP);
                    break;
                case User::$CLIENT_TYPE:
                    $dataP = $user->get_name();
                    $this->partial("nav_user", $dataP);
                    break;
            }

        $this->view('user/buy');
        $this->partial("footer");
        $this->partial("noscript");

        }

    }
    





    /**
     * Funkcja @check wykozrystywana jedynie do testowania MVC @TODO usunąć w finalnej wersji
     * @param array $params
     * @param array $params2
     */
    public function check($params = [], $params2 = [])
    {
//        $this->partial("header");
//        $user = $this->model('User');
//        $aa = $user->get_name();
//        echo $aa['imie'];

//        echo "\n\nwitaj " . $params . $params2;
//        $order = "ala";
        $this->view('home/isLogin');

//        $this->partial('footer', $order);
//        $this->partial("noscript");

    }

}