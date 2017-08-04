<!DOCTYPE html>
<html lang="en">
<head>          
	<title>Learning Center</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/font-awesome.min.css')}}">
	<script src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
    <style type="text/css">
        /*.example{
            margin: 20px;
        }*/
        body {
		    font-family: "Segoe UI","Open sans","Helvatica Neue", sans-serif;
		    font-size: 14px;
		    line-height: 20px;
		    color: #333;
		}
        .nav-tabs > li.active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus{
        	border-top: solid 2px #fc0;
        	color: #3a5795;
        }

        /*.nav-tabs > li.active > a{
        	color: #3a5795;
        }*/

        .nav-tabs > li > a{
			color: #555;
		    font-weight: bold;
		    font-size: 15px;

        }
        .example{
        	margin-bottom: 50px;
        }

        .media > .media-body > .owner-profile> h4.media-heading>a{
        	color: #3a5795;
        	text-decoration: none;
        	font-family: "Segoe UI","Open sans","Helvatica Neue", sans-serif;
		    font-size: 14px;
		    line-height: 20px;
		    font-weight: bold;
        }

        a:hover, a:active{
        	color: #005580;
    		text-decoration: none;
    		outline: 0;
        }
		
		.avatar{
			max-width: 50px;
			max-height: 50px;
		}

		.question-content{
			margin-top: 10px;
		    font-size: 16px;
			line-height: 22px;
			padding-left: 10px;
		}

		.block-link{
			color: #444;
		}

		.media-left, .media>.pull-left {
			padding: 0px;
		}
		
		.tag-small{
			padding-left: 15px;
		}

		.tag-small>span>a {
		    background: #F5FAFF;
		    font-size: 12px;
		    padding: 2px 5px;
		    margin-right: 10px;
		    font-family: "Segoe UI","Open sans","Helvatica Neue", sans-serif;
		}
		a.grade-tag{
			box-shadow: 0px 1px 1px rgba(0,0,0,.1);
			font-size: 18px;
		    line-height: 36px;
		    display: inline-block;
		    margin-bottom: 10px;
		    margin-right: 5px;
    		width: 124px;
		    padding: 3px 0px;
		    text-align: center;
		    background: #fff;
		    border-radius: 4px;
		    border: solid 1px #e0e0e0;
		    border-bottom-color: #c3c3c3;
		}

		.accordion-heading>h4{
			display: block;
		    /*-webkit-margin-before: 1.33em;
		    -webkit-margin-after: 1.33em;
		    -webkit-margin-start: 0px;
		    -webkit-margin-end: 0px;*/
		    font-weight: bold;
		    margin: 5px 0px;
		    font-size: 16px;
			line-height: 25px;
		}

		.accordion-group{
			margin-bottom: 2px;
		    border: 1px solid #e5e5e5;
		    border-radius: 4px;
		}

		#accordion2{
			margin-bottom: 20px;
		}
    </style>
</head>
<body>
    <div class="container">
    	<h2>Giúp tôi giải toán</h2><br/><br/>
		<div class="example">
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nav nav-tabs">
                        	<li class="active"><a href="">Mới nhất</a></li>
                            <li><a href="">Chưa trả lời</a></li>
                            <li><a href="">Câu hỏi hay</a></li>
                            <li><a href="">Câu hỏi tôi quan tâm</a></li>
                            <li><a href="">Câu hỏi của bạn bè</a></li>
                            <li><a href="">Gửi câu hỏi</a></li>
                        </ul>
                    </div>    
                </div>
            <!-- </div> -->
    	</div>
		<div class="row">
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="media">
							<div class="media-left media-top">
						  		<img src="{{asset('public/img/img_avatar1.jpg')}}" class="media-object avatar" style="width: 50px; float: left; margin-right: 10px; height: 50px;">
							</div>
							<div class="media-body">
								<div class="owner-profile">
									<h4 class="media-heading"><a>Duong Pham</a></h4>
									<span style="color: #999; font-size: 11px; ">09/08/2016 lúc 20:44</span>
								</div>
							</div>
						</div>
						<div class="question-content">
							<div class="q-block">
								<!-- <a href="#"></a> -->
								<div class="block-link">
									<p>Cho tam giác ABC vuông tại A. Về phía ngoài tam giác ABC, vẽ hai tam giác vuông cân ADB ( DA=DB) và ACE(EA=EC). Gọi M là trung điểm của BC, I là giao điểm của DM với AB, K là giao điểm của EM với AC. Chứng minh : </p>
									<p>a) ba điểm D, A, E thẳng hàng </p>
									<p>b)Tứ giác IAKM là hình chữ nhật </p>
									<p>c)Tam giác DME là tam giác vuông cân </p>
								</div>
								<p style="color: #999; font-size: 11px; font-style: italic;">Được cập nhật 8 giây trước (10: 21)</p>
								<span class="show-more"></span>
							</div>					
						</div>
						<div class="tag-small">
							<span class="tag-9">
								<a href="#">Toán lớp 9</a>
							</span>
						</div>
						<hr>
						<div class="media">
							<div class="media-left media-top">
						  		<img src="{{asset('public/img/img_avatar2.jpg')}}" class="media-object avatar" style="width: 50px; float: left; margin-right: 10px; height: 50px;">
							</div>
							<div class="media-body">
								<div class="owner-profile">
									<h4 class="media-heading"><a>Nguyễn Tất Thắng</a></h4>
									<span style="color: #999; font-size: 11px; ">07/06/2017 lúc 20:44</span>
								</div>
							</div>
						</div>
						<div class="question-content">
							<div class="q-block">
								<!-- <a href="#"></a> -->
								<div class="block-link">
									<p>Một tàu thủy xuôi dòng một khúc sông mất 5 giờ ,ngược dòng khúc sông đó mất 7 giờ . Tính chiều dài khúc sông biết vận tốc dòng nước 60m/phút</p>
								</div>
								<!-- <p style="color: #999; font-size: 11px; font-style: italic;">Được cập nhật 8 giây trước (10: 21)</p>
								<span class="show-more"></span> -->
							</div>					
						</div>
						<div class="tag-small">
							<span class="tag-8">
								<a href="#">Toán lớp 8</a>
							</span>
						</div>
						<hr>
						<div class="media">
							<div class="media-left media-top">
						  		<img src="{{asset('public/img/img_avatar3.jpg')}}" class="media-object avatar" style="width: 50px; float: left; margin-right: 10px; height: 50px;">
							</div>
							<div class="media-body">
								<div class="owner-profile">
									<h4 class="media-heading"><a>Nguyễn Vân Anh</a></h4>
									<span style="color: #999; font-size: 11px; ">07/06/2017 lúc 23:14</span>
								</div>
							</div>
						</div>
						<div class="question-content">
							<div class="q-block">
								<!-- <a href="#"></a> -->
								<div class="block-link">
									<p>a) Tìm giá trị nhỏ nhất của A= 2|3x-1|-4
									<br>b) Tìm giá trị lớn nhất của B= 10-4(x-2)</p>
								</div>
								<!-- <p style="color: #999; font-size: 11px; font-style: italic;">Được cập nhật 8 giây trước (10: 21)</p>
								<span class="show-more"></span> -->
							</div>					
						</div>
						<div class="tag-small">
							<span class="tag-8">
								<a href="#">Toán lớp 8</a>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="accordion" id="accordion2">
					<div class="accordion-group" style="background: #fff">
						<div class="accordion-heading text-center">
							<h4>
								<a href="#collapseOne" class="accordion-toggle collapsed" style="padding: 3px 15px; color: #3a5795; text-decoration: none;" data-toggle="collapse" data-parent="#accordion2">Danh sách chủ đề</a>
							</h4>
						</div>
						<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
							<div class="accordion-inner x-style">
								<a href="">Đố vui</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
								<a href="">Toán có lời văn</a>
							</div>
						</div>
					</div>
				</div>

				<div class="tags">
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
					<a class="tag-item grade-tag ev-1" href="">Toán lớp 1</a>
				</div>
			</div>
		</div>
    </div>
    <script src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>