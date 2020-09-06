<!DOCTYPE html>
<html>
<head>
	<title>StoryTeller</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#a
	{
		background-image: url(img/11.jpg);
		background-repeat: no-repeat;
		 background-size: cover;
		  background-size: 1360px 500px;
		  

	}

	.glow {
  font-size: 40px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
<body id="a" class="img-responsive">
	   <div class="container">
	      <div class="row">
			        
			        <div class="col-lg-6">
				     
				      <h2>Login form</h1>
				    <form action="validation.php" method="post">
				    	
					<div class="form-group">
					<label>Username</label><br>
					<div class="input-group">

                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" name="user" class="form-control" required placeholder="Username">
				        </div>
				    </div>

					<div class="form-group">
					<label>Password</label><br>

   						 <div class="input-group">
      						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="password" class="form-control" required placeholder="password">
					</div></div>
					<button type="submit" class="btn btn-primary">Login</button>
 
                   </form>
                      </div>
							

					<div class="col-lg-6">
					<h2>Sign up</h1>
				    <form action="registration.php" method="post">
					<div class="form-group">
					<label>Username</label><br>

					<div class="input-group">

                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" name="user" class="form-control" required placeholder="Username">
					</div></div>

					<div class="form-group">
					<label>Password</label><br>

			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" name="password" class="form-control" required placeholder="password">
					</div></div>
					<button type="submit" class="btn btn-primary">sign in</button>
				      </form>
			         </div>



		</div><br>
		<p class="glow">&ldquo;<i>First we have to login or signin</i>&rdquo;</p>

	</div>

</body>
</html>