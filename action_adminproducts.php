<?php
include("includes/header.php");
if(!(isset($_SESSION['state_login'])) &&$_SESSION['state_login']===true && $_SESSION['user_type']=="admin"){
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
<title>صحت اطلاعات محصول</title>
</head>

<body>
<div dir="rtl" style="background-size: cover;width: 100%;height: 100%;margin-left: auto;margin-right: auto;padding-right: 10px;margin-top: 200px;">
	<div dir="rtl" style="background-color: white;opacity: 1;border: solid ##2d4585 ;border-radius: 20px;float: right; height: 200px;text-align: right;width: 80%;margin-right: 10%;margin-top: 50px;">
	<div style="margin-top: 50px;margin-right: 10px;">
<?php
if  (!(isset($_GET['action']) && $_GET['action']=='DELETE')){		
if(isset($_POST['pro_code']) && !empty($_POST['pro_code']) && 
  isset($_POST['pro_name']) && !empty($_POST['pro_name']) &&
  isset($_POST['pro_qty']) && !empty($_POST['pro_qty']) &&
  isset($_POST['pro_price']) && !empty($_POST['pro_price']) &&
  isset($_POST['pro_detail']) && !empty($_POST['pro_detail'])){
	
	$pro_code=$_POST['pro_code'];
	$pro_name=$_POST['pro_name'];
	$pro_qty=$_POST['pro_qty'];
	$pro_price=$_POST['pro_price'];
	$pro_image=$_FILES['pro_image']['name'];
	$pro_detail=$_POST['pro_detail'];
	 $pro_image=basename($_FILES['pro_image']['name']);
	
}	
else
	exit("فیلدها را کامل وارد نمائید");
}
		
	
$link=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno())
	exit("عدم اتصال به پایگاه داده".mysqli_connect_error());

	if(isset($_GET['action'])){
	$id=$_GET['id'];
		
	switch($_GET['action']){
		case'EDIT':
			$query="UPDATE product SET 
			pro_code='$pro_code',
			pro_name='$pro_name',
			pro_qty='$pro_qty',
			pro_price='$pro_price',
			pro_detail='$pro_detail' WHERE pro_code='$id'";
					
					
			if(mysqli_query($link,$query))
				echo("<p style='color:green'>کالای انتخاب شده با موفقیت ویرایش شد</p>");
				else
				echo("<p style='color:red'>خطا در ویرایش کالا</p>");
			break;
					
		case 'DELETE':
			$query="select pro_image from product where pro_code='$id'";
			$result=mysqli_query($link,$query);
			 $row=mysqli_fetch_array($result);
			$pro_image=$row['pro_image'];
	    	$query="delete from product where pro_code='$id'";
			 if(mysqli_query($link,$query) === true){
			echo("<p style='color:green;'><b>کالا با موفقیت حذف شد</b></p>");
			unlink("images/products/".$pro_image);
			  }
			 else
				echo("<p style='color:red;' ><b>خطا در حذف تصویر کالا</b></p>");
			break;
		}//switch
	?>
</div>
	<?php
	mysqli_close($link);//بانک را ببندیم تا دیگر امکان تغییر در بانک نباشد

	exit();//تا ادامه دستورات که مربوط به  insert است ادامه نیابد
}//if	
	
	$target_dir = "images/products/";
	$target_file = $target_dir.$_FILES["pro_image"]["name"];
	$imagefiletype = pathinfo($target_file,PATHINFO_EXTENSION);
	
	$check=getimagesize($_FILES["pro_image"]["tmp_name"]);
	if($check !== false){
		echo("پرونده انتخابی یک تصویر از نوع".$check["mime"]."است </br >");
		$uploadok=1;
	}
	else
	{
		echo("پرونده انتخاب شده یک تصویر نیست <br />");
		$uploadok=0;
	}
	
	if(file_exists($target_file)){
		echo("پرونده ای با همین نام در سرویس دهنده میزبان وجود دارد <br />");
		$uploadok=0;
	}
	
	if($_FILES["pro_image"]["size"] > (500*1024)){
		echo("اندازه پرونده انتخابی بیشتر از 500 کیلوبایت است");
		$uploadok=0;
	}
	
	if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif"){
		echo("فقط پسوند های jpg ,png,gif برای پرونده مجاز هستند <br />");
		$uploadok=0;
	}
	
	if($uploadok == 0){
		echo("پرونده انتخاب شده به سرویس دهنده میزبان ارسال نشد<br />");
	}else{
		if(move_uploaded_file($_FILES["pro_image"]["tmp_name"],$target_file)){
			echo("پرونده".$_FILES["pro_image"]["name"]."با موفقیت به سرویس دهنده میزبان انتقال یافت <br />");
		}
		else{
			echo("خطا در ارسال پرونده به سرویس دهنده میزبان رخ داده است");
		}
	}
	
	if($uploadok ==1){
	$link=mysqli_connect("localhost","root","","shop");
	if(mysqli_connect_errno())
		exit("عدم اتصال به پایگاه داده".mysqli_connect_error());
		
		
		
	$query="insert into product(pro_code, pro_name, pro_qty , pro_price , pro_image , pro_detail) values
	('$pro_code','$pro_name','$pro_qty','$pro_price','$pro_image','$pro_detail')";
	
	if(mysqli_query($link,$query)===true)
		echo("کالا با موفقیت اضافه شد<br>");
	    else
			echo("کالا اضافه نشد");
	}
	
	else
		echo("خطا در ثبت مشخصات کالا");
		

?>
		</div>
	</div>
</div>
</body>
</html>






