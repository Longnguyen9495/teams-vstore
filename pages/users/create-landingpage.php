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

    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.3/ace.js"></script>

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
            

            <div class="main-contents col-md-9 pd-right-0">
                <div class="content-control">
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Tên landing page</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="landing page bất động sản" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="sel1">Bộ sưu tập chiến dịch</label>
                            <div class="col-sm-9 checkbox-popup">
                                <select class="form-control" id="sel1" name="select">
                                    <option>Bất động sản vpage</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <a class="btn btn-primary btn-control-popup" data-toggle="modal" href="#modal-id"><i class="fa fa-plus icon-add-popup" aria-hidden="true"></i></a>
                                <div class="modal fade" id="modal-id">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    &times;
                                                </button>
                                                <h4 class="modal-title">Thêm mới vào bộ sưu tập chiến dịch</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="name">Tên chiến dịch</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="name-popup" placeholder="landing page bất động sản" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="sel1">Đường dẫn demo</label>
                                                    <div class="col-sm-9 checkbox-popup">
                                                        <select class="form-control" id="sel1-popup" name="select">
                                                            <option>Bất động sản vpage</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Thêm mới</button>
                                                <button type="button" class="btn btn-primary-cancel">Hủy bỏ</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="text">Thêm landing page</label>
                            <div class="checkbox col-sm-9">
                                <div class="checkbox-input">
                                    <label><input type="radio" name="remember"> Thiết kế trên vpage</label>
                                </div>
                                <div class="checkbox-input">
                                    <label><input type="radio" name="remember"> Upload thiết kế của bạn</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-default">Tiếp tục tạo</button>
                                <button type="submit" class="btn btn-primary-cancel">Hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                    <div class="tab-content-control">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#html">  HTML </a></li>
                            <li><a data-toggle="tab" href="#css"> CSS </a></li>
                            <li><a data-toggle="tab" href="#js" > JAVASCRIPT </a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="html" class="tab-pane fade in active">
                                <div id="htmlEditor" ></div>
                            </div>
                            <div id="css" class="tab-pane fade">
                                <div id="cssEditor"></div>
                            </div>
                            <div id="js" class="tab-pane fade">
                                <div id="jsEditor" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>