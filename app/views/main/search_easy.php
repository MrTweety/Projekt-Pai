<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";




//$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
//$sql = 'select imie, nazwisko, login, haslo from Uzytkownik';
//$result = $link->query($sql);
//
//$data =[];
//
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    $i = 0;
//    while($row = mysqli_fetch_assoc($result)) {
//        $data[$i]['imie'] = $row['imie'];
//        $data[$i]['nazwisko'] = $row['nazwisko'];
//        $data[$i]['login'] = $row['login'];
//        $data[$i]['pswd'] = $row['haslo'];
//        $i++;
//    }
//}
//
//echo json_encode(['data' => $data]);


$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$sql = 'select * from search';
$result = $link->query($sql);

$data =[];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $data[$i]['id_oferta'] = $row['id_oferta'];
        $data[$i]['cena_netto'] = $row['cena_netto'];
        $data[$i]['data_zlozenia'] = $row['data_zlozenia'];
        $data[$i]['img'] = '<img src="../../../public/img/'.$row['img'].'.jpg">';
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