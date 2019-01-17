<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');
$data = [];


if($_POST["select"] == "admin") {
    $flaga=1;
    $data['Alert']='';
    mysqli_autocommit($link,FALSE);
    mysqli_begin_transaction($link, MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    $id_uzyt = mysqli_real_escape_string($link, $_POST["admin"]);



    $sql  = "DELETE FROM `uzytkownik` WHERE id_uzyt= '$id_uzyt'";

    if (!mysqli_query($link, $sql)) {
        $flaga = 0;
        $data['Alert'] = "Nie udało sie usunąć Admina.";
    }


    //mysqli_rollback($link);

    if($flaga==1) {
        mysqli_commit($link);
        $data['flaga'] = 1;
        $data['Alert'] = $data['Alert']." Admin został usuniety.";
    }
    else{
        mysqli_rollback($link);
        $data['flaga'] = 0;
        //$data['Alert'] = "Nie udało sie usunąć oferty.";
    }


}elseif ($_POST["select"] == "oferta"){
    $id_oferta = mysqli_real_escape_string($link, $_POST["oferta"]);
    $flaga = 1;
    $data['Alert'] = "";


    mysqli_autocommit($link,FALSE);
    mysqli_begin_transaction($link, MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);

    $sql  = "SELECT id_samoch  FROM `oferta` WHERE id_oferta = '$id_oferta'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id_samochodu = $row['id_samoch'];
            }
    }
    else{
            $flaga = 0;
        $data['Alert'] = "Nie udało sie usunąć oferty.";
    }


    $sql  = "SELECT img  FROM `oferta` WHERE id_oferta = '$id_oferta'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $img = $row['img'];
        }
    }
    else{
        $flaga = 0;
        $data['Alert'] = "Nie udało sie usunąć oferty.";
    }


    $sql  = "DELETE FROM `cechy_somochod` WHERE id_samochod='$id_samochodu'";
    if (!mysqli_query($link, $sql)) {
        $flaga = 0;
        $data['Alert'] = "Nie udało sie usunąć oferty.";
    }


    $sql  = "DELETE FROM `oferta` WHERE id_oferta = '$id_oferta'";
    if (!mysqli_query($link, $sql)) {
        $flaga = 0;
        $data['Alert'] = "Nie udało sie usunąć oferty.";
    }

    $sql  = "DELETE FROM `samochod` WHERE  id_samoch = '$id_samochodu'";
    if (!mysqli_query($link, $sql)) {
        $flaga = 0;
        $data['Alert'] = "Nie udało sie usunąć oferty.";
    }

    try {
        $target_dir = "../../../public/img/";

        if (file_exists($target_dir.$img)) {
            if( unlink($target_dir.$img) )
                $data['Alert'] = " Zdjecie usuniente.";
            else {
                $flaga = 0;
                throw new Exception(" Nie udało sie usunąć zdjecia.");
            }

        }
        else {
            //$flaga = 0;
            throw new Exception(" Plik nie istnieje.");
        }


    }
    catch (Exception $e) {
        //$flaga = 0;
        $data['Alert'] = $data['Alert'].$e->getMessage();
    }

//mysqli_rollback($link);

    if($flaga==1) {
        mysqli_commit($link);
        $data['flaga'] = 1;
        $data['Alert'] = $data['Alert']." Oferta została usunieta.";
    }
    else{
       mysqli_rollback($link);
        $data['flaga'] = 0;
        //$data['Alert'] = "Nie udało sie usunąć oferty.";
    }
    //mysqli_rollback($link);
}

//echo $id_oferta.' '.$id_samochodu.' '.$data['flaga'];
echo json_encode($data);

?>