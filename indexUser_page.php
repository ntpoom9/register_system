<?php
$title = "Index";
require_once "db/connect.php";
require_once "./component/header.php";

if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: login_page.php');
}
?>

<link rel="stylesheet" href="./css/nav_user.css">
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./css/card.css">

</head>

<body>
    <?php require('component/nav_user.php'); ?>
    <?php require('component/carousel.php'); ?>

    <div class="container">
        <h3 class="title">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" color="#ffbb1c" fill="currentColor"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            ข่าวล่าสุด
        </h3>
        <hr />
        <div class="row">
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
        </div>


        <h3 class="title">กิจกรรม</h3>
        <hr />
        <div class="row">
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
            <div class="col-3">
                <?php require('component/card.php'); ?>
            </div>
        </div>

    </div>

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>