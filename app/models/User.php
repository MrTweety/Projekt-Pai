<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-12-15
 * Time: 19:32
 */

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

        $email = trim($data['email']);
        $password = trim($data['password']);
        $passwordconfirm = trim($data['password-confirmation']);

        if ($this->find_by_email($email) or ($password!= $passwordconfirm))
        {
            return false;
        }
        else {





            $query = "INSERT INTO user (`user_id`, `email`, `password`) VALUES (null, :email, :password)";


            $stmt = $this->db->prepare($query);


            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);


            $stmt->execute();
            return true;
        }

    }
}

