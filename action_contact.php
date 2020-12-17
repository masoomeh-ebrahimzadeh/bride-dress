
 <?php
include('includes/header.php');
?>
<div  style="margin: 150px auto 200px; background-color:azure; width:500px; height: 200px; text-align: center; border: rgba(208,26,94,1.00) outset 5px">
<?php
if(isset($_POST['message']) && !empty($_POST['message']) &&
   isset($_POST['name']) && !empty($_POST['name']) &&
   isset($_POST['email']) && !empty($_POST['email']) 
  )	{

$message=$_POST["message"];
$name=$_POST["name"];
$email=$_POST["email"];
	}
	else
	exit('تمام فیلد ها را کامل نمایید !');

$link = mysqli_connect('localhost','root','','shop');
	if(mysqli_connect_errno())
		exit("خطای رخ داده به شرح زیر است".mysqli_connect_error());

	$query="INSERT INTO contact(message,name,email) 
	VALUES('$message','$name','$email') ";

	if(mysqli_query($link,$query)===true)
	{
		echo("<p style='color:green'>".$name."&nbsp"."گرامی پیام شما ".
			 " با موفقیت ارسال شد"."</b></p>");
	}
	else
	{
		echo("<p style='color:red'>"."ارسال پیام شما موفقیت آمیز نبود");
	}
	?>
</div>
<?php
mysqli_close($link);

include('includes/footer.php');
?>
