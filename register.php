<?php 
	include('includes/header.php');
if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true){
?>
<script type="text/javascript">
	location.replace("mainpage.php");
</script>
<?php
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>عضویت</title>
<script type="text/javascript">
	function check_empty()
	{
		var username='';
		var password='';
		var repass='';
		var realname='';
		var lastname='';
		var email='';
		username=document.getElementById("username").value;
		realname=document.getElementById("realname").value;
		lastname=document.getElementById("lastname").value;
		password=document.getElementById("password").value;
		repass=document.getElementById("repass").value;
		email=document.getElementById("email").value;
		if(username=='' || realname=='' || lastname=='' || email=='' || password=='' || repass=='')
			alert('وارد کردن همه اطلاعات الزامی است');
		else{
			var r=confirm('از صحت اطلاعات وارد شده اطمینان دارید ؟');
			if(r==true){
				document.register.submit();
			}
		}
	}
	
	
</script>

<style type="text/css">
	
	body{
		direction: rtl;
		background-image:url(aks/Bridal-Bouquet-45.jpg);
		background-repeat: no-repeat;
		background-size:cover;
	}
	table{
		/*border: rgba(255,40,107,1.00) inset 3px;*/
		border-radius:10px;
		margin-top: 200px;
		margin-bottom: 200px;
		width: 448px;
		border-collapse: collapse;
	} 
	td{
		text-align:justify;
		font-weight: 600;
		padding-right: 10px;
	}
	td input[type=text],[type=email],[type=password]{
		width: 250px;
		border: rgba(28,138,200,1.00) groove 1px;
		height: 20px;
		color:rgba(10,99,193,1.00);
		font-size: 18px;
		padding: 2px 10px;
		border-radius: 5px;
	}
	tr:nth-child(odd)
	{
		background-color: rgba(231,135,165,0.5);
	}
	tr:nth-child(even)
	{
		background-color:rgba(231,231,231,0.5);
	}
	tr td input[type=button],[type=reset]{
		border: rgba(160,12,85,1.00) inset 2px;
		border-radius: 10px;
		padding: 3px 10px ;
		background-color:aliceblue;
		transition: 0.2s;
		font-size: 20px;
		font-family:B Nazanin, B Titr;
	}
	#btns{
		text-align: center;
		margin: 0px auto;
	}
	#btns input:hover{
		background-color:rgba(247,201,215,0.1);
		border-radius: 20px;
		transition: 0.2s;
		cursor: pointer;
		border: rgba(160,12,85,1.00) inset 2px;
	}
</style>
</head>

<body>
	<center>
		<form method="post" action="action-register.php" name="register">
			<table cellpadding="5px" cellspacing="10px">
				<tr>
					<td>نام :</td>
					<td><input type="text" name="realname" id="realname" autocomplete="on" autofocus required></td>
				</tr>
				<tr>
					<td>نام خانوادگی :</td>
					<td><input type="text" name="lastname" id="lastname" required></td>
				</tr>
				
				<tr>
					<td>نام کاربری :</td>
					<td><input type="text" name="username" id="username" required></td>
				</tr>
				
				<tr>
					<td> رمز عبور :</td>
					<td><input type="password" name="password" id="password" maxlength="8" required></td>
				</tr>
				
				<tr>
					<td>تکرار رمز عبور :</td>
					<td><input type="password" name="repass" id="repass" maxlength="8" required> </td>
				</tr>
				
				<tr>
					<td>پست الکترونیکی :</td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
			  
				<tr>
					<td colspan="2" id="btns">
						<input type="button" name="btnsub" id="btnsub" value="ثبت اطلاعات" onClick="check_empty();">
						<input type="reset" name="btnreset" id="btnreset" value="بازنشانی">
					</td>
				</tr>
				</table>
			</form>
	</center>
</body>
</html>


<?php 
	include('includes/footer.php');
?>