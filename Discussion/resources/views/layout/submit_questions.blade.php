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
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/submit.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/css/editor.css')}}"> -->	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<div id="EDITOR">
							<h4>Nhập câu hỏi vào khung soạn thảo dưới đây: </h4>
							<div class="clearfix"></div>
							<textarea id="question_tab" name="question-tab" style="visibility: hidden; display: none;"></textarea>
							<div id="cke_question_tab" class="cke_1 cke cke_reset cke_chrome cke_editor_question_tab cke_ltr cke_brower_webkit" dir="ltr" lang="vi" role="application" aria-labelledby="cke_question_tab_arialbl">
								<span id="cke_question_tab_arialbl" class="cke_voice_label">Bộ soạn thảo văn bản có định dạng, question_tab</span>
								<div class="cke_inner cke_reset" role="presentation">
									<span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;">
										<span id="cke_6" class="cke_voice_label">Thanh công cụ</span>
										<span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_6" onmousedown="return false;">
											<span id="cke_7" class="cke_toolbar" aria-labelledby="cke_7_label" role="toolbar">
												<span id="cke_7_label" class="cke_voice_label">Chèn</span>
												<span class="cke_toolbar_start"></span>
												<span class="cke_toolgroup" role="presentation">
													<a id="cke_8" class="cke_button cke_button__image  cke_button_off" href="javascript:void('Hình ảnh')" title="Hình ảnh" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_8_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(0,event);" onfocus="return CKEDITOR.tools.callFunction(1,event);" onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image: url(https://olm.vn/media/cke6/plugins/mathq/icons/mathq.png?t=15) ;background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_8_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Hình ảnh</span></a>

													<a id="cke_9" class="cke_button cke_button__mathq  cke_button_off" href="javascript:void('Toán')" title="Toán" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_9_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(3,event);" onfocus="return CKEDITOR.tools.callFunction(4,event);" onclick="CKEDITOR.tools.callFunction(5,this);return false;"><span class="cke_button_icon cke_button__mathq_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/mathq/icons/mathq.png?t=15);background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_9_label" class="cke_button_label cke_button__mathq_label" aria-hidden="false">Toán</span></a>

													<a id="cke_10" class="cke_button cke_button__svgedit  cke_button_off" href="javascript:void('Chèn hình ảnh Vector')" title="Chèn hình ảnh Vector" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_10_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(6,event);" onfocus="return CKEDITOR.tools.callFunction(7,event);" onclick="CKEDITOR.tools.callFunction(8,this);return false;"><span class="cke_button_icon cke_button__svgedit_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/svgedit/icons/svgedit.png?t=15);background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_10_label" class="cke_button_label cke_button__svgedit_label" aria-hidden="false">Chèn hình ảnh Vector</span></a>

													<a id="cke_11" class="cke_button cke_button__table  cke_button_off" href="javascript:void('Bảng')" title="Bảng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(9,event);" onfocus="return CKEDITOR.tools.callFunction(10,event);" onclick="CKEDITOR.tools.callFunction(11,this);return false;"><span class="cke_button_icon cke_button__table_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/table/icons/table.png?t=15);background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_11_label" class="cke_button_label cke_button__table_label" aria-hidden="false">Bảng</span></a>

													<a id="cke_12" class="cke_button cke_button__horizontalrule  cke_button_off" href="javascript:void('Chèn đường phân cách ngang')" title="Chèn đường phân cách ngang" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(12,event);" onfocus="return CKEDITOR.tools.callFunction(13,event);" onclick="CKEDITOR.tools.callFunction(14,this);return false;"><span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -288px;background-size:auto;">&nbsp;</span><span id="cke_12_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">Chèn đường phân cách ngang</span></a>
												</span>
												<span class="cke_toolbar_end"></span>
											</span>
											<span id="cke_13" class="cke_toolbar" aria-labelledby="cke_13_label" role="toolbar">
												<span id="cke_13_label" class="cke_voice_label">Kiểu cơ bản</span>
												<span class="cke_toolbar_start"></span>
												<span class="cke_toolgroup" role="presentation"><a id="cke_14" class="cke_button cke_button__strike  cke_button_off" href="javascript:void('Gạch xuyên ngang')" title="Gạch xuyên ngang" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(15,event);" onfocus="return CKEDITOR.tools.callFunction(16,event);" onclick="CKEDITOR.tools.callFunction(17,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Gạch xuyên ngang</span></a><a id="cke_15" class="cke_button cke_button__subscript  cke_button_off" href="javascript:void('Chỉ số dưới')" title="Chỉ số dưới" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(18,event);" onfocus="return CKEDITOR.tools.callFunction(19,event);" onclick="CKEDITOR.tools.callFunction(20,this);return false;"><span class="cke_button_icon cke_button__subscript_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -72px;background-size:auto;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__subscript_label" aria-hidden="false">Chỉ số dưới</span></a><a id="cke_16" class="cke_button cke_button__superscript  cke_button_off" href="javascript:void('Chỉ số trên')" title="Chỉ số trên" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(21,event);" onfocus="return CKEDITOR.tools.callFunction(22,event);" onclick="CKEDITOR.tools.callFunction(23,this);return false;"><span class="cke_button_icon cke_button__superscript_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -96px;background-size:auto;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__superscript_label" aria-hidden="false">Chỉ số trên</span></a><a id="cke_17" class="cke_button cke_button__olm_overline  cke_button_off" href="javascript:void('Nét gạch trên đầu')" title="Nét gạch trên đầu" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(24,event);" onfocus="return CKEDITOR.tools.callFunction(25,event);" onclick="CKEDITOR.tools.callFunction(26,this);return false;"><span class="cke_button_icon cke_button__olm_overline_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/removeformat/icons/overline.png?t=15);background-position:0 undefinedpx;background-size:16px;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__olm_overline_label" aria-hidden="false">Nét gạch trên đầu</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_18" class="cke_button cke_button__removeformat  cke_button_off" href="javascript:void('Xoá định dạng')" title="Xoá định dạng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(27,event);" onfocus="return CKEDITOR.tools.callFunction(28,event);" onclick="CKEDITOR.tools.callFunction(29,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/removeformat/icons/removeformat.png?t=15);background-position:0 0px;background-size:16px;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Xoá định dạng</span></a></span>

												<span class="cke_toolbar_end"></span>
											</span>
											<span id="cke_19" class="cke_toolbar" aria-labelledby="cke_19_label" role="toolbar">
												<span id="cke_19_label" class="cke_voice_label">Đoạn</span>
												<span class="cke_toolbar_start"></span>
												<span class="cke_toolgroup" role="presentation"><a id="cke_20" class="cke_button cke_button__numberedlist  cke_button_off" href="javascript:void('Chèn/Xoá Danh sách có thứ tự')" title="Chèn/Xoá Danh sách có thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(30,event);" onfocus="return CKEDITOR.tools.callFunction(31,event);" onclick="CKEDITOR.tools.callFunction(32,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -576px;background-size:auto;">&nbsp;</span><span id="cke_20_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Chèn/Xoá Danh sách có thứ tự</span></a><a id="cke_21" class="cke_button cke_button__bulletedlist  cke_button_off" href="javascript:void('Chèn/Xoá Danh sách không thứ tự')" title="Chèn/Xoá Danh sách không thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_21_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(33,event);" onfocus="return CKEDITOR.tools.callFunction(34,event);" onclick="CKEDITOR.tools.callFunction(35,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -528px;background-size:auto;">&nbsp;</span><span id="cke_21_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Chèn/Xoá Danh sách không thứ tự</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_22" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Dịch ra ngoài')" title="Dịch ra ngoài" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(36,event);" onfocus="return CKEDITOR.tools.callFunction(37,event);" onclick="CKEDITOR.tools.callFunction(38,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -384px;background-size:auto;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Dịch ra ngoài</span></a><a id="cke_23" class="cke_button cke_button__indent cke_button_disabled" href="javascript:void('Dịch vào trong')" title="Dịch vào trong" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(39,event);" onfocus="return CKEDITOR.tools.callFunction(40,event);" onclick="CKEDITOR.tools.callFunction(41,this);return false;" aria-disabled="true"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url(https://olm.vn/media/cke6/plugins/icons.png?t=E4KA);background-position:0 -336px;background-size:auto;">&nbsp;</span><span id="cke_23_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Dịch vào trong</span></a></span>
												<span class="cke_toolbar_end"></span>
											</span>
										</span>
									</span>
									<div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 300px;">
										<span id="cke_26" class="cke_voice_label">Nhấn ALT + 0 để được giúp đỡ</span>
										<iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" title="Bộ soạn thảo văn bản có định dạng, question_tab" aria-describedby="cke_26" tabindex="0" allowtransparency="true" style="width: 100%; height: 100%;"></iframe>
									</div>
								</div>
							</div>
							<br>
							<h4>Lớp: </h4>
							<select id="grade">
								<option value="0">Chọn lớp...</option>
								<option value="1">Lớp 1</option>
								<option value="2">Lớp 2</option>
								<option value="3">Lớp 3</option>
								<option value="4">Lớp 4</option>
								<option value="5">Lớp 5</option>
								<option value="6">Lớp 6</option>
								<option value="7">Lớp 7</option>
								<option value="8">Lớp 8</option>
								<option value="9">Lớp 9</option>
							</select>
							<h4>Chuyên mục (không bắt buộc):</h4>
							<input type="text" value id=" tags" name="" style="display: none;">
							<div class="bootstrap-tagsinput">
								<input type="text" size="1" placeholder>
							</div>
							<p>Chúng tôi sẽ gửi tin nhắn cho bạn ngay khi có ai đó trả lời câu hỏi!</p>
							<br>
							<a href="" role="button" class="btn btn-large btn-primary" id="btn-the-same">Tạo câu hỏi</a> &nbsp;&nbsp;
							<span class="loading" style="display: none;">
								<img src="https://olm.vn//images/loading.gif">
									Đang tải dữ liệu...
							</span>
							<div id="status2"></div>
							<div id="status"></div>
							<div class="alert alert-info">
								<div class="media">
									<div class="pull-left">
										<span class="fa fa-exclamation-triangle" style="color: #ff4f00; font-size: 72px; padding-top: 10px; padding-right: 10px;"></span>
									</div>
									<div>
										<h4>LƯU Ý</h4>
										<p>
											Các bạn học sinh
											<b>KHÔNG ĐƯỢC</b>
											 đăng  các câu hỏi không liên quan đến việc học, hoặc các bài linh tinh gây nhiễu diễn đàn. Learning Center có thể áp dụng một số biện pháp như xóa bài, thậm chí khóa vĩnh viễn tài khoản của bạn nếu vi phạm nội quy nhiều lần.
										</p>
										<p>
											Chuyên mục Giúp tôi giải toán dành cho những bạn gặp bài toán khó hoặc có bài toán hay muốn chia sẻ. Bởi vậy các bạn học sinh chú ý không nên gửi bài linh tinh, không được có các hành vi nhằm gian lận điểm hỏi đáp như tạo câu hỏi và tự trả lời rồi chọn đúng.
										</p>
										<p>
											Mỗi thành viên được gửi tối đa 
											<b>5</b>
											 câu hỏi trong 1 ngày
										</p>
									</div>
								</div>
							</div>
							<div class="alert alert-success">
								<a href="#" style="color: inherit;">Hướng dẫn soạn thảo các nội dung có công thức toán hoặc có hình vẽ</a>
							</div>
						</div>
						<div class="tab-pane" id="tab4">
						
						</div>
					</div>					
					<div class="tab-pane" id="tab3">
						<p>Dưới đây là những câu hỏi có bài toán hay do Learning Center lựa chọn.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>