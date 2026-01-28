<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    
<h1>▬▬ι═══ﺤ Pakphoom 🤞 Wannachai--Man__007🔫</h1>

<form method="post" action="">
    กรอกคะแนน <input type="number" min="0" max="100" name="a" autofocus require>
    <button type="submit" name="Submit">KO✅</button>
</form>
<hr>
<?php
if(isset($_POST['Submit'])){
   $score= $_POST['a'];
   if($score >= 80){
    $grade='A Plus';
   }
   elseif($score>= 70){
    $grade='B Minus';
   }
   elseif($score>=60){
    $grade='C cat';
   }
   elseif($score>=50){
    $grade='D dog';
   }
   else{
    $grade='ไม่รู้ไม่รู้ไม่รู้';
   }
echo "<h2>คะแนน = ",$score,"  ได้เกรด =$grade  </h2>";
    #elseif(isset($_POST['Submit ==']))

}
?>
</body>
</html>