<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 1;

$sql = "SELECT DISTINCT\n"
    . "oferta.id_oferta,\n"
    . "oferta.data_zlozenia,\n"
    . "Oferta.img,\n"
    . "Oferta.wyswietlenia,\n"
    . "Oferta.opis,\n"
    . "Oferta.cena_netto,\n"
    . "Kraj_pochodzenia.pl,\n"
    . "Model.model_nazwa,\n"
    . "Marka.marka_nazwa\n"
    . "FROM\n"
    . "Oferta\n"
    . "INNER JOIN koszyk ON koszyk.id_oferta = oferta.id_oferta\n"
    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"
    . "INNER JOIN Cechy_somochod ON Cechy_somochod.id_samochod = Samochod.id_samoch\n"
    . "INNER JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
    . "WHERE oferta.data_zakonczenia IS NULL\n"
    . "and koszyk.id_uzyt =\n"
    . "(SELECT sesja.id_uzyt FROM sesja WHERE sesja.id ="
;


$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');

if( isset($_POST["id_sesja"]) )
{
    $id_sesja =  mysqli_real_escape_string($link, $_POST["id_sesja"]);

    $sql = $sql ."\"". $id_sesja."\");";

    $result = $link->query($sql);

    $data = [];
    $data_place = 0;

    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row

        while ($row = mysqli_fetch_assoc($result))
        {
            $data[$data_place]['id_oferta'] = $row['id_oferta'];
            $data[$data_place]['data_zlozenia'] = $row['data_zlozenia'];
            $data[$data_place]['zdjecie'] = '../../../public/img/'. $row['img'];
            $data[$data_place]['wyswietlenia'] = $row['wyswietlenia'];
            $data[$data_place]['opis'] = $row['opis'];
            $data[$data_place]['cena'] = $row['cena_netto'];
            $data[$data_place]['kraj'] = $row['pl'];
            $data[$data_place]['marka'] = $row['marka_nazwa'];
            $data[$data_place]['model'] = $row['model_nazwa'];
            $data_place++;
        }
    }

    echo json_encode($data);
}
?>