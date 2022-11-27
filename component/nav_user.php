<?php
require_once "db/connect.php";
if (isset($_SESSION['user_login'])) {
    $user_id = $_SESSION['user_login'];
    $sql = "SELECT * FROM user_auth WHERE auth_id=$user_id";
    $check_idCard = $con->prepare($sql);
    $check_idCard->execute();
    $row = $check_idCard->fetch(PDO::FETCH_ASSOC);
}

?>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="indexUser_page.php">
            <img src="./img/real-logoNPRU-removebg.png" class="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="indexUser_page.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ข่าวสาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">เกี่ยวกับมหาวิทยาลัย</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admission_page.php">สมัครเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link logout-li" href="logout.php">ออกจากระบบ</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php echo $row['auth_fname'] . ' ' . $row['auth_lname']; ?>
                <a href="logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="#c50909" fill="currentColor"
                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </a>
            </span>

        </div>

    </div>
</nav>