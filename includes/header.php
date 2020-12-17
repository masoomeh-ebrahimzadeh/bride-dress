<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<style>
		body {
			direction: rtl;
			font-family:B Nazanin;
			background-color:rgba(235,235,235,1.00);
			font-size: 20px;
		}
		.fixed{
			width: 90%;
			margin:auto;
		}
		header{
			width: 100%;
			background-color: rgba(255,214,215,1.00);
			right: 0px;
			top: 0px;
			position:fixed;
			border-bottom:rgba(167,54,89,1.00) 2px double;
			z-index: 10;
		}
		header img{
			width: 90px;
			float: right;
			margin-left: 10px;
			margin-top: 7px;
			
		}
		header h1{
			font-family:B Esfehan, B Tabassom;
			color: #92496D;
			font-size: 32px;
			margin-top: -7px;
			float: right;
		}

		a{
			text-decoration: none;
			color: rgba(187,35,87,1.00);
			font-weight: 600;
		}
		a:hover{
			color:rgba(0,0,0,1.00);
		}
		nav{
			margin:0px 300px;
			position:absolute;
			background-color:rgba(255,214,215,1.00);
			border-radius: 10px;
			width:60%;
			
		}
		#ulasli {
			list-style: none;
		}
		ul li{
			display: inline-block;
			padding: 5px 15px;
			transition:all 0.8s;
			color:rgba(187,35,87,1.00);
		}	
		#models {
			display: none;
		}
		#ulasli li:hover #models{
			display: block;
			position: fixed;
			bottom: 100px;
			background-color:rgba(138,135,135,0.5);
			width: 92px;
			font-size: 13px;
			text-align: center;
			margin-right: -18px;
			margin-bottom: 314px;
			transition:all 0.5s;
		}
		#ulasli li:hover{
			background-color:rgba(138,135,135,0.5);
			border-radius: 20px;
			height:33px;
			transition:all 0.5s;
			color: rgba(0,0,0,1.00);
			box-shadow: 0px 1px 5px 3px rgba(138,135,135,1.00) ;
		}
		#ulasli li:hover ul{
			display: table-row;
		}
	
		.slider{
			
			width:50%;
			margin: auto;
			margin-top: 110px;
			padding: 30px 65px 20px 75px;
			background-color:rgba(195,195,195,1.00);
			box-shadow: -2px 3px 8px 9px rgba(74,66,70,1.00);
			border-radius: 20px;
			
		}
		.slider img{
			width: 100%;
			border-radius: 10px;
			border: 3px rgba(118,10,64,1.00) ridge;
		}
		
		#describtion{
			width: 200px;
			font-size: 11px;
			float: right;
			margin-top: 36px;
			margin-right: -92px;
			
		}
			h2{
			text-align: center;
			margin-top: 40px;
			color:#700950;
			font-family:B Homa;
			padding-top: 20px;
		}
		.main{
			width: 25%;
			background-color: antiquewhite;
			box-shadow: -2px 3px 15px 7px rgba(74,66,70,1.00);
			margin-top: 50px;
			float: right;
			margin-right: 75px;
			
		}
		.main img{
			width: 88%;
			margin: 5px 0%;
			
		}
		figure {
			width: 90%;
			height:300px;
			overflow:inherit;
			margin-right: 10%;
			
			
		}
		figcaption{
			display: none;
		}
		 .main figure:hover figcaption{
			display:block;
			text-align: center;
			font-size: 21px; 
			margin-top: -180px;
			margin-right: -30px;
			font-weight: 900;
			font-family:B Homa;
			opacity: 1;
			transform:perspective(10px);
		}
		.main figure img {
			opacity: 1;
			-webkit-transition: .3s ease-in-out;
			transition: .3s ease-in-out;
			
			
			}
		.main figure:hover img {
			opacity: .5;
			transform: scale(1.1);
			position:relative;
			}
		.about{
			width: 90%;
			height: 417px;
			background-color:rgba(240,212,226,0.5);
			margin:500px auto;
			border-right:rgba(167,54,89,1.00) 2px double;	
			border-bottom:rgba(167,54,89,1.00) 2px double;
			margin-bottom: 180px;
		}
		.about figure img{
			float: left;
			
		}
		.about p{
			margin-top:-10px;
			font-size: 20px;
			text-align: justify;
			color:#AF286B;
			font-weight: 700;
		}
		footer{
			background-color:#D6D6D6;
			width:99%;
			height: 370px;
			margin:0px auto;
			background-image:url(aks/close-up-pink-violet-wedding-bouquet-bride-s-hands_8353-8656.jpg);
			background-attachment:fixed;
			background-position: bottom center;
			box-shadow: -2px 3px 15px 7px rgba(74,66,70,1.00);
			background-repeat:no-repeat;
		}
		#divright{
			float: right;
		}
		#divleft{
			float: left;
			width: 25%;
			height:350px;
		}
		#divright h4{
			color: #700950;
			font-family:B Homa;
			font-size: 22px;
			margin: 3% 100px 3% 140px;
		}
			#divright ul li{
			margin:30px 0px 0px 40px;
			color: blueviolet;
			font-weight:700; 
			display: block;
			line-height: 10px;
			font-style:italic;
			font-size: 17px;
		}
		#divleft h4{
			color: #700950;
			font-family:B Homa;
			font-size: 18px;
			margin:5% 15px;
		}
		#divleft form{
			margin: 15px 30px;
		}
		#divleft form input{
			width:90%;
			height: 22px;
			font-size:17px;
			color: rgba(15,124,255,1.00);
			padding:1px 5px;
			margin:3px auto;
			font-weight:500;
		}
		#divleft input, textarea{
			margin: 10px 0px;
			width:60%;
			border: rgba(220,13,103,1.00) 1px outset;
			padding: 8px 8px;
			border-radius: 5px;
		}
			
		
	</style>
	
</head>

<body>
	
	<header>
		<div class="fixed">
			<img src="aks/logo3.png">
			<h1>نو عروس</h1>
			<div id="describtion">
			<h3>فراتر از زیبایی</h3></div>
			<nav>
				<ul id="ulasli">
					<a href="mainpage.php"><li>صفحه اصلی</li></a>
					<a href="#"><li style="border-radius:10px 10px 0px 0px">گالری ما
					<div id="models" style="border-radius:0px 0px 10px 10px"><ul><a href="#"><li>مدل های ایرانی</li></a>
							<a href="#"><li>مدل های ترکیه ای</li></a>
							<a href="#"><li>مدل های اروپایی</li></a>
						</ul></div>
					</li></a>
					<a href="register.php"><li>عضویت</li></a>
					
					
					
					
					<?php
						if(isset($_SESSION['state_login']) && $_SESSION['state_login']===true)
						{
					?>
					<a href="logout.php"><li>خروج
					<?php echo (" ({$_SESSION["realname"]}) "); ?> </li></a>
					<?php
						}
					else
					{
					?>
					<a href="login.php"><li>ورود</li></a>
					<?php
					}
					?>
					
					
					
					
					
					<a href="#bottem"><li>ارتباط با ما</li></a>
					
					
					
					<?php
						if(isset($_SESSION['state_login']) && $_SESSION['state_login']===true  && $_SESSION['user_type']=="admin")
						{	
					?>
					<a href="adminproduct.php"><li>مدیریت محصولات</li></a>
					<?php
						}
					?>
					
						
							
									
									
				</ul>
				<a href="store.php" style="float: left; margin: -58px -130px;"><img src="aks/storee.png" style="width: 30px; height: 20px;">فروشگاه</a>
			</nav>
		</div>
	</header>
