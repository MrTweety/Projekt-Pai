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
                    $this->partial("nav_admin");
                    break;
                case '2':
                    $this->partial("nav_user");
                    break;
                default:
                    $this->partial("nav");
            }

            $this->view('user/index');
            echo "\nzalogowano";
            $this->partial("footer");
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
                $this->redirect("/user");
                echo $user->get_type();


            } else {
                $this->redirect("/home/isLogin");

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
                    $this->partial("nav_admin");
                    break;
                case '2':
                    $this->partial("nav_user");
                    break;
            }


        }
        $this->view('user/offer');
        $this->partial("footer");

    }


}