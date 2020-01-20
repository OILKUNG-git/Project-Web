<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งเรียกใช้ CSS</title>
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
            <div class="CSS">
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            </div>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>คำสั่งการ เรียกใช้ CSS</h4>
			<h5>CSS แบบอินไลน์</h5>
			<h6>CSS แบบอินไลน์ใช้เพื่อนำสไตล์ที่เป็นเอกลักษณ์ไปใช้กับองค์ประกอบ HTML เดียว<br>
				Inline CSS ใช้คุณลักษณะสไตล์ขององค์ประกอบ HTML<br>
				ตัวอย่างนี้ตั้งค่าสีข้อความของ <span><</span>h1> องค์ประกอบเป็นสีน้ำเงิน :
			</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">h1</span> <span style="color:red;">style</span><span style="color:blue;">="color:blue</span>;">ตัวอักษร สีฟ้า<span><</span><span style="color:brown;">/h1</span>>
				</div>
				<div class="css-btn">
                <a href="Example/example_cssh1.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>CSS ภายใน</h5>
			<h6>CSS ภายในใช้เพื่อกำหนดสไตล์สำหรับหน้า HTML เดียว<br>
			CSS ภายในถูกกำหนดไว้ใน <span><</span>head> ส่วนของหน้า HTML ภายใน <span><</span>style> องค์ประกอบ:
			</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
				<span><</span><span style="color:brown;">!DOCTYPE</span> <span style="color:red;">html</span>><br>
				<span><</span><span style="color:brown;">html</span>><br>
				<span><</span><span style="color:brown;">head</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">style</span>><br>
				&nbsp;&nbsp;
					<span style="color:brown;">body</span> {<span style="color:red;">background-color</span>: <span style="color:blue;">powderblue</span>;} <br>
				&nbsp;&nbsp;
					<span style="color:brown;">h1</span>   {<span style="color:red;">color</span>: <span style="color:blue;">blue</span>;}<br>
				&nbsp;&nbsp;
					<span style="color:brown;">p</span>    {<span style="color:red;">color</span>: <span style="color:blue;">red</span>;}<br>
				&nbsp;
				<span><</span><span style="color:brown;">/style</span>><br>
				<span><</span><span style="color:brown;">/head</span>><br>
				<span><</span><span style="color:brown;">body</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">h1</span>>หัวข้อสำคัญ<span><</span><span style="color:brown;">/h1</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">p</span>>ย่อหน้า<span><</span><span style="color:brown;">/p</span>><br>
				<span><</span><span style="color:brown;">/body</span>><br>
				<span><</span><span style="color:brown;">/html</span>><br>
				</div>
				<div class="css-btn">
                <a href="Example/example_cssin.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>CSS ภายนอก</h5>
			<h6>สไตล์ชีตภายนอกจะใช้ในการกำหนดสไตล์สำหรับหน้า HTML จำนวนมาก<br>
			ด้วยสไตล์ชีตภายนอกคุณสามารถเปลี่ยนรูปลักษณ์ของเว็บไซต์ทั้งหมดโดยการเปลี่ยนไฟล์เดียว!<br>
			หากต้องการใช้สไตล์ชีตภายนอกให้เพิ่มลิงค์ในสไตล์ <span><</span>head> ของหน้า HTML:
			</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
				<span><</span><span style="color:brown;">!DOCTYPE</span> <span style="color:red;">html</span>><br>
				<span><</span><span style="color:brown;">html</span>><br>
				<span><</span><span style="color:brown;">head</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">link </span><span style="color:red;">rel</span><span style="color:blue;">="stylesheet"</span> 
				<span style="color:red;">type</span><span style="color:blue;">="text/css"</span> <span style="color:red;">href</span><span style="color:blue;">="style.css"</span>><br>
				<span><</span><span style="color:brown;">/head</span>><br>
				<span><</span><span style="color:brown;">body</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">h1</span>>หัวข้อสำคัญ<span><</span><span style="color:brown;">/h1</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">p</span>>ย่อหน้า<span><</span><span style="color:brown;">/p</span>><br>
				<span><</span><span style="color:brown;">/body</span>><br>
				<span><</span><span style="color:brown;">/html</span>><br>
				</div>
				<div class="css-btn">
                <a href="Example/example_cssout.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>CSS แบบอักษร</h5>
			<h6>color คุณสมบัติCSS กำหนดสีข้อความที่จะใช้<br>
			font-family คุณสมบัติCSS กำหนดแบบอักษรที่จะใช้<br>
			font-size คุณสมบัติCSS กำหนดขนาดตัวอักษรที่จะใช้<br>
			</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
				<span><</span><span style="color:brown;">!DOCTYPE</span> <span style="color:red;">html</span>><br>
				<span><</span><span style="color:brown;">html</span>><br>
				<span><</span><span style="color:brown;">head</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">style</span>><br>
				&nbsp;&nbsp;
					<span style="color:brown;">h1</span> {<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">color</span>: <span style="color:blue;">blue</span>;<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">font-family</span>: <span style="color:blue;">verdana</span>;<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">font-size</span>: <span style="color:blue;">300%</span>;<br>
					} <br>
				&nbsp;&nbsp;
					<span style="color:brown;">p</span>  {<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">color</span>: <span style="color:blue;">red</span>;<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">font-family</span>: <span style="color:blue;">courier</span>;<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">font-size</span>: <span style="color:blue;">160%</span>;<br>
					}<br>
				&nbsp;
				<span><</span><span style="color:brown;">/style</span>><br>
				<span><</span><span style="color:brown;">/head</span>><br>
				<span><</span><span style="color:brown;">body</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">h1</span>>หัวข้อสำคัญ<span><</span><span style="color:brown;">/h1</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">p</span>>ย่อหน้า<span><</span><span style="color:brown;">/p</span>><br>
				<span><</span><span style="color:brown;">/body</span>><br>
				<span><</span><span style="color:brown;">/html</span>><br>
				</div>
				<div class="css-btn">
                <a href="Example/example_csstext.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>แอตทริบิวต์ ID</h5>
			<h6>ในการกำหนดสไตล์เฉพาะสำหรับองค์ประกอบพิเศษให้เพิ่มแอidททริบิวในองค์ประกอบ:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
				<span><</span><span style="color:brown;">p</span> <span style="color:red;">id</span><span style="color:blue;">="p01"</span>>ข้าคือพระเจ้า<span><</span><span style="color:brown;">/p</span>>
				</div>
			</div>
			<br><br>
			<h6>จากนั้นกำหนดสไตล์สำหรับองค์ประกอบด้วยรหัสเฉพาะ:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">#p01</span>  {<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">color</span>: <span style="color:blue;">red</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="Example/example_cssid.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>แอตทริบิวต์คลาส</h5>
			<h6>ในการกำหนดสไตล์สำหรับองค์ประกอบประเภทพิเศษให้เพิ่มแอclassททริบิวในองค์ประกอบ:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
				<span><</span><span style="color:brown;">p</span> <span style="color:red;">class</span><span style="color:blue;">="error"</span>>ข้าคือพระเจ้า<span><</span><span style="color:brown;">/p</span>>
				</div>
			</div>
			<br><br>
			<h6>จากนั้นกำหนดสไตล์สำหรับองค์ประกอบที่มีคลาสเฉพาะ:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">.error</span>  {<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">color</span>: <span style="color:blue;">red</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="Example/example_cssclass.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>