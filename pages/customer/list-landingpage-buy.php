<?php 
	$login=1;
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
                    <?php  include "../../includes/inc_sidebar_left.php"; ?>
                </div> 
				<div class="col-md-9" id="list_landing_content">
						<div class="wrapper_list_landing_content">


							<!-- product -->
							<div class="wrapper_product clearfix">

								<div class="product clearfix">
										<div class="img_product">
											<img src="http://bietthubiennhatrang.net/wp-content/uploads/2016/07/tien-do-du-an-vinpearl-nha-trang-bay-3.jpg">
										</div>
										<div class="info_product">
											<p class="title">Landing page bất động sản hoa nhài đang được hot</p>
											<p>
												Việc làm khó từ nhân sự tới kỹ năng khiến tôi rất lo lắng cho dự án thành công hay thất bại
											</p>
											<p class="title-text-all">
												<span>Giá bán : 200.000<b class="currency">₫</b></span> |
												<span>Giao dịch : 20/10/2018</span>
											</p>
										</div>
										<div class="status_product">
											<p>
												Thiết Kế Bởi :<span> Hưng okota</span>
											</p>
											<p>Ngày thiết kế : 20/10/2017</p>
											<div class="btn_product">
												<a href="/pages/customer/add-to-campain.php" class="btn btn-primary">Thêm Tới Chiến Dịch</a>
												<a href="" class="btn btn-basic">Sửa</a>
											</div>
										</div>
								</div>
                                <div class="line"></div>

							</div>
							<!-- end product -->


							<!-- pagination -->
							<div class="wrapper_pagination clearfix">
								<div class="left">
										<span>Hiển thị 1-20/ Tổng 200 items.</span>
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