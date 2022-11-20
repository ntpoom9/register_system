<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/nav_user.css">
    <link rel="stylesheet" href="./css/admission.css">
</head>

<body>
    <?php require('component/nav_user.php'); ?>

    <h2 class="adms-title">รับสมัครนักศึกษา</h2>

    <div class="container">
        <div class="row mt-5">
            <div class="col-3">
                <div class="group-step1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                    </svg>
                    <p class="text-step">ระดับการศึกษา</p>
                </div>
            </div>
            <div class="col-3">
                <div class="group-step2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                    <p class="text-step">ข้อมูลส่วนตัว</p>
                </div>
            </div>
            <div class="col-3">
                <div class="group-step3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                    </svg>
                    <p class="text-step">ข้อมูลการศึกษา</p>
                </div>
            </div>
            <div class="col-3">
                <div class="group-step4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                        <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                        <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                    </svg>
                    <p class="text-step">สาขาวิชาที่สนใจ</p>
                </div>
            </div>
        </div>

        <!-- step progress -->
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- content step1 -->
        <div id="content-step1" class="content-step1">
            <h5>เลือกระดับการศึกษาที่ต้องการสมัคร</h5>

            <form>
                <div class="divFormAdmission">
                    <div class="form-group">
                        <select class="form-select" name="">
                            <option selected>ระดับการศึกษา</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-select" name="">
                            <option selected>ประเภท</option>
                            <option value="ภาคปกติ">ภาคปกติ (ทั่วไป)</option>
                            <option value="ภาค กศ.พป.">ภาค กศ.พป. (เรียนวันอาทิตย์)</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-next" onclick="nexttostep2()">ถัดไป</button>
                </div>
            </form>
        </div>

        <!-- content step2 -->
        <div id="content-step2" class="content-step2">
            <h5>ข้อมูลส่วนตัว</h5>

            <form>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="firstName" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control" id="" name="firstName">
                    </div>
                    <div class="col-4">
                        <label for="lastName" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="" name="lastName">
                    </div>
                    <div class="col-4">
                        <div class="gender-group">
                            <label for="gender" class="form-label">เพศ</label> <br />
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    ชาย
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    หญิง
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-4">
                        <label for="firstNameEng" class="form-label">ชื่อจริงภาษาอังกฤษ</label>
                        <input type="text" class="form-control" id="" name="firstNameEng">
                    </div>
                    <div class="col-4">
                        <label for="lastNameEng" class="form-label">นามสกุลภาษาอังกฤษ</label>
                        <input type="text" class="form-control" id="" name="lastNameEng">
                    </div>
                    <div class="col-4">
                        <label for="birthday" class="form-label">วันเกิด</label>
                        <input type="date" class="form-control" id="" name="birthday">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-4">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="" name="email">
                    </div>
                    <div class="col-4">
                        <label for="tel" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" id="" name="tel">
                    </div>
                </div>
                <button type="button" class="btn btn-next mt-5" onclick="nexttostep3()">ถัดไป</button>
            </form>
        </div>

        <!-- content step3 -->
        <div id="content-step3" class="content-step3">
            <h5>ข้อมูลการศึกษา</h5>

            <form>
                <div class="divFormAdmission">
                    <div class="col-4">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="" name="email">
                    </div>
                    <div class="col-4">
                        <label for="tel" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" id="" name="tel">
                    </div>
                    <button type="button" class="btn btn-next" onclick="nexttostep2()">ถัดไป</button>
                </div>
            </form>
        </div>

        <!-- content step4 -->
        <div id="content-step4" class="content-step4">
            <h5>ข้อมูลการศึกษา</h5>
        </div>

    </div>

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function nexttostep2() {
            var content1 = document.getElementById("content-step1");
            // var content2 = document.getElementById("content-step2");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
                document.getElementById("content-step2").style.display = "block";
                document.getElementsByClassName("progress-bar")[0].style.width = "37%";
                document.getElementsByClassName("group-step2")[0].style.color = "#000000";
            }
        }

        function nexttostep3() {
            var content2 = document.getElementById("content-step2");
            // var content2 = document.getElementById("content-step2");
            if (content2.style.display === "none") {
                content2.style.display = "block";
            } else {
                content2.style.display = "none";
                document.getElementById("content-step3").style.display = "block";
                document.getElementsByClassName("progress-bar")[0].style.width = "63%";
                document.getElementsByClassName("group-step3")[0].style.color = "#000000";
            }
        }
    </script>

</body>

</html>