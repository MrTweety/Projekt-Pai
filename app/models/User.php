<?php


class User extends Model
{
    public static $ADMIN_TYPE = 1;
    public static $CLIENT_TYPE = 2;
//    public static $MY_TYPE = 3;

    public function __construct()
    {
        parent::__construct();
        $this->db-> query ('SET NAMES utf8');
//        $this->db-> query ('SET CHARACTER_SET utf8_unicode_ci');
    }



    public function is_logged_in()
    {
        if (!isset($_COOKIE['id'])) {
            return false;
            exit();
        }
        $query = "select id_uzyt from sesja where id = :id and ip = :REMOTE_ADDR  AND web = :HTTP_USER_AGENT;";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->bindParam(':REMOTE_ADDR', $_SERVER['REMOTE_ADDR']);
        $stmt->bindParam(':HTTP_USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($result['id_uzyt'])) {
            $id=$_COOKIE['id'];
//            setcookie("id", $id,time()+3600);
          setcookie("id", $id,time()+3600,'/');
            return true;
        } else {
            return false;
        }


    }



    public function get_name()
    {
        $q = "SELECT uzytkownik.imie, uzytkownik.nazwisko, uzytkownik.id_typ FROM uzytkownik
                LEFT JOIN sesja ON sesja.id_uzyt = uzytkownik.id_uzyt
                WHERE
                sesja.id = :id ";
        $stmt = $this->db->prepare($q);
        $stmt->bindParam(':id', $_COOKIE['id']);
//        $stmt->bindParam(':REMOTE_ADDR', $_SERVER['REMOTE_ADDR']);
//        $stmt->bindParam(':HTTP_USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {return $result;}
        return 0;
    }




    public function get_id()
    {
        $q = "SELECT uzytkownik.id_uzyt, uzytkownik.id_typ FROM uzytkownik
                LEFT JOIN sesja ON sesja.id_uzyt = uzytkownik.id_uzyt
                WHERE
                sesja.id = :id ";
        $stmt = $this->db->prepare($q);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {return $result['id_uzyt'];}
        return 0;
    }


    public function get_type()
    {
        $q = "SELECT uzytkownik.id_uzyt, uzytkownik.id_typ FROM uzytkownik
                LEFT JOIN sesja ON sesja.id_uzyt = uzytkownik.id_uzyt
                WHERE
                sesja.id = :id ";
        $stmt = $this->db->prepare($q);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->execute();




        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {return $result['id_typ'];}
        return 0;
    }

    public function get_all()
    {

        $sql = "SELECT\n"
            . "uzytkownik.id_uzyt,\n"
            . "uzytkownik.id_typ,\n"
            . "uzytkownik.id_adres,\n"
            . "uzytkownik.imie,\n"
            . "uzytkownik.nazwisko,\n"
            . "uzytkownik.email,\n"
            . "uzytkownik.login,\n"
            . "adres.kod_pocztowy,\n"
            . "adres.nr_lokalu,\n"
            . "adres.nr_domu,\n"
            . "adres.ulica,\n"
            . "adres.miejscowosc,\n"
            . "typ_konta.typ_konta,\n"
            . "uzytkownik.NIP,\n"
            . "uzytkownik.nazwa_firmy\n"
            . "FROM\n"
            . "uzytkownik\n"
            . "LEFT JOIN sesja ON sesja.id_uzyt = uzytkownik.id_uzyt\n"
            . "LEFT JOIN adres ON uzytkownik.id_adres = adres.id_adres\n"
            . "Left JOIN typ_konta ON uzytkownik.id_typ = typ_konta.id_typ_konta\n"
            . "WHERE\n"
            . "sesja.id = :id";


        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($stmt->rowCount() > 0) {return $result;}
        return 0;
    }



    public function changePassword($data)
    {
        $oldPassword = trim($data['oldPassword']);
        $newPassword = trim($data['newPassword']);
        $newPassword2 = trim($data['newPassword2']);

        if( $newPassword!=$newPassword2){
            echo "Hasła nie są identyczne.";
            return false;
        }

        if( $newPassword==$oldPassword){
            echo "Nowe hasło musi sie różnić.";
            return false;
        }

        $sql = "SELECT uzytkownik.id_uzyt, uzytkownik.haslo FROM uzytkownik
                LEFT JOIN sesja ON sesja.id_uzyt = uzytkownik.id_uzyt
                WHERE
                sesja.id = :id ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {

            if (password_verify($oldPassword, $result['haslo'])) {
                $password = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = "UPDATE `uzytkownik` SET `haslo` = :haslo WHERE `uzytkownik`.`id_uzyt` = :uzytkownik and `uzytkownik`.`haslo`= :oldhaslo ;";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':haslo', $password);
                $stmt->bindParam(':oldhaslo', $result['haslo']);
                $stmt->bindParam(':uzytkownik', $result['id_uzyt']);
                if ($stmt->execute()) {
                    echo 1;
                    return true;
                } else {
                    echo "Coś poszło nie tak";
                    return false;
                }
            }else{
                echo "Podane hasło jest niepoprawne";
                return false;
            }

        }else{
            echo "Nie udało sie zmienić hasła.";
            return false;
        }

    }



    public function logout()
    {

        $q = "delete from sesja where id = :id and web = :HTTP_USER_AGENT;";
        $stmt = $this->db->prepare($q);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->bindParam(':HTTP_USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
        $stmt->execute();
        setcookie("id", 0, time() - 1,"/");
        unset($_COOKIE['id']);
        return true;


    }



    public function find_by_email($email)
    {
        $query = "SELECT * FROM `uzytkownik` WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function find_by_login($login)
    {
        $query = "SELECT * FROM `uzytkownik` WHERE login = :login";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }


    public function auth($data)
    {
        $login = trim($data['login']);
        $login = strtolower($login);
        $password = trim($data['password']);

        $query = "SELECT * FROM uzytkownik WHERE login = :login";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

//        echo $password;
//        echo $result['haslo'];

        if ($stmt->rowCount() > 0) {
//            if ($password == $result['haslo'])
            if (password_verify($password, $result['haslo'])) {
                //@TODO CIESTECZKAv1
                $id = sha1(time() . time() . microtime() . rand(100, 200) . $_SERVER['REMOTE_ADDR']);

                $q2 = "delete from sesja where id_uzyt = :id_uzyt";
                $stmt = $this->db->prepare($q2);
                $stmt->bindParam(':id_uzyt', $result['id_uzyt']);
                $stmt->execute();
                $q3 = "insert into sesja(id_uzyt, id, ip, web) values(:id_uzyt, :id, :REMOTE_ADDR,:HTTP_USER_AGENT )";
                $stmt = $this->db->prepare($q3);
                $stmt->bindParam(':id_uzyt', $result['id_uzyt']);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':REMOTE_ADDR', $_SERVER['REMOTE_ADDR']);
                $stmt->bindParam(':HTTP_USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
                $stmt->execute();

                setcookie("id", $id,time()+3600,'/');


//                $_SESSION['id_uzyt'] = $result['id_uzyt'];
                return true;
            } else {
//                $this->errors[] = "Invalid email or password";
                return false;
            }
        } else {
//            $this->errors[] = "Invalid email or password";
            return false;
        }
    }


    public function insert($data)
    {


        $imie = trim($data['imie']);
        $nazwisko = trim($data['nazwisko']);


        $email = trim($data['email']);
        $email = strtolower($email);
        $login = trim($data['login']);
        $login = strtolower($login);

        $password = trim($data['password']);
        $cpassword = trim($data['cpassword']);


        $NIP = trim($data['NIP']);
        $nazwa_firmy = trim($data['nazwa_firmy']);
        if($nazwa_firmy=='') $nazwa_firmy=NULL;
        if($NIP=='') $NIP=NULL;



        if ($this->find_by_email($email) or ($password != $cpassword) or $this->find_by_login($login)) {
            return false;
        } else {


            $query = "INSERT INTO uzytkownik (`id_uzyt`,`id_adres`, `id_typ`, `imie`, `nazwisko`, `email`, `login`, `haslo`,`NIP`,`nazwa_firmy`) VALUES (NULL, NULL,2,:imie,:nazwisko,:email,:login,:password,:NIP,:nazwa_firmy)";
            $password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->db->prepare($query);


            $stmt->bindParam(":imie", $imie);
            $stmt->bindParam(":nazwisko", $nazwisko);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":login", $login);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":NIP", $NIP);
            $stmt->bindParam(":nazwa_firmy", $nazwa_firmy);


            $stmt->execute();

            return true;
        }

    }
}



