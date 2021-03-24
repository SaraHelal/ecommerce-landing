<?php
    session_start();
        $noNavbar= '';
        $page_title='Login';

    /*if (isset($_SESSION['Username'])){
        header('location:dashboard.php'); // Redirect to Dashboard
    } */
    include 'init.php';
    if ($_SERVER['REQUEST_METHOD']=='POST'){

        $email =$_POST['email'];
        $pass =$_POST['pass'];
        echo $email;
        echo "<br>";
        echo $_POST['pass'];
        echo "<br>";
        $hashed= sha1($_POST['pass']);
        echo $hashed;
        }
    ?>

   <div class="container">
	<hr>
	<h1 class="registerTitle">My account</h1>
	<div class="sign-form d-flex">
		<div class="login">
			<h3 class="mb-4">Login</h3>
			<form class="w-100" action ="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
				 <div class="form-group">
				    <label for="email">Username or Email Address*</label>
				    <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" autocomplete="off" >
				  </div>
				 <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="pass" autocomplete="new-password">
				  </div>
		        <input type="submit" class="btn btn-primary mb-2" value="login"/> 
		          <div class="custom-control custom-checkbox d-inline-block float-right my-2">
				    <input type="checkbox" class="custom-control-input" id="rememberCheck" >
				    <label class="custom-control-label" for="rememberCheck">Remember me</label>
				 </div>
				 <div class="lostPass my-2">
      				<a href="#" >Lost your password?</a>
      			</div>
   	 		</form>
		</div>
		<div class="register">
			<h3 class="mb-4">Register</h3>
			<form class="w-100" action ="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
				 <div class="form-group">
				    <label for="email">Email Address*</label>
				    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" autocomplete="off" >
				  </div>
				 <div class="form-group">
				    <label for="password">Password*</label>
				    <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" >
				  </div>
				  <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
		        <input type="submit" class="btn btn-primary mb-2" value="Register"/>       
   	 		</form>
		</div>
	</div>
</div>
<?php include $tpl . 'footer.php'; ?>