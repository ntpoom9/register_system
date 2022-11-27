<?php
class Controller
{
    private $db;

    function __construct($con)
    {
        $this->db = $con;
    }

    function getLevel()
    {
        try {
            $sql = "SELECT * FROM edu_level";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function getType()
    {
        try {
            $sql = "SELECT * FROM edu_type";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function getFaculty()
    {
        try {
            $sql = "SELECT * FROM edu_faculty";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function getBranch()
    {
        try {
            $sql = "SELECT * FROM edu_branch";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function enroll($fname_th, $lname_th, $fname_en, $lname_en, $gender, $birthday, $address, $telephone, $idCard, $email, $old_school, $old_edu, $gpax_m6, $admission_date, $level_id, $type_id, $faculty_id, $branch_id)
    {
        try {
            $sql = "INSERT INTO user_enroll(fname_th, lname_th, fname_en, lname_en, gender, birthday, address, telephone, idCard, email, old_school, old_edu, gpax_m6, admission_date, level_id, type_id, faculty_id, branch_id)VALUES(:fname_th, :lname_th, :fname_en, :lname_en, :gender, :birthday, :address, :telephone, :idCard, :email, :old_school, :old_edu, :gpax_m6, :admission_date, :level_id, :type_id, :faculty_id, :branch_id)";
            $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(":profile_id", $profile_id);
            $stmt->bindParam(":fname_th", $fname_th);
            $stmt->bindParam(":lname_th", $lname_th);
            $stmt->bindParam(":fname_en", $fname_en);
            $stmt->bindParam(":lname_en", $lname_en);
            $stmt->bindParam(":gender", $gender);
            $stmt->bindParam(":birthday", $birthday);
            $stmt->bindParam(":address", $address);
            $stmt->bindParam(":telephone", $telephone);
            $stmt->bindParam(":idCard", $idCard);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":old_school", $old_school);
            $stmt->bindParam(":old_edu", $old_edu);
            $stmt->bindParam(":gpax_m6", $gpax_m6);
            $stmt->bindParam(":admission_date", $admission_date);
            $stmt->bindParam(":level_id", $level_id);
            $stmt->bindParam(":type_id", $type_id);
            $stmt->bindParam(":faculty_id", $faculty_id);
            $stmt->bindParam(":branch_id", $branch_id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}