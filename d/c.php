<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914015 ภาคภูมิ วรรณชัย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* จัดให้ส่วนแสดงสีที่เลือกไม่ชอบอยู่ด้านเดียวกัน */
        .color-display {
            display: flex;
            align-items: center;
        }
        .color-box {
            width: 50px;
            height: 20px;
            border: 1px solid #ccc;
            margin-left: 10px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h1 class="h4 mb-0">ฟอร์มรับข้อมูล - Pakphoom Wannachai  Gemini </h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">

                            <div class="mb-3">
                                <label for="Fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*Must กรอก</span></label>
                                <input type="text" class="form-control" id="Fullname" name="Fullname" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*Must กรอก</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="height" class="form-label">ส่วนสูง (ซม.)</label>
                                <input type="number" class="form-control" id="height" name="height" max="200" required>
                                <div class="form-text">ไม่เกิน 200 ซม.</div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="birthday" class="form-label">วันเดือนปี</label>
                                <input type="date" class="form-control" id="birthday" name="birthday">
                            </div>

                            <div class="mb-3">
                                <label for="time" class="form-label">เวลาตอนนี้</label>
                                <input type="time" class="form-control" id="time" name="time">
                            </div>

                            <div class="mb-3">
                                <label for="color" class="form-label">สีที่ไม่ชอบ</label>
                                <input type="color" class="form-control form-control-color" id="color" name="color" value="#dc3545"> </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="file" class="form-label">File</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>

                            <div class="mb-3">
                                <label for="major" class="form-label">สาขา</label>
                                <select class="form-select" id="major" name="major">
                                    <option value="บัญชี">บัญชี</option>
                                    <option value="ตลาด">ตลาด</option>
                                    <option value="จัดการ">จัดการ</option>
                                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                                <button type="submit" name="Submit" class="btn btn-success me-md-2">สามัครรร</button>
                                <button type="reset" name="reset" class="btn btn-warning me-md-2">ล้างข้อมูล</button>
                                <button type="button" onClick="window.location='https://www.imdb.com/'; alert('กำลังนำทางไป IMDB');" class="btn btn-info me-md-2">IMDB</button>
                                <button type="button" onDblClick="alert('OMG!!');" class="btn btn-secondary me-md-2">Hello World (ดับเบิ้ลคลิก)</button>
                                <button type="button" onClick="window.print();" class="btn btn-primary">ปลิ้นนน</button>
                            </div>

                        </form>
                    </div>
                </div>

                <?php if(isset($_POST['Submit'])): ?>
                <div class="card mt-4 shadow-lg">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">✅ ข้อมูลที่ได้รับ</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        $fullname = $_POST['Fullname'];
                        $phone = $_POST['phone'];
                        $height = $_POST['height'];
                        $address = $_POST['address'];
                        $time = $_POST['time'];
                        $color = $_POST['color'];
                        $birthday = $_POST['birthday'];
                        $email = $_POST['email'];
                        $file = $_POST['file'];
                        $major = $_POST['major'];
                        ?>
                        <p><strong>ชื่อ-สกุล:</strong> <?php echo htmlspecialchars($fullname); ?></p>
                        <p><strong>เบอร์โทร:</strong> <?php echo htmlspecialchars($phone); ?></p>
                        <p><strong>ส่วนสูง:</strong> <?php echo htmlspecialchars($height); ?> ซม.</p>
                        <p><strong>ที่อยู่:</strong> <?php echo nl2br(htmlspecialchars($address)); ?></p>
                        <p><strong>วันเดือนปี:</strong> <?php echo htmlspecialchars($birthday); ?></p>
                        <p><strong>เวลาตอนนี้:</strong> <?php echo htmlspecialchars($time); ?></p>
                        <div class="color-display">
                            <strong>สีที่ไม่ชอบ:</strong> 
                            <span class="color-box" style='background-color:<?php echo htmlspecialchars($color); ?>'></span>
                            <span class="ms-2"><?php echo htmlspecialchars($color); ?></span>
                        </div>
                        <p class="mt-2"><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                        <p><strong>ไฟล์:</strong> <?php echo htmlspecialchars($file); ?></p>
                        <p><strong>สาขา:</strong> <?php echo htmlspecialchars($major); ?></p>
                    </div>
                </div>
                <?php endif; ?>

                <hr class="my-5">

                <div class="text-center">
                    <p class="text-muted">รูปภาพประกอบ (Image with max-width for responsiveness)</p>
                    <img src="1.jpg" class="img-fluid rounded shadow" alt="รูปภาพประกอบ" width="1400">
                </div>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>