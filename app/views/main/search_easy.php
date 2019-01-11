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
    . "model.model_nazwa,\n"
    . "marka.marka_nazwa,\n"
    . "Oferta.id_oferta,\n"
    . "Oferta.opis,\n"
    . "Oferta.cena_netto,\n"
    . "Oferta.data_zlozenia,\n"
//    . "samochod.rok_produkcji,\n"
    . "Kraj_pochodzenia.pl,\n"
    . "Model.id_model,\n"
    . "Marka.id_marka,\n"
    . "GROUP_CONCAT(\n"
    . "`wartosc`,jednostka SEPARATOR ' • ')  \n"
    . "AS Result\n"
    . "FROM\n"
    . "Oferta\n"
    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"
    . "INNER JOIN Cechy_somochod ON Cechy_somochod.id_samochod = Samochod.id_samoch\n"
    . "INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n";



if((!isset($_GET["marka"]) || $_GET["marka"] == -1) && (!isset($_GET["model"]) || $_GET["model"] == -1))
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
elseif (( $_GET["marka"] != -1) && ( $_GET["model"] != -1))
{
    $marka = $_GET["marka"];
    $model = $_GET["model"];

    if($where==0)$sql = $sql. " WHERE \n";
    ++$where;
    $sql = $sql
        . "Marka.id_marka =".$marka."\n"
        . " AND\n"
        . "Model.id_model =" .$model."\n";
}

elseif (( $_GET["marka"] != -1) && ( $_GET["model"] == -1))
{
    $marka = $_GET["marka"];

    if($where==0)$sql = $sql. " WHERE \n";
    ++$where;
    $sql = $sql . "Marka.id_marka =".$marka."\n";
}

elseif (( $_GET["marka"] == -1) && ( $_GET["model"] != -1))
{
    $model = $_GET["model"];


    if($where==0)$sql = $sql. " WHERE \n";
    ++$where;
    $sql = $sql . "Model.id_model =" .$model."\n";
}



//CENA
//if ( !empty($_GET["cenaOd"]) && !empty($_GET["cenaDo"]) && ($_GET["cenaDo"]!=' ' && $_GET["cenaOd"]!=' ') )
if(isset($_GET["cenaOd"]) && isset($_GET["cenaDo"]))
if (( $_GET["cenaOd"] != -1) && ( $_GET["cenaDo"] != -1))
{

    if($_GET["cenaOd"] < $_GET["cenaDo"]){
        $cenaOd = $_GET["cenaOd"];
        $cenaDd = $_GET["cenaDo"];
    }
    else{
        $cenaDd = $_GET["cenaOd"];
        $cenaOd = $_GET["cenaDo"];
    }


    if($where == 0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql  . "  Oferta.cena_netto <= ".$cenaDd." AND\n"

        . "Oferta.cena_netto >= ".$cenaOd."\n";
}
elseif (( $_GET["cenaOd"] == -1) && ( $_GET["cenaDo"] != -1))
{
    $cenaDd = $_GET["cenaDo"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "  Oferta.cena_netto <= ".$cenaDd."\n";
}
elseif (( $_GET["cenaOd"] != -1) && ( $_GET["cenaDo"] == -1))
{
    $cenaOd = $_GET["cenaOd"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . " Oferta.cena_netto >= ".$cenaOd."\n";
}


////ROK_sam
//
//if ( !empty($_GET["rokOd"]) && !empty($_GET["rokDo"]) )
//{
//
//    if($_GET["rokOd"] < $_GET["rokDo"]){
//        $rokOd = $_GET["rokOd"];
//        $rokDo = $_GET["rokDo"];
//    }
//    else{
//        $rokOd = $_GET["rokDo"];
//        $rokDo = $_GET["rokOd"];
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
//elseif ( empty($_GET["rokOd"]) && !empty($_GET["rokDo"]) )
//{
//    $rokDo = $_GET["rokDo"];
//
//    if($where==0)$sql = $sql. " WHERE \n";
//    else $sql = $sql. " AND \n";
//    ++$where;
//    $sql = $sql . " Samochod.rok_produkcji <= ".$rokDo."\n";
//}
//elseif ( !empty($_GET["rokOd"]) && empty($_GET["rokDo"]) )
//{
//    $rokOd = $_GET["rokOd"];
//
//    if($where==0)$sql = $sql. " WHERE \n";
//    else $sql = $sql. " AND \n";
//    ++$where;
//    $sql = $sql . " Samochod.rok_produkcji >= ".$rokOd."\n";
//}

//ROK_sam

//if ( (!empty($_GET["rokOd"]) && !empty($_GET["rokDo"])) && ($_GET["rokDo"]!=' ' && $_GET["rokOd"]!=' ') )
if(isset($_GET["cenaOd"]) && isset($_GET["cenaDo"]))
if (( $_GET["rokOd"] != -1) && ( $_GET["rokDo"] != -1))
{

    if($_GET["rokOd"] < $_GET["rokDo"]){
        $rokOd = $_GET["rokOd"];
        $rokDo = $_GET["rokDo"];
    }
    else{
        $rokOd = $_GET["rokDo"];
        $rokDo = $_GET["rokOd"];
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




elseif (( $_GET["rokOd"] == -1) && ( $_GET["rokDo"] != -1))
{
    $rokDo = $_GET["rokDo"];

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
elseif (( $_GET["rokOd"] != -1) && ( $_GET["rokDo"] == -1))
{
    $rokOd = $_GET["rokOd"];

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
//if ( !empty($_GET["przebiegOd"]) && !empty($_GET["przebiegDo"])  && ($_GET["przebiegDo"]!=' ' && $_GET["przebiegOd"]!=' ') )
if(isset($_GET["cenaOd"]) && isset($_GET["cenaDo"]))
if (( $_GET["przebiegOd"] != -1) && ( $_GET["przebiegDo"] != -1))
{

    if($_GET["przebiegOd"] < $_GET["przebiegDo"]){
        $przebiegOd= $_GET["przebiegOd"];
        $przebiegDo = $_GET["przebiegDo"];
    }
    else{
        $przebiegOd = $_GET["przebiegDo"];
        $przebiegDo = $_GET["przebiegOd"];
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



elseif (( $_GET["przebiegOd"] == -1) && ( $_GET["przebiegDo"] != -1))
{
    $przebiegDo = $_GET["przebiegDo"];

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
elseif (( $_GET["przebiegOd"] != -1) && ( $_GET["przebiegDo"] == -1))
{
    $przebiegOd = $_GET["przebiegOd"];

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
//if ( !empty($_GET["kraj"]) && ( $_GET["kraj"] != -1) )
if ( isset($_GET["kraj"]) && ($_GET["kraj"] != -1) )
{
        $kraj = $_GET["kraj"];

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "Kraj_pochodzenia.id_kraj =" .$kraj."\n";

}


//kolor
//if ( !empty($_GET["kolor"]) && ( $_GET["kolor"] != -1) )
if (isset($_GET["kolor"]) && ( $_GET["kolor"] != -1) )
{
    $kolor = $_GET["kolor"];

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
        . "    Cechy.id_cechy = 9 and cechy_somochod.wartosc like  \"".$kolor ."\"\n"
        ." )\n";


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
        $data[$i]['opis'] = $row['opis'];
        $data[$i]['cechy'] = $row['Result'];
        $i++;
    }
}
//echo json_encode(['data' => $data]);
echo json_encode($data);

?>