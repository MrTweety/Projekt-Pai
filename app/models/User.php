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
        $query = "SELECT * FROM `user` WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function auth($data)
    {
        $email = trim($data['email']);
        $password = trim($data['password']);

        //echo $email;


        $query = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //print_r($result);

        echo $password;
        echo "<br>";
        echo $result['password'];

        if ($stmt->rowCount() > 0) {
            if ($password == $result['password']) {
                $_SESSION['user_id'] = $result['user_id'];
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

        $email = trim($data['email']);

        if ($this->find_by_email($email))
        {
            return false;
        }
        else {

            $password = trim($data['password']);


            $query = "INSERT INTO user (`user_id`, `email`, `password`) VALUES (null, :email, :password)";


            $stmt = $this->db->prepare($query);


            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);


            $stmt->execute();
            return true;
        }

    }
}

