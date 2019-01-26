<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$where = 1;

$sql = "SELECT \n"
    . "koszyk.id_koszyk\n"
    . "FROM\n"
    . "koszyk\n"
    . "WHERE\n"
    . "koszyk.id_uzyt = \n";

$sql_uzyt = "SELECT sesja.id_uzyt FROM sesja WHERE sesja.id = ";

$sql_in = "insert into koszyk(id_uzyt, id_oferta) values(";

$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link->query('SET NAMES utf8');
$link->query('SET CHARACTER_SET utf8_unicode_ci');

if (isset($_POST["id_oferta"]) && isset($_POST["id_sesja"])) {
    $id_oferta = mysqli_real_escape_string($link, $_POST["id_oferta"]);
    $id_sesja = mysqli_real_escape_string($link, $_POST["id_sesja"]);

    $sql_uzyt = $sql_uzyt . "\"" . $id_sesja . "\"";

    $result = $link->query($sql_uzyt);
    $id_uzytkownika = mysqli_fetch_assoc($result)["id_uzyt"];

    $sql = $sql
        . $id_uzytkownika . "\n"
        . "AND\n"
        . "koszyk.id_oferta =" . $id_oferta;

    $result_2 = $link->query($sql);

    if (!mysqli_num_rows($result_2) > 0) {
        $sql_in = $sql_in
            . $id_uzytkownika . ","
            . $id_oferta . ")";

        $re = $link->query($sql_in);
        echo "Dodano do koszyka";
    } else {
        echo "Ten produkt już znajduje się w twoim koszyku.";
    }

}
?>