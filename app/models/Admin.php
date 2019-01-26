<?php


class Admin extends Model
{
    public static $ADMIN_TYPE = 1;
    public static $CLIENT_TYPE = 2;

//    public static $MY_TYPE = 3;

    public function __construct()
    {
        parent::__construct();
        $this->db->query('SET NAMES utf8');
//        $this->db-> query ('SET CHARACTER_SET utf8_unicode_ci');
    }


    public function dashboardInfo()
    {
        $sql = "SELECT CountNew_order(" . date('m') . "," . date('Y') . ") as CnewOrder";
        $result = $this->db->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        $data['CnewOrder'] = $result['CnewOrder'];

        $sql = "SELECT CountActiveUser() as CountActiveUser";
        $result = $this->db->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        $data['CountActiveUser'] = $result['CountActiveUser'];

        $data['CountNewOrder'] = $result['CountActiveUser'];

        $sql = "SELECT CountNewUser(" . date('m') . "," . date('Y') . ") as CountNewUser";
        $result = $this->db->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        $data['CountNewUser'] = $result['CountNewUser'];


        echo json_encode($data);
        return 5;
    }


    public function Chart()
    {
        $month = 12;



        $monthI = $month;

        for ($i = 0; $i < $month+1; ++$i) {
            $monthI--;
            $sql = "SELECT CountNewUser(" . (int)date('m', strtotime("-".$monthI." month")) . "," . (int)date('Y', strtotime("-".$monthI." month")) . ") as monthVal";
            $result = $this->db->query($sql);
            $result = $result->fetch(PDO::FETCH_ASSOC);



            $data[$i]['monthName'] = date('M', strtotime("-".$monthI." month"));
            $data[$i]['yearInt'] = (int)date('Y', strtotime("-".$monthI." month"));
            $data[$i]['monthInt'] =(int)date('m', strtotime("-".$monthI." month"));
            $data[$i]['monthVal'] =$result['monthVal'];

        }
//
//
        echo json_encode(['Chart' => $data]);
//        return 5;

//        echo json_encode($data);
        return 5;
    }



}



