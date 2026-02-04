<?php
    include_once("check_login.php");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - จัดการสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f4f7f6; }
        .nav-link:hover { background-color: rgba(255,255,255,0.1); border-radius: 5px; }
        .card { border: none; transition: transform 0.2s; cursor: pointer; }
        .card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php">จัดการลูกค้า</a></li>
            </ul>
            <div class="navbar-text text-white me-3">
                <i class="fa-solid fa-user-tie me-1"></i> 
                สวัสดี, <strong><?php echo $_SESSION['aname']; ?></strong>
            </div>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">ออกจากระบบ</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="fw-bold text-secondary">ระบบจัดการหลังบ้าน</h2>
            <p class="text-muted small">ยินดีต้อนรับคุณ pakphoom wannachai (Man)</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <a href="products.php" class="text-decoration-none">
                <div class="card shadow-sm h-100 p-3 text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-boxes-stacked fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold text-dark">จัดการสินค้า</h5>
                        <p class="card-text text-muted">เพิ่ม ลบ แก้ไข ข้อมูลสินค้าในสต็อก</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="orders.php" class="text-decoration-none">
                <div class="card shadow-sm h-100 p-3 text-center border-start border-info border-5">
                    <div class="card-body">
                        <i class="fa-solid fa-cart-shopping fa-3x text-info mb-3"></i>
                        <h5 class="card-title fw-bold text-dark">จัดการออเดอร์</h5>
                        <p class="card-text text-muted">ตรวจสอบรายการสั่งซื้อและการชำระเงิน</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="customers.php" class="text-decoration-none">
                <div class="card shadow-sm h-100 p-3 text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-users fa-3x text-success mb-3"></i>
                        <h5 class="card-title fw-bold text-dark">จัดการลูกค้า</h5>
                        <p class="card-text text-muted">ดูรายชื่อสมาชิกและประวัติลูกค้า</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="card shadow-sm mt-5">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-bold">รายการสินค้าล่าสุด</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคา</th>
                            <th>สถานะ</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#001</td>
                            <td><img src="https://via.placeholder.com/50" class="rounded" alt="product"></td>
                            <td>ตัวอย่างสินค้า 1</td>
                            <td>฿1,200</td>
                            <td><span class="badge bg-success">พร้อมส่ง</span></td>
                            <td>
                                <button class="btn btn-sm btn-warning">แก้ไข</button>
                                <button class="btn btn-sm btn-danger">ลบ</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>