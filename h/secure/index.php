<?php
session_start();
// หากมีการล็อกอินอยู่แล้ว ให้ส่งไปที่หน้า index2.php
if (isset($_SESSION['aid'])) {
    header("Location: index2.php");
    exit;
}

if (isset($_POST['Submit'])) {
    include_once("connectdb.php");

    $user = $_POST['auser'];
    $pwd  = $_POST['apwd'];

    // 1. ใช้ Prepared Statement เพื่อป้องกัน SQL Injection
    $stmt = $conn->prepare("SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $data = $result->fetch_assoc();

        // 2. ตรวจสอบรหัสผ่านที่เข้ารหัสด้วย password_verify
        if (password_verify($pwd, $data['a_password'])) {
            $_SESSION['aid']   = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            echo "<script>window.location='index2.php';</script>";
            exit;
        } else {
            $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
    } else {
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .login-card { max-width: 400px; margin-top: 100px; border: none; border-radius: 15px; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-card shadow-sm bg-white p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Login</h2>
                <p class="text-muted">ระบบจัดการหลังบ้าน</p>
            </div>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="auser" class="form-control" placeholder="ระบุชื่อผู้ใช้" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="apwd" class="form-control" placeholder="ระบุรหัสผ่าน" required>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg">เข้าสู่ระบบ</button>
                </div>
            </form>
            
            <hr class="my-4">
            <div class="text-center">
                <small class="text-muted">pakphoom wannachai (Man)</small>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>