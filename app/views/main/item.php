<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guma";
$where = 0;

$sql = "SELECT\n"
   . "Model.model_nazwa,\n"
   . "Marka.marka_nazwa\n";
//    . "Oferta.data_zlozenia,\n"
//    . "Oferta.img,\n"
//    . "Oferta.wyswietlenia,\n"
//    . "Kraj_pochodzenia.pl,\n"
//    . "Model.model_nazwa,\n"
//    . "Marka.marka_nazwa,\n"
//    . "Samochod.rok_produkcji\n"
//    . "FROM\n"
//    . "Oferta\n"
//    . "INNER JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
//    . "INNER JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
//    . "INNER JOIN Model ON Samochod.id_model = Model.id_model\n"
//    . "INNER JOIN Marka ON Model.id_marka = Marka.id_marka\n";


if((!isset($_GET["id_oferta"])))
{

    $id_oferta = $_GET["id_oferta"];

}

?>
