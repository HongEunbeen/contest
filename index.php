<?php 
    session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />		
		<meta name="keywords" content="" />
		<link rel="manifest" href="/manifest.webmanifest">
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
			<link rel = "stylesheet"  href="css/skel.css" type = "text/css">
			<link rel = "stylesheet"  href="css/style-silde.css" type = "text/css">
			<link rel="stylesheet" href="css/style.css" type = "text/css">
			<link rel="stylesheet" href="css/style-wide.css" type = "text/css">
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">
				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.php">신홍 제작소</a></h1>
							<span class="tag"><link rel="manifest" href="/manifest.json" />신홍 제작소</span>
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
					<div id="banner" class="container">
						<div id="main">
					  		<div class="container">
								<div class="row"> 
                              		<div class="row no-collapse-1">
                              		<section class="6u">
											<ul class="slides">
						    <input type="radio" name="radio-btn" id="img-1"checked />
						    <li class="slide-container">
						 	 <div class="slide">
						  		 <img src="images/main_image.jpg" />
						      </div>
						  <div class="nav">
						   <label for="img-5" class="prev">&#x2039;</label>
						   <label for="img-2" class="next">&#x203a;</label>
						  </div>
						    </li>
						<input type="radio" name="radio-btn" id="img-2" />
						    <li class="slide-container">
						        <div class="slide">
						          <img src="images/main_image1.jpg" />
						        </div>
						  <div class="nav">
						   <label for="img-1" class="prev">&#x2039;</label>
						   <label for="img-3" class="next">&#x203a;</label>
						  </div>
						    </li>
						    <input type="radio" name="radio-btn" id="img-3" />
						    <li class="slide-container">
						        <div class="slide">
						          <img src="images/main_image2.jpg" />
						        </div>
						  <div class="nav">
						   <label for="img-2" class="prev">&#x2039;</label>
						   <label for="img-4" class="next">&#x203a;</label>
						  </div>
						    </li>
						
						    <input type="radio" name="radio-btn" id="img-4" />
						    <li class="slide-container">
						        <div class="slide">
						          <img src="images/main_image3.jpg" />
						        </div>
						  <div class="nav">
						   <label for="img-3" class="prev">&#x2039;</label>
						   <label for="img-5" class="next">&#x203a;</label>
						  </div>
						    </li>
						
						    <input type="radio" name="radio-btn" id="img-5" />
						    <li class="slide-container">
						        <div class="slide">
						          <img src="images/main_image4.jpg" />
						        </div>
						  <div class="nav">
						   <label for="img-4" class="prev">&#x2039;</label>
						   <label for="img-1" class="next">&#x203a;</label>
						  </div>
						    </li>
						    <li class="nav-dots">
						      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
						      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
						      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
						      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
						      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
						    </li>
						</ul></section>
									</div><!-- end of row no-collapse-1 -->
						  		 </div><!-- end of row -->
							</div><!-- end of container -->
						</div><!-- end of main -->
					</div><!-- end of banner -->
				<!-- Banner -->

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