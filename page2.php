<?php  include "dbconn.php";
        session_start();
?>
<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>쿠폰 받기</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/map.js"></script>
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
								<?php
								if ($session_id) { 
                                ?>
                                		<li><a href="sessionUnset.php">로그아웃</a></li>
                               	<?php }
                               		else {?>
                               			 <li><a href="Login.php">로그인 및 회원가입</a></li>
                               	<?php }?>
							</ul>
						</nav>
					</div><!-- end of header -->
				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row"> 
                              <div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/coupon1.png" alt=""></a>
									<div class="box">
										<a href="page2_php.php?result=<?=1?>" class="button">쿠폰 받기</a></div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/coupon2.png" alt=""></a>
									<div class="box">
										<a href="page2_php.php?result=<?=2?>" class="button">쿠폰 받기</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/coupon3.png" alt=""></a>
									<div class="box">
										<a href="page2_php.php?result=<?=3?>" class="button">쿠폰 받기</a> </div>
								</section>
							</div><!-- end of row no-collapse-1 -->
						   </div><!-- end of row -->
						</div><!-- end of container -->
					</div><!-- end of main -->
				<!-- /Main --> 

	</div>
	<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<div id="extra">
						<div class="container">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=ko"></script>                                                        
                                <div id="map_canvas" style="width:600px; height:400px;"></div>			
						</div><!-- end of container -->
					</div><!-- end of extra -->
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<ul class="icons">
						EunBeen
						<li><a href="https://www.facebook.com/profile.php?id=100005544108128" class="fa fa-facebook"><span>Facebook_EunBeen</span></a></li>
						<li><a class = "fa fa-google-plus" onclick="('vvvv980@gmail.com or s2017s40@e-mirim.hs.kr')"><span>Gmail_EunBeen</span></a></li>
						SunYeong
						<li><a href="https://www.facebook.com/profile.php?id=100010330358217" class="fa fa-facebook"><span>Facebook_SunYeong</span></a></li>
						<li><a class = "fa fa-google-plus" onclick="alert('s2017i30@e-mirim.hs.kr')"><span>Gmail_SunYeong</span></a></li><p>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>