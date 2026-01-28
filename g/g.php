<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pakphoom Wannachai 007(Mankung)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container {
        width: 45%;
        display: inline-block;
        margin-top: 20px;
        vertical-align: top;
    }
</style>
</head>

<body>
    <h1>Pakphoom Wannachai 007(Mankung)</h1>
    
    <table border ='1' width="300">
    <tr>
        <th>ประเทศ</th>
        <th>ยอดขาย</th>
    </tr>
    <?php
    include_once('connectdb.php');
    $sql ="SELECT `p_country`, SUM(p_amount) AS total FROM `popsupermarket` GROUP BY `p_country`";
    $rs = mysqli_query($conn, $sql);
    
    // เตรียมตัวแปรสำหรับเก็บข้อมูลไปใช้ในกราฟ
    $labels = [];
    $values = [];

    while($data = mysqli_fetch_array($rs)){
        $labels[] = $data['p_country'];
        $values[] = $data['total'];
    ?>  
    <tr>
        <td><?php echo $data['p_country'];?></td>
        <td align="right"><?php echo number_format($data['total'], 0);?></td>
    </tr>
    <?php
    }
    ?>
    </table>

    <hr>

    <div class="chart-container">
        <h3>ยอดขายแยกตามประเทศ (Line Chart)</h3>
        <canvas id="lineChart"></canvas>
    </div>

    <div class="chart-container">
        <h3>สัดส่วนยอดขาย (Doughnut Chart)</h3>
        <canvas id="doughnutChart"></canvas>
    </div>

    <script>
    // ส่งค่าจาก PHP เข้าสู่ JavaScript
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($values); ?>;

    // 1. สร้าง Line Chart
    const ctxLine = document.getElementById('lineChart').getContext('2d');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataValues,
                borderColor: 'rgb(75, 192, 192)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.1
            }]
        }
    });

    // 2. สร้าง Doughnut Chart
    const ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
    new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataValues,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)'
                ]
            }]
        }
    });
    </script>

<?php mysqli_close($conn); ?>
</body>
</html>