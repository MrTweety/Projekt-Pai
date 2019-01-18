<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guma";
$where = 1;

$sql = "SELECT DISTINCT\n"
    . "Oferta.img,\n"
    . "Oferta.wyswietlenia,\n"
    . "Oferta.opis,\n"
    . "Oferta.cena_netto,\n"
    . "Kraj_pochodzenia.pl,\n"
    . "Model.model_nazwa,\n"
    . "Marka.marka_nazwa\n"
    . "FROM\n"
    . "Oferta\n"
    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"
    . "INNER JOIN Cechy_somochod ON Cechy_somochod.id_samochod = Samochod.id_samoch\n"
    . "INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
    . "WHERE oferta.data_zakonczenia IS NULL\n"
;

$sql_cechy = "SELECT\n"
    . "cechy.nazwa_cechy,\n"
    . "cechy_somochod.wartosc\n"
    . "FROM\n"
    . "cechy\n"
    . "LEFT JOIN cechy_somochod on cechy.id_cechy = cechy_somochod.id_cechy\n"
    . "LEFT JOIN samochod on cechy_somochod.id_samochod = samochod.id_samoch\n"
    . "LEFT JOIN oferta on samochod.id_samoch = oferta.id_oferta\n"
    . "WHERE Oferta.id_oferta = "
;

$sql_cechy_size = "SELECT count(*) FROM cechy";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');


if( isset($_GET["id_oferta"]) )
{

    $id_oferta =  mysqli_real_escape_string($link, $_GET["id_oferta"]);

    $sql = $sql
        ." AND \n"
        ." Oferta.id_oferta =".$id_oferta;

    $sql_cechy = $sql_cechy
        ." ".$id_oferta." \n"
        ." AND \n";


    $result = $link->query($sql);
    $features_size = $link->query($sql_cechy_size);
    $tmp = mysqli_fetch_assoc($features_size);
    $features_size = $tmp["count(*)"];

    $data = [];
    $data_place = 0;

    if (mysqli_num_rows($result) > 0)
    {
            // output data of each row
        
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[$data_place]['zdjecie'] = $row['img'];
            $data[$data_place]['wyswietlenia'] = $row['wyswietlenia'];
            $data[$data_place]['opis'] = $row['opis'];
            $data[$data_place]['cena'] = $row['cena_netto'];
            $data[$data_place]['kraj'] = $row['pl'];
            $data[$data_place]['marka'] = $row['marka_nazwa'];
            $data[$data_place]['model'] = $row['model_nazwa'];
            $data_place++;
        }
    }


    for($x = 1; $x <= $features_size; $x++)
    {
        $result_2 = zapytanie($sql_cechy, $x, $link);

        if(mysqli_num_rows($result_2) > 0)
        {
            while ( $row = mysqli_fetch_assoc($result_2))
            {
                $data[$data_place]['a'] = $row['nazwa_cechy'];
                $data[$data_place]['b'] = $row['wartosc'];
            }
            $data_place++;

        }

    }
        
    echo json_encode($data);
}

function zapytanie($sql_que, $feature_number, $data_table)
{
    $sql_que = $sql_que
        ." cechy.id_cechy = ".$feature_number;

    return $data_table->query($sql_que);
}


?>
