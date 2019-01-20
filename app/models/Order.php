<?php


class Order extends Model
{
    public static $ADMIN_TYPE = 1;
    public static $CLIENT_TYPE = 2;
//    public static $MY_TYPE = 3;

    public function __construct()
    {
        parent::__construct();
        $this->db-> query ('SET NAMES utf8');
//        $this->db-> query ('SET CHARACTER_SET utf8_unicode_ci');
    }




}



