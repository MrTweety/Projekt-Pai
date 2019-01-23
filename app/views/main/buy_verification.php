<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 1;

// $sql_id_uzyt = "SELECT sesja.id_uzyt from sesja where sesja.id =";

$sql = "SELECT DISTINCT\n"
    . "oferta.id_oferta\n"
    . "FROM\n"
    . "Oferta\n"
    . "INNER JOIN koszyk ON koszyk.id_oferta = oferta.id_oferta\n"
    . "WHERE oferta.data_zakonczenia IS NULL AND koszyk.id_uzyt ="
;

$sql_id_uzyt ="SELECT sesja.id_uzyt FROM sesja WHERE sesja.id =";

$sql_update_offer = "UPDATE oferta SET oferta.data_zakonczenia=";

$sql_in = "insert into transakcja(id_kupujacego, kwota, data_transakcji) values(";

$sql_in_pos ="INSERT INTO posrednia(id_oferta,id_transakcja) VALUES (";

$sql_id_tra ="SELECT transakcja.id_transakcja FROM transakcja WHERE transakcja.data_transakcji = ";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');


if( isset($_POST["id_sesja"]) && isset($_POST["kwota_do_zaplaty"]) )
{

    ////////////////
    $id_sesja =  mysqli_real_escape_string($link, $_POST["id_sesja"]);
    $kwota =  mysqli_real_escape_string($link, $_POST["kwota_do_zaplaty"]);

    $sql_id_uzyt = $sql_id_uzyt ."\"". $id_sesja."\";";

    $id_uzyt = $link->query($sql_id_uzyt);
    $id_uzyt = mysqli_fetch_assoc($id_uzyt)["id_uzyt"];
////////////////////////////////////////////
    $sql = $sql .$id_uzyt.";";

    $result  = $link->query($sql);
    //////////////////////////
    $data = [];
    $data_place = 0;

    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[$data_place]['id_oferta'] = $row['id_oferta'];
            $data_place++;
        }
    }

    $time_now = (new \DateTime())->format('Y-m-d H:i:s');

    for($i = 0; $i <$data_place; $i++ )
    {
        if( !UpdateOffer($sql_update_offer, $data[$i]['id_oferta'], $time_now, $link) )
        {
            echo "Błąd przy aktualizacji";
            return 0;
        }
    }

    if( !InsertTransaction($sql_in, $id_uzyt, $kwota, $time_now, $link) )
    {
        echo "Błąd przy aktualizacji";
        return 0;
    }

    $sql_id_tra = $sql_id_tra ."\"". $time_now."\";";

    $id_transakcja = $link->query($sql_id_tra);
    $id_transakcja = mysqli_fetch_assoc($id_transakcja)["id_transakcja"];

    for($i = 0; $i <$data_place; $i++ )
    {
        if( !InsertPos($sql_in_pos, $data[$i]['id_oferta'], $id_transakcja, $link) )
        {
            echo "Błąd przy aktualizacji";
            return 0;
        }
    }

    echo "Gratulację! Zakup przebiegł poprawnie.";
}

function UpdateOffer($sql_que, $id_offer, $time_n, $data_table)
{
    $sql_que = $sql_que
        ."\"". $time_n."\""
        ."WHERE oferta.id_oferta =".$id_offer;

    return $data_table->query($sql_que);
}

function InsertTransaction($sql_que, $id_user, $price, $time_n, $data_table)
{
    $sql_que = $sql_que
        .$id_user .","
        .$price .","
        ."\"". $time_n."\");";

    return $data_table->query($sql_que);
}

function InsertPos($sql_que, $id_offer, $id_trans, $data_table)
{
    $sql_que = $sql_que
        .$id_offer .","
        .$id_trans .");";

    return $data_table->query($sql_que);
}


?>