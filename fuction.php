<?php
	include ('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งพิ้นฐาน HTML</title>
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
			<div class="fuction">
            <a href="fuction.php" style="text-decoration:none"><h2>คำสั่ง Basic</h2></a>
			</div>
            <a href="image.php" style="text-decoration:none"><h2>คำสั่ง Image</h2></a>
             <a href="forms.php" style="text-decoration:none"><h2>คำสั่ง Forms</h2></a>
            <a href="video.php" style="text-decoration:none"><h2>คำสั่ง Video</h2></a>
            <h1>CSS</h1>
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
			<h4>คำสั่งพื้นฐานของ HTML</h4>
			<h5>คำสั่งกำหนดหัวข้อสำคัญ HTML</h5>
			<h6>การกำหนดหัวข้อสำคัญ HTML จะมีอยู่ 6 ระดับ คือ <span><</span> h1 <span>></span> ถึง <span><</span> h6 <span>></span> ซึ่ง <span><</span>h1<span>></span> คือการกำหนดหัวข้อที่สำคัญที่สุดและ <span><</span>h6<span>></span> คือการกำหนดหัวข้อที่สำคัญน้อยที่สุด</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">h1</span>> หัวข้อสำคัญที่ 1 <span><</span><span style="color:brown;">/h1</span>><br>
				<span><</span><span style="color:brown;">h2</span>> หัวข้อสำคัญที่ 2 <span><</span><span style="color:brown;">/h2</span>><br>
				<span><</span><span style="color:brown;">h3</span>> หัวข้อสำคัญที่ 3 <span><</span><span style="color:brown;">/h3</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_h1.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>คำสั่งย่อหน้า HTML</h5>
			<h6>การย่อหน้า HTML จะถูกกำหนดด้วย  <span><</span>p<span>></span></h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">p</span>> ย่อหน้า <span><</span><span style="color:brown;">/p</span>><br>
				<span><</span><span style="color:brown;">p</span>> ย่อหน้าอื่น <span><</span><span style="color:brown;">/p</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_p.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>คำสั่งลิงค์ HTML</h5>
			<h6>การลิงค์ HTML จะถูกกำหนดด้วย  <span><</span>a<span>></span> ซึ่งถ้าต้องการจะกำหนดให้นำลิงค์ ไปใส่ ใน href="ลิ้งที่เราต้องการ"</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">a</span> <span style="color:red;">href</span><span style="color:blue;">="https://www.youtube.com/?gl=TH"</span>> ลิงค์ <span><</span><span style="color:brown;">/a</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_a.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>คำสั่งปุ่ม HTML</h5>
			<h6>ปุ่ม HTML จะถูกกำหนดด้วย  <span><</span>buttom<span>></span></h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">button</span>> คลิก <span><</span><span style="color:brown;">/button</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_button.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>คำสั่งรายการ HTML</h5>
			<h6>รายการ HTML ถูกกำหนดด้วยแท็ก  <span><</span>ul<span>></span> (unordered / รายการ bullet) หรือ <span><</span>ol<span>></span> แท็ก(เรียงลำดับ / รายการลำดับเลข) ตามด้วย <span><</span>li<span>></span> แท็ก (รายการในรายการ)</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">ul</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">li</span>>แมว<span><</span><span style="color:brown;">/li</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">li</span>>หมา<span><</span><span style="color:brown;">/li</span>><br>
				&nbsp;
				 <span><</span><span style="color:brown;">li</span>>นก<span><</span><span style="color:brown;">/li</span>><br>
				 <span><</span><span style="color:brown;">/ul</span>><br><br>
				 <span><</span><span style="color:brown;">ol</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">li</span>>แมว<span><</span><span style="color:brown;">/li</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">li</span>>หมา<span><</span><span style="color:brown;">/li</span>><br>
				&nbsp;
				 <span><</span><span style="color:brown;">li</span>>นก<span><</span><span style="color:brown;">/li</span>><br>
				 <span><</span><span style="color:brown;">/ol</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_ol_ul.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>