<title>محصولات</title>
<style type="text/css">
	td input[type=text] , textarea{
		margin: 5px 0px;
		width:60%;
		border: rgba(220,13,103,1.00) 1px outset;
		padding: 6px 10px;
		border-radius: 10px;
	}
	td{
		margin: 10px 20px;
		padding-right: 10px;
		font-size: 20px;
	}

	td input[type=submit]{
		border: rgba(160,12,85,1.00) inset 2px;
		border-radius: 10px;
		padding: 6px 12px;
		background-color:aliceblue;
		transition: 0.2s;
		font-size: 15px;
	}
	td input[type=submit]:hover{
		background-color: rgba(231,174,197,1.00);
		border-radius: 20px;
		transition: 0.2s;
		cursor: pointer;
		
	}
	td input[type=reset]{
		border: rgba(160,12,85,1.00) inset 2px;
		border-radius: 10px;
		padding: 6px 12px;
		background-color:aliceblue;
		transition: 0.2s;
		font-size: 15px;
	}
	td input[type=reset]:hover{
		background-color: rgba(231,174,197,1.00);
		border-radius: 20px;
		transition: 0.2s;
		cursor: pointer;
		
	}
	.tr:nth-child(odd)
	{
		background-color:rgba(175,175,175,0.5);
		border: rgba(167,51,83,1.00) 2px inset;
	}
	.tr:nth-child(even)
	{
		background-color:rgba(228,194,209,0.5);
		border: rgba(167,51,83,1.00) 2px inset;
	}
</style>
 

<?php
 include("includes/header.php");
 if(!(isset($_SESSION['state_login']) && $_SESSION['state_login']===true  && $_SESSION['user_type']=="admin")){
	 ?>
	  <script type=text/javascript>
		 location.replace("mainpage.php");
	</script>
	 <?php  
 }
$link=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno())
	exit("عدم اتصال به بانک . خطای مقابل  روی داده است" . mysqli_connect_error());

$url=$pro_code=$pro_name=$pro_qty=$pro_price=$pro_image=$pro_detail= "";
$btn_caption="افزودن کالا";

if (isset($_GET['action']) && $_GET['action']== 'EDIT'){
	$id=$_GET['id'];
	$query="select * from product where pro_code='$id'";
	$result=mysqli_query($link,$query);
	if($row=mysqli_fetch_array($result)){
		$pro_code=$row['pro_code'];
		$pro_name=$row['pro_name'];
		$pro_qty=$row['pro_qty'];
		$pro_price=$row['pro_price'];
		$pro_image=$row['pro_image'];
		$pro_detail=$row['pro_detail'];
		$url="?id=$pro_code&action=EDIT";
		$btn_caption="ویرایش کالا";
	}
}
?>
<center>
<div style="background: url(aks/bridesmaid-makes-bow-knot-back-brides-wedding-dress_8353-5832.jpg) no-repeat;background-size: cover;border-radius: 20px; width: 50%;height:600px; margin:115px auto 30px;">
	

<form name="adminproduct" action="action_adminproducts.php<?php if(!empty($url)) echo($url); ?>" method="post" enctype="multipart/form-data">
	<table dir="rtl" cellpadding="5px;" align="right" style="width: 90%;margin-right: 4%;height:550px; margin-top: 4%;">
		<tr>
			<td width="20%" style="text-align: right">کد کالا :</td>
			<td width="80%" >
				<input type="text" id="book_shaback" name="pro_code" value="<?php echo($pro_code); ?>" autofocus required>
			</td>
		</tr>
		<tr>
			<td width="20%" style="text-align: right"> نام کالا :</td>
			<td width="80%" >
				<input type="text" id="book_name" name="pro_name" value="<?php echo($pro_name); ?>" required>
			</td>
		</tr>
		<tr>
			<td width="20%" style="text-align: right">تعداد موجودی :</td>
			<td width="80%" >
				<input type="text" id="book_auther" name="pro_qty" value="<?php echo($pro_qty); ?>" required>
			</td>
		</tr>
		<tr>
			<td width="20%" style="text-align: right">قیمت :</td>
			<td width="80%" >
				<input type="text" id="book_publisher" name="pro_price" value="<?php echo($pro_price); ?>" required>
			</td>
		</tr>
		<tr>
			<td width="25%" style="text-align: right">آپلود تصویر کالا :</td>
			<td width="80%" >
				<input type="file" id="book_qty" name="pro_image" required>
				<?php if(!empty($pro_image))
				echo("<img src='images/products/$pro_image' width='60' height='80'>");
				?>
			</td>
		</tr>
		<tr>
			<td width="25%" style="text-align: right">توضیحات کالا :</td>
			<td width="80%" >
				<textarea name="pro_detail" cols="45" rows="10" wrap="virtual"><?php echo($pro_detail); ?></textarea>
			</td>
		</tr>
		
		<tr>
			<td></td>
			<td>
				<input type="submit" value="<?php echo($btn_caption); ?>">&nbsp;&nbsp;
				<input type="reset" value="جدید">
			</td>
		</tr>
	</table>
</form>
</div>
</center>

<?php
$query="select * from product";
$result=mysqli_query($link,$query);
?>


<table style="margin: 50px auto;text-align: center;border-collapse: collapse;" cellpadding="5px">
	<tr class="tr">
		<td>کد لباس</td>
		<td>نام لباس</td>
		<td>موجودی کالا</td>
		<td>قیمت لباس</td>
		<td>تصویر لباس</td>
		<td>ابزار مدیریتی</td>
	</tr>
	
	<?php
	while($row=mysqli_fetch_array($result)){
	?>
	<tr class="tr">
		<td><?php echo($row['pro_code']); ?></td>
		<td><?php echo($row['pro_name']); ?></td>
		<td><?php echo($row['pro_qty']); ?></td>
		<td><?php echo($row['pro_price']); ?></td>
		<td><img src="images/products/<?php echo($row['pro_image']); ?>" width="110px" height="150px"></td>
		<td>
			<b><a href="action_adminproducts.php?id=<?php echo($row['pro_code']); ?>&action=DELETE">حذف</a></b>
			&nbsp;|&nbsp;&nbsp;<b><a href="adminproduct.php?id=<?php echo($row['pro_code']); ?>&action=EDIT">ویرایش</a></b>
		</td>
	</tr>
	<?php 
	} 
	?>
</table>

<?php
include("includes/footer.php");
?>

