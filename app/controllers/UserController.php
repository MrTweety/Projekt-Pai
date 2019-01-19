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

                case '1':
                    $dataP=$user->get_name();
                    $this->partial("nav_admin",$dataP);
                    break;
                case '2':
                    $dataP=$user->get_name();
                    $this->partial("nav_user",$dataP);
                    break;
                default:
                    $this->partial("nav");
            }

            $this->view('user/index');
            echo "\nzalogowano";
            $this->partial("footer");

            echo $user->get_id();
        }

    }


    public function login()
    {
        $this->view('user/login');
    }

    public function register()
    {

        $this->partial('header');
        $this->partial('nav');

        $this->view('user/register');
        $this->partial('footer');


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
                echo "1, Registered";
            } else {
//                $this->redirect("/home/notRegister");
                echo "2, notRegister";
            }
        }
    }


//search page
    public function search()
    {


        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->partial('header');
            $this->partial('nav');
            $this->view("user/search");
            $this->partial('footer');
        } else {

            $this->partial('header');
            $this->partial('nav_admin');
            $this->view("user/search");
            $this->partial('footer');
        }


    }


    public function offer()
    {
        $this->partial("header");
        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->partial("nav");
        } else {

            switch ($user->get_type()) {

                case '1':
                    $dataP=$user->get_name();
                    $this->partial("nav_admin",$dataP);
                    break;
                case '2':
                    $dataP=$user->get_name();
                    $this->partial("nav_user",$dataP);
                    break;
            }


        }
        $this->view('user/offer');
        $this->partial("footer");

    }




    public function check($params =[],$params2 =[])
    {

        $user = $this->model('User');
        $aa= $user->get_name();
        echo $aa['imie'];

        echo "\n\nwitaj ".$params.$params2;
        $order="ala";
        $this->view('home/isLogin',$order);

        $this->partial('footer',$order);


    }

}