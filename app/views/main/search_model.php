<?php

$host = "149.156.136.151";
$db_user = "mgaczorek";
$db_password = "30071966F";
$db_name = "mgaczorek";

//$link = new mysqli($host, $db_user, $db_password, $db_name);

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$sql = 'select id_typ_konta, typ_konta from Typ_konta';
$result = $link->query($sql);

$typ =[];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $typ[$i]['id_typ_konta'] = $row['id_typ_konta'];
        $typ[$i]['typ_konta'] = $row['typ_konta'];

        $i++;
    }
}

echo json_encode($typ);


?>