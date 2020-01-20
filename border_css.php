<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่ง เส้น โดย CSS</title>
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
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <div class="bdCss">
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
            </div>
        </div>
        <div class="main">
		<h4>คำสั่ง เส้น CSS</h4>
		<h5>เส้นขอบ<h5>
		<h6>border-style คุณสมบัติระบุชนิดของชายแดนที่จะแสดง
		อนุญาตให้ใช้ค่าต่อไปนี้:<br>
		&nbsp;&nbsp;&nbsp;
			๐ dotted - กำหนดเส้นประ<br>
		&nbsp;&nbsp;&nbsp;
			๐ dashed - กำหนดเส้นขอบประ<br>
		&nbsp;&nbsp;&nbsp;
			๐ solid - กำหนดเส้นขอบทึบ<br>
		&nbsp;&nbsp;&nbsp;
			๐ double - กำหนดเส้นขอบคู่<br>
		&nbsp;&nbsp;&nbsp;
			๐ groove- กำหนดขอบร่อง 3D ผลกระทบขึ้นอยู่กับค่าสีของเส้นขอบ<br>
			&nbsp;&nbsp;&nbsp;
			๐ ridge- กำหนดเส้นขอบเป็นรอยสามมิติ ผลกระทบขึ้นอยู่กับค่าสีของเส้นขอบ<br>
		&nbsp;&nbsp;&nbsp;
			๐ inset- กำหนดขอบแทรก 3D ผลกระทบขึ้นอยู่กับค่าสีของเส้นขอบ<br>
		&nbsp;&nbsp;&nbsp;
			๐ outset- กำหนดเส้นขอบ outset 3D ผลกระทบขึ้นอยู่กับค่าสีของเส้นขอบ<br>
		&nbsp;&nbsp;&nbsp;
			๐ none - กำหนดเส้นขอบ<br>
		&nbsp;&nbsp;&nbsp;
			๐ hidden - กำหนดขอบเขตที่ซ่อนอยู่<br>
		border-styleคุณสมบัติสามารถมี 1-4 ค่า (สำหรับเส้นขอบด้านบนขอบขวาขอบด้านล่างและชายแดนด้านซ้าย)
		</h6>
		<div class="box_html">
			<h3>ตัวอย่าง</h3>
			เส้นที่แตกต่างกัน
				<div class="box-html">
				<span style="color:brown;">.dotted</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">dotted</span>;}<br>
				<span style="color:brown;">.dashed</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">dashed</span>;}<br>
				<span style="color:brown;">.solid</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">solid</span>;}<br>
				<span style="color:brown;">.double</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">double</span>;}<br>
				<span style="color:brown;">.groove</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">groove</span>;}<br>
				<span style="color:brown;">.ridge</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">ridge</span>;}<br>
				<span style="color:brown;">.inset</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">inset</span>;}<br>
				<span style="color:brown;">.outset</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">outset</span>;}<br>
				<span style="color:brown;">.none</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">none</span>;}<br>
				<span style="color:brown;">.hidden</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">hidden</span>;}<br>
				<span style="color:brown;">.mix</span> {<span style="color:red;">border-style</span>: <span style="color:blue;">dotted dashed solid double</span>;}<br>
				</div>
				<div class="css-btn">
                <a href="example/example_cssbd.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>