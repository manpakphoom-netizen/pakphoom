<?php
    session_start();
    if(empty($_SESSION['aid'])){
        echo"Access Deniend";
        echo"<meta http-equiv='refresh' content='3; url=index.php'>";
        exit;
    }
?>