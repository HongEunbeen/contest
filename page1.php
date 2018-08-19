 <?php include "dbconn.php";
            $sql = "select * from signup where coupon1 == 1  or coupon2 == 1 or coupon3== 1";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);  
             
            $coupon1       = $row[counpon1];
            $coupon2       = $row[counpon2];
            $coupon3       = $row[counpon3];
 ?>

<!DOCTYPE HTML>

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
								<li><a href="page3.php">동네 지도</a></li>
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

				<!-- Page -->
					<div id="page" class="container">
						<div class="row">
		
							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<div class="row half">
										<section class="6u">
											<?php if($coupon1){?>
														<img src="images/coupon_code1.png" />
											<?php }else if($coupon2){?>
														<img src="images/coupon_code2.png" />
											<?php }else if($coupon3){?>
														<img src="images/coupon_code3.png" />
											<?php }?>
										</section>
									</div>
								</section>
							</div>
							
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
										<h2>Left Sidebar</h2>
										<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
									</header>
									</section>
							</div>
		
						</div>
					</div>
				<!-- /Page -->

				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row"> 
								
								<!-- Content -->
								<div class="6u">
									
								</div>
								<div class="6u">
									
								</div>
							</div>
						</div>
					</div>
				<!-- /Main --> 

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

					



