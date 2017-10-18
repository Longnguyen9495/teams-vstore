<?php 
	$login=2;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				<!-- content -->
					<div class="col-md-9" id="container-list-page-sale-in-wall">
						<!-- content developer controller -->
						<div class="content-list-page-sale-in-wall">
								<!-- tab -->
								<div class="choice">
								    <ul class="nav nav-pills">
								        <li class="active"><a data-toggle="pill" href="#home">Tất Cả</a>
								        </li>
								        <li><a data-toggle="pill" href="#menu1">Mới Nhất (0)</a>
								        </li>
								        <li><a data-toggle="pill" href="#menu2">Mua Nhiều Nhất (0)</a>
								        </li>
								        <li><a data-toggle="pill" href="#menu3">Đánh Giá Tốt Nhất (0)</a>
								       	<li><a data-toggle="pill" href="#menu3">Xem Nhiều</a>
								       	<li><a data-toggle="pill" href="#menu3">Ưa Thích</a>
								    </ul>

								</div>
								<!-- end tab -->

								<!-- product -->
								<div class="wrapper_product">
										<div class="product">
												<div class="row">

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

												</div>
										</div>
				
										<div class="product">
												<div class="row">

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

												</div>
										</div>

										<div class="product">
												<div class="row">

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

														<div class="col-md-4">
																<div class="wrapper_img">
																		<img src="https://du-lich.chudu24.com/f/m/1604/14/vinpearl-nha-trang-bay-resort-villas-building-4.jpg?w=800&h=500" alt="">
																</div>
																<p class="title">Bất động sản vinpearl tại đà nẵng đăng được triển khai tại trụ sở ...</p>
																<p class="rate">
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star" aria-hidden="true"></i>
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																		<span>210</span>
																</p>
																<p>Việc làm khó từ nhân sự tới kĩ năng khiến tôi rất lo lắng dự án thành công hay thất bại</p>
																<p class="price">200.000 Vnd</p>
																<p class="other">
																	 <span>
																	 		<img src="http://sv1.upsieutoc.com/2017/10/14/2017-10-12_010621.png" alt="">
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-eye" aria-hidden="true"></i>
																	 		2000
																	 </span>
																	 <span>
																	 		<i class="fa fa-heart" aria-hidden="true"></i>
																	 		2000
																	 </span>
																</p>
														</div>

												</div>
										</div>

								</div>
								<!-- end product -->
						</div>
						<!-- end content developer controller -->

						<!-- pagination -->
						<div class="wrapper_pagination clearfix">
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
	</section>
	<section id="container-footer">
	    <?php include "../../includes/inc_footer.php"; ?>
	</section>
</body>
</html>