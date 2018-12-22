<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-12-15
 * Time: 19:27
 */

class HomeController extends Controller
{
    public function index()
    {
       $this->view('home/index');
    }

    public function isLogin(){
        $this->view("home/isLogin");
    }

    public function notLogin(){
        $this->view("home/index");
    }

    public function notRegister(){
        $this->view("home/index");
    }
    public function Registered(){
        $this->view("home/registered");
    }



}