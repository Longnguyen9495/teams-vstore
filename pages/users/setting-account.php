<?php 
    $login=2;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                
                <div class="main-content-right col-md-9 pd-right-0">
                    <div class="content-control">
                        <form class="form-horizontal" action="">
                            <legend class="content-information-personal">Thông tin cá nhân</legend>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Tên hiển thị</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="names" placeholder="Tên hiển thị"
                                    name="email">
                                    <a href="" class="form-control-link-icon">
                                        <i class="fa form-control-icon fa-cog" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" action="">
                            <legend>Thông tin liên hệ</legend>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" placeholder="Số điện thoại"
                                    name="email">
                                    <a href="" class="form-control-link-icon">
                                        <i class="fa form-control-icon fa-cog" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Địa chỉ email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" placeholder="Địa chỉ email"
                                    name="email">
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" action="">
                            <legend>Thông tin</legend>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Ngày sinh</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="date" placeholder="Ngày sinh"
                                    name="email">
                                    <a href="" class="form-control-link-icon">
                                        <i class="fa form-control-icon fa-cog active" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Giới tính</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="limit" placeholder="Giới tính"
                                    name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" placeholder=""
                                    name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Nghề nghiệp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="job" placeholder="Nghề nghiệp"
                                    name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-default">Lưu lại</button>
                                    <button type="submit" class="btn btn-primary-cancel">Hủy bỏ</button>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" action="">
                            <legend>Tùy chỉnh đường dẫn mạng xã hội</legend>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="facebook" placeholder="Facebook"
                                    name="email">
                                    <a href="" class="form-control-link-icon">
                                        <i class="fa form-control-icon fa-cog" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Google</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="google" placeholder="Google"
                                    name="email">
                                </div>
                            </div>
                            <legend>Thiết lập bảo mật - mật khẩu</legend>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Google</label>
                                <label class="control-label col-sm-9">******</label>
                            </div>
                        </form>
                        <form class="form-horizontal" action="">
                            <legend>Thiết lập bảo mật - mật khẩu</legend>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Nhà cung cấp dịch vụ</label>
                                <label class="control-label name-control-supplier col-sm-9">Bảo kim</label>
                            </div>
                        </form>
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