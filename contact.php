<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./1styles.css" />
	<link type="text/css" rel="stylesheet" href="./slide.css" />
	<link rel="stylesheet" type="text/css" href="./style.css" />
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/mousewheel.js"></script>
	<script type="text/javascript" src="./js/easing.js"></script>
	<script type="text/javascript" src="./js/slide.js"></script>
	<!--[if lt IE 9]>
		<script src="./js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div class="contain">
		<div class="hline"></div>
		<div class="container">
		<!-- ------------------------Header--------------------- -->
			<header class="header">
				<div class="head">
					<div class="search">
						<form action="" method="post">
							<input type="text" name="search" class="searchbox" placeholder="جستجو عبارت مورد نظر" />
							<input type="submit" name="submit" class="submit" value="جستجو" />
						</form>
					</div>
					<div class="logo">
						<a href="http://www.zhik.pro" title="zhik.pro">
							<img src="./images/logo.png" alt="zhik" />
						</a>
					</div>
					<div class="badboy"></div>
				</div>
				<nav>
					<menu>
						<li><a href="#">صفحه اصلی</a></li>
						<li><a href="#">درباره ما</a></li>
						<li><a href="#">پروژه ها</a></li>
						<li><a href="#">مطالب خواندی</a></li>
						<li><a href="#">اخبار</a></li>
						<li><a href="#">گالری تصاویر</a></li>
						<li><a href="#">تماس با ما</a></li>
					</menu>
					<div class="badboy"></div>
				</nav>
			</header>
		<!-- ------------------------contact--------------------- -->
			<section class="contact">
				<div class="send-message">
					<h2>ارسال پیام</h2>
					<form action="sendmail.php" id="contact" method="post">
						<input type="text" class="text" name="name" id="name" placeholder="نام" />
						<input type="text" class="text" name="email" id="email" placeholder="ایمیل" />
						<textarea name="message" id="message" cols="65" rows="16" placeholder="پیام"></textarea>
						<input type="submit" value="ارسال" class="button" id="submit" name="submit" />
					</form>
				</div>
				<div class="contact-info">
					<h2>اطلاعات تماس</h2>
					<div class="map">
						
					</div>
				</div>
				<div class="badboy"></div>
			</section>
		<!-- ------------------------footer--------------------- -->
		<footer class="contain">
			<section class="footer container">
				<div class="first">
					<div class="copyright">
						<p>
						   کپی رایت 1391. کلیه حقوق این سایت متعلق به شرکت ژیک می باشد.
						</p>
					</div>
				</div>
				<div class="second">
					<div class="header">
						<p>
							درباره ما 		
						</p>
					</div>
					<div class="text">
						<p>
							شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال شرکت ژیک از سال 
						</p>
					</div>
				</div>
				<div class="third">
					<div class="header"><p>تماس با ما</p></div><br />
					<div class="text">
						<p>
							آدرس: مشهد خیابان معلم مشهد خیابان معلمشهد خیابان معلمشهد خیابان مع
						</p><br />
						<p>
							تلفن: 123456789
						</p><br />
						<p>
							ایمیل: jaghfj@ksjdhfj.com
						</p><br />
					</div>
				</div>
			</section>
		</footer>
	</div>
</body>
</html>