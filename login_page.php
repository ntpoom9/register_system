<?php
$title = "Register";
require_once("./component/header.php");
?>

<link rel="stylesheet" href="./css/nav.css">
<link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <?php require('component/nav.php'); ?>

    <h2 class="login-title">เข้าสู่ระบบ</h2>

    <div class="container">
        <form>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="group-form">
                        <label for="idCard" class="form-label mt-4">เลขบัตรประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="group-form">
                        <label for="password" class="form-label mt-4">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="">
                    </div>
                    <a href="index.php" class="btn btn-register">เข้าสู่ระบบ</a>
                </div>
                <div class="col-4"></div>
            </div>

        </form>
    </div>

</body>

</html>