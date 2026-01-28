<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ผลการสมัครงาน - Tech Innovate Co., Ltd.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg border-primary">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h1 class="h4 mb-0">66010914015 ภาคภูมิ วรรณชัย</h1>
                        <p class="mb-0">บริษัท เทค อินโนเวท จำกัด (Tech Innovate Co., Ltd.)</p>
                    </div>

                    <div class="card-body p-4">
                        <?php 
                        // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // ดึงค่าทั้งหมดจาก $_POST มาเก็บไว้ในตัวแปร เพื่อให้โค้ดอ่านง่ายขึ้น
                            $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : '-';
                            $prefix = isset($_POST['prefix']) ? htmlspecialchars($_POST['prefix']) : '-';
                            $fullname = isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : '-';
                            $dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '-';
                            $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : '-';
                            $skills = isset($_POST['skills']) ? htmlspecialchars($_POST['skills']) : 'ไม่ได้ระบุ';
                            $experience = isset($_POST['experience']) ? htmlspecialchars($_POST['experience']) : 'ไม่ได้ระบุ';
                        ?>

                        <h5 class="mb-3 text-success">🎉 ข้อมูลการสมัครของคุณถูกส่งเรียบร้อยแล้ว</h5>
                        <p class="text-muted">รายละเอียดที่คุณกรอกมีดังนี้:</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-primary">ตำแหน่งที่สมัคร</th>
                                        <td><?php echo $position; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ชื่อ-สกุล</th>
                                        <td><?php echo $prefix . ' ' . $fullname; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">วัน/เดือน/ปีเกิด</th>
                                        <td><?php echo $dob; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-primary">ระดับการศึกษาสูงสุด</th>
                                        <td><?php echo $education; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ความสามารถพิเศษ</th>
                                        <td><?php echo nl2br($skills); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ประสบการณ์ทำงาน</th>
                                        <td><?php echo nl2br($experience); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-4 text-center">
                            <a href="e.php" class="btn btn-primary">กลับสู่หน้าสมัครงาน</a>
                            <button type="button" class="btn btn-outline-info" onclick="window.print()">พิมพ์หน้านี้</button>
                        </div>

                        <?php 
                        } else {
                            // กรณีที่เข้าถึงหน้านี้โดยตรงโดยไม่มีข้อมูล POST
                            echo '<div class="alert alert-warning" role="alert">';
                            echo '<strong>⚠️ ไม่พบข้อมูลการสมัคร!</strong> กรุณากรอกแบบฟอร์มใบสมัครงานก่อนทำการส่งข้อมูล';
                            echo '</div>';
                            echo '<div class="text-center mt-3"><a href="e.php" class="btn btn-primary">ไปยังหน้าสมัครงาน</a></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>