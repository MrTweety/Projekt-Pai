<?php


class UserController extends Controller
{

    public function index()
    {

        $this->view('user/index');
    }




    public function search(){
        $this->partial('header');
        $this->partial('nav');
        $this->view("user/search");
        $this->partial('footer');

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
                $this->redirect("/home/isLogin");


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
                echo 1;
            }else {
//                $this->redirect("/home/notRegister");
                echo 2;
            }
        }
    }




}
