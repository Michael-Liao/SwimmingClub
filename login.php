<!DOCTYPE html>
<html>
<head>
	<title>Log In Page</title>
	<meta charset="UTF-8"></meta>
	<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"></link>
	<link type="text/css" rel="stylesheet" href="css/Style.css">
	<link href="img/icon.png" type="/image/x-icon" rel="Shortcut Icon"></link>
</head>
<body>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/Animation.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div class="container" style="margin-top:200px;border-radius:10px;">
		<h2>Why log in?</h2>
		<p>In order to keep things safe, We set up a password to prevent others from editing. 
		It is crucial that you log in to change any posts.</p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">
  					<span class="glyphicon glyphicon-user"></span>
  				</span>
  				<input type="text" name="name" class="form-control" placeholder="User ID">
			</div><!--User ID-->
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">
  					<img src="img/key.png" style="width:18px;hight:18px;">
  				</span>
  				<input type="text" name="password" class="form-control" placeholder="Password">
			</div><!--passward-->
			<div class="input-group input-group-lg" style="padding:10px">
  				<span class="input-group-addon">
  					<span class="glyphicon glyphicon-envelope"></span>
  				</span>
  				<input type="text" name="password" class="form-control" placeholder="email">
  				<span class="input-group-btn">
        			<button class="btn btn-default" type="submit" value="submit" data-toggle="tooltip" data-placement="bottom" title="GO!">
        				<span class="glyphicon glyphicon-chevron-right"></span>
        			</button>
        		</span>
			</div><!--email-->
		</form>
	</div> <!--container-->
</body>