<?php


class OrderController extends Controller
{

    public function index()
    {
        $user = $this->model('User');
        $orderModel = $this->model('Order');
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

            //TODO Order/index.php

        }
    }




}