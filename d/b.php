<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914015 ภาคภูมิ วรรณชัย</title>
</head>

<body>
<h1> ฟอร์มรับข้อมูล-Pakphoom Wannachai >Man< </h1>
<form method="post" action="">
ชื่อ-สกุล<input type="text" name="Fullname" autofocus required>Must กรอก<br>

เบอร์ <input type="text" name="phone" required>Must กรอก<br>
ส่วนสูง <input type="number" name="height"max="200" required>ซม.<br>
ที่อยู่<br><textarea name="address" cols="40" row="4"></textarea><br>

วดป <input type="date" name="birthday"><br>
เวลาตอนนี้ <input type="time" name="time"><br>
สีที่ไม่ชอบ <input type="color" name="color"><br>
Email <input type="email" name="email"><br>
File <input type="file" name="file"><br>

สาขา
<select name="major">
	<option value="บัญชี">บัญชี</option>
    <option value="ตลาด">ตลาด</option>
	<option value="จัดการ">จัดการ</option>>
	<option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>>
</select>

<br>
<br>
<br>
<!--<input type="submit" name="Submit" value="สมักก">!-->
<br><button type="submit" name="Submit">สามัครรร</button>
<button type="reset" name="reset">ล้างข้อมูล</button>
<button type="button"onClick="window.location='https://www.imdb.com/';">IMDB</button>
<button type="button" onDblClick="alert('OMG!!');">Hello World</button>
<button type="button" onClick="window.print() ;">ปลิ้นนน</button>

</form >
<hr>

<?php
if(isset($_POST['Submit'])){
	$fullname = $_POST['Fullname'];
	$phone = $_POST['phone'];
	$height = $_POST['height'];
	$address = $_POST['address'];
	$time = $_POST['time'];
	$color = $_POST['color'];
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];
	$file  = $_POST['file'];
	$major = $_POST['major'];


	echo "ชื่อ-สกุล:".$_POST['Fullname']."<br>";
	echo "เบอร์โทร:".$_POST['phone']."<br>";
	echo "ส่วนสูง:".$_POST['height']."ซม.<br>";
	echo "ที่อยู่:".$_POST['address']."<br>";
	echo "วันเดือนปี:".$_POST['birthday']."<br>";
	echo "เวลาตอนนี้:".$_POST['time']."<br>";
	echo "สีที่ไม่ชอบ:<div style='background-color:{$color}; width:300px'>".$color."</div><dr>";
	echo "Email:".$_POST['email']."<br>";
	echo "ไฟล์:".$_POST['file']."<br>";
	echo "สาขา :".$_POST['major']."<br>";

}
?>
<img src="1.jpg" width="1400">

</body>
</html>
