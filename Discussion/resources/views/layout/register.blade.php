<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/register.css')}}">
</head>
<body>
<div id="page">
	<div class="container">
		<div id="form">
			<h1>Đăng ký tài khoản mới</h1>
			<div class="alert alert-info" role="alert">Hãy điền đầy đủ các thông tin dưới đây.</div>
			<form>
				<table>
					<tr>
						<td>Tên của bạn: </td>
						<td><input type="text" name="username" class="form-control" placeholder="Họ tên đầy đủ"></td>
					</tr>

					<tr>
						<td>Tên đăng nhập: </td>
						<td><input type="text" name="username" class="form-control" placeholder="Tên đăng nhập mong muốn"></td>
					</tr>
					
					<tr>
						<td>Mật khẩu: </td>
						<td><input type="password" name="password" class="form-control" placeholder="Mật khẩu trên 6 kí tự"></td>
					</tr>
	
					<tr>
						<td>Email hoặc SĐT:  </td>
						<td><input type="text" name="email" class="form-control" placeholder="Nhập email hoặc số điện thoại"></td>
					</tr>
					

				</table>
			

				<div class="note">
					<input type="checkbox" name="thongbao" value="nhanemail" checked="checked">Nhận Email thông báo từ hệ thống
					<div style="margin: 10px 0; color: #314699;"><b>Chú ý:</b> Tài khoản của bạn cần được kích hoạt qua email. Nếu bạn không có email, vui lòng nhập số điện thoại. Nếu bạn nhập địa chỉ email giả, tài khoản của mình sẽ bị khóa.</div>

					<input type="submit" name="register" value="Đăng kí tài khoản" class="btn btn-info" style="margin: 10px 0;">
				</div>	

			</form>

		</div>
	</div>
</div>
<script src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>