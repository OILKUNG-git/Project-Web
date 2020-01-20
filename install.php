<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>การดาวน์โหลดโปรแกรม</title>
		<link rel="stylesheet" type="text/css" href="css/style_Install.css">
		<link rel="stylesheet" type="text/css" href="css/style_font.css">
		<link rel="icon" type="image/png" href="pic/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	</head>
	<body>
		<div class="B-TOP">
		<a href="home.php" title="หน้าหลัก">STRIKER<span class="spancolor">.com</span></a>
		<div class="show_data">
		<table>
			<tr>
				<th>
					<div class="background_image">
					</div>
				</th>
				<th><?php if(isset($_SESSION['user'])){?>
			<div class="user">
				<?php
					echo $_SESSION['user'];
				?>
			<?php }?>
			</div>
			</th>
				<th><div class="dropdown">
				<i class="fa fa-bars" style="font-size:25px"></i>
				<div class="dropdown-content">
				<img src="pic/up.png" class="pic">
					<a href="index.php">Log out</a>
					</div>
				</div></th>
			</tr>
		</table>
		</div>
	</div>
		<nav>
			<div class="nav-btn">
			<a href="home.php"  title="หน้าแรก" class="nav-one"><i class="fa fa-home"></i></a>
			<a href="fuction.php"  title="คำสั่งพื้นฐาน" class="nav-one">คำสั่งพื้นฐาน</a>
			<a href="download.php"  title="การดาวน์โหลดโปรแกรม" style="text-decoration:none" class="nav-one">การดาวน์โหลดโปรแกรม</a>
			<a href="install.php"  title="การติดตั้งโปรแกรม" style="text-decoration:none" class="nav-one">การติดตั้งโปรแกรม</a>
			</div>
		</nav>
		<div class="main">
			<div class="main_download">
				<div class="download">
					<h1>การติดตั้งโปรแกรม Notepad ++<h1>
					<h3>ขั้นตอนการ ดาวน์โหลด</h3>
					<h4>1.ให้เรา ดับเบิ้ลคลิกที่ตัวติดตั้ง ที่เราดาวน์โหลด มา เมื่อเปิดขึ้นมาแล้ว โปรแกรมจะถามเราว่า เราจะติดตั้ง notepad ++ เป็นภาษาอะไร ในที่นี้ผมเลือกเป็น English หรือ ภาษาอังกฤษ</h4>
						<img src="pic/notepad++4.jpg" width="30%">
					<h4>2.เมื่อเปิดขึ้นมาแล้ว จะเป็นตามนี้ ให้เรากด NEXT ไปจนกว่าจะถึงหน้าเลือก ไดร์ หรือ โฟลเดอร์  ที่เราจะติดตั้ง</h4>
						<img src="pic/notepad++5.jpg" width="30%">
					<h4>3.ให้เราเลือกว่าเราจะเก็บ ไฟล์โปรแกรม ไว้ที่ ไดร์หรือโฟลเดอร์อะไร ในที่นี้ผมเลือกตามที่โปรแกรมกำหนดมาให้</h4>
						<img src="pic/notepad++6.jpg" width="30%">
					<h4>4.ให้เรากด NEXT มาจนถึงหน้าที่ มันจะถามว่า ให้สร้าง ไอคอน(ICON) โปรแกรมไว้ที่หน้า Desktopหรือไม่ ให้เราเลือกว่าให้สร้าง แล้วกด Install ได้เลย</h4>
						<img src="pic/notepad++7.jpg" width="30%">
					<h4>5.พอติดตั้งเสร็จแล้ว ก็เปิดโปรแกรม ขึ้นมาใช้งานได้เลย</h4>
						<img src="pic/notepad++8.jpg" width="30%" height="50%">
					<h2>ขอบคุณที่ทำตามขั้นตอนของเรานะครับ ขอบคุณครับ</h2>
				</div>
			</div>
		</div>
	</body>
</html>