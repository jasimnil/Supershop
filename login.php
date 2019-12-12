
<?php  

	if(isset($_SESSION['id'])){
		header("Location: dashboard");
 	}
?>


<?php include 'inc/start.php'; ?>
	
	<?php include 'inc/topnav.php'; ?>
	
	
	
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login.php" method="post">
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Email Address" />
							<button type="submit" name="login" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-2">
					<h2 class="or text-center">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="login.php" method="post">
							<input type="text" name="name" placeholder="Full Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="password" name="password" placeholder="Password"/>
							<button type="submit" name="signup" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	

	
	<?php include 'inc/footer.php'; ?>
	
<?php include 'inc/end.php'; ?>




<?php include 'dashboard/script/login_script.php'; ?>

<?php include 'dashboard/script/signup_script.php'; ?>