<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guma";
$where = 1;

$sql ="DELETE FROM koszyk WHERE koszyk.id_oferta =";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');

if( isset($_POST["id_oferta"]) )
{
    $id_oferta =  mysqli_real_escape_string($link, $_POST["id_oferta"]);

    $sql = $sql . $id_oferta;

    if(mysqli_query($link, $sql))
    {
        echo "Usunieto z koszyka";
    }
    else
    {
        echo "Przy usuwaniu wystąpił błąd";
    }
}

?>