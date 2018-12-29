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
        $this->partial('header');
        $this->partial('nawigacja');
        $this->partial('slajdery');
        $this->partial('panel_zdjecia');
        $this->partial('wyszukiwanie');
        $this->partial('footer');

       $this->view('home/index');
    }

    public function isLogin(){
        $this->view("home/isLogin");
    }

    public function notLogin(){
        $this->redirect('/');
    }

    public function notRegister(){
        $this->view("home/index");
    }
    public function Registered(){
        $this->view("home/registered");
    }



}