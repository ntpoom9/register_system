<?php
$title = "Register";
require_once("./component/header.php");
require_once "db/connect.php";
if (isset($_POST['register'])) {
    $auth_idCard = $_POST['auth_idCard'];
    $auth_fname = $_POST['auth_fname'];
    $auth_lname = $_POST['auth_lname'];
    $auth_password = $_POST['auth_password'];
    $c_password = $_POST['c_password'];

    if (empty($auth_idCard)) {
        $_SESSION['error'] = 'กรุณากรอกเลขบัตรประชาชน';
    } else if (strlen($_POST['auth_idCard']) > 13 || strlen($_POST['auth_idCard']) < 13) {
        $_SESSION['error'] = 'เลขบัตรประชาชนต้องครบ 13 หลัก';
    } else if (empty($auth_fname)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อจริง';
    } else if (empty($auth_lname)) {
        $_SESSION['error'] = 'กรุณากรอกนามสกุล';
    } else if (empty($auth_password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
    } else if (empty($c_password)) {
        $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
    } else if ($c_password != $auth_password) {
        $_SESSION['error'] = 'กรุณายืนยันรหัสผ่านให้ตรงกัน';
    } else {
        try {
            $sql = "SELECT * FROM user_auth WHERE $auth_idCard=:auth_idCard";
            $check_idCard = $con->prepare($sql);
            $check_idCard->bindParam(":auth_idCard", $auth_idCard);
            $check_idCard->execute();
            $row = $check_idCard->fetch(PDO::FETCH_ASSOC);

            if ($row['auth_idCard'] == $auth_idCard) {
                $_SESSION['warning'] = "เลขบัตรประชาชนนี้ถูกใช้แล้ว";
                // header("location: login_page.php");
            } else  if ($row['auth_fname'] == $auth_fname) {
                $_SESSION['warning'] = "ชื่อนี้ถูกใช้แล้ว";
                // header("location: login_page.php");
            } else if (!isset($_SESSION['error'])) {
                $status = $auth->register($auth_idCard, $auth_fname, $auth_lname, $auth_password);
                $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='login_page.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                header("refresh:3; login_page.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


?>

<link rel="stylesheet" href="./css/nav.css">
<link rel="stylesheet" href="./css/register.css">

</head>

<body>
    <?php require('component/nav.php'); ?>

    <h2 class="regis-title">ลงทะเบียนเข้าใช้งานระบบ</h2>

    <div class="container">
        <form method="post" action="register_page.php">
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
                        <div id="emailHelp" class="form-text">กรอกเลขบัตรประชาชน 13 หลัก โดยไม่ต้องใส่ขีด -
                            หรือเว้นช่องว่าง</div>
                    </div>
                    <div class="group-form">
                        <label for="fname" class="form-label mt-4">ชื่อจริง</label>
                        <input type="text" class="form-control" id="" name="auth_fname"
                            value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_POST["auth_fname"]; ?>">
                    </div>
                    <div class="group-form">
                        <label for="lname" class="form-label mt-4">นามสกุล</label>
                        <input type="text" class="form-control" id="" name="auth_lname"
                            value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_POST["auth_lname"]; ?>">
                    </div>
                    <div class="group-form">
                        <label for="password" class="form-label mt-4">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="" name="auth_password">
                    </div>

                    <div class="group-form">
                        <label for="c_password" class="form-label mt-4">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" id="" name="c_password">
                    </div>
                    <!-- <a href="login_page.php" class="btn btn-register">สมัครสมาชิก</a> -->
                    <button type="submit" name="register" class="btn btn-register">สมัครสมาชิก</button>
                </div>
                <div class="col-4"></div>
            </div>

        </form>
    </div>

</body>

</html>