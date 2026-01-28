<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>▬▬ι═══ﺤ Pakphoom 🤞 Wannachai--Man__007🔫</h1>

<form method="post" action="">
    กรอกตัวเลข <input type="number" name="a" autofocus require>
    <button type="submit" name="Submit">KO✅</button>
</form>
<hr>
<?php
if(isset($_POST['Submit'])){
   $gender= $_POST['a'];
   if($gender==1){
    echo'ชายชาติทหาร';
   }
   elseif($gender==2){
    echo'กุลสตรี';
   }
   elseif($gender==3){
    echo'LGBTQQIP2SAA';
   }
   else{
    echo'อื่นๆ';
   }
    #elseif(isset($_POST['Submit ==']))

}
?>
</body>
</html>