<title>ثبت سفارش</title>
<?php
include('includes/header.php');
if(!(isset($_SESSION["state_login"])&& $_SESSION['state_login']===true )){
?>
<script type="text/javascript">
location.replace('index.php');
</script>

	

<?php
}

$pro_code=$_POST['pro_code'];
$pro_name=$_POST['pro_name'];	
$pro_req=$_POST['pro_req'];	
$pro_price=$_POST['pro_price'];	
$total_price=$_POST['total_price'];	

$realname=$_POST['realname'];	
$email=$_POST['email'];	

$mobile=$_POST['mobile'];
$address=$_POST['address'];

$username=$_SESSION['username'];

$link=mysqli_connect('localhost','root','','shop');

if (mysqli_connect_errno())
	exit("خطا به شرح زیر است".mysqli_connect_error());
$query="INSERT INTO orders
	(id,
	username,
	orderdate,
	pro_code,
	pro_req,
	pro_price,
	mobile,
	address,
	trackcode,
	state)
	VALUES(
	'0',
	'$username',
	'".date('y-m-d')."',
	'$pro_code',
	'$pro_req',
	'$pro_price',
	'$mobile',
	'$address',
	'000000000000000000000000',
	'0')";
?>
<div style="width:50%;  background-color:aliceblue; margin-top:150px; margin-bottom: 100px; padding : 10px 10px; text-align: center; margin: 120px auto 50px; border: rgba(205,26,82,1.00) 3px outset;">	
<?php
if(mysqli_query($link,$query)===true) {
	echo("<p style='color:green;'>سفارش شما با موفقیت در سامانه ثبت شد</p>");
	
	echo("<p style='color:brown;'>کاربر گرامی آقا / خانم&nbsp;$realname</p>");
	echo("<p style='color:brown;'>$pro_name با کد $pro_code به تعداد$pro_req با قیمت پایه $pro_price تومان را سفارش داده اید </p>");
	
	echo("<p style='color:red;'>مبلغ قابل پرداخت برای سفارش ثبت شده $total_price تومان است</p>");
	
	echo("<p style='color:blue;'>پس از بررسی سفارش و تایید آن با شما تماس گرفته خواهد شد</p>");
	
	echo("<p style='color:blue;'>کالای خریداری شده از طریق پست طبق آدرس درج شده ارسال خواهد شد</p>");
	
	$query="UPDATE product SET pro_qty=pro_qty- $pro_req WHERE pro_code='$pro_code'";
	mysqli_query($link,$query);
}else
	echo("<p style='color:red;'><br>خطا در ثبت سفارش<br></p>");
	?>
</div>	
<?php
mysqli_close($link);

include('includes/footer.php');
?>
	



