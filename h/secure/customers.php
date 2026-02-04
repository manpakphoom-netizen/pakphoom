<?php
    include_once("check_login.php");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management - ระบบจัดการลูกค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f4f7f6; }
        .customer-avatar { width: 40px; height: 40px; object-fit: cover; border-radius: 50%; }
        .card { border-radius: 15px; border: none; }
        .search-box { border-radius: 20px; padding-left: 20px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index2.php">Admin Panel</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link active" href="customers.php">จัดการลูกค้า</a></li>
            </ul>
            <span class="navbar-text text-white me-3">
                สวัสดี, <strong><?php echo $_SESSION['aname']; ?></strong>
            </span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">ออกจากระบบ</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark">
                <i class="fa-solid fa-users-gear me-2 text-success"></i>จัดการลูกค้า
            </h2>
            <p class="text-muted">ยินดีต้อนรับคุณ pakphoom wannachai (Man)</p>
        </div>
        <div class="col-md-6 text-md-end">
            <div class="input-group">
                <input type="text" class="form-control search-box shadow-sm" placeholder="ค้นหาชื่อ, อีเมล หรือเบอร์โทร..." aria-label="Search">
                <button class="btn btn-success rounded-pill px-4 ms-2 shadow-sm" type="button">
                    <i class="fa-solid fa-magnifying-glass me-1"></i> ค้นหา
                </button>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">รายชื่อสมาชิกทั้งหมด</h5>
            <span class="badge bg-light text-dark border">ทั้งหมด 150 ท่าน</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">ลำดับ</th>
                            <th>ข้อมูลลูกค้า</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>ระดับสมาชิก</th>
                            <th>วันที่สมัคร</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 text-muted">#1</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Somchai+J&background=random" class="customer-avatar me-3" alt="avatar">
                                    <div>
                                        <div class="fw-bold">คุณสมชาย ใจดี</div>
                                        <small class="text-muted">somchai.j@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>081-234-5678</td>
                            <td><span class="badge bg-primary">Gold Member</span></td>
                            <td>01 ม.ค. 2569</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-secondary" title="ดูประวัติการสั่งซื้อ">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="ระงับการใช้งาน">
                                    <i class="fa-solid fa-user-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 text-muted">#2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Pakphoom+W&background=random" class="customer-avatar me-3" alt="avatar">
                                    <div>
                                        <div class="fw-bold">คุณภาคภูมิ (Man)</div>
                                        <small class="text-muted">pakphoom.man@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>089-876-5432</td>
                            <td><span class="badge bg-light text-dark border">General</span></td>
                            <td>04 ก.พ. 2569</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa-solid fa-user-slash"></i>
                                </button>
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