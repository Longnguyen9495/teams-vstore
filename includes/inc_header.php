<?php 
    if ($login==0){ ?>
    <nav class="navbar navbar-default ui-sortable-handle navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand logo" href="/">
                                <span>V</span>store
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav nav-tabs navbar-nav custome-menu vp-menu">
                    <li class="vp-clone"><a href="#">TƯ VẤN</a></li>
                    <li class="vp-clone"><a href="#">MARKETING ONLINE</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right custome-menu">
                    <li class="vp-clone dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">KHÁCH HÀNG <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu dropdowns">
                            <li class="li_title"><a href="#">Hi , Hưngokata</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Danh sách ưa thích</a></li>
                            <li><a href="">Bộ sưu tập</a></li>
                            <li><a href="">Nạp tiền</a></li>
                            <li><a href="">Tài khoản : 2.000.000 đ</a></li>
                            <li class="li_title"><a href="">Thiết lập tài khoản</a></li>
                            <li><a href="/pages/customer">Bảng điều khiển</a></li>
                            <li><a href="">Danh sách chiến dịch</a></li>
                            <li class="divider lines"></li>
                            <li class="logout"><a href="">Đăng Xuất</a></li>
                        </ul>
                    </li>
                    <li class="vp-clone dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NHÀ THIẾT KẾ <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu dropdowns">
                            <li class="li_title"><a href="#">Hi , Hưngokata</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Doanh thu : 0 đ</a></li>
                            <li><a href="#">Số dư : 0 đ</a></li>
                            <li><a href="">Thông báo</a></li>
                            <li><a href="">Nạp tiền</a></li>
                            <li><a href="">Chuyển tiền</a></li>
                            <li class="li_title"><a href="">Thiết lập tài khoản</a></li>
                            <li><a href="/pages/users">Bảng điều khiển</a></li>
                            <li><a href="">Danh sách landing page</a></li>
                            <li><a href="">Thống kê doanh thu</a></li>
                            <li class="divider lines"></li>
                            <li class="logout"><a href="">Đăng Xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
<?php } else if ($login==1) { ?>
    <nav class="navbar navbar-default ui-sortable-handle navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand logo" href="/">
                                <span>V</span>store
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav nav-tabs navbar-nav custome-menu vp-menu">
                    <li class="vp-clone"><a href="#">TƯ VẤN</a></li>
                    <li class="vp-clone"><a href="/pages/tin-thue-thiet-ke.php">LANDINGPAGE ĐANG THUÊ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right custome-menu">
                    <li><a href="">NẠP TIỀN</a></li>
                    <li><a href="/pages/customer/">ĐĂNG TIN THUÊ THIẾT KẾ</a></li>
                    <li><a href=""><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="/pages/shopping-cart.php">
                        <i class="fa fa-shopping-cart fa-lg" aria-hidden="true" style="margin-right: 5px;"></i>
                        GIỎ HÀNG
                    </a></li>
                    <li class="vp-clone dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user-circle-o fa-lg ava_deve"></i>
                             KHÁCH HÀNG
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdowns">
                            <li class="li_title"><a href="#">Hi , Hưngokata</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Danh sách ưa thích</a></li>
                            <li><a href="">Bộ sưu tập</a></li>
                            <li><a href="">Nạp tiền</a></li>
                            <li><a href="">Tài khoản : 2.000.000 đ</a></li>
                            <li class="li_title"><a href="">Thiết lập tài khoản</a></li>
                            <li><a href="/vstore/customer.php">Bảng điều khiển</a></li>
                            <li><a href="">Danh sách chiến dịch</a></li>
                            <li class="divider lines"></li>
                            <li class="logout"><a href="">Đăng Xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
   </nav>
<?php } else if ($login==2) { ?>
    <nav class="navbar navbar-default ui-sortable-handle navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand logo" href="/"><span>V</span>store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav nav-tabs navbar-nav custome-menu vp-menu">
                    <li class="vp-clone"><a href="#">TƯ VẤN</a></li>
                    <li class="vp-clone"><a href="#">LANDINGPAGE ĐANG THUÊ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right custome-menu">
                    <li><a href="">NẠP TIỀN</a></li>
                    <li><a href="">TẠO LANDING PAGE</a></li>
                    <li><a href=""><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a></li>
                    <li class="vp-clone dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                             <i class="fa fa-user-circle-o fa-lg ava_deve" aria-hidden="true"></i>
                             NHÀ THIẾT KẾ 
                             <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdowns">
                            <li class="li_title"><a href="#">Hi , Hưngokata</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Doanh thu : 0 đ</a></li>
                            <li><a href="#">Số dư : 0 đ</a></li>
                            <li><a href="">Thông báo</a></li>
                            <li><a href="">Nạp tiền</a></li>
                            <li><a href="">Chuyển tiền</a></li>
                            <li class="li_title"><a href="">Thiết lập tài khoản</a></li>
                            <li><a href="/pages/users">Bảng điều khiển</a></li>
                            <li><a href="">Danh sách landing page</a></li>
                            <li><a href="">Thống kê doanh thu</a></li>
                            <li class="divider lines"></li>
                            <li class="logout"><a href="">Đăng Xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
   </nav>
<?php } ?>