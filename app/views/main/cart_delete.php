<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 1;

$sql ="DELETE FROM koszyk WHERE koszyk.id_oferta =";
$sql_2 =" and koszyk.id_uzyt = (SELECT sesja.id_uzyt FROM sesja WHERE sesja.id =";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');

if( isset($_POST["id_oferta"]) )
{
    $id_oferta =  mysqli_real_escape_string($link, $_POST["id_oferta"]);
    $id_sesja =  mysqli_real_escape_string($link, $_POST["id_sesja"]);



    $sql = $sql . $id_oferta.$sql_2."\"". $id_sesja."\")";

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