<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 0;


if(isset($_POST["select"])){
    $link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
    $link -> query ('SET NAMES utf8');
    $link -> query ('SET CHARACTER_SET utf8_unicode_ci');


    if($_POST["select"] == "marka"){

        $sql = 'select id_marka, marka_nazwa from marka';
        $result = $link->query($sql);

        $typ =[];

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $typ[$i]['id_tab'] = $row['id_marka'];
                $typ[$i]['name_tab'] = $row['marka_nazwa'];

                $i++;
            }
        }
    }
    elseif ($_POST["select"]== "model"){


        if (isset($_POST["marka"]) && $_POST["marka"]!= -1) {
            $marka = $_POST["marka"];
            $sql = "select id_model, model_nazwa from model where id_marka = '$marka'";
        }else{
            $sql = 'select id_model, model_nazwa from model';
        }

        $result = $link->query($sql);

        $typ =[];

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $typ[$i]['id_tab'] = $row['id_model'];
                $typ[$i]['name_tab'] = $row['model_nazwa'];

                $i++;
            }
        }


    }elseif ($_POST["select"] == "kolor"){

        $cecha = $_POST["cecha"];

        $sql = "SELECT DISTINCT\n"

            . "    Cechy_somochod.wartosc\n"

            . "FROM\n"

            . "    Cechy_somochod,\n"

            . "    Cechy\n"

            . "WHERE\n"

            . "    cechy.id_cechy = cechy_somochod.id_cechy AND Cechy.nazwa_cechy = \"". $cecha ." \" ORDER BY Cechy_somochod.wartosc";


        $result = $link->query($sql);
        $typ =[];


        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $typ[$i]['id_tab'] = $row['wartosc'];
                $typ[$i]['name_tab'] = $row['wartosc'];

                $i++;
            }
        }

    } elseif ($_POST["select"] == "kraj"){

        $sql = "SELECT\n"
            . "Kraj_pochodzenia.id_kraj,\n"
            . "Kraj_pochodzenia.pl\n"
            . "FROM\n"
            . "Kraj_pochodzenia";


        $result = $link->query($sql);
        $typ =[];

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $typ[$i]['id_tab'] = $row['id_kraj'];
                $typ[$i]['name_tab'] = $row['pl'];

                $i++;
            }
        }
    }



    echo json_encode($typ);


}


?>