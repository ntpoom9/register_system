<?php
$title = "Register";
require_once("./component/header.php");
require_once "db/connect.php";

if (isset($_POST['login'])) {
    $auth_idCard = $_POST['auth_idCard'];
    $auth_password = $_POST['auth_password'];

    if (empty($auth_idCard)) {
        $_SESSION['error'] = 'กรุณากรอกเลขบัตรประชาชน';
    } else if (strlen($_POST['auth_idCard']) > 13 || strlen($_POST['auth_idCard']) < 13) {
        $_SESSION['error'] = 'เลขบัตรประชาชนต้องครบ 13 หลัก';
    } else if (empty($auth_password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
    } else {
        try {
            $sql = "SELECT * FROM user_auth WHERE $auth_idCard=:auth_idCard";
            $check_data = $con->prepare($sql);
            $check_data->bindParam(":auth_idCard", $auth_idCard);
            $check_data->execute();
            $row = $check_data->fetch(PDO::FETCH_ASSOC);

            // if ($check_data->rowCount() > 0) {
            if ($auth_idCard == $row['auth_idCard']) {
                if (password_verify($auth_password, $row['auth_password'])) {
                    $_SESSION['user_login'] = $row['auth_id'];
                    $_SESSION['user_idCard'] = $row['auth_idCard'];
                    $_SESSION['user_fname'] = $row['auth_fname'];
                    $_SESSION['user_lname'] = $row['auth_lname'];
                    header("location: indexUser_page.php");
                } else {
                    $_SESSION['error'] = 'รหัสผ่านผิด';
                    // header("location: index.php");
                }
            } else {
                $_SESSION['error'] = "เลขบัตรประชาชนไม่ตรงกัน";
            }
            // } else {
            //     $_SESSION['error'] = "ไม่มีผู้ใช้นี้ในระบบ";
            //     // header("location: signin.php");
            // }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>

<link rel="stylesheet" href="./css/nav.css">
<link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <?php require('component/nav.php'); ?>

    <h2 class="login-title">เข้าสู่ระบบ</h2>

    <div class="container">
        <form method="post" action="login_page.php">
            <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
            </div>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
            </div>
            <?php } ?>
            <?php if (isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php
                    echo $_SESSION['warning'];
                    unset($_SESSION['warning']);
                    ?>
            </div>
            <?php } ?>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="group-form">
                        <label for="idCard" class="form-label mt-4">เลขบัตรประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="" name="auth_idCard"
                            value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_POST["auth_idCard"]; ?>">
                    </div>
                    <div class="group-form">
                        <label for="password" class="form-label mt-4">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="" name="auth_password">
                    </div>
                    <!-- <a href="indexUser_page.php" class="btn btn-register">เข้าสู่ระบบ</a> -->
                    <button type="submit" name="login" class="btn btn-register">เข้าสู่ระบบ</button>
                </div>
                <div class="col-4"></div>
            </div>

        </form>
    </div>

</body>

</html>