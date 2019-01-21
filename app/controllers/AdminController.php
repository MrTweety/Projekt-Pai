<?php


class AdminController extends Controller
{

    public function index()
    {
        $user = $this->model('User');

        if (!$user->is_logged_in())
        {
            $this->redirect('/');
        } else {

            switch ($user->get_type())
            {

                case User::$ADMIN_TYPE:
                    $this->redirect('/admin/adminpanel');
                    break;
                case User::$CLIENT_TYPE:
                    $this->redirect('/');
                    break;
            }
        }
    }

    public function adminpanel()
    {
        $user = $this->model('User');

        if($user->get_type()== User::$ADMIN_TYPE)
        {
            $dataP=$user->get_name();
            $this->partial("header");
            $this->partial("nav_admin",$dataP);
            $this->view("/admin/adminpanel");
        }
        else {
            $this->redirect('/');
        }
        $this->partial("noscript");
    }



public function dashboardInfo()
{
    $user = $this->model('User');
    $adminrModel = $this->model('Admin');
    if($user->get_type()== User::$ADMIN_TYPE) {

        $adminrModel->dashboardInfo();

    }else {
        $this->redirect('/');
    }

}

    public function Chart()
    {
        $user = $this->model('User');
        $adminrModel = $this->model('Admin');
        if($user->get_type()== User::$ADMIN_TYPE) {

            $adminrModel->Chart();

        }else {
            $this->redirect('/');
        }

    }

}
