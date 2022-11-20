<?php
class Controller{
private $db;

function __construct($con){
$this->db=$con;

}

    function getType(){
        try{
            $sql = "SELECT * FROM edu_type";
            $result=$this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function registerEdu(){
try{
//    $sql = "INSERT INTO user_profile";
    // $sql = "INSERT INTO `user_profile` (`profile_id`, `fname_th`, `lname_th`, `fname_en`, `lname_en`, `sex`, `birthday`, `address`, `telephone`, `idCard`, `email`, `old_school`, `gpax_m6`, `admission_date`, `type_id`, `faculty_id`, `branch_id`) VALUES (NULL, 'กขค', 'งจฉ', 'ABC', 'DEFG', 'male', '2022-11-20 15:50:10.000000', '99/9 ม.9', '0123456789', '17302053648945', 'ABCDEFG@gmail.com', 'Boscopitek school', '3.99', '2022-11-20 15:50:10.000000', '1', '1', '1');"
}catch(PDOException $e){
       echo $e->getMessage();
            return false;
}

    }


}


?>