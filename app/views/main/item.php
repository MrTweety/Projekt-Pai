<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
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

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');


if( isset($_POST["id_oferta"]) )
{

    $id_oferta =  mysqli_real_escape_string($link, $_POST["id_oferta"]);

    $sql = $sql
        ." AND \n"
        ." Oferta.id_oferta =".$id_oferta;


    $result = $link->query($sql);

    $data = [];
        
    if (mysqli_num_rows($result) > 0)
    {
            // output data of each row
        $i = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[$i]['zdjecie'] = $row['img'];
            $data[$i]['wyswietlenia'] = $row['wyswietlenia'];
            $data[$i]['opis'] = $row['opis'];
            $data[$i]['cena'] = $row['cena_netto'];
            $data[$i]['kraj'] = $row['pl'];
            $data[$i]['marka'] = $row['marka_nazwa'];
            $data[$i]['model'] = $row['model_nazwa'];
            $i++;
        }
    }
    echo json_encode($data);
}

?>
