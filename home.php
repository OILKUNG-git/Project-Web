<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>หน้าหลัก</title>
		<link rel="stylesheet" type="text/css" href="css/style_home.css">
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
					<a href="index.php">ออกจากระบบ</a>
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
           <div class="box_html">
            <h3>ตัวอย่างโค้ด HTML :</h3>
             <div class="box-html">
               <span style="color:brown">
                   <span style="color:mediumblue"><</span>!DOCTYPE
                    <span style="color:red">html</span><span style="color:mediumblue">></span>
                </span>
                <br>
                <span style="color:brown">
                   <span style="color:mediumblue"><</span>html<span style="color:mediumblue">></span>
                </span>
                <br>
                <span style="color:brown">
                   <span style="color:mediumblue"><</span>title<span style="color:mediumblue">></span>
                </span>
                 ชื่อของเว็ปไซต์
                <span style="color:brown">
                   <span style="color:mediumblue"><</span>/title<span style="color:mediumblue">></span>
                </span>
                <br>
                <br>
                <span style="color:brown">
                   <span style="color:mediumblue"><</span>body<span style="color:mediumblue">></span>
                </span>
                <br>
                 <br>
                  พื้นที่คำสั่งเขียนเว็ปไวต์
                  <br>
                  <br>
                <span style="color:brown">
                   <span style="color:mediumblue"><</span>/body<span style="color:mediumblue">></span>
                </span>
                <br>
                <br>
                <span style="color:brown">
                   <span style="color:mediumblue"><</span>/html<span style="color:mediumblue">></span>
                </span>
                </div>
                <div class="css-btn">
                <a href="example/example.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
            <div class="main_html">
            <h1>HTML</h1>
            <h2>ภาษาสำหรับสร้างหน้าเว็บ</h2>
            </div>
            <div class="box_css">
            <h3>ตัวอย่างโค้ด CSS :</h3>
             <div class="box-css">
               <span style="color:brown">
                  body
                   </span>
                    <span style="color:mediumblue">{</span>
                <br>
                   <span style="color:red">background-color</span>:
                   <span style="color:mediumblue">lightblue</span>;
                <br>
                <span style="color:mediumblue">}</span>
                <br>
                 <br>
                <span style="color:brown">
                  h1
                  </span>
                   <span style="color:mediumblue">{</span>

                <br>
                    <span style="color:red">color</span>:
                   <span style="color:mediumblue">Black</span>;
                   <br>
                   <span style="color:red">text-align</span>:
                   <span style="color:mediumblue">Center</span>;
                    <br>
                     <span style="color:mediumblue">}</span>
                      <br>
                 <br>
                <span style="color:brown">
                  p
                  </span>
                   <span style="color:mediumblue">{</span>
                 <br>
                   <span style="color:red">font-size</span>:
                   <span style="color:mediumblue">50px</span>;
                   <br>
                   <span style="color:mediumblue">}</span>
                </div>
                <div class="css-btn">
                <a href="example/examplec.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
            <div class="main_css">
            <h1>CSS</h1>
            <h2>ภาษาสำหรับเขียน CSS</h2>
            </div>
	</body>
</html>