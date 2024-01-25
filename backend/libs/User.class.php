<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/Intern-Task/backend/libs/Database.class.php';

class User{
    

    public static function signup($name, $email, $password, $address, $phone){

        $options = ['cost'=> 5,];
        $conn = Database::getConnection();
        $password = password_hash($password,PASSWORD_BCRYPT,$options);
        $sql = "INSERT INTO `auth` (`name`, `email`, `password`, `address`, `phone`) VALUES ('$name', '$email', '$password', '$address', '$phone')";
        try{
            return $conn->query($sql);
        } catch(Exception $e){
            return false;
        }       
    }

    public static function login($email, $pass){
        $conn = Database::getConnection();
        $sql = "select * from `auth` where `email` = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if(password_verify($pass,$row['password'])){
                return $row['name'];
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

}


?>