<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 1;


$sql = "SELECT\n"

    . "Oferta.img,\n"
    . "Oferta.wyswietlenia,\n"
    . "model.model_nazwa,\n"
    . "marka.marka_nazwa,\n"
    . "Oferta.id_oferta,\n"
    . "Oferta.opis,\n"
    . "Oferta.cena_netto,\n"
    . "Oferta.data_zlozenia,\n"
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
    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
    . "WHERE oferta.data_zakonczenia IS NULL\n";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');

if((!isset($_GET["marka"]) || $_GET["marka"] == -1) && (!isset($_GET["model"]) || $_GET["model"] == -1))
{
    ;
}
elseif (( $_GET["marka"] != -1) && ( $_GET["model"] != -1))
{
    $marka =  mysqli_real_escape_string($link, $_GET["marka"]);
    $model =  mysqli_real_escape_string($link, $_GET["model"]);

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql
        . "Marka.id_marka =".$marka."\n"
        . " AND\n"
        . "Model.id_model =" .$model."\n";
}

elseif (( $_GET["marka"] != -1) && ( $_GET["model"] == -1))
{
    $marka =  mysqli_real_escape_string($link, $_GET["marka"]);

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "Marka.id_marka =".$marka."\n";
}

elseif (( $_GET["marka"] == -1) && ( $_GET["model"] != -1))
{
    $model =  mysqli_real_escape_string($link, $_GET["model"]);


    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "Model.id_model =" .$model."\n";
}



if(isset($_GET["cenaOd"]) && isset($_GET["cenaDo"]))
if (( $_GET["cenaOd"] != -1) && ( $_GET["cenaDo"] != -1))
{

    if($_GET["cenaOd"] < $_GET["cenaDo"]){
        $cenaOd = mysqli_real_escape_string($link, $_GET["cenaOd"]);
        $cenaDd = mysqli_real_escape_string($link, $_GET["cenaDo"]);
    }
    else{
        $cenaDd = mysqli_real_escape_string($link, $_GET["cenaOd"]);
        $cenaOd = mysqli_real_escape_string($link, $_GET["cenaDo"]);
    }


    if($where == 0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql  . "  Oferta.cena_netto <= ".$cenaDd." AND\n"

        . "Oferta.cena_netto >= ".$cenaOd."\n";
}
elseif (( $_GET["cenaOd"] == -1) && ( $_GET["cenaDo"] != -1))
{
    $cenaDd = mysqli_real_escape_string($link, $_GET["cenaDo"]);

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "  Oferta.cena_netto <= ".$cenaDd."\n";
}
elseif (( $_GET["cenaOd"] != -1) && ( $_GET["cenaDo"] == -1))
{
    $cenaOd = mysqli_real_escape_string($link, $_GET["cenaOd"]);

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . " Oferta.cena_netto >= ".$cenaOd."\n";
}





if(isset($_GET["cenaOd"]) && isset($_GET["cenaDo"]))
if (( $_GET["rokOd"] != -1) && ( $_GET["rokDo"] != -1))
{



    if($_GET["rokOd"] < $_GET["rokDo"]){
        $rokOd = mysqli_real_escape_string($link, $_GET["rokOd"]);
        $rokDo = mysqli_real_escape_string($link, $_GET["rokDo"]);
    }
    else{
        $rokOd = mysqli_real_escape_string($link, $_GET["rokDo"]);
        $rokDo = mysqli_real_escape_string($link, $_GET["rokOd"]);
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
    $rokDo = mysqli_real_escape_string($link, $_GET["rokDo"]);

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
    $rokOd = mysqli_real_escape_string($link, $_GET["rokOd"]);

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




if(isset($_GET["cenaOd"]) && isset($_GET["cenaDo"]))
if (( $_GET["przebiegOd"] != -1) && ( $_GET["przebiegDo"] != -1))
{



    if($_GET["przebiegOd"] < $_GET["przebiegDo"]){
        $przebiegOd = mysqli_real_escape_string($link, $_GET["przebiegOd"]);
        $przebiegDo = mysqli_real_escape_string($link, $_GET["przebiegDo"]);
    }
    else{
        $przebiegOd = mysqli_real_escape_string($link, $_GET["przebiegDo"]);
        $przebiegDo =  mysqli_real_escape_string($link, $_GET["przebiegOd"]);
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
    $przebiegDo = mysqli_real_escape_string($link, $_GET["przebiegDo"]);

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
    $przebiegOd =  mysqli_real_escape_string($link, $_GET["przebiegOd"]);

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


if ( isset($_GET["kraj"]) && ($_GET["kraj"] != -1) )
{
    $kraj =  mysqli_real_escape_string($link, $_GET["kraj"]);

    if($where==0)$sql = $sql. " WHERE \n";
    else $sql = $sql. " AND \n";
    ++$where;
    $sql = $sql . "Kraj_pochodzenia.id_kraj =" .$kraj."\n";

}



if (isset($_GET["kolor"]) && ( $_GET["kolor"] != -1) )
{
    $kolor = mysqli_real_escape_string($link, $_GET["kolor"]);

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
$sql= $sql . "group by Oferta.id_oferta\n";

if(isset($_GET["page"]) && $_GET["page"] =="index" ){
    $sql= $sql . "ORDER BY RAND()\n LIMIT 9\n";
}


$result = $link->query($sql);

$data = [];


if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$i]['id_oferta'] = $row['id_oferta'];
        $data[$i]['cena_netto'] = $row['cena_netto'];
        $data[$i]['data_zlozenia'] = $row['data_zlozenia'];
        $data[$i]['imgg'] = '../../../public/img/' . $row['img'];
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
echo json_encode($data);

?>