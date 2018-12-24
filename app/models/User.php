<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-12-15
 * Time: 19:32
 */

class User extends Model
{
    public static $ADMIN_TYPE = 0;
    public static $CLIENT_TYPE = 1;

    public function __construct()
    {
        parent::__construct();
    }

    public function is_logged_in(){
        if(isset($_SESSION['user_id'])){
            return true;
        }
    }

    public function get_id(){
        return $_SESSION['user_id'];
    }

    public function get_type(){
        return $_SESSION['user_type'];
    }




    public function find_by_login($login){
        $query = "SELECT * FROM user WHERE login = :login";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function find_by_email($email){
        $query = "SELECT * FROM `user` WHERE email = :email";
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

        $query = "SELECT * FROM user WHERE login = :login";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        echo $password;
        echo $result['password'];

            if ($stmt->rowCount() > 0) {
            if ($password == $result['password']) {
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['user_type'] =$result['user_type'];

                return true;
            }
            else {
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
        $login = trim($data['login']);
        $email = trim($data['email']);
        $password = trim($data['password']);
        $password_confirm = trim($data['password_confirmation']);



        if($this->find_by_login($login) or $this->find_by_email($email) or ($password!= $password_confirm))
        {
            return false;
        }
        else {
            $user_type = 1;
            $query = "INSERT INTO user (`user_id`,`login`,`email`, `password`,`user_type`) VALUES (null,:login, :email, :password,:user_type)";


            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":login", $login);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":user_type", $user_type);


            $stmt->execute();
            return true;
        }

    }
}

