<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มรับข้อมูล - Pakphoom Wannachai</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: #eef2f7;
    }
    .form-box {
        background: #fff;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.1);
        margin-top: 30px;
    }
</style>

</head>

<body>

<div class="container">
    <div class="form-box">

        <h2 class="text-center mb-4 text-primary">📌 ฟอร์มรับข้อมูล - Pakphoom Wannachai-Chatgpt</h2>

        <form method="post" action="" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">ชื่อ-สกุล</label>
                    <input type="text" name="Fullname" required class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">เบอร์โทร</label>
                    <input type="text" name="phone" required class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">ส่วนสูง (ซม.)</label>
                    <input type="number" name="height" max="200" required class="form-control">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">วันเกิด</label>
                    <input type="date" name="birthday" class="form-control">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">เวลา</label>
                    <input type="time" name="time" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">ที่อยู่</label>
                <textarea name="address" rows="3" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">สีที่ไม่ชอบ</label><br>
                <input type="color" name="color" class="form-control form-control-color">
            </div>

            <div class="mb-3">
                <label class="form-label">อีเมล</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">อัปโหลดไฟล์</label>
                <input type="file" name="file" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">เลือกสาขา</label>
                <select name="major" class="form-select">
                    <option value="บัญชี">บัญชี</option>
                    <option value="ตลาด">ตลาด</option>
                    <option value="จัดการ">จัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="d-flex flex-wrap gap-2 mt-4">
                <button type="submit" name="Submit" class="btn btn-primary">ส่งข้อมูล</button>
                <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
                <button type="button" class="btn btn-info" onclick="window.location='https://www.imdb.com/';">IMDB</button>
                <button type="button" class="btn btn-secondary" ondblclick="alert('OMG!!')">Hello World</button>
                <button type="button" class="btn btn-dark" onclick="window.print()">ปริ้น</button>
            </div>
        </form>

        <hr class="my-4">

        <!-- PHP RESULT -->
        <?php
        if(isset($_POST['Submit'])){
            echo "<div class='alert alert-success'>";
            echo "<h4>ข้อมูลที่ได้รับ</h4>";
            foreach($_POST as $key => $value){
                if($key != "color"){
                    echo "<strong>$key</strong> : $value<br>";
                }
            }
            echo "<br><strong>สีที่ไม่ชอบ:</strong>";
            echo "<div style='background:{$_POST['color']}; width:150px; height:40px; border-radius:8px;'></div>";
            echo "</div>";
        }
        ?>

        <img src="1.jpg" class="img-fluid rounded shadow mt-4">

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
