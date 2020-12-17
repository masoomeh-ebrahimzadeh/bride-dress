<title>سفارش</title>
<style type="text/css">
	td input , textarea{
		margin: 10px 0px;
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
	input[type=button]{
		border: rgba(160,12,85,1.00) inset 2px;
		border-radius: 10px;
		padding: 5px 10px;
		background-color:aliceblue;
		transition: 0.2s;
		font-size: 18px;
		
	}
	input[type=button]:hover{
		background-color: rgba(231,174,197,1.00);
		border-radius: 20px;
		transition: 0.2s;
		cursor: pointer;
	}
</style>
 

 <?php
  include("includes/header.php");
$link=mysqli_connect("localhost","root","","shop");
if(mysqli_connect_errno())
	exit("عدم اتصال به بانک . خطای مقابل  روی داده است" . mysqli_connect_error());//مدیریت خطا برای اتصال به بانک مدرسه
$pro_code=0;
if(isset($_GET['id']) )
	$pro_code=$_GET['id'];//کد کتاب کلیک شده را از طریق آرایه get از نوار آدرس گرفتیم 
if(!(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true)){
	?>
	<center>
 <div style="background-image: url('aks/1.png');background-size: cover; width: 50%; height: 200px; text-align: center; outline: inset 3px rgba(213,47,104,1.00);">
	        <table border="0px" dir="rtl" align="center" style="margin-top: 150px;">
		<tr>
			<td><b><span style="color:#b23e4b; ">برای ثبت سفارش باید در سایت وارد شوید</span></b></td>
		</tr>
		<tr>
		   <td>	در صورتیکه عضو سایت هستید برای ورود لینک
		        <a href="login.php" style="text-decoration: none;color:#b23e4b "><b>ورود به سایت</b></a>
		        کلیک نمائید
		   </td>
		</tr>
		<tr>
			<td>در صورتیکه عضو سایت نیستید برای ثبت نام روی لینک
			   <a href="register.php" style="text-decoration: none;color: #b23e4b"><b>عضویت در سایت</b></a>
			   کلیک نمائید
			</td>
		</tr>
	</table>
</div>
</center>
	<?php
	exit();//تا دیگر ادامه ندهد برنامه را 
}
$query="select * from product where pro_code='$pro_code'";//پرس وچوی کتاب کلیک شده 
$result=mysqli_query($link,$query);//اجرای پرس و جو 
?>
 <div>
 <form name="order" id="order" action="action_order.php" method="post">
  <table width="98%" height="600px" dir="rtl" border="0px" style="border-color:#2d4585;background: url('aks/ش.jpg') no-repeat ;background-size:cover; margin:100px auto 30px; box-shadow: -2px 2px 8px 3px rgba(96,95,95,1.00);"><!--   - جدول بزرگ -جدول دارای پس زمینه کتابخانه  !-->
  	<tr><td width="60%">
  		<?php
		  if ($row=mysqli_fetch_array($result)){ //ذخیره رکورد اطلاعات در آرایه $row
			  
		 
		?>
		<table border="0px"  dir="rtl" width="90%" style=" background-color:rgba(245,242,242,0.7);margin: 20px auto  30px;border-radius:10px; "><!--  جدول سمت راست -->
			<tr>
				<td width="22%" ><br>کد لباس</td>
				<td width="78%">
				  <input type="text" id="pro_code" name="pro_code" 
				  value="<?php echo($row['pro_code']); ?>" style="background-color: lightgray;" readonly>
				</td>
			</tr>
			<tr>
				<td width="22%">مدل لباس</td>
				<td width="78%">
					<input type="text" id="pro_name" name="pro_name"
					  value="<?php echo($row['pro_name']);  ?>" style="background-color: lightgray;" readonly>
				</td>
			</tr>
			<tr>
				<td width="22%">تعداد درخواستی</td>
				<td width="78%">
					<input type="text" id="pro_req" name="pro_req" onChange="calc_price();">
				</td>
			</tr>
			<tr>
				<td width="22%">قیمت واحد</td>
				<td width="78%">
					<input type="text" id="pro_price" name="pro_price" 
					 value="<?php echo($row['pro_price']); ?>" style="background-color: lightgray;" readonly>
					 تومان
				</td>
			</tr>
			<tr>
				<td width="22%">مبلغ قابل پرداخت </td>
				<td width="78%">
					<input type="text" id="total_price" name="total_price" style="background-color: lightgray;" 
					  readonly >
					 تومان
				</td>
			</tr>
			<script type="text/javascript">
			   function calc_price(){
				   var pro_qty=<?php echo($row['pro_qty']); ?> ;//موجودی انبار
				   var price=document.getElementById('pro_price').value;
				   var count=document.getElementById('pro_req').value;//تعداد سفارش کاربر
				   var total_price;
				   if(count > pro_qty){ //اگر تعداد درخواستی کاربر بیشتر از موجودی کتابخانه یا انبار باشد 
					   alert("تعداد موجودی کافی نیست");
					   document.getElementById('pro_req').value=0;
					   count=0;
				   }
				   if(count == 0 || count =='')
					   total_price=0;
				      else 
						  total_price = count * price ;
				 document.getElementById('total_price').value= total_price; 
			   
			   }
			</script>
             <?php
			  		$link=mysqli_connect("localhost","root","","shop");
                    $query="SELECT * FROM users WHERE username='{$_SESSION['username']}'";//دسترسی به رکورد مشخصات کاربر لاگ این شده
                   $result=mysqli_query($link,$query);
                 $user_row=mysqli_fetch_array($result);
            ?>
            <tr>
            	<td><br><br></td> <!--   ایجاد فضای خالی!-->
            	<td></td>
            </tr>
            <tr>
            	<td width="22%">نام خریدار</td>
            	<td width="78%"><input type="text" id="realname" name="realname" readonly 
            	value="<?php echo($user_row['realname']); ?>" style="background-color: lightgray;"></td>
            </tr>
            <tr>
            	<td width="40%">پست الکترونیک </td>
            	<td width="60%">
            		<input type="text" id="email" name="email" readonly value="<?php echo($user_row['email']);?>"
            		style="background-color: lightgray;">
            	</td>
            </tr>
            <tr>
            	<td width="40%">تلفن همراه</td>
            	<td width="60%">
            		<input type="text" id="mobile" name="mobile"  value="09">
            	</td>
            </tr>
            <tr>
            	<td width="40%">آدرس دقیق پستی  جهت دریافت لباس</td>
            	<td width="60%">
            		<textarea id="address" name="address" cols="30" rows="3" 
            		style="font-family: tahoma;text-align: right;" wrap="virtual"></textarea>
            	</td>
            </tr>
            <tr>
            	<td><br></td>
            	<td>
            		<input type="button" value="خرید لباس" onClick="check_input();" style=""> <!-- دکمه خرید کتاب!-->
            		<br><br>
            	</td>
            </tr>
		</table>
		<script type="text/javascript">
		   function check_input(){ //تابع اعتبار سنجی ورود آدرس و موبایل و..
			   var r = confirm("صحت اطلاعات وارد شده را تائید می نمائید؟");
			   if (r == true){
				   var validation=true;
				   var count=document.getElementById('pro_req').value;//تعداد درخواستی
				   var mobile=document.getElementById('mobile').value;
				   var address=document.getElementById('address').value;
				   if(count==0 || count=='')
					   validation=false;
					  
				   if(mobile.length<11)
					   validation=false;
				   if(address.length<15)
					   validation=false;
			   }
				   if(validation==true)
					   document.order.submit();
				     else
						window.alert("لطفا اطلاعات سفارش محصول را کامل وارد نمایید");
			   
		   }
		</script>
  	</td>
  	<td>
  		 <table dir="rtl" style="margin:0px 20px 0px; text-align: center; width: 80%;"><!--  جدول تصویر کتاب و مشخصات!-->
                <tr>
	              <td style="border: rgba(163,128,141,1.00) inset 3px; border-radius: 20px;" >
	          ** مشخصات لباس **
	             	<h4><span style="color:#2d4585 ;"><?php echo($row['pro_name']);?></span></h4> <!-- درج نام کتاب!-->
		            <img src="images/products/<?php echo($row['pro_image']); ?>" width="250px" height="300px" style="border-radius: 20px; box-shadow: 1px 3px 8px 4px rgba(96,95,95,1.00);"><br><br> <!--  درج تصویر کتاب!-->
		           قیمت&nbsp;:&nbsp;<?php echo($row['pro_price']); ?>&nbsp;&nbsp;تومان<br>
		            موجودی&nbsp;:&nbsp;<?php echo($row['pro_qty']); ?><br>
		            توضیحات: <?php  echo(substr($row['pro_detail'],0,200));  ?>...
		            <br><br>
	             </td>
                 
                  </tr>
	
              </table> <!--  جدول مشخصات کتاب !-->
  	</td>
 </tr><!-- سطر اول جدول بزرگ !-->
 
  </table><!-- جدول حاوی پس زمینه کتابخانه!-->
</form>
</div>
<?php
 } //بستن if که رکوردهای کتاب را واکشی می کرد

  include("includes/footer.php");
?>