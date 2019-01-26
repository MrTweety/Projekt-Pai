<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 1;

$sql = "select `id_oferta` , data_zakonczenia as dataZ FROM oferta WHERE oferta.id_oferta =";


$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link->query('SET NAMES utf8');
$link->query('SET CHARACTER_SET utf8_unicode_ci');
if (isset($_POST["id_oferta"])) {


    $id_oferta = mysqli_real_escape_string($link, $_POST["id_oferta"]);
    $sql = $sql . $id_oferta;

    $result = $link->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($row['dataZ']) {

            echo 0;
        } else {
            echo 1;
        }
    }else
    {
        echo 0;
    };
}

?>