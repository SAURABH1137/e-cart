<?php
    include("../links.html");
	include("../connection/index.php");
?>
<html>
    <head>
    <title>E-cart</title>
    </head>
    <body>
		<div class="container col-lg-4 p-3 mt-4 shadow-lg rounded text-black opct">	
			<form action="#" method="post" >
				<h5 class="mb-2">CREATE AN ACCOUNT</h5><hr>
				<div class="col mt-2">
					<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
				</div>
				<div class="col mt-2">
					<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
				</div>
				<div class="col mt-2">
					<input type="text" name="add" id="add" class="form-control" placeholder="Enter Address">
				</div>
				<div class="col mt-2">
					<input type="tel" name="mnumber" id="mnumber" class="form-control" placeholder="Enter Mobile Number">
				</div>
				<div class="col mt-2">
					<input type="date" name="qualification" id="quali" class="form-control" placeholder="Enter Date of Birth">
				</div>
				<div class="col mt-2">
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
				</div>
				<div class="col mt-2">
					<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="confirm password">
				</div>
				<div class="col mt-2">
					Male <input type="radio" name="gender"  value ="Male" class="form-group" checked>
					Female <input type="radio" name="gender"  value ="Female" class="form-group">
				</div>
				<div class="col mt-2">
					<input type="submit" value="Create Account"  name="submit" class=" btn btn-primary">
					<a href="http://localhost:8080/e-cart/"><button type="button" class="btn btn-warning"><< Back to Login</button></a>
				</div> 
			</form>
		</div>
    </body>
	<script src="http://localhost:8080/e-cart/javascript/sweet.js"></script>
</html>
<?php
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$email = $_POST['email'];
		$image = "http://localhost:8080/e-cart/img/admin.png";
		$add = $_POST['add'];
		$mnumber = $_POST['mnumber'];
		$quali = $_POST['qualification'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$gender = $_POST['gender'];
		if(!empty($username) && !empty($password)){
			if($password==$cpassword){
				$query = "select * from userlogin where username='$username'";
				$result = mysqli_query($conn,$query);
				if($result){
					if(mysqli_num_rows($result)>0){
							echo "<script>swal('This Username Already exists.. Please try another username!')</script>";
					}else{
						$query = "insert into userlogin values('default','$username','$password','$email','$add','$mnumber','$gender','$quali','$image')";
						$result = mysqli_query($conn,$query);
						if($result){
                            session_start();
                            $username = $_SESSION['username'];
							echo  "<script>swal('Good job!', 'User Registered Successfully..!', 'success');</script>";
                            echo "<script>window.location.href = 'http://localhost:8080/e-cart/';</script>";
						}
					}
				}else{
					echo "<script>swal('DB error')</script>";
				}
			}else{
				echo "<script>swal('Password and Confirm Password do not match')</script>";
			}		
		}else{
			echo "<script>swal('All Fields Are Required..!')</script>";
		}
	}
?>