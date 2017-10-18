<?php 
	$login=2;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
					<p class="panel status text-left">
						Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại
					</p>
					<div class="statistical panel clearfix">
						<ul class="col-md-12">
							<li class="d-inline-block text-center col-md-4">
								<p>200</p>
								<p>Xuất bản</p>
							</li>
							<li class="d-inline-block text-center col-md-4">
								<p>200</p>
								<p>Ưa thích</p>
							</li>
							<li class="d-inline-block text-center col-md-4">
								<p>200</p>
								<p>Ghé thăm</p>
							</li>
						</ul>
						<div class="share clearfix col-md-12">
							<span class="d-inline-block col-md-5 text-center">Chia sẻ</span>
							<ul class="d-inline-block col-md-7">
								<li class="d-inline-block"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="d-inline-block"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="d-inline-block"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

					<!-- contact -->
					<div class="clearfix contact panel col-md-12">
						<table>
							<tr>
								<td class="text-left"> Số điện thoại </td>
								<td class="text-right"> ************* </td>
							</tr>
							<tr>
								<td class="text-left"> Email liên hệ </td>
								<td class="text-right"> ************* </td>
							</tr>
							<tr>
								<td class="text-left"> Tổng bán được </td>
								<td class="text-right price"> 20.000.000đ </td>
							</tr>
						</table>
					</div>
					<?php 
						include "../../includes/inc_sidebar_left.php";
					 ?>
				</div>
				<div class="col-md-9" id="list_landing_content">
						<div class="wrapper_list_landing_content">
							<!-- tab -->
							<div class="choice">
							    <ul class="nav nav-pills">
							        <li><a data-toggle="pill" href="#home">Tất Cả</a>
							        </li>
							        <li><a data-toggle="pill" href="#menu1">Được Duyệt</a>
							        </li>
							        <li><a data-toggle="pill" href="#menu2">Chờ duyệt (0)</a>
							        </li>
							        <li><a data-toggle="pill" href="#menu3">Mua Gần Đây (0)</a>
							        </li>
							        <li class="active">
							        		<a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">Lọc Nâng Cao<span class="caret"></span></a>
							        		 <!-- loc -->
							 			    <div class="wrapper_loc dropdown-menu">
							    		<div class="row">

							    				<div class="col-md-4">
							    					<p class="title">Duyệt Landingpage</p>
							    					<form>
														    <div class="radio">
														    	  <label><input type="radio" checked name="optradio">Được Duyệt</label>
														    </div>
														    <div class="radio">
														      	<label><input type="radio" name="optradio">Chờ duyệt (0)</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Cập Nhật Để Duyệt Lại</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Landingpage Trùng</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Vi Phạm Quy Định Vpage</label>
														    </div>
													  </form>
							    				</div>

							    				<div class="col-md-4">
							    					<p class="title">Đặc Tính Landingpage</p>
							    					<form>
														    <div class="radio">
														    	  <label><input type="radio" checked name="optradio">Tất Cả</label>
														    </div>
														    <div class="radio">
														      	<label><input type="radio" name="optradio">Có Giá Bán</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Miễn Phí</label>
														    </div>
													  </form>
							    				</div>

							    				<div class="col-md-4">
							    					<p class="title">Sắp Xếp</p>
							    					<form>
														    <div class="radio">
														    	  <label><input type="radio" checked name="optradio">Mới Thiết Kế</label>
														    </div>
														    <div class="radio">
														      	<label><input type="radio" name="optradio">Xem Nhiều</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Xem Ít</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Mua Nhiều</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Mua Ít</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Giá Cao</label>
														    </div>
														    <div class="radio">
														   	   <label><input type="radio" name="optradio">Giá Thấp</label>
														    </div>
													  </form>
							    				</div>

							    		</div>
							   			 </div>
							   			 <!-- end lọc -->
							        </li>
							        <li>
							        		<input type="text" name="" placeholder="Tìm Kiếm Landing Page">
							        </li>
							    </ul>

							</div>
							<!-- end tab -->

							<!-- bộ sưu tập -->
							<div class="gallery">
								<p class="title">Bộ sư tập chiến dịch :</p>
								<div class="form-group">
							      <select class="form-control" id="sel1">
								        <option>Bất động sản Vpage</option>
								        <option>Nhà Hàng Vpage</option>
								        <option>Thời Trang Vpage</option>
								        <option>Đồ Ăn Vpage</option>
							      </select>
							    </div>
							</div>
							<div class="line"></div>
							<!-- end bố sưu tập -->


							<!-- product -->
							<div class="wrapper_product clearfix">
								<?php 
									for($i =0; $i <10; $i ++) :
								?>
								<div class="product clearfix">
										<input type="checkbox" name="">
										<div class="img_product">
											<img src="http://bietthubiennhatrang.net/wp-content/uploads/2016/07/tien-do-du-an-vinpearl-nha-trang-bay-3.jpg">
										</div>
										<div class="info_product">
											<p class="title">Landing page bất động sản hoa nhài đang được hot</p>
											<p>
												Việc làm khó từ nhân sự tới kỹ năng khiến tôi rất lo lắng cho dự án thành công hay thất bại
											</p>
											<p>
												<span>Lượt xem : 200</span> | 
												<span>Lượt mua : 200</span> |
												<span>200.000 Vnd</span>
											</p>
										</div>
										<div class="status_product">
											<p>
												Trạng Thái : <span>Chưa Bán</span>
											</p>
											<p>Ngày thiết kế : 20/10/2017</p>
											<p>Đánh giá :
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star-o" aria-hidden="true"></i>
											</p>
											<div class="btn_product">
												<a href="/pages/users/sale-landing.php" class="btn btn-primary">Bán Ngay</a>
												<a href="" class="btn btn-basic">Sửa</a>
												<a href="" class="btn btn-basic">Xóa</a>
											</div>
										</div>
								</div>

								<?php if( $i < 9 ): ?>
								<div class="line"></div>
								<?php endif ?>

								<?php 
									endfor;
								 ?>
							</div>
							<!-- end product -->


							<!-- pagination -->
							<div class="wrapper_pagination clearfix">
								<div class="left">
										<input type="checkbox" name="">
										<span>Chọn tất cả | Hiển thị 1-20/ Tổng 200 items.</span>
								</div>
								<div class="right">
										<ul class="pagination">
											  <li><a href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
											  <li><a href="#">1</a></li>
											  <li class="active"><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">8</a></li>
											  <li><a href="#">9</a></li>
											  <li><a href="#">...</a></li>
											  <li><a href="#">60</a></li>
											  <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
										</ul>
								</div>
							</div>
							<!-- end pagination -->

						</div>
				</div>
			</div>
		</div>
	</section>
	<section id="container-footer">
	    <?php include "../../includes/inc_footer.php"; ?>
	</section>
</body>
</html>