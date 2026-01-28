<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pakphoom Wannachai 007 (Mankung) - รายงานการขาย</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    
    <!-- Font Awesome สำหรับไอคอน -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* พื้นหลังสีรุ้งเคลื่อนไหว */
        body {
            background: linear-gradient(45deg, #ff0000, #ff8000, #ffff00, #80ff00, #00ff80, #00ffff, #0080ff, #0000ff, #8000ff, #ff00ff);
            background-size: 1000% 1000%;
            animation: rainbowBackground 20s ease infinite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding-bottom: 50px;
        }
        
        @keyframes rainbowBackground {
            0% { background-position: 0% 50% }
            50% { background-position: 100% 50% }
            100% { background-position: 0% 50% }
        }
        
        /* คอนเทนเนอร์หลัก */
        .main-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 25px;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        /* หัวข้อหลัก */
        .main-header {
            text-align: center;
            color: #333;
            padding-bottom: 20px;
            margin-bottom: 25px;
            border-bottom: 3px solid #4e54c8;
            position: relative;
        }
        
        .main-header h1 {
            font-weight: 700;
            color: #2c3e50;
        }
        
        .main-header .badge {
            font-size: 1rem;
            padding: 8px 15px;
            margin-left: 10px;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
        }
        
        /* ปรับแต่งตาราง */
        #salesTable {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            overflow: hidden;
        }
        
        #salesTable thead {
            background: linear-gradient(45deg, #4e54c8, #8f94fb);
            color: white;
        }
        
        #salesTable th {
            border: none;
            font-weight: 600;
            padding: 15px 10px;
        }
        
        #salesTable tbody tr {
            transition: all 0.3s;
        }
        
        #salesTable tbody tr:hover {
            background-color: rgba(78, 84, 200, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }
        
        #salesTable td {
            vertical-align: middle;
            padding: 12px 10px;
            border-color: #f1f1f1;
        }
        
        /* รูปภาพสินค้า */
        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #eaeaea;
            transition: all 0.3s;
        }
        
        .product-img:hover {
            transform: scale(1.5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 100;
            position: relative;
        }
        
        /* จำนวนเงิน */
        .amount-cell {
            font-weight: 600;
            color: #2c3e50;
        }
        
        /* ฟุตเตอร์ */
        .footer {
            text-align: center;
            color: white;
            padding: 15px;
            font-size: 0.9rem;
            margin-top: 20px;
        }
        
        /* การแจ้งเตือนเมื่อไม่มีข้อมูล */
        .dataTables_empty {
            text-align: center;
            padding: 40px !important;
            color: #666;
            font-style: italic;
        }
        
        /* ปรับแต่งการค้นหาและหน้า */
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 15px;
        }
        
        /* ตัวชี้วัดข้อมูล */
        .data-stats {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }
        
        .stat-item {
            text-align: center;
            padding: 10px;
        }
        
        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: #4e54c8;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-header h1 {
                font-size: 1.8rem;
            }
            
            .main-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <div class="main-header">
            <h1><i class="fas fa-shopping-cart me-2"></i>รายงานการขาย Supermarket <span class="badge">Pakphoom Wannachai 007 (Mankung)</span></h1>
            <p class="text-muted mb-0">ข้อมูลการขายสินค้าจากฐานข้อมูล พร้อมการแสดงผลแบบตารางที่มีความสามารถหลากหลาย</p>
        </div>
        
        <!-- ตัวชี้วัดข้อมูล -->
        <div class="row data-stats">
            <div class="col-md-3 col-sm-6 stat-item">
                <div class="stat-value" id="totalOrders">0</div>
                <div class="stat-label">รายการขาย</div>
            </div>
            <div class="col-md-3 col-sm-6 stat-item">
                <div class="stat-value" id="totalAmount">0</div>
                <div class="stat-label">ยอดขายรวม</div>
            </div>
            <div class="col-md-3 col-sm-6 stat-item">
                <div class="stat-value" id="avgAmount">0</div>
                <div class="stat-label">ยอดขายเฉลี่ย</div>
            </div>
            <div class="col-md-3 col-sm-6 stat-item">
                <div class="stat-value" id="uniqueCountries">0</div>
                <div class="stat-label">ประเทศ</div>
            </div>
        </div>
        
        <!-- ตารางข้อมูล -->
        <table id="salesTable" class="table table-striped table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>ชื่อสินค้า</th>
                    <th>ประเภทสินค้า</th>
                    <th>วันที่ขาย</th>
                    <th>ประเทศ</th>
                    <th>จำนวนเงิน</th>
                    <th>รูปสินค้า</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('connectdb.php');
                $sql = 'SELECT * FROM `popsupermarket`';
                $rs = mysqli_query($conn, $sql);
                
                if (!$rs) {
                    echo "<tr><td colspan='7' class='text-center text-danger'>เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล</td></tr>";
                } else {
                    $totalAmount = 0;
                    $countries = [];
                    
                    while($data = mysqli_fetch_array($rs)) {
                        $totalAmount += $data['p_amount'];
                        $countries[] = $data['p_country'];
                ?>  
                <tr>
                    <td><?php echo htmlspecialchars($data['p_order_id']); ?></td>
                    <td><?php echo htmlspecialchars($data['p_product_name']); ?></td>
                    <td><span class="badge bg-info"><?php echo htmlspecialchars($data['p_category']); ?></span></td>
                    <td><?php echo htmlspecialchars($data['p_date']); ?></td>
                    <td><span class="badge bg-secondary"><?php echo htmlspecialchars($data['p_country']); ?></span></td>
                    <td class="amount-cell"><?php echo number_format($data['p_amount'], 0); ?> ฿</td>
                    <td>
                        <img src="<?php echo htmlspecialchars($data['p_product_name']); ?>.jpg" 
                             class="product-img" 
                             alt="<?php echo htmlspecialchars($data['p_product_name']); ?>"

                    </td>
                </tr>
                <?php
                    }
                    
                    // เก็บค่าสถิติไว้ใน JavaScript variables
                    $orderCount = mysqli_num_rows($rs);
                    $avgAmount = $orderCount > 0 ? $totalAmount / $orderCount : 0;
                    $uniqueCountryCount = count(array_unique($countries));
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        
        <div class="footer">
            <p><i class="fas fa-user-circle me-1"></i>พัฒนาขึ้นโดย Pakphoom Wannachai 007 (Mankung) | <i class="fas fa-calendar-alt me-1"></i>วันที่ดึงข้อมูล: <?php echo date('d/m/Y'); ?></p>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    
    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // ตั้งค่าข้อมูลสถิติจาก PHP
            const orderCount = <?php echo $orderCount ?? 0; ?>;
            const totalAmount = <?php echo $totalAmount ?? 0; ?>;
            const avgAmount = <?php echo $avgAmount ?? 0; ?>;
            const uniqueCountryCount = <?php echo $uniqueCountryCount ?? 0; ?>;
            
            // แสดงสถิติ
            $('#totalOrders').text(orderCount.toLocaleString());
            $('#totalAmount').text(totalAmount.toLocaleString() + ' ฿');
            $('#avgAmount').text(Math.round(avgAmount).toLocaleString() + ' ฿');
            $('#uniqueCountries').text(uniqueCountryCount);
            
            // เริ่มต้น DataTable
            $('#salesTable').DataTable({
                "language": {
                    "lengthMenu": "แสดง _MENU_ รายการต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูลที่ค้นหา",
                    "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่มีข้อมูล",
                    "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
                    "search": "ค้นหา:",
                    "paginate": {
                        "first": "หน้าแรก",
                        "last": "หน้าสุดท้าย",
                        "next": "ถัดไป",
                        "previous": "ก่อนหน้า"
                    }
                },
                "pageLength": 10,
                "order": [[0, 'asc']], // เรียงตามคอลัมน์แรก (Order ID)
                "columnDefs": [
                    { "orderable": false, "targets": [6] } // ปิดการเรียงลำดับคอลัมน์รูปภาพ
                ],
                "initComplete": function() {
                    // เพิ่มคลาส Bootstrap ให้กับองค์ประกอบ DataTables
                    $('.dataTables_length select').addClass('form-select form-select-sm');
                    $('.dataTables_filter input').addClass('form-control form-control-sm');
                    $('.dataTables_paginate .paginate_button').addClass('btn btn-sm');
                    
                    // ปรับแต่งสีปุ่ม
                    $('.dataTables_paginate .paginate_button.current').addClass('btn-primary');
                    $('.dataTables_paginate .paginate_button:not(.current)').addClass('btn-outline-primary');
                }
            });
            
            // เพิ่มเอฟเฟกต์ให้กับแถวเมื่อคลิก
            $('#salesTable tbody').on('click', 'tr', function() {
                $(this).toggleClass('table-primary');
            });
            
            // แสดงข้อความเมื่อไม่มีรูปภาพ
            $('#salesTable img').on('error', function() {
                $(this).attr('title', 'ไม่พบรูปภาพสำหรับสินค้านี้');
            });
            
            // การแจ้งเตือนเมื่อโหลดข้อมูลเสร็จ
            console.log('DataTable loaded successfully!');
            console.log('Total orders:', orderCount);
            console.log('Total amount:', totalAmount);
        });
    </script>
</body>
</html>