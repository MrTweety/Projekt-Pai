<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mgaczorek";
$link = mysqli_connect($host, $db_user, $db_password, $db_name) or die();
$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci');
$data = [];

$target_dir = "uploads/";

$structure = '../files';

if (!file_exists($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
        die('Failed to create folders...');
    };
}




$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


if($_POST["select"] == "admin") {

    $data[0] = 1;

}elseif ($_POST["select"] == "oferta"){

    $flaga = 1;

    $marka  = mysqli_real_escape_string($link, $_POST["marka"]);
    $model  = mysqli_real_escape_string($link, $_POST["model"]);
    $kraj  = mysqli_real_escape_string($link, $_POST["kraj"]);
    $cena = mysqli_real_escape_string($link, $_POST["cena"]);
    $opis = mysqli_real_escape_string($link, $_POST["opis"]);



    mysqli_autocommit($link,FALSE);
    mysqli_begin_transaction($link, MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    //mysqli_query($link, "START TRANSACTION");

    if (!mysqli_query($link, "INSERT INTO samochod  VALUES (NULL, '$model', '$kraj');")) {
        $flaga = 0;
    }
    $last_samochod_id = mysqli_insert_id($link);

    $sqlOferta="INSERT INTO `oferta`(`id_oferta`, `id_samoch`, `cena_netto`, `img`, `wyswietlenia`, `opis`, `data_zlozenia`, `data_zakonczenia`) VALUES (NULL,'$last_samochod_id','$cena','Id_3.jpg',0,'$opis',now(),NULL)";



if (!mysqli_query($link, $sqlOferta)) {
        $flaga = 0;
    }
    $last_oferta_id = mysqli_insert_id($link);





if(isset($_POST["kolor"]) && ($_POST["kolor"] != -1)){
    $cecha_wartosc = mysqli_real_escape_string($link, $_POST["kolor"]);
    $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (9, '$last_samochod_id', '$cecha_wartosc');";
    if (!mysqli_query($link, $sqlcecha)) {
        $flaga = 0;
    }
}

    if(isset($_POST["naped"])&& ($_POST["naped"] != -1)){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["naped"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (7, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }

    if(isset($_POST["paliwo"])&& ($_POST["paliwo"] != -1)){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["paliwo"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (3, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }

    if(isset($_POST["nadwozie"])&& ($_POST["nadwozie"] != -1)){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["nadwozie"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (1, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }

    if(isset($_POST["skrzynia"])&& ($_POST["skrzynia"] != -1)){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["skrzynia"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (6, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }

    if(isset($_POST["rok"]) && !empty($_POST["rok"])){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["rok"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (2, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }


    if(isset($_POST["pojemnosc"])&& !empty($_POST["pojemnosc"])){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["pojemnosc"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (4, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }


    if(isset($_POST["moc"]) && !empty($_POST["moc"])){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["moc"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (5, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }


    if(isset($_POST["drzwi"]) && !empty($_POST["drzwi"])){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["drzwi"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (10, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }


    if(isset($_POST["miejsca"]) && !empty($_POST["miejsca"])){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["miejsca"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (11, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }


    if(isset($_POST["przebieg"]) && !empty($_POST["przebieg"])){
        $cecha_wartosc = mysqli_real_escape_string($link, $_POST["przebieg"]);
        $sqlcecha = "INSERT INTO cechy_somochod (id_cechy, id_samochod, wartosc) VALUES (8, '$last_samochod_id', '$cecha_wartosc');";
        if (!mysqli_query($link, $sqlcecha)) {
            $flaga = 0;
        }
    }

    //mysqli_rollback($link);
    //mysqli_commit($link);
    if($flaga==1) mysqli_commit($link);
    else mysqli_rollback($link);
}


echo $flaga;

?>