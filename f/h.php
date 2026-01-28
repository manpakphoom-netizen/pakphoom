<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Pakphoom</title>
</head>

<body>
    
<h1>▬▬ι═══ﺤ Pakphoom 🤞 Wannachai--Man__007🔫</h1>
<form method="post" action="">
    รหัสประจำตัวนิสิตนักศึกของนิสิตที่ศึกษาในมหาลัยของนิสิตมมสเพื่อนิสิตมมส <input type="number" name="a" autofocus require>
    <button type="submit" name="Submit">OK✅</button>
</form>

<?php

if(isset($_POST['Submit'])){
    $id = $_POST['a'];
    $y = substr($id,0,2);
    echo "<img src='http://202.28.32.211/picture/student/{$y}/{$id}.jpg'width='250'>";
}

?>

</body>
</html>