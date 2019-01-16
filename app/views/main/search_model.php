<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "guma";




//$link = new mysqli($host, $db_user, $db_password, $db_name);

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();




if (isset($_POST["marka"]) && $_POST["marka"]!= -1) {
    $marka = $_POST["marka"];
    $sql = "select id_model, model_nazwa from model where id_marka = '$marka'";
}else{
    $sql = 'select id_model, model_nazwa from model';
}
$result = $link->query($sql);

$typ =[];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $typ[$i]['id_tab'] = $row['id_model'];
        $typ[$i]['name_tab'] = $row['model_nazwa'];

        $i++;
    }
}

echo json_encode($typ);


?>