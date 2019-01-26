<?php


class HomeController extends Controller
{
    public function index()
    {
        $this->partial("header");
        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->partial("nav");
        } else {

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP=$user->get_name();
                    $this->partial("nav_admin",$dataP);
                    break;
                case User::$CLIENT_TYPE:
                    $dataP=$user->get_name();
                    $this->partial("nav_user",$dataP);
                    break;
            }


        }
        $this->view('home/index');
        $this->partial("footer");
        $this->partial("noscript");
    }




    public function error404()
    {
        $this->partial("header");
        $user = $this->model('User');
        if (!$user->is_logged_in()) {
            $this->partial("nav");
        } else {

            switch ($user->get_type()) {

                case User::$ADMIN_TYPE:
                    $dataP=$user->get_name();
                    $this->partial("nav_admin",$dataP);
                    break;
                case '2':
                    $dataP=$user->get_name();
                    $this->partial("nav_user",$dataP);
                    break;
            }


        }
        $this->view('home/error-404');
        $this->partial("footer");
        $this->partial("noscript");
    }

    public function error500()
    {
        $this->view('home/error-500');

    }




//    @TODO sprawdzić czy funkcje poniżej sa używane
    public function isLogin(){
        $this->partial('header');
        $this->partial('nav');
        $this->view("home/isLogin");
    }

    public function notLogin(){
        $this->redirect('/');
    }

    public function notRegister(){
        $this->view("home/index");
    }
    public function Registered(){
        $this->partial('header');
        $this->partial('nav');
        $this->view("home/registered");
    }
}