<?php

class User extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function find_by_email($email){
        $query = "SELECT * FROM `uzytkownik` WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function find_by_login($login){
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
        $password = trim($data['password']);

        $query = "SELECT * FROM uzytkownik WHERE login = :login";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        echo $password;
        echo $result['haslo'];

            if ($stmt->rowCount() > 0) {
            if ($password == $result['haslo'])

            {
                $_SESSION['id_uzyt'] = $result['id_uzyt'];
                return true;
            }
            else
                {
//                $this->errors[] = "Invalid email or password";
                return false;
                }
        }

        else {
//            $this->errors[] = "Invalid email or password";
            return false;
        }
    }


    public function insert($data)
    {



        $imie = trim($data['imie']);
        $nazwisko = trim($data['nazwisko']);



        $email = trim($data['email']);

        $login=trim($data['login']);

        $password = trim($data['password']);
        $cpassword = trim($data['cpassword']);



        $NIP=trim($data['NIP']);
        $nazwa_firmy=trim($data['nazwa_firmy']);


        if ($this->find_by_email($email) or ($password!= $cpassword) or $this->find_by_login($login))

        {
            return false;
        }
        else {


            $query = "INSERT INTO uzytkownik (`id_uzyt`,`id_adres`, `id_typ`, `imie`, `nazwisko`, `email`, `login`, `haslo`,`NIP`,`nazwa_firmy`) VALUES (NULL, NULL,1,:imie,:nazwisko,:email,:login,:password,:NIP,:nazwa_firmy)";

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



