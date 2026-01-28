<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ใบสมัครงาน - Tech Innovate Co., Ltd.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <form action="f.php" method="post"> 

                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-primary text-white text-center py-3">
                            <h1 class="h3 mb-0">ใบสมัครงาน 66010914015 ภาคภูมิ วรรณชัย</h1>
                            <p class="mb-0">บริษัท เทค อินโนเวท จำกัด (Tech Innovate Co., Ltd.)</p>
                        </div>

                        <div class="card-body p-4 p-md-5">
                            
                            <h5 class="mb-4 text-primary border-bottom pb-2">1. ตำแหน่งที่ต้องการสมัคร</h5>
                            <div class="mb-4">
                                <label for="position" class="form-label">เลือกตำแหน่งงาน <span class="text-danger">*</span></label>
                                <select class="form-select" id="position" name="position" required>
                                    <option value="" selected disabled>-- กรุณาเลือกตำแหน่ง --</option>
                                    <option value="Software Developer">Software Developer</option>
                                    <option value="Data Analyst">Data Analyst</option>
                                    <option value="UX/UI Designer">UX/UI Designer</option>
                                    <option value="Marketing Specialist">Marketing Specialist</option>
                                    <option value="Administrative Officer">Administrative Officer</option>
                                </select>
                            </div>

                            <h5 class="mb-4 mt-5 text-primary border-bottom pb-2">2. ข้อมูลส่วนตัว</h5>
                            
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                                    <select class="form-select" id="prefix" name="prefix" required>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ชื่อ-สกุล" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="dob" class="form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>

                            <h5 class="mb-4 mt-5 text-primary border-bottom pb-2">3. การศึกษาและความสามารถ</h5>

                            <div class="mb-4">
                                <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                                <select class="form-select" id="education" name="education" required>
                                    <option value="" selected disabled>-- กรุณาเลือกระดับการศึกษา --</option>
                                    <option value="ปวช./ปวส.">ปวช./ปวส. หรือเทียบเท่า</option>
                                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                                    <option value="ปริญญาโท">ปริญญาโท</option>
                                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="skills" class="form-label">ความสามารถพิเศษ / ทักษะเพิ่มเติม</label>
                                <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น ภาษาต่างประเทศ, โปรแกรมคอมพิวเตอร์, ใบรับรองเฉพาะทาง"></textarea>
                                <div class="form-text">ระบุความสามารถที่เกี่ยวข้องกับตำแหน่งงาน</div>
                            </div>

                            <h5 class="mb-4 mt-5 text-primary border-bottom pb-2">4. ประสบการณ์ทำงาน</h5>

                            <div class="mb-4">
                                <label for="experience" class="form-label">สรุปประสบการณ์ทำงานที่เกี่ยวข้อง</label>
                                <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="เช่น ชื่อบริษัท, ตำแหน่ง, ระยะเวลา, ขอบเขตความรับผิดชอบหลัก"></textarea>
                                <div class="form-text">สำหรับผู้ไม่มีประสบการณ์ ให้ระบุว่า "ไม่มี" หรือระบุประสบการณ์ฝึกงาน/โครงการที่เกี่ยวข้อง</div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                                <button type="submit" class="btn btn-success btn-lg px-5 me-md-2">ส่งใบสมัคร</button>
                                <button type="reset" class="btn btn-outline-secondary btn-lg px-5">ล้างข้อมูล</button>
                            </div>

                        </div>

                        <div class="card-footer text-center text-muted">
                            <small>&copy; 2025 Tech Innovate Co., Ltd. ขอให้โชคดีในการสมัคร!</small>
                        </div>

                    </div>
                </form> </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>