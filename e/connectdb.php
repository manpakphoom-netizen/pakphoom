<?php
                    $host = "localhost";
                    $user = "root";
                    $pwd ="";
                    $db = "application";
                    $conn = mysqli_connect($host,$user,$pwd,$db) or die ("เชื่อมไม่ได้");
                    mysqli_query($conn,"SET NAMES utf8");
?>