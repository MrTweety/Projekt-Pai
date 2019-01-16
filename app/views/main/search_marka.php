<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guma";

//$link = new mysqli($host, $db_user, $db_password, $db_name);

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$sql = 'select id_marka, marka_nazwa from marka';
$result = $link->query($sql);

$typ =[];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $typ[$i]['id_tab'] = $row['id_marka'];
        $typ[$i]['name_tab'] = $row['marka_nazwa'];

        $i++;
    }
}

echo json_encode($typ);


?>