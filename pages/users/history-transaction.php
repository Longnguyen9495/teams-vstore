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
                        <div class="form-group">
                            <div class="col-sm-7 col-checkbox-inline">
                                <div class="checkbox row-checkbox-inline">
                                    <label class="checkbox-inline"><input type="checkbox" value="">Bán landing page</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="">Upload landing page</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="">Giao dịch</label>
                                </div>
                            </div>
                            <div class="col-sm-5 form-apply-button">
                                <button type="submit" class="btn btn-default btn-sm">Áp dụng</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <img class="img img-responsive" src="/images/12221.png" alt="">
                        </div>
                        <div class="form-group">
                            <div class="form-table">
                                <h1 class="form-table-heading">Tài khoản - số dư hiện tại - <span>14.000.000<b class="currency">₫</b></span></h1>
                                <p class="form-table-note">Các giao dịch bán landing gần đây</p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Ngày giao dịch</th>
                                            <th>Tên khách hàng</th>
                                            <th>Mô tả</th>
                                            <th>Loại giao dịch</th>
                                            <th>Mã giao dịch</th>
                                            <th>Số tiền thanh toán</th>
                                            <th>Số dư tại thời</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>20/10/2017</td>
                                            <td>Nguyễn Văn Hưng</td>
                                            <td>Mua lading page</td>
                                            <td>Bán landing</td>
                                            <td>#1232323</td>
                                            <td>20.000<b class="currency">₫</b></span></td>
                                            <td>2.000.000<b class="currency">₫</b></span></td>
                                        </tr>
                                        <tr>
                                            <td>20/10/2017</td>
                                            <td>Nguyễn Văn Hưng</td>
                                            <td>Mua lading page</td>
                                            <td>Bán landing</td>
                                            <td>#1232323</td>
                                            <td>20.000<b class="currency">₫</b></span></td>
                                            <td>2.000.000<b class="currency">₫</b></span></td>
                                        </tr>
                                        <tr>
                                            <td>20/10/2017</td>
                                            <td>Nguyễn Văn Hưng</td>
                                            <td>Mua lading page</td>
                                            <td>Bán landing</td>
                                            <td>#1232323</td>
                                            <td>20.000<b class="currency">₫</b></span></td>
                                            <td>2.000.000<b class="currency">₫</b></span></td>
                                        </tr>
                                        <tr>
                                            <td>20/10/2017</td>
                                            <td>Nguyễn Văn Hưng</td>
                                            <td>Mua lading page</td>
                                            <td>Bán landing</td>
                                            <td>#1232323</td>
                                            <td>20.000<b class="currency">₫</b></span></td>
                                            <td>2.000.000<b class="currency">₫</b></span></td>
                                        </tr>
                                        <tr>
                                            <td>20/10/2017</td>
                                            <td>Nguyễn Văn Hưng</td>
                                            <td>Mua lading page</td>
                                            <td>Bán landing</td>
                                            <td>#1232323</td>
                                            <td>20.000<b class="currency">₫</b></span></td>
                                            <td>2.000.000<b class="currency">₫</b></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-table-pagination clearfix">
                            <ul class="pagination">
                                <li><a href="#"> < </a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">60</a></li>
                                <li><a href="#"> > </a></li>
                            </ul>
                        </div>
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
