<?php
    include_once("check_login.php");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ระบบจัดการหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero-section { background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%); color: white; border-radius: 15px; padding: 40px; margin-bottom: 30px; }
        .menu-card { border: none; border-radius: 15px; transition: all 0.3s ease; }
        .menu-card:hover { transform: translateY(-10px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
        .icon-box { width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index2.php">
            <i class="fa-solid fa-gauge-high me-2"></i>Admin Panel
        </a>
        <div class="ms-auto d-flex align-items-center">
            <span class="navbar-text text-white me-3 d-none d-md-block">
                เข้าใช้งานโดย: <strong><?php echo $_SESSION['aname']; ?></strong>
            </span>
            <a href="logout.php" class="btn btn-danger btn-sm px-3 rounded-pill">
                <i class="fa-solid fa-right-from-bracket me-1"></i> ออกจากระบบ
            </a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="hero-section shadow">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold mb-2">สวัสดีครับ, คุณ <?php echo $_SESSION['aname']; ?>!</h1>
                <p class="lead mb-0">ยินดีต้อนรับสู่ระบบจัดการข้อมูลเว็บไซต์ของคุณ pakphoom wannachai (Man)</p>
            </div>
            <div class="col-md-4 text-md-end d-none d-md-block">
                <i class="fa-solid fa-user-shield fa-6x opacity-25"></i>
            </div>
        </div>
    </div>

    <h4 class="fw-bold mb-4 text-secondary">เมนูการจัดการหลัก</h4>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 menu-card shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary">
                        <i class="fa-solid fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="card-title fw-bold">จัดการสินค้า</h5>
                    <p class="card-text text-muted">บริหารจัดการรายการสินค้า สต็อก และราคาสินค้าทั้งหมด</p>
                    <a href="products.php" class="btn btn-outline-primary w-100 stretched-link">เข้าใช้งาน</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 menu-card shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-box bg-warning bg-opacity-10 text-warning">
                        <i class="fa-solid fa-receipt fa-2x"></i>
                    </div>
                    <h5 class="card-title fw-bold">จัดการออเดอร์</h5>
                    <p class="card-text text-muted">ตรวจสอบรายการสั่งซื้อ สถานะการชำระเงิน และการจัดส่ง</p>
                    <a href="orders.php" class="btn btn-outline-warning w-100 stretched-link">เข้าใช้งาน</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 menu-card shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-box bg-success bg-opacity-10 text-success">
                        <i class="fa-solid fa-users fa-2x"></i>
                    </div>
                    <h5 class="card-title fw-bold">จัดการลูกค้า</h5>
                    <p class="card-text text-muted">ดูข้อมูลสมาชิก ประวัติการติดต่อ และฐานข้อมูลลูกค้า</p>
                    <a href="customers.php" class="btn btn-outline-success w-100 stretched-link">เข้าใช้งาน</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 py-4 border-top">
        <div class="row">
            <div class="col-md-6 text-center text-md-start text-muted small">
                © 2026 Admin Dashboard System | Developed by pakphoom wannachai (Man)
            </div>
            <div class="col-md-6 text-center text-md-end text-muted small">
                <span class="badge bg-light text-dark border">PHP 8.2</span>
                <span class="badge bg-light text-dark border">Bootstrap 5.3</span>
            </div>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>