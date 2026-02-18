<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ภาคภูมิ 66010914015(แมน)</title>
</head>

<body>

    <h1>ภาคภูมิ 66010914015(แมน) </h1>
    <br>

    <button type="submit" name="Submit" onclick=<img src='img/1.jpg'width='250'>";
}">OK</button>

<?php

if(isset($_POST['Submit'])){
    $id = $_POST['a'];
    $y = substr($id,0,2);
    echo "<img src='http://202.28.32.211/picture/student/{$y}/{$id}.jpg'width='250'>";
}

?>
</body>
</html>
