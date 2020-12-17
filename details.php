<?php
include('includes/header.php');
$link=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno())
	exit("خطا با این شرح رخ داده است".mysqli_connect_error());

$pro_code=0;
if(isset($_GET['id']))
	$pro_code=$_GET['id'];


$query="SELECT * from product WHERE pro_code='$pro_code'";
$result=mysqli_query($link,$query);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>جزئیات محصول</title>
<style type="text/css">
	

	.table3
	{
		border:0px;
		direction: rtl;
		width: 100%;
		height: 320px;
		margin-bottom: 200px;
		margin-top: 50px;	
		padding-right: 20px;
		
	}
	h2{
		text-align: right;
	}
	.table3 td img{
		border-radius: 20px;
		float: right;
	}
	.table3 a{
		border: rgba(160,12,85,1.00) inset 2px;
		border-radius: 10px;
		padding: 2px 6px;
		background-color:aliceblue;
		transition: 0.2s;
	}
	.table3 a:hover{
		background-color: rgba(231,174,197,1.00);
		border-radius: 20px;
		transition: 0.2s;
		
	}
	.table3 tr td{
		margin-right: 50px;
	}
</style>
</head>

<body>

	<table class="table3" >
	<tr>
		<?php
			if($row=mysqli_fetch_array($result)){
		?>
		<td>
		<h2><?php echo($row['pro_name']); ?></h2>
		<img src="images/products/<?php echo($row['pro_image']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
		قیمت : <span><?php echo($row['pro_price']); ?></span>تومان
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;تعداد موجودی : <span><?php echo($row['pro_qty']); ?></span>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;توضیحات : <span> <?php echo($row['pro_detail']); ?> </span>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<b><a href="order.php?id=<?php echo($row['pro_code']); ?>"> سفارش و خرید پستی</a></b>
		</td>
		<?php
			}
		?>
	</tr>
		
	</table>

</body>
</html>


<?php
include('includes/footer.php');
?>