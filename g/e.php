<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pakphoom Wannachai 007(Mankung)</title>
<style>
    body {
        margin: 0;
        padding: 20px;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), 
                    url('https://images.unsplash.com/photo-1544830281-8c4e4d3f5c4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-attachment: fixed;
        color: white;
        min-height: 100vh;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(255, 69, 0, 0.3);
        border: 2px solid rgba(255, 87, 34, 0.5);
    }
    
    h1 {
        text-align: center;
        color: #FF5722;
        text-shadow: 0 0 10px #FF5722, 0 0 20px #FF9800;
        font-size: 2.5em;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 3px solid #FF5722;
    }
    
    .data-section {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 30px;
    }
    
    .chart-container {
        flex: 1;
        min-width: 300px;
        background: rgba(30, 30, 30, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 87, 34, 0.4);
    }
    
    .chart-title {
        text-align: center;
        color: #FF9800;
        margin-bottom: 20px;
        font-size: 1.3em;
    }
    
    canvas {
        width: 100% !important;
        height: 300px !important;
    }
    
    table {
        width: 100%;
        background: rgba(40, 40, 40, 0.9);
        border-collapse: collapse;
        border: 2px solid #FF5722;
        margin-top: 20px;
    }
    
    th {
        background-color: #D84315;
        color: white;
        padding: 12px;
        text-align: center;
        font-size: 1.1em;
    }
    
    td {
        padding: 10px;
        border-bottom: 1px solid #555;
        text-align: center;
    }
    
    tr:nth-child(even) {
        background-color: rgba(255, 87, 34, 0.1);
    }
    
    tr:hover {
        background-color: rgba(255, 87, 34, 0.3);
        transition: background-color 0.3s;
    }
    
    .footer {
        text-align: center;
        margin-top: 30px;
        color: #FF9800;
        font-size: 0.9em;
        opacity: 0.8;
    }
    
    .lava-effect {
        height: 5px;
        background: linear-gradient(90deg, #FF5722, #FF9800, #FF5722);
        border-radius: 5px;
        margin: 20px 0;
        animation: lava-flow 3s infinite linear;
    }
    
    @keyframes lava-flow {
        0% { background-position: 0% 50%; }
        100% { background-position: 100% 50%; }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <h1>Pakphoom Wannachai 007 (Mankung)</h1>
        <div class="lava-effect"></div>
        
        <div class="data-section">
            <!-- กราฟแท่ง -->
            <div class="chart-container">
                <div class="chart-title">📊 ยอดขายแยกตามประเทศ (Bar Chart)</div>
                <canvas id="barChart"></canvas>
            </div>
            
            <!-- กราฟวงกลม -->
            <div class="chart-container">
                <div class="chart-title">🥧 สัดส่วนยอดขายตามประเทศ (Pie Chart)</div>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
        
        <!-- ตารางข้อมูล -->
        <div class="chart-title">📋 ตารางสรุปยอดขาย</div>
        <table border='1'>
            <tr>
                <th>ประเทศ</th>
                <th>ยอดขาย</th>
            </tr>
            <?php
            include_once('connectdb.php');
            $sql = "SELECT `p_country`, SUM(p_amount) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC";
            $rs = mysqli_query($conn, $sql);
            
            $countries = [];
            $sales = [];
            $colors = [];
            
            // สร้างสีแบบภูเขาไฟระเบิด
            $volcanoColors = [
                '#FF5722', '#FF9800', '#FFC107', '#FF5252', 
                '#FF4081', '#E64A19', '#FF6E40', '#FF3D00'
            ];
            
            $i = 0;
            while($data = mysqli_fetch_array($rs)){
                $countries[] = $data['p_country'];
                $sales[] = $data['total'];
                $colors[] = $volcanoColors[$i % count($volcanoColors)];
                
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data['p_country']) . "</td>";
                echo "<td align='right'>" . number_format($data['total'], 0) . "</td>";
                echo "</tr>";
                
                $i++;
            }
            mysqli_close($conn);
            ?>
        </table>
        
        <div class="lava-effect"></div>
        <div class="footer">
            © Pakphoom Wannachai 007 - ข้อมูลยอดขาย Popsupermarket | พื้นหลังธีมภูเขาไฟระเบิด
        </div>
    </div>

    <script>
        // แปลงข้อมูลจาก PHP เป็น JavaScript
        const countries = <?php echo json_encode($countries); ?>;
        const sales = <?php echo json_encode($sales); ?>;
        const volcanoColors = <?php echo json_encode($colors); ?>;
        
        // สร้างสีสำหรับกราฟแท่ง (ไล่สีแบบลาวา)
        function getBarColors() {
            let barColors = [];
            for(let i = 0; i < countries.length; i++) {
                // สร้างสีไล่ระดับจากแดงไปส้ม
                let r = 255;
                let g = Math.floor(87 - (i * 10));
                let b = Math.floor(34 - (i * 5));
                if(g < 0) g = 0;
                if(b < 0) b = 0;
                barColors.push(`rgba(${r}, ${g}, ${b}, 0.8)`);
            }
            return barColors;
        }
        
        // สร้างกราฟแท่ง
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: countries,
                datasets: [{
                    label: 'ยอดขาย',
                    data: sales,
                    backgroundColor: getBarColors(),
                    borderColor: volcanoColors,
                    borderWidth: 2,
                    borderRadius: 5,
                    hoverBackgroundColor: '#FF9800'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#FF9800',
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `ยอดขาย: ${context.parsed.y.toLocaleString()}`;
                            }
                        },
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#FF9800',
                        bodyColor: 'white'
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#FFC107',
                            maxRotation: 45
                        },
                        grid: {
                            color: 'rgba(255, 87, 34, 0.2)'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#FFC107',
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        },
                        grid: {
                            color: 'rgba(255, 87, 34, 0.2)'
                        }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeOutQuart'
                }
            }
        });
        
        // สร้างกราฟวงกลม
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: countries,
                datasets: [{
                    data: sales,
                    backgroundColor: volcanoColors,
                    borderColor: 'rgba(0, 0, 0, 0.3)',
                    borderWidth: 2,
                    hoverOffset: 15
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            color: '#FFC107',
                            padding: 20,
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const total = sales.reduce((a, b) => a + b, 0);
                                const percentage = ((context.parsed / total) * 100).toFixed(1);
                                return `${context.label}: ${context.parsed.toLocaleString()} (${percentage}%)`;
                            }
                        },
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#FF9800',
                        bodyColor: 'white'
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true,
                    duration: 2000
                }
            }
        });
        
        // เพิ่ม effect เมื่อโหลดหน้า
        document.addEventListener('DOMContentLoaded', function() {
            // เอฟเฟกต์แสงกระพริบ
            const titles = document.querySelectorAll('.chart-title, h1');
            titles.forEach(title => {
                setInterval(() => {
                    title.style.textShadow = `0 0 ${10 + Math.random() * 10}px #FF5722`;
                }, 1000);
            });
        });
    </script>
</body>
</html>