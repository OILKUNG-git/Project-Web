<?php
	include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>เริ่มต้นการเขียนเว็บไซต์</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" type="text/css" href="css/style_font.css">
		<link rel="icon" type="image/png" href="logo.png">
	</head>
	<body>
		<div class="text">
				<h1 align="center">Welcom to Website</h1><br>
				<h2 align="center">เริ่มต้นการเขียนเว็บไซต์ขั้นพื้นฐาน</h2><br>
		</div>
		<div class="btn">
			<a href="#fromlogin" class="btn-one">Enter Site</a>
		</div>
		<div class="lightbox" id="fromlogin">
            <div id="outer">
                <p id="title">
                    <a href="#" class="close" title="ยกเลิก">+</a>
                </p>
		<form method="post" action="register.php">
            <div class="input-group">
                <label>ยินดีต้อนรับสู่เว็บไซต์</label><br>
                <input type="text" name="loginUser" required="" maxlength="16" placeholder="ไอดี" value="<?php echo $loginuser;?>">
                <input type="password" name="loginPass" required="" maxlength="16" placeholder="รหัสผ่าน">
            </div>
			<div class="btnin">
			<button type="submit" name="login">เข้าสู่ระบบ</button>
			</div>
			<div class="btnlo">
            <a href="index_register.php" style="color:black;"  title="สมัครสมาชิก">สมัครสมาชิก</a>
			</div>
			<?php if(isset($_SESSION['msg'])){?>
			<div class="msg">
				<?php
					echo $_SESSION['msg'];
					unset ($_SESSION['msg']);
				?>
			</div>
			<?php }?>
            </form>
            </div>
        </div>
	</body>
</html>