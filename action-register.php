<?php
	include('includes/header.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>صحت اطلاعات شما</title>
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
		text-align: center;
	}
	
</style>
</head>

<body>


<div id="divmain">

<?php
if(isset($_POST['realname']) && !empty($_POST['realname']) &&
   isset($_POST['lastname']) && !empty($_POST['lastname']) &&
   isset($_POST['username']) && !empty($_POST['username']) &&
   isset($_POST['password']) && !empty($_POST['password']) &&
   isset($_POST['repass']) && !empty($_POST['repass']) &&
   isset($_POST['email']) && !empty($_POST['email'])
  )	{

$realname=$_POST["realname"];
$lastname=$_POST["lastname"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repass"];
$email=$_POST["email"];
	}
	else
	exit('برخی از فیلدها مقداردهی نشده است !');
	
	if($password != $repassword)
	{
		exit(" رمز عبور با تکرار آن یکسان نیست !");
	}
	 
	if(	filter_var($email,FILTER_VALIDATE_EMAIL)===false)
	{
		exit("ایمیل معتبر نیست");
	}
	
	$link = mysqli_connect('localhost','root','','shop');
	if(mysqli_connect_errno())
		exit("خطای رخ داده به شرح زیر است".mysqli_connect_error());

	$query="insert into users(realname,username,password,email,type) values('$realname','$username','$password','$email','0') ";

	if(mysqli_query($link,$query)===true)
	{
		echo("<p style='color:green'>".$realname."&nbsp"."گرامی عضویت شما با نام کاربری"."&nbsp".$username."&nbsp"."در فروشگاه با موفقیت ثبت شد"."</b></p>");
	}
	else
	{
		echo("<p style='color:red'>"."عضویت شما موفقیت آمیز نبود");
	}
mysqli_close($link);
?>


</div>	

</body>
</html>

<?php
	include('includes/footer.php');
?>

