<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";



$sql = "SELECT\n"
    . "Oferta.id_oferta,\n"
    . "Oferta.cena_netto,\n"
    . "Oferta.data_zlozenia,\n"
    . "Oferta.img,\n"
    . "Oferta.wyswietlenia,\n"
    . "Kraj_pochodzenia.pl,\n"
    . "Model.model_nazwa,\n"
    . "Marka.marka_nazwa\n"
    . "FROM\n"
    . "Oferta\n"
    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka";

if((!isset($_POST["marka"]) || $_POST["marka"] == -1) && (!isset($_POST["model"]) || $_POST["model"] == -1))
{
    $sql = 'select * from search';

}
elseif (( $_POST["marka"] != -1) && ( $_POST["model"] != -1))
{
    $marka = $_POST["marka"];
    $model = $_POST["model"];



    $sql = "SELECT\n"
        . "Oferta.id_oferta,\n"
        . "Oferta.cena_netto,\n"
        . "Oferta.data_zlozenia,\n"
        . "Oferta.img,\n"
        . "Oferta.wyswietlenia,\n"
        . "Kraj_pochodzenia.pl,\n"
        . "Model.model_nazwa,\n"
        . "Marka.marka_nazwa\n"
        . "FROM\n"
        . "Oferta\n"
        . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
        . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
        . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
        . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"
        . "WHERE\n"
        . "Marka.id_marka =".$marka
        . " AND\n"
        . "Model.id_model =" .$model;
}

elseif (( $_POST["marka"] != -1) && ( $_POST["model"] == -1))
{
    $marka = $_POST["marka"];




    $sql = "SELECT\n"
        . "Oferta.id_oferta,\n"
        . "Oferta.cena_netto,\n"
        . "Oferta.data_zlozenia,\n"
        . "Oferta.img,\n"
        . "Oferta.wyswietlenia,\n"
        . "Kraj_pochodzenia.pl,\n"
        . "Model.model_nazwa,\n"
        . "Marka.marka_nazwa\n"
        . "FROM\n"
        . "Oferta\n"
        . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
        . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
        . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
        . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"
        . "WHERE\n"
        . "Marka.id_marka =".$marka;
}

elseif (( $_POST["marka"] == -1) && ( $_POST["model"] != -1))
{
    $model = $_POST["model"];



    $sql = "SELECT\n"
        . "Oferta.id_oferta,\n"
        . "Oferta.cena_netto,\n"
        . "Oferta.data_zlozenia,\n"
        . "Oferta.img,\n"
        . "Oferta.wyswietlenia,\n"
        . "Kraj_pochodzenia.pl,\n"
        . "Model.model_nazwa,\n"
        . "Marka.marka_nazwa\n"
        . "FROM\n"
        . "Oferta\n"
        . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
        . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
        . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
        . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n"
        . "WHERE\n"
        . "Model.id_model =" .$model;
}


$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();

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
        $i++;
    }
}
//echo json_encode(['data' => $data]);
echo json_encode($data);

?>