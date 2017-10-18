<?php 
    $login=1;
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
                    <?php 
                        include "../../includes/inc_sidebar_left.php";
                     ?>
                </div> 
                <div class="main-content-right col-md-9 pd-right-0">
                    <div class="content-control">
                        <form class="form-horizontal" action="">
                            <div class="form-group form-margin-config-campain">
                                <div class="col-sm-6 form-padding-left">
                                    <div class="col-sm-12 form-group-padding">
                                        <label>Website</label>
                                        <select class="form-control" id="website" name="select">
                                            <option>ellewatchvn.com</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <a class="btn btn_process_add_domain" data-toggle="modal" href="#modal-id">
                                            <i class="fa fa-plus icon-add-popup" aria-hidden="true"></i>
                                        </a>
                                        <div class="modal fade" id="modal-id">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header popup-header-config-campain">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                            ×
                                                        </button>
                                                        <h4 class="modal-title">Thêm mới vào bộ sưu tập chiến dịch</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group input_add_domain" style="display: block;">
                                                            <label class="control-label col-sm-2 ">Website <span class="show_notify_error" style="display: none;"></span>
                                                            </label>
                                                            <div class="input-group col-sm-10 input-modal-config-campain">
                                                                <span class="input-group-addon input-sm">http://</span>
                                                                <input type="text" name="website" class="form-control input-sm" placeholder="Địa chỉ Website">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Thêm mới</button>
                                                        <button type="button" class="btn btn-primary-cancel">Hủy bỏ</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group-padding">
                                        <label>ID Google analytics</label>
                                        <input type="text" class="form-control" id="analytics" placeholder="ID Google analytics" name="email">
                                    </div>
                                    <div class="col-sm-12 form-group-padding">
                                        <label>Chọn landing mặc định khi vào domain của bạn </label>
                                        <select class="form-control" id="sel1" name="select">
                                            <option>Quảng cáo samsung</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-padding-right">
                                    <div class="col-sm-12 form-group-padding">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                    </div>
                                    <div class="col-sm-12 form-group-padding">
                                        <label>ID Facebook Pixel</label>
                                        <input type="text" class="form-control" id="idfacebook" placeholder="ID Google analytics" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-margin-config-campain">
                                <div class="col-sm-12 button-config-campain">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cập nhật
                                    </button>
                                    <button type="button" class="btn btn-primary-cancel">Hủy bỏ</button>
                                </div>
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
