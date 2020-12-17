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

<html>
<head>
<title>ورود به سایت</title>
<style type="text/css">
	
	body{
		direction: rtl;
		background-image:url(aks/back.png);
		background-repeat: no-repeat;
		background-size:cover;
	}
	table
	{
		width: 100px;
		height: 200px;
		background-color:rgba(237,227,227,0.7);
		border-radius: 20px;
		margin-top: 30px;
		margin-bottom: 100px;
	}
	
	td input{
		font-size: 16px;
		margin-left: 10px;
		border: 0px;
		border-bottom: solid 1px rgba(255,87,139,1.00);
		padding:7px 9px;
		background: none;
	
	}
	td input[type=submit]{
	border: rgba(160,12,85,1.00) inset 2px;
		border-radius: 10px;
		padding: 2px 20px;
		background-color:aliceblue;
		transition: 0.2s;
		font-size: 20px;
		font-family:B Nazanin, B Titr;
	}
	input[type=submit]:hover{
		background-color: rgba(231,174,197,1.00);
		border-radius: 20px;
		transition: 0.2s;
		cursor: pointer;
	}
</style>
</head>


<body>
	<center>
			<form method="post" action="action_login.php" name="login">
			<table cellpadding="5px" cellspacing="10px" >
			<tr><img src="aks/Asset 2.png" style="margin-top:150px;"></tr>
				<tr>
					<td><img src="aks/user.png"></td>
					<td><input type="text" name="username" id="username" required placeholder="لطفا نام کاربری خود را وارد  کنید "></td>
				</tr>
				<tr>
					<td><img src="aks/lock.png"></td>
					<td><input type="password" name="password" id="password" required placeholder="لطفا کلمه عبور خود را وارد نمایید"></td>
				</tr>
				
				<tr>
					<td id="btns">
						<input type="submit" name="submit" id="submit" value="ورود" formaction="action_login.php">
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
