<?php
class Auth
{
    private $db;
    function __construct($con)
    {
        $this->db = $con;
    }

    function register($auth_idCard, $auth_fname, $auth_lname, $auth_password)
    {
        try {
            $new_password = password_hash($auth_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user_auth(auth_idCard,auth_fname,auth_lname,auth_password) VALUES(:auth_idCard,:auth_fname,:auth_lname,:auth_password)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":auth_idCard", $auth_idCard);
            $stmt->bindParam(":auth_fname", $auth_fname);
            $stmt->bindParam(":auth_lname", $auth_lname);
            $stmt->bindParam(":auth_password", $new_password);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // function getUser($idCard)
    // {
    //     try {
    //         $sql = "SELECT * FROM user_auth WHERE $idCard=:auth_idCard";
    //         $stmt = $this->db->query($sql);
    //         // $stmt->bindParam(":auth_idCard", $idCard);
    //         // $stmt->bindParam(":auth_password", $auth_password);
    //         $stmt->execute();
    //         $result = $stmt->fetch();
    //         return $result;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }
}