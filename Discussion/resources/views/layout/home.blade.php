<!DOCTYPE html>
<html>
<head>
	<title>Learning Center</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
	<style type="text/css">
		.block-link>p{
			font-size: 13px;
		}
	</style>
</head>
<body>
<header>
	<nav class="navbar navbar-menu navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="button1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-home"></span></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav menu-nav">
					<li><a href="">danh mục</a></li>
					<li><a href="{{asset('posts')}}">bài viết</a></li>
					<li><a href="">thành viên</a></li>
					<li><a href="{{asset('share')}}">chia sẻ kinh nghiệm</a></li>
					<li><a href="">liên lạc</a></li>
					<!-- <li><a href=""></a></li> -->
				</ul>
				<form class="navbar-form navbar-right">
		      		<div class="form-group">
			        	<input type="text" class="form-control" placeholder="Search">
			      	</div>
			      	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		    	</form>
				<ul class="nav navbar-nav navbar-right" id="myLogin">					
					<li><a href="{{asset('register')}}"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
					<li><a href="{{asset('login')}}"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
				</ul>
			</div>			
		</div>
	</nav>
</header>
<div id="page">
	<section>
		<div class="container">
			<img src="{{url('public/img/truongmamnon.jpg')}}" style="height: 400px; width: 1140px;">
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-6">
					
				</div>
				<div class="col-md-3">
					
				</div>
			</div>
			<div class="row" style="padding-top: 50px;">
				<div class="col-md-9 subject">
					<div class="subject1_8"><a href="">Toán</a></div>
					<div class="subject1_8"><a href="">Văn</a></div>
					<div class="subject1_8"><a href="">Tiếng anh</a></div>
					<div class="subject1_8"><a href="">Vật lý</a></div>
					<div class="subject1_8"><a href="">Hóa học</a></div>
					<div class="subject1_8"><a href="">Sinh học</a></div>
					<div class="subject1_8"><a href="">Lịch sử</a></div>
					<div class="subject1_8"><a href="">Địa lý</a></div>
				</div>
				<div class="col-md-3">
					<div class="media">
						<div class="media-left media-top">
					  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 60px; float: left; margin-right: 10px; height: 60px;">
						</div>
						<div class="media-body">
							<div class="owner-profile" style="font-size: 12px;">
								<h4 class="media-heading"><a href="" style="text-decoration: none; font-size: 13px;">Le Thi Huyen Tram</a></h4>
								<p>Lớp: 9A4<br>
								Trường: THCS Thanh Xuân Nam</p>
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="content-box">
						<div class="content-title">
							<a href="">Giúp tôi giải toán</a>
						</div>
						<div class="feature">
							<div class="scroll">
								<div class="alert">Học thầy chẳng tày học bạn<a href="" style="color: #fff; font-size: 12px;" class="btn btn-warning btn-small btn-close">Gửi câu hỏi</a></div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Le Thi Huyen Tram</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho tam giác ABC vuông tại A. Về phía ngoài tam giác ABC, vẽ hai tam giác vuông cân ADB ( DA=DB) và ACE(EA=EC). Gọi M là trung điểm của BC, I là giao điểm của DM với AB, K là giao điểm của EM với AC. Chứng minh : </p>
													<p>a) ba điểm D, A, E thẳng hàng </p>
													<p>b)Tứ giác IAKM là hình chữ nhật </p>
													<p>c)Tam giác DME là tam giác vuông cân </p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar2.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Trần Thùy</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho ba điểm A, B, C cố định nằm trên một đường thẳng và theo thứ tự đó. Đường tròn (O) thay đổi luôn đi qua B và C. Từ A kẻ các tiếp tuyến AM và AN với đường tròn (O) (M, N là hai tiếp điểm). Đường thẳng MN cắt AO tại H, gọi E là trung điểm của BC. Chứng minh rằng khi đường tròn (O) thay đổi, tâm của đường tròn ngoại tiếp tam giác OHE nằm trên một đường tròn cố định</p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="content-box">
						<div class="content-title">
							<a href="">Văn học</a>
						</div>
						<div class="feature">
							<div class="scroll">
								<div class="alert">Học thầy chẳng tày học bạn<a href="" style="color: #fff; font-size: 12px;" class="btn btn-warning btn-small btn-close">Gửi câu hỏi</a></div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Le Thi Huyen Tram</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho tam giác ABC vuông tại A. Về phía ngoài tam giác ABC, vẽ hai tam giác vuông cân ADB ( DA=DB) và ACE(EA=EC). Gọi M là trung điểm của BC, I là giao điểm của DM với AB, K là giao điểm của EM với AC. Chứng minh : </p>
													<p>a) ba điểm D, A, E thẳng hàng </p>
													<p>b)Tứ giác IAKM là hình chữ nhật </p>
													<p>c)Tam giác DME là tam giác vuông cân </p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar2.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Trần Thùy</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho ba điểm A, B, C cố định nằm trên một đường thẳng và theo thứ tự đó. Đường tròn (O) thay đổi luôn đi qua B và C. Từ A kẻ các tiếp tuyến AM và AN với đường tròn (O) (M, N là hai tiếp điểm). Đường thẳng MN cắt AO tại H, gọi E là trung điểm của BC. Chứng minh rằng khi đường tròn (O) thay đổi, tâm của đường tròn ngoại tiếp tam giác OHE nằm trên một đường tròn cố định</p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6" >
					<div class="content-box">
						<div class="content-title">
							<a href="">Giúp tôi giải toán</a>
						</div>
						<div class="feature">
							<div class="scroll">
								<div class="alert">Học thầy chẳng tày học bạn<a href="" style="color: #fff; font-size: 12px;" class="btn btn-warning btn-small btn-close">Gửi câu hỏi</a></div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Le Thi Huyen Tram</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho tam giác ABC vuông tại A. Về phía ngoài tam giác ABC, vẽ hai tam giác vuông cân ADB ( DA=DB) và ACE(EA=EC). Gọi M là trung điểm của BC, I là giao điểm của DM với AB, K là giao điểm của EM với AC. Chứng minh : </p>
													<p>a) ba điểm D, A, E thẳng hàng </p>
													<p>b)Tứ giác IAKM là hình chữ nhật </p>
													<p>c)Tam giác DME là tam giác vuông cân </p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar2.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Trần Thùy</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho ba điểm A, B, C cố định nằm trên một đường thẳng và theo thứ tự đó. Đường tròn (O) thay đổi luôn đi qua B và C. Từ A kẻ các tiếp tuyến AM và AN với đường tròn (O) (M, N là hai tiếp điểm). Đường thẳng MN cắt AO tại H, gọi E là trung điểm của BC. Chứng minh rằng khi đường tròn (O) thay đổi, tâm của đường tròn ngoại tiếp tam giác OHE nằm trên một đường tròn cố định</p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="content-box">
						<div class="content-title">
							<a href="">Văn học</a>
						</div>
						<div class="feature">
							<div class="scroll">
								<div class="alert">Học thầy chẳng tày học bạn<a href="" style="color: #fff; font-size: 12px;" class="btn btn-warning btn-small btn-close">Gửi câu hỏi</a></div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Le Thi Huyen Tram</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho tam giác ABC vuông tại A. Về phía ngoài tam giác ABC, vẽ hai tam giác vuông cân ADB ( DA=DB) và ACE(EA=EC). Gọi M là trung điểm của BC, I là giao điểm của DM với AB, K là giao điểm của EM với AC. Chứng minh : </p>
													<p>a) ba điểm D, A, E thẳng hàng </p>
													<p>b)Tứ giác IAKM là hình chữ nhật </p>
													<p>c)Tam giác DME là tam giác vuông cân </p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar2.jpg')}}" class="media-object avatar" style="width: 40px; float: left; margin-right: 5px; height: 40px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;">Trần Thùy</a></h4>
											
										</div>
										<div class="question-content">
											<div class="q-block">
												<!-- <a href="#"></a> -->
												<div class="block-link" style="font-size: 14px;">
													<p>Cho ba điểm A, B, C cố định nằm trên một đường thẳng và theo thứ tự đó. Đường tròn (O) thay đổi luôn đi qua B và C. Từ A kẻ các tiếp tuyến AM và AN với đường tròn (O) (M, N là hai tiếp điểm). Đường thẳng MN cắt AO tại H, gọi E là trung điểm của BC. Chứng minh rằng khi đường tròn (O) thay đổi, tâm của đường tròn ngoại tiếp tam giác OHE nằm trên một đường tròn cố định</p>
												</div>
												
												<!-- <span class="show-more"></span> -->
											</div>					
										</div>
										<div class="tag-small">
											<span class="tag-9">
												<a href="#" style="font-size: 12px;">Toán lớp 9</a>
											</span>
											<span style="margin-left: 250px;">
												<a href="" style="text-decoration: none; text-align: right; margin-top: 5px; padding: 3px; color: #090; font-size: 13px;">3 câu trả lời</a>
												<a href="" class="btn btn-success" style="margin-left: 5px; font-size: 12px;">Trả lời</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6" >
					<div class="content-box">
						<div class="content-title">
							<a href="">Thông tin -sự kiện</a>
						</div>
						<div class="feature">
							<div class="scroll">
								<!-- <div class="alert">Học thầy chẳng tày học bạn<a href="" style="color: #fff; font-size: 12px;" class="btn btn-warning btn-small btn-close">Gửi câu hỏi</a></div> -->
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 120px; float: left; margin-right: 20px;">
									</div>
									<div class="media-body">
										<div class="owner-profile">
											<h4 class="media-heading"><a href="" style="text-decoration: none;     font-size: 22px; color: #090; font-family: 'Segoe UI', sans-serif; line-height: 30px; margin: 5px 0px;">Bổ sung các chức năng cho giáo viên</a></h4>
											<p>Giáo viên có thể trả lời những câu hỏi mà học sinh quan tâm nhất</p>
										</div>
									</div>
								</div>
								<div class="question-content">
									<div class="q-block">
										<!-- <a href="#"></a> -->
										<div class="block-link" style="font-size: 14px; color: #090;">
											<ul>
												<li><a href="">Hãy kết bạn giúp nhau giải toán</a></li>
											</ul>
											<ul>
												<li><a href="">Giải thưởng cho các thành viên tích cực</a></li>
											</ul>
											
										</div>
										
										<!-- <span class="show-more"></span> -->
									</div>					
									<div class="tag-small">
										<!-- <span class="tag-9">
											<a href="#" style="font-size: 12px;">Toán lớp 9</a>
										</span> -->
										<span>
											<a href="" class="btn btn-info" style="font-size: 12px; margin-left: 230px; margin-top: 10px";>Xem thêm sự kiện</a>
										</span>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-6">
					<div class="content-box">
						<div class="content-title">
							<a href="">Thông tin về Learning Center</a>
						</div>
						<div class="feature">
							<div class="scroll">
								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 90px; float: left; margin-right: 10px;">
									</div>
									<div class="media-body">
										<h4>Điện thoại hỗ trợ</h4>
										<p>0935 197672 hoặc 0915 343532</p>
									</div>
								</div>

								<div class="media">
									<div class="media-left media-top">
								  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 90px; float: left; margin-right: 10px;">
									</div>
									<div class="media-body">
										<h4>Địa chỉ liên hệ</h4>
										<p>P.602 Nhà K1, Trường Đại học Sư phạm Hà Nội - Số 136 Xuân Thủy, Quận Cầu Giấy, Tp. Hà Nội. Email: ...</p>
									</div>
								</div>
								<div class="connect">
									<p style="padding-left: 50px;">Đang online: 1095, số thành viên 1288119</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>			
	</section>
</div>
<footer>
	<div id="carousel">
		<div class="btn-bar">
			<div id="buttons"><a href="#" id="prev"><</a><a href="#" id="next" href="#">></a></div>
		</div>
		<div id="slides">
			<ul>
				<li class="slide">
					<div class="quoteContainer">
						<h2 class="quote-phrase"><span class="quote-marks">"</span>Với Learning Center </br>Học mà như chơi, chơi mà vẫn học<span class="quote-marks">"</span></h2>
					</div>
				</li>
				<li class="slide">
					<div class="quoteContainer">
						<h2 class="quote-phrase"><span class="quote-marks">"</span>Mỗi một ngày học </br> Là một ngày vui<span class="quote-marks">"</span></h2>
					</div>
				</li>
				<li class="slide">
					<div class="quoteContainer">
						<h2 class="quote-phrase"><span class="quote-marks">"</span>Không có học trò dốt </br> Mà chỉ không biết học hỏi lẫn nhau<span class="quote-marks">"</span></h2>
					</div>
				</li>
			</ul>
		</div>
	</div>
</footer>

<script src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/home.js')}}"></script>
</body>
</html>