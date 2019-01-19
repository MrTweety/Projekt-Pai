<?php


class UserController extends Controller
{

    public function index()
    {

        $user = $this->model('User');
        if (!$user->is_logged_in()){
            $this->redirect("/");
        }else {


            $this->partial("header");
            $this->partial("nav_user");
            $this->view('user/index');
            echo "\nzalogowano";
            $this->partial("footer");
        }

    }

    public function search(){


        $user = $this->model('User');
        if (!$user->is_logged_in()){
            $this->partial('header');
            $this->partial('nav');
            $this->view("user/search");
            $this->partial('footer');
        }else {

            $this->partial('header');
            $this->partial('nav_user');
            $this->view("user/search");
            $this->partial('footer');
        }
    }

    public function offer(){

        $user = $this->model('User');
        
        if (!$user->is_logged_in()){
            $this->partial('header');
            $this->partial('nav');
            $this->view("user/offer");
            $this->partial('footer');
        }else {

            $this->partial('header');
            $this->partial('nav_user');
            $this->view("user/search");
            $this->partial('footer');
        }
    }

    public function login(){
        $this->view('user/login');
    }

    public function register(){

        $this->partial('header');
        $this->partial('nav');

        $this->view('user/register');
        $this->partial('footer');



    }

    public function auth(){
        if (!isset($_POST) || empty($_POST)){
        $this->redirect("/");
        die();
    }else{
            $user = $this->model('User');
            if ($user->auth($_POST)){
                $this->redirect("/user");


            }else {
                $this->redirect("/home/notLogin");

            }
        }
    }

    public function create() {
        if (!isset($_POST) || empty($_POST)){
            $this->redirect("/");
            die();
        }else {
            $user = $this->model('User');
            if ($user->insert($_POST)){
//                $this->redirect("/home/Registered");
                echo "1, Registered";
            }else {
//                $this->redirect("/home/notRegister");
                echo "2, notRegister";
            }
        }
    }




}
