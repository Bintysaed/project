
<br>

<h2 style="text-align:center; ">Do you really want to DELETE your account?</h2>

<form action="" method="post">

<br>
<input type="submit" name="yes" value="Yes I want" /> 
<input type="submit" name="no" value="No I was Joking" />


</form>

<?php 
include("db.php"); 

	$user = $_SESSION['check_user']; 
	
	if(isset($_POST['yes'])){
	
	$delete_customer = "delete from customers where email='$user'";
	
	$run_customer = mysqli_query($con,$delete_customer); 
	
	echo "<script>alert('We are really sorry, your account has been deleted!')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
	}
	if(isset($_POST['no'])){
	
	echo "<script>alert('oh! be care again!')</script>";
	echo "<script>window.open('my_account.php','_self')</script>";
	
	}
	


?>