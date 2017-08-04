<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập - Tài khoản Google</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/login.css')}}">
</head>
<body>
<!-- <div id="page">
	<div id="form">
		<form>
			
		</form>
	</div>
</div> -->

	<div class="container">
		<img src="{{url('public/img/user.png')}}">
		<form action="">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username">
			</div>

			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password">
			</div>

			<input type="submit" name="submit" value="LOGIN" class="btn-login">
			<br><a href="">Forget password</a>

		</form>
	</div>

<script src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>