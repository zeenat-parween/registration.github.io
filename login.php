



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'css/style.php' ?>
	<?php include 'links/links.php' ?>
</head>
<body>
 

	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your freee account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>
				Login Via Gmail</a>

				<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i> Login Via facebook</a>
			</p>
			<p class="divider-text"> 
				<span class="bg-light">OR</span>
			</p>
			   
			   	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

                <div class="form-group input-group">
					<div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i></span>
					</div>

                    	<input name="email"  class="form-control" placeholder="Full name" type="email">
				</div>






				<div class="form-group input-group">
					<div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i></span>
					</div>
					<input class="form-control" placeholder="create password" type="password" name="password" value="">
				</div>
				
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login Now </button>
				</div>
				<p class="text-center">Not Have an account? <a href="">signUp Here</a></p>
			</form>
		</article>
	</div>
</div>

</body>
</html>