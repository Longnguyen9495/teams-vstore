<?php 
	$login=1;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700,900&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="/bundle/app.bundle.min.css">
    <script src="/bundle/app.bundle.min.js"></script>
</head>
<body>
	<section id="container-header-top">
		<?php 
			include "../../includes/inc_header.php"
		 ?>
	</section>
	<section id="container-banner-customer">
		<div class="container">
			<div class="infoUser d-inline-flex col-md-10">
				<div class="d-inline-block avatar">
					<img class="img-thumbnail" src="http://sv1.upsieutoc.com/2017/10/12/wall-designer.jpg">
				</div>
				<div class="d-inline-block info">
					<h1 class="userName text-capitalize">Nguyễn Văn Hưng</h1>
					<p class="text-capitalize">Lập trình viên - <span class="text-uppercase">PHP/javascript</span></p>
					<p class="text-capitalize">level: medium</p>
				</div>
			</div>
			<div class="infoUser-left col-md-2 text-center">
				<p>Số lượng bán</p>
				<span>200</span>
			</div>
		</div>
	</section>
	
	<section class="container-main-user">
		<div class="container panel">
				<div class="row wall-content">
					<div class="sideBar col-md-3">
						<?php 
							include "../../includes/inc_sidebar_left.php";
						 ?>
					</div> 
					<div class="col-md-9" id="form_customer">
							<div class="wrapper_form_customer">
								<form action="" method="POST" class="form-horizontal" role="form">
										
										<div class="form-group">
											<p class="col-md-3 title">Lĩnh vực landing</p>
											<div class="col-md-7">
												<select name="" id="" class="form-control">
														<option value="">Bất động sản vpage</option>
														<option value="">Nhà hàng vpage</option>
														<option value="">Thời trang vpage</option>
												</select>
											</div>				
										</div>
									
										<div class="form-group">
											<p class="col-md-3 title">Tên Landing page</p>
											<div class="col-md-7">
												<input type="text" class="form-control">
											</div>				
										</div>
										
										<div class="form-group">
											<p class="col-md-3 title">Mô tả từng yêu cầu nếu có</p>
											<div class="col-md-7 wrapper_input_file">
													<div>
														<div>
															<textarea name="" rows="4" class="form-control"></textarea>
															<p>Thêm tài liệu đính kèm</p>

<!--															<input type="file" class="input_file">-->
                                                            <div class="col-sm-12 div-button-file-index">
                                                                <button class="button-file-index col-sm-4">+ Tải lên các file</button>
                                                                <div class="col-sm-8 button-file-index-text-p">
                                                                    <p class="sub_input_file ">Định dạng được hỗ trợ : png , jpg , gif , psd , xls , xlsx , doc , docx / tối đa 1Mb</p>
                                                                </div>
                                                            </div>
														</div>
													</div>
													<p class="add_more">
														<a href="" class="btn btn-primary btn-sm">
															<i class="fa fa-plus" aria-hidden="true"></i>
															Thêm Mô Tả
														</a>
													</p>
											</div>				
										</div>
										
										<div class="form-group">
											<p class="col-md-3 title">Hạn nhận thiết kế</p>
											<div class="col-md-7">
												<input type="date" class="form-control">
											</div>				
										</div>

										<div class="form-group">
											<p class="col-md-3 title">Ngân sách dự kiến</p>
											<div class="col-md-7">
												<input type="text" class="form-control">
											</div>				
										</div>

										<div class="form-group">
											<p class="col-md-3 title">Tag giúp bạn tìm kiếm được nhà thiết kế quan tâm</p>
											<div class="col-md-7">
												<textarea name="" rows="4" class="form-control"></textarea>
											</div>				
										</div>

										<div class="form-group">
											<p class="col-md-3">Đồng ý quy định vpage</p>
											<div class="col-md-7 accept_rule">
												<input type="checkbox" class="input_check" style="float: left;">
												<span class="col-md-11">Khi đăng tin thiết kế ,  bạn xác nhận đồng ý các điều khoản sử dụng vpage.vn , và không để lộ bất cứ thông tin liên lạc nào trong phần mô tả công việc <a href="">( Xem thêm )</a></span>
											</div>				
										</div>


										<div class="form-group wrapper_btn_customer">
											<div class="col-sm-12">
												<button type="submit" class="btn btn-primary">Đăng Tin</button>
												<button type="submit" class="btn">Hủy Bỏ</button>
											</div>
										</div>
								</form>
							</div>
					</div>
					<!-- end content -->
				</div>
		</div>
	</section>
	<section id="container-footer">
	    <?php include "../../includes/inc_footer.php"; ?>
	</section>
</body>
</html>