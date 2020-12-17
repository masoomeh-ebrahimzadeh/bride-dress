<?php
include('includes/header.php');
$link=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno())
	exit("خطا با این شرح رخ داده است".mysqli_connect_error());
$counter=0;
$query="select * from product";
$result=mysqli_query($link,$query);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه</title>
<style type="text/css">
	
	h2{
		text-align: center;
		margin-top: 90px;
		margin-bottom: 200px;
	}
	.table3
	{
		direction: rtl;
		border:none;
		width: 85%;
		height: 320px;
		margin-bottom: 200px;
		margin-top: -150px;	
	
	}
	.table3 tr td{
		
		border-radius: 20px;
		height: 280px;
		background-color:rgba(235,200,219,0.5);
		box-shadow: 1px 3px 5px 7px rgba(62,62,62,0.8);
		width: 30%;
		
	}
	.table3 td img{
		margin-top: -5px;
		margin-bottom: 5px;
		width: 230px;
		height: 260px;
		border-radius: 10px;
		transition: 0.1s;
		border: 2px outset rgba(192,46,119,1.00);
		transition: 0.3s;
	}
	.table3 td img:hover{
		
		transform: scale(1.11);
		transition: 0.3s;
	}
		.table3{
		margin-top: -180px;
	}
</style>
</head>

<body>
<center> 
	<h2>جدید ترین مدل های لباس عروس</h2>
		<hr style="width: 450px; margin-top: -195px; margin-bottom: 200px;">
		
		
		<table class="table3" cellpadding="10px" cellspacing="35px">
			<tr>
			<?php 	
              while($row=mysqli_fetch_array($result)){
				 $counter++; 
			    
				?>
				<td align="center">
					<h3> <?php echo($row['pro_name']); ?> </h3>
					<a href="details.php?id=<?php echo($row['pro_code']);?>">
					<img src="images/products/<?php echo($row['pro_image']);?>" >
					</a><br>
					قیمت : <?php echo($row['pro_price']); ?> تومان <br>
					موجودی : <?php echo($row['pro_qty']);  ?> <br>
					<a href="details.php?id=<?php echo($row['pro_code']); ?>"> توضیحات : <?php echo(substr($row['pro_detail'],0,18)); ?>....</a>
					
				</td>
				<?php
				if($counter % 3 ==0)
					echo("</tr><tr>");
				}
				if($counter % 3 !=0)
				echo("</tr>");
				
				?>
			
				
			
		</table>
		
	
	</center>
</body>
</html>


<?php
include("includes/footer.php");
?>

