<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";


//$link = new mysqli($host, $db_user, $db_password, $db_name);

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$sql = 'select imie, nazwisko, login, haslo from Uzytkownik';
$result = $link->query($sql);

$data =[];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $data[$i]['imie'] = $row['imie'];
        $data[$i]['nazwisko'] = $row['nazwisko'];
        $data[$i]['login'] = $row['login'];
        $data[$i]['pswd'] = $row['haslo'];
        $i++;
    }
}

echo json_encode(['data' => $data]);


?>