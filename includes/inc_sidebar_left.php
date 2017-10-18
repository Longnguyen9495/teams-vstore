<?php 
	if ($login==2){ ?>	

	<!-- option_left -->
	<div class="clearfix"></div>
	<div class="option_left clearfix">
			<ul class="list-group">
				<li class="list-group-item active"><a href="/pages/users">Bảng điều khiển</a></li>
				<li class="list-group-item"><a href="">Bộ sưu tập chiến dịch</a></li>
				<li class="list-group-item"><a href="/pages/users/create-landingpage.php">Tạo mới landing page</a></li>
				<li class="list-group-item"><a href="/pages/users/list-landingpage-available.php">Quản lý danh sách landing page</a></li>
				<li class="list-group-item"><a href="/pages/users/history-transaction.php">Thống kê tài chính</a></li>
				<li class="list-group-item"><a href="/pages/users/setting-account.php">Thiết lập thông tin</a></li>
			</ul>
	</div>		
	<!-- end option_left -->
<?php } else if($login==1) { ?>
	<!-- option_left -->
	<div class="clearfix"></div>
	<div class="option_left clearfix">
		<ul class="list-group">
			<li class="list-group-item active"><a href="/pages/customer">Đăng tin thuê thiết kế</a></li>
			<li class="list-group-item"><a href="/pages/customer/posted_landingpage.php">Danh sách tin thuê</a></li> 
			<li class="list-group-item"><a href="/pages/customer/list-landingpage-buy.php">Danh sách landing page đã mua</a></li>
			<!-- /vstore/list_landing_buy.php -->
			<li class="list-group-item"><a href="/pages/customer/list-campain.php">Danh sách chiến dịch</a></li>
			<li class="list-group-item"><a href="/pages/customer/config-campain.php">Cấu hình chiến dịch</a></li>
			<li class="list-group-item"><a href="/">Tài chính / Giao dịch</a></li>
			<li class="list-group-item"><a href="/setting-account.php">Thiết lập thông tin hiển thị</a></li>
		</ul>
	</div>
	<!-- end option_left -->
<?php } ?>
