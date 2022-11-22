<?php
$title = "Register";
require_once("./component/header.php");
?>

<link rel="stylesheet" href="./css/nav.css">
<link rel="stylesheet" href="./css/register.css">

</head>

<body>
    <?php require('component/nav.php'); ?>

    <h2 class="regis-title">ลงทะเบียนเข้าใช้งานระบบ</h2>

    <div class="container">
        <form>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="group-form">
                        <label for="idCard" class="form-label mt-4">เลขบัตรประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="">
                        <div id="emailHelp" class="form-text">กรอกเลขบัตรประชาชน 13 หลัก โดยไม่ต้องใส่ขีด - หรือเว้นช่องว่าง</div>
                    </div>
                    
                    <div class="group-form">
                        <label for="password" class="form-label mt-4">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="">
                    </div>
                    <a href="login_page.php" class="btn btn-register">สมัครสมาชิก</a>
                </div>
                <div class="col-4"></div>
            </div>

        </form>
    </div>

</body>

</html>