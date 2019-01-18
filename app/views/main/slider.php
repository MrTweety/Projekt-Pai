<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guma";
$where = 1;

$sql = "SELECT * FROM `v_slider`";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');

$result = $link->query($sql);
$data = [];


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$i]['id_slider'] = $row['id_slider'];
        $data[$i]['imga'] = $row['img'] ;
        $data[$i]['goToHref'] = $row['go_to'];
        $data[$i]['tytul'] = $row['tytul'];
        $data[$i]['opis'] = $row['opis'];
        $data[$i]['numer'] = $row['numer'];
        $data[$i]['aktywny'] = $row['active'];
        $i++;
    }
}
//echo json_encode(['data' => $data]);
echo json_encode($data);

?>