<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/card.css">

</head>
<body>
    <?php require('component/nav.php'); ?>
    <?php require('component/carousel.php'); ?>

    <div class="container">
        <h3 class="title">ข่าวล่าสุด</h3>
        <hr/>
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
        <hr/>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>