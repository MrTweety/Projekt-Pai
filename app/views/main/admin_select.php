<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link->query('SET NAMES utf8');
$link->query('SET CHARACTER_SET utf8_unicode_ci');
$data = [];


if ($_POST["select"] == "admin") {
    $sql = "SELECT\n"
        . "uzytkownik.id_uzyt,\n"
        . "uzytkownik.imie,\n"
        . "uzytkownik.nazwisko,\n"
        . "uzytkownik.email,\n"
        . "uzytkownik.login,\n"
        . "typ_konta.typ_konta,\n"
        . "adres.miejscowosc,\n"
        . "adres.ulica,\n"
        . "adres.nr_domu,\n"
        . "adres.nr_lokalu,\n"
        . "adres.kod_pocztowy\n"
        . "FROM\n"
        . "uzytkownik\n"
        . "LEFT JOIN  adres ON uzytkownik.id_adres = adres.id_adres\n"
        . "LEFT JOIN  typ_konta ON uzytkownik.id_typ = typ_konta.id_typ_konta\n"
        . "WHERE typ_konta.id_typ_konta=1";


    $result = $link->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$i]['id_uzyt'] = $row['id_uzyt'];
            $data[$i]['imie'] = $row['imie'];
            $data[$i]['nazwisko'] = $row['nazwisko'];
            $data[$i]['email'] = $row['email'];
            $data[$i]['login'] = $row['login'];
            $data[$i]['typKonta'] = $row['typ_konta'];
            $data[$i]['usun'] = '<button type="button" class="btn btn-danger " value="' . $row['id_uzyt'] . ' "onclick="myFunction2(' . $row['id_uzyt'] . ',3)">Usuń</button>';//'<a class="btn btn-success" style="margin:2px;" href = "?edit='.$row['id_uzyt'].'">edit</a>'.'<a class="btn btn-danger" style="margin:2px;" href = "?usun='.$row['id_uzyt'].'">unuń</a>';
//        $data[$i]['model'] = $row['model_nazwa'];
//        $data[$i]['marka'] = $row['marka_nazwa'];
//        $data[$i]['opis'] = $row['opis'];
//        $data[$i]['cechy'] = $row['Result'];
            $i++;
        }
        echo json_encode(['data' => $data]);
    }

} elseif ($_POST["select"] == "oferta") {

    $sql = "SELECT\n"

        . "Oferta.img,\n"
        . "Oferta.wyswietlenia,\n"
        . "model.model_nazwa,\n"
        . "marka.marka_nazwa,\n"
        . "Oferta.id_oferta,\n"
        . "Oferta.opis,\n"
        . "Oferta.cena_netto,\n"
        . "Oferta.data_zlozenia,\n"
        . "Kraj_pochodzenia.pl,\n"
        . "Model.id_model,\n"
        . "Marka.id_marka,\n"
        . "GROUP_CONCAT(\n"
        . "nazwa_cechy, ' : ',`wartosc`,jednostka SEPARATOR ' • ')  \n"
        . "AS Result\n"
        . "FROM\n"
        . "Oferta\n"
        . "LEFT JOIN Samochod ON Oferta.id_samoch = Samochod.id_samoch\n"
        . "LEFT JOIN Model ON Samochod.id_model = Model.id_model\n"
        . "LEFT JOIN Marka ON Model.id_marka = Marka.id_marka\n"
        . "LEFT JOIN Cechy_somochod ON Cechy_somochod.id_samochod = Samochod.id_samoch\n"
        . "LEFT JOIN Cechy ON Cechy_somochod.id_cechy = Cechy.id_cechy\n"
        . "LEFT JOIN Kraj_pochodzenia ON Samochod.id_kraj = Kraj_pochodzenia.id_kraj\n"
        . "WHERE oferta.data_zakonczenia IS NULL\n"
        . "group by Oferta.id_oferta\n";
    $result = $link->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$i]['id_oferta'] = $row['id_oferta'];
            $data[$i]['cena_netto'] = $row['cena_netto'];
            $data[$i]['data_zlozenia'] = $row['data_zlozenia'];
            $data[$i]['imgg'] = '<img src="../../../public/img/' . $row['img'] . '"  style="width:150px;"/>';
            $data[$i]['imga'] = $row['img'];
            $data[$i]['wyswietlenia'] = $row['wyswietlenia'];
            $data[$i]['kraj'] = $row['pl'];
            $data[$i]['model'] = $row['model_nazwa'];
            $data[$i]['marka'] = $row['marka_nazwa'];
            $data[$i]['opis'] = '<p style="width: 300px;">' . $row['opis'] . '</p>';
            $data[$i]['cechy'] = '<p style="width: 300px;">' . $row['Result'] . '</p>';
            $data[$i]['usun'] = '<button type="button" class="btn btn-danger " value="' . $row['id_oferta'] . ' "onclick="myFunction(' . $row['id_oferta'] . ',2)">Usuń</button>';//'<a class="btn btn-success" style="margin:2px;" href = "?edit='.$row['id_oferta'].'">edit</a>'.'<a class="btn btn-danger" style="margin:2px;" href = "?usun='.$row['id_oferta'].'">unuń</a>';

            $i++;
        }

        echo json_encode(['data' => $data]);
    }


}
//echo json_encode(['data' => $data]);
//

?>