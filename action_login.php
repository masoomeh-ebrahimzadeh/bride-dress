<?php
	include('includes/header.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ورود</title>
<style>
	#divmain{
		background-color:azure;
		width: 30%; 
		margin:150px auto;
		height:400px;
		margin-bottom: 80px; 
		padding: 2px 10px; 
		border: #FF7FB6 outset 4px;
		color:#7F0B3D;
	}
	
</style>
</head>

<body>


<div id="divmain">


<?php

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
   {
	   $username=$_POST["username"];
	   $password=$_POST["password"];
}
	else{
		exit("وارد کردن همه اطلاعات الزامی است");
}

	$link=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno())
	exit("خطای رخ داده به شرح زیر است".mysqli_connect_error());


$query="select * from users where username='$username' and password='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
	

if($row)
{
	$_SESSION["state_login"] = true;
	$_SESSION["realname"] = $row['realname'];
	$_SESSION["username"] = $row['username'];
	
	if($row["type"]==0)
		$_SESSION["user_type"]= "public";
	elseif($row["type"]==1){
		$_SESSION["user_type"]="admin";
	?>
	
	<script>
		location.replace("adminproduct.php");
	</script>
<?php
	}
	
	echo("<p style='color:green';><b>{$row['realname']} به مزون لباس عروس ما خوش آمدید </b></p>");
}else
	echo("<p style='color:red;'><b> نام کاربری یا کلمه عبور یافت نشد </p>");
	
mysqli_close($link);
?>

</div>

<?php
	include('includes/footer.php');
?>