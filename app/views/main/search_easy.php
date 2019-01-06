<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 0;

//$sql = "SELECT\n"
////    . "Oferta.id_oferta,\n"
////    . "Oferta.cena_netto,\n"
////    . "Oferta.data_zlozenia,\n"
////    . "Oferta.img,\n"
////    . "Oferta.wyswietlenia,\n"
////    . "Kraj_pochodzenia.pl,\n"
////    . "Model.model_nazwa,\n"
////    . "Marka.marka_nazwa,\n"
////    . "Samochod.rok_produkcji\n"
////    . "FROM\n"
////    . "Oferta\n"
////    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
////    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
////    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
////    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n";


$sql = "SELECT\n"

    . "Oferta.img,\n"
    . "Oferta.wyswietlenia,\n"
    . "    model.model_nazwa,\n"

    . "    marka.marka_nazwa,\n"

    . "    Oferta.id_oferta,\n"

    . "    Oferta.cena_netto,\n"

    . "    Oferta.data_zlozenia,\n"

//    . "    samochod.rok_produkcji,\n"

    . "    Kraj_pochodzenia.pl,\n"

    . "    Model.id_model,\n"

    . "    Marka.id_marka,\n"

    . "    GROUP_CONCAT(\n"

    . "       `wartosc`,jednostka SEPARATOR ' • ')  \n"

    . "     AS Result\n"

    . "FROM\n"

    . "    Oferta\n"

    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"

    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"

    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"

    . "INNER JOIN Cechy_somochod ON Cechy_somochod.id_samochod = Samochod.id_samoch\n"

    . "INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"

    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n";



if((!isset($_POST["marka"]) || $_POST["marka"] == -1) && (!isset($_POST["model"]) || $_POST["model"] == -1))
{
//    $sql = "SELECT\n"
//        . "Oferta.id_oferta,\n"
//        . "Oferta.cena_netto,\n"
//        . "Oferta.data_zlozenia,\n"
//        . "Oferta.img,\n"
//        . "Oferta.wyswietlenia,\n"
//        . "Kraj_pochodzenia.pl,\n"
//        . "Model.model_nazwa,\n"
//        . "Marka.marka_nazwa,\n"
//        . "Samochod.rok_produkcji\n"
//        . "FROM\n"
//        . "Oferta\n"
//        . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
//        . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
//        . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
//        . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n";


}
elseif (( $_POST["marka"] != -1) && ( $_POST["model"] != -1))
{
    $marka = $_POST["marka"];
    $model = $_POST["model"];

    if($where==0)$sql = $sql. " WHERE \n";
    ++$where;
    $sql = $sql
        . "Marka.id_marka =".$marka."\n"
        . " AND\n"
        . "Model.id_model =" .$model."\n";
}

elseif (( $_POST["marka"] != -1) && ( $_POST["model"] == -1))
{
    $marka = $_POST["marka"];

    if($where==0)$sql = $sql. " WHERE \n";
    ++$where;
    $sql = $sql . "Marka.id_marka =".$marka."\n";
}

elseif (( $_POST["marka"] == -1) && ( $_POST["model"] != -1))
{
    $model = $_POST["model"];


    if($where==0)$sql = $sql. " WHERE \n";
    ++$where;
    $sql = $sql . "Model.id_model =" .$model."\n";
}



//CENA
if ( !empty($_POST["cenaOd"]) && !empty($_POST["cenaDo"]) )
{

    if($_POST["cenaOd"] < $_POST["cenaDo"]){
        $cenaOd = $_POST["cenaOd"];
        $cenaDd = $_POST["cenaDo"];
    }
    else{
        $cenaDd = $_POST["cenaOd"];
        $cenaOd = $_POST["cenaDo"];
    }


    if($where == 0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql  . "  Oferta.cena_netto <= ".$cenaDd." AND\n"

        . "Oferta.cena_netto >= ".$cenaOd."\n";
}
elseif ( empty($_POST["cenaOd"]) && !empty($_POST["cenaDo"]) )
{
    $cenaDd = $_POST["cenaDo"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "  Oferta.cena_netto <= ".$cenaDd."\n";
}
elseif ( !empty($_POST["cenaOd"]) && empty($_POST["cenaDo"]) )
{
    $cenaOd = $_POST["cenaOd"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . " Oferta.cena_netto >= ".$cenaOd."\n";
}


////ROK_sam
//
//if ( !empty($_POST["rokOd"]) && !empty($_POST["rokDo"]) )
//{
//
//    if($_POST["rokOd"] < $_POST["rokDo"]){
//        $rokOd = $_POST["rokOd"];
//        $rokDo = $_POST["rokDo"];
//    }
//    else{
//        $rokOd = $_POST["rokDo"];
//        $rokDo = $_POST["rokOd"];
//    }
//
//
//    if($where == 0)$sql = $sql. " WHERE \n";
//    else $sql = $sql. " AND \n";
//    ++$where;
//    $sql = $sql  . " Samochod.rok_produkcji <= ".$rokDo." AND\n"
//
//        . "Samochod.rok_produkcji >= ".$rokOd."\n";
//}
//elseif ( empty($_POST["rokOd"]) && !empty($_POST["rokDo"]) )
//{
//    $rokDo = $_POST["rokDo"];
//
//    if($where==0)$sql = $sql. " WHERE \n";
//    else $sql = $sql. " AND \n";
//    ++$where;
//    $sql = $sql . " Samochod.rok_produkcji <= ".$rokDo."\n";
//}
//elseif ( !empty($_POST["rokOd"]) && empty($_POST["rokDo"]) )
//{
//    $rokOd = $_POST["rokOd"];
//
//    if($where==0)$sql = $sql. " WHERE \n";
//    else $sql = $sql. " AND \n";
//    ++$where;
//    $sql = $sql . " Samochod.rok_produkcji >= ".$rokOd."\n";
//}

//ROK_sam

if ( !empty($_POST["rokOd"]) && !empty($_POST["rokDo"]) )
{

    if($_POST["rokOd"] < $_POST["rokDo"]){
        $rokOd = $_POST["rokOd"];
        $rokDo = $_POST["rokDo"];
    }
    else{
        $rokOd = $_POST["rokDo"];
        $rokDo = $_POST["rokOd"];
    }


    if($where == 0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;

    $sql = $sql

        . "    cechy_somochod.id_samochod in ("
        . "    SELECT\n"
        . "    cechy_somochod.id_samochod\n"
        . "    FROM\n"
        . "    cechy_somochod\n"
        . "    INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "    WHERE\n"
        . "    Cechy.id_cechy = 2 and cechy_somochod.wartosc <= ".$rokDo ."\n"
        ." AND\n"
        . "cechy_somochod.wartosc >= ".$rokOd." )\n";

}




elseif ( empty($_POST["rokOd"]) && !empty($_POST["rokDo"]) )
{
    $rokDo = $_POST["rokDo"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql

        . "    cechy_somochod.id_samochod in ("
        . "    SELECT\n"
        . "    cechy_somochod.id_samochod\n"
        . "    FROM\n"
        . "    cechy_somochod\n"
        . "    INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "    WHERE\n"
        . "    Cechy.id_cechy = 2 and cechy_somochod.wartosc <= ".$rokDo ."\n"
        ." )\n";

}
elseif ( !empty($_POST["rokOd"]) && empty($_POST["rokDo"]) )
{
    $rokOd = $_POST["rokOd"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;

    $sql = $sql

        . "    cechy_somochod.id_samochod in ("
        . "    SELECT\n"
        . "    cechy_somochod.id_samochod\n"
        . "    FROM\n"
        . "    cechy_somochod\n"
        . "    INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "    WHERE\n"
        . "    Cechy.id_cechy = 2 and cechy_somochod.wartosc >= ".$rokOd." )\n";

}




//przebieg
if ( !empty($_POST["przebiegOd"]) && !empty($_POST["przebiegDo"]) )
{

    if($_POST["przebiegOd"] < $_POST["przebiegDo"]){
        $przebiegOd= $_POST["przebiegOd"];
        $przebiegDo = $_POST["przebiegDo"];
    }
    else{
        $przebiegOd = $_POST["przebiegDo"];
        $przebiegDo = $_POST["przebiegOd"];
    }


    if($where == 0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;

    $sql = $sql

        . "    cechy_somochod.id_samochod in ("
        . "    SELECT\n"
        . "    cechy_somochod.id_samochod\n"
        . "    FROM\n"
        . "    cechy_somochod\n"
        . "    INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "    WHERE\n"
        . "    Cechy.id_cechy = 8 and cechy_somochod.wartosc <= ".$przebiegDo ."\n"
        ." AND\n"
        . "cechy_somochod.wartosc >= ".$przebiegOd." )\n";

}



elseif ( empty($_POST["przebiegOd"]) && !empty($_POST["przebiegDo"]) )
{
    $przebiegDo = $_POST["przebiegDo"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;


    $sql = $sql

        . "    cechy_somochod.id_samochod in ("
        . "    SELECT\n"
        . "    cechy_somochod.id_samochod\n"
        . "    FROM\n"
        . "    cechy_somochod\n"
        . "    INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "    WHERE\n"
        . "    Cechy.id_cechy = 8 and cechy_somochod.wartosc <= ".$przebiegDo ."\n"
        ." )\n";



}
elseif ( !empty($_POST["przebiegOd"]) && empty($_POST["przebiegDo"]) )
{
    $przebiegOd = $_POST["przebiegOd"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;


    $sql = $sql

        . "    cechy_somochod.id_samochod in ("
        . "    SELECT\n"
        . "    cechy_somochod.id_samochod\n"
        . "    FROM\n"
        . "    cechy_somochod\n"
        . "    INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "    WHERE\n"
        . "    Cechy.id_cechy = 8 and cechy_somochod.wartosc >= ".$przebiegOd." )\n";

}


//kraj

if ( !empty($_POST["kraj"]) && ( $_POST["kraj"] != -1) )
{
        $kraj = $_POST["kraj"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "Kraj_pochodzenia.id_kraj =" .$kraj."\n";

}



$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');
$sql= $sql . "group by Oferta.id_oferta";
$result = $link->query($sql);

$data = [];


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$i]['id_oferta'] = $row['id_oferta'];
        $data[$i]['cena_netto'] = $row['cena_netto'];
        $data[$i]['data_zlozenia'] = $row['data_zlozenia'];
        $data[$i]['imgg'] = '<img src="../../../public/img/' . $row['img'] . '.jpg">';
        $data[$i]['imga'] = $row['img'] ;
        $data[$i]['wyswietlenia'] = $row['wyswietlenia'];
        $data[$i]['kraj'] = $row['pl'];
        $data[$i]['model'] = $row['model_nazwa'];
        $data[$i]['marka'] = $row['marka_nazwa'];
//        $data[$i]['rok'] = $row['rok_produkcji'];
        $data[$i]['cechy'] = $row['Result'];
        $i++;
    }
}
//echo json_encode(['data' => $data]);
echo json_encode($data);

?>