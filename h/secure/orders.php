<?php
    include_once("check_login.php");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management - ระบบจัดการออเดอร์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f4f7f6; }
        .table-card { border-radius: 15px; border: none; }
        .status-badge { width: 100px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index2.php">Admin Panel</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link active" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php">จัดการลูกค้า</a></li>
            </ul>
            <span class="navbar-text text-white me-3">
                แอดมิน: <strong><?php echo $_SESSION['aname']; ?></strong>
            </span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">ออกจากระบบ</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2 class="fw-bold"><i class="fa-solid fa-file-invoice-dollar me-2 text-primary"></i>จัดการออเดอร์</h2>
            <p class="text-muted">ตรวจสอบและอัปเดตสถานะการสั่งซื้อของลูกค้า</p>
        </div>
        <div class="col-md-4 text-end">
            <button class="btn btn-primary" onclick="window.print()">
                <i class="fa-solid fa-print me-1"></i> พิมพ์รายงาน
            </button>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card bg-white shadow-sm p-3 border-0 border-start border-warning border-5">
                <small class="text-muted">ออเดอร์ใหม่</small>
                <h3 class="fw-bold mb-0">5</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-white shadow-sm p-3 border-0 border-start border-success border-5">
                <small class="text-muted">ชำระเงินแล้ว</small>
                <h3 class="fw-bold mb-0">12</h3>
            </div>
        </div>
    </div>

    <div class="card table-card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">เลขที่ออเดอร์</th>
                            <th>วันที่สั่งซื้อ</th>
                            <th>ชื่อลูกค้า</th>
                            <th>ราคารวม</th>
                            <th>สถานะ</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-bold">#ORD-68001</td>
                            <td>04 ก.พ. 2569</td>
                            <td>คุณสมชาย ใจดี</td>
                            <td>฿2,500.00</td>
                            <td><span class="badge rounded-pill bg-warning text-dark status-badge">รอดำเนินการ</span></td>
                            <td class="text-center">
                                <a href="order_detail.php?id=1" class="btn btn-sm btn-outline-primary">รายละเอียด</a>
                                <button class="btn btn-sm btn-success">ยืนยัน</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">#ORD-68002</td>
                            <td>03 ก.พ. 2569</td>
                            <td>คุณภาคภูมิ (Man)</td>
                            <td>฿1,200.00</td>
                            <td><span class="badge rounded-pill bg-success status-badge">ชำระเงินแล้ว</span></td>
                            <td class="text-center">
                                <a href="order_detail.php?id=2" class="btn btn-sm btn-outline-primary">รายละเอียด</a>
                                <button class="btn btn-sm btn-info text-white">ส่งสินค้า</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="mt-4 text-center">
        <small class="text-muted">แสดงข้อมูลออเดอร์ล่าสุด 20 รายการ</small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>