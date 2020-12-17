<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>تماس با ما</title>
<style>
	body,div,h1,h2,form,fieldset,input,textarea,footer,p{
		margin: 0px;
		padding: 0px;
		border: 0px;
		outline: none;
	}
	body{
		background:url('aks/back.jpg');
		color: black;
		font-family: tahoma;
		
		
	}
	p{
		font-size: 24px;
		font-family:B Nazanin, B Titr;
		padding-right: 150px;
		color: rgba(241,6,101,1.00);
	}
	#wrap{
		width: 530px;
		margin:20px auto 0px ;
		height: 800px;
		/*background-color: antiquewhite;*/
	}
	h1{
		margin-bottom: 20px;
		text-align: center;
		font-size: 35px;
		font-family:B Nazanin, B Titr;
		/*color: white;*/
	}
	#form-wrap{
		/*overflow: hidden;*/
		/*height: 447px;*/
		height: 550px;
		direction:rtl;
		position: relative;
		background:url('aks/env.png') no-repeat;
		top:-70px;
		transition: all 1s ease-in-out 0.3s ;
		/*background-color: burlywood;*/
	}

	#form-wrap:hover{
		/*height: 777px;
		height: 600px;*/
	/*	top: -200px;*/
		top:80px;
	}
	form{
		position: relative;
		top: 200px;
		overflow: hidden;
		height: 16px;
		width: 365px;
		margin:0px auto;
		padding: 20px;
		transition: all 1s ease-in-out 0.3s;
		right: 2px;
		background: url(aks/b.png) no-repeat rgba(255,255,255,1.00);
		background-position: center 0px;
		
	}
	#form-wrap:hover form{
		/*height: 530px;*/
		height: 350px;
		top:-140px;
	}
	label{
		margin: 11px 5px 0px 0px;
		font-size:21px;
		text-transform: uppercase;
		font-family:B Nazanin, B Titr;
	}
	input[type=text] , textarea{
		font-size: 19px ;
		color:black;
		width: 370px;
		height: 37px;
		padding: 0px 0px;
		margin: 0px 0px 10px 0px;
		border: 1px solid #f8f5f1;
		border-radius: 5px;
		font-family:B Nazanin,B Titr;
		background-color: rgba(255,255,255,0.2);
	}
	textarea{
		height: 80px;
		padding-top: 14px;
		font-family:B Nazanin, B Titr;
	}
	textarea:focus, input[type=text]:focus{
		 background:rgba(245,240,240,0.3);
		
	}
	#form-wrap input[type=submit]{
		position: relative;
		font-family: tahoma;
		font-size: 25px;
		color:rgba(57,57,57,1.00);
		widows: 100%;
		text-align:center;
		opacity: 0.8;
		background: none;
		cursor: pointer;
		border-radius: 3px;
		transition: opacity 0.7s ease-in-out 0s;
		font-family:B Nazanin, B Titr;
	}
	#form-wrap:hover input[type=submit]{
		z-index: 1;
		opacity: 1;
		transition: opacity 0.5s ease-in-out 1.3s;
	}

</style>
<link type="text/css" href="style.css" rel="stylesheet">
</head>

<body>
   <div id="wrap">
   	 <h1>تماس با ما</h1>
   	 <br><br><br>
   	 <div id="form-wrap">

   	 	<form action="action_contact.php" method="post" name="contact">
   	 	   	
   	 	    <p>سلام اینجا پیغام بگذارید</p>
   	 		<label for="email">پیام شما :</label>
   	 		<textarea name="message" id="message"  value="your message">
   	 			
   	 		</textarea>
   	 		<p></p>
   	 		<label for="name">نام شما:</label>
   	 		<input type="text" name="name" value="" id="name">
   	 		<label for="email">ایمیل شما:</label>
   	 		<input type="text" name="email" id="email" value="">
   	 		<input type="submit" name="submit" value="ارسال پیام">
   	 	</form>
   	 </div>
   </div>



</body>
</html>
