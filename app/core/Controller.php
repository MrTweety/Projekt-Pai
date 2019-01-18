<?php

class Controller
{
    public function model($model)
    {
        require_once 'app/models/' .$model .'.php';
        return new $model();
    }



    public function view($view, $data = [])
    {
        require_once 'app/views/'.$view.'.php';

    }

    public function partial($part){
        require_once 'app/views/partials/'.$part.'.php';
    }

    public function redirect($url){
        if (headers_sent()){

        }else {
            header("location: ".$url);
        }
    }

}