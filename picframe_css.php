<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งจัดการ กรอบรูป โดย CSS</title>
		<link rel="stylesheet" type="text/css" href="css/style_Fuction1.css">
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
		<div class="side">
            <h1>HTML</h1>
            <a href="fuction.php" style="text-decoration:none"><h2>คำสั่ง Basic</h2></a>
            <a href="image.php" style="text-decoration:none"><h2>คำสั่ง Image</h2></a>
             <a href="forms.php" style="text-decoration:none"><h2>คำสั่ง Forms</h2></a>
            <a href="video.php" style="text-decoration:none"><h2>คำสั่ง Video</h2></a>
            <h1>CSS</h1>
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <div class="pfCSS">
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            </div>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>เส้นกรอบรูป CSS</h4>
		<div class="bd_image">
		<h5>เส้นกรอบรูป CSS</h5>
		<h6>ด้วย border-image คุณสมบัติCSS คุณสามารถตั้งค่ารูปภาพที่จะใช้เป็นเส้นขอบรอบองค์ประกอบ</h6>
		</div>
		<center><hr size="1px" width="80%" color="white"></center><br>
		<h5>CSS คุณสมบัติภาพเส้นขอบ</h5>
		<h6>border-image คุณสมบัติCSS อนุญาตให้คุณระบุรูปภาพที่จะใช้แทนเส้นขอบปกติรอบ ๆ องค์ประกอบ<br>
		สถานที่ให้บริการมีสามส่วน:<br>
		&nbsp;&nbsp;&nbsp;
		1.รูปภาพที่จะใช้เป็นเส้นขอบ<br>
		&nbsp;&nbsp;&nbsp;
		2.ตำแหน่งที่จะตัดภาพ<br>
		&nbsp;&nbsp;&nbsp;
		3.กำหนดว่าส่วนตรงกลางควรจะทำซ้ำหรือยืด<br>
		เราจะใช้ภาพต่อไปนี้ (เรียกว่า "border.png"):</h6>
		<img src="pic/border.png" width="100px" style="padding-left : 150px;">
		<br><br>
		<h6>border-imageคุณสมบัติต้องใช้ภาพและชิ้นมันเป็นเก้าส่วนเช่นโอเอกซ์บอร์ด จากนั้นวางมุมที่มุมและส่วนตรงกลางจะถูกทำซ้ำหรือยืดตามที่คุณระบุ</h6>
		<h6>หมายเหตุ:สำหรับ border-image การทำงานองค์ประกอบยังต้องมี borderชุดคุณสมบัติ!</h6>
		<div class="bd_image">
			<p style="text-align:center;color:white;text-shadow : 0px 0px 20px black;">รูปภาพเป็นเส้นขอบ!</p>
		</div>
		<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">.borderimg </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">border</span>: <span style="color:blue;">10px solid transparent</span>;<br>
					&nbsp;&nbsp;
					<span style="color:red;">padding</span>: <span style="color:blue;">15px</span>;<br>
					&nbsp;&nbsp;
					<span style="color:red;">border-image</span>: <span style="color:blue;">url(border.png) 30 round</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<div class="bd_image2">
			<p style="text-align:center;color:white;text-shadow : 0px 0px 20px black;">รูปภาพเป็นเส้นขอบ!</p>
		</div>
		<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">.borderimg </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">border</span>: <span style="color:blue;">10px solid transparent</span>;<br>
					&nbsp;&nbsp;
					<span style="color:red;">padding</span>: <span style="color:blue;">15px</span>;<br>
					&nbsp;&nbsp;
					<span style="color:red;">border-image</span>: <span style="color:blue;">url(border.png) 30 stretch</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>