<?php
include "dbconn.php";
?>
<html>
	<head>
		<title>Left Sidebar - Phase Shift by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
	<!-- Wrapper -->
			<div class="wrapper style1">
				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.php">신홍 제작소</a></h1>
							<span class="tag">신홍 제작소</span>
						</div><!--end of Logo -->
						<nav id="nav">
							<ul>
								<li class="active"><a href="index.php">지역 소개</a></li>
								<li><a href="page1.php">쿠폰 보관함</a></li>
								<li><a href="page2.php">근처 맛집 및 쿠폰</a></li>
								<li><a href="page3.php">관광소음?</a></li>
								<li><a href="Login.php">로그인 및 회원가입</a></li>
							</ul>
						</nav>
					</div><!-- end of header -->
                	<div class="card" style="width:20rem; border-radius:20px;">
                		<div class="card-title" style="margin-top:30px;">
                			<h2 class="card-title text-center" style="color:#113366;">회원가입 폼</h2>
                		</div>
                		<div class="card">
                		<form action = "signup.php" method = "post">
                            <h5 class="form-signin-heading">로그인 정보를 입력하세요</h5>
                            <label for="inputEmail" class="sr-only">Your ID</label>
                            <input type="text" name="id" class="form-control" placeholder="Your ID" required autofocus><BR>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Password" required><br>
                             <label for="inputPassword" class="sr-only">Password again</label>
                            <input type="password" name="pwd_hak" class="form-control" placeholder="Password again" required><br>
                             <label for="inputPassword" class="sr-only">Telephone</label>
                            <input type="text" name="tel" class="form-control" placeholder="telephone" required><br>
                            <button class="button alt" type="submit">회 원 가 입</button>
                          </form>
                		</div>
                	</div>
                </div>
<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<ul class="icons">
						EunBeen
						<li><a href="https://www.facebook.com/profile.php?id=100005544108128" class="fa fa-facebook"><span>Facebook_EunBeen</span></a></li>
						<li><a class = "fa fa-google-plus" onclick="alert('vvvv980@gmail.com or s2017s40@e-mirim.hs.kr')"><span>Gmail_EunBeen</span></a></li>
						SunYeong
						<li><a href="https://www.facebook.com/profile.php?id=100010330358217" class="fa fa-facebook"><span>Facebook_SunYeong</span></a></li>
						<li><a class = "fa fa-google-plus" onclick="alert('s2017i30@e-mirim.hs.kr')"><span>Gmail_SunYeong</span></a></li><p>
					</ul>
				</div>
			</div>
		</div>

</body>
</html>