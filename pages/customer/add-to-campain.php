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
                        <h3>Tùy chỉnh thông tin landing page của bạn</h3>
                        <form>
                            <fieldset>
                                <legend>Thông tin cơ bản</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Tên landing page của bạn</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" placeholder="Bất động sản trên sàn vpage" name="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix form-group-link-vpage">
                                    <label class="control-label col-sm-4">Đường dẫn</label>
                                    <div class="col-sm-8" class="input-group">
                                        <span class="input-group-addon input-sm sel_domain">http://vpage</span>
                                        <input type="text" name="slug" value="" class="form-control input-sm" placeholder="bat-dong-san-tren-san-vpage">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Bộ sưu tập chiến dịch</label>
                                    <div class="col-sm-8 checkbox-popup">
                                        <select class="form-control" id="bts-chiendich" name="select">
                                            <option>Chiến dịch chim đại bàng get data bđs</option>
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
                                                            ×
                                                        </button>
                                                        <h4 class="modal-title">Thêm mới vào bộ sưu tập chiến dịch</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group form-popup clearfix">
                                                            <label class="control-label col-sm-3" for="name">Tên chiến dịch</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="name-popup" placeholder="landing page bất động sản" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-popup clearfix">
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
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend>Thông tin liên hệ</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Email của bạn</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="email" placeholder="Hungit.hubt@gmail.com" name="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Số điện thoại của bạn</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="telephone" placeholder="01633383630" name="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Họ tên của bạn</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name-full" placeholder="Nguyễn Văn Hưng" name="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Địa chỉ liên hệ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="adrees" placeholder="102 Thái thịnh - Tầng 2 tòa nhà hà thành plaza" name="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Địa chỉ facebook (nếu có)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="id-facebook" placeholder="https://www.facebook.com/hungokata" name="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Tên skype (nếu có)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="id-skype" placeholder="hungokata" name="text">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend>Thông tin mô tả SEO google</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Meta title <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="titles" placeholder="Bất động sản trên sàn vpage"
                                               name="email">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Meta description <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" id="description"
                                                  placeholder="Bất động sản trên sàn vpage"></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-logo-image clearfix">
                                    <label class="control-label col-sm-4">Ảnh đại diện</label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-3 col-logo-image">
                                            <button type="submit" class="btn btn-primary-cancel">Tải hình ảnh</button>
                                            <label for="">
                                                <input type="file" class="hidden" multiple="">
                                                <img class="album-image " src="../css/images/logo-plus.png" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend>Thiết lập mã nhúng</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">ID facebook analytics<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="idfacebook" placeholder="ID Facebook analytics" name="email">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">ID Google analytics<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="idgoogle" placeholder="ID Google analytics" name="email">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Mã nhúng Style/Css</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control form-description" id="true-style/css" placeholder=".css{color: red;}" name="text"></textarea>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Mã nhúng Style/Css</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control form-description" id="
true-link-google" placeholder="// Nhúng mã theo dõi, tag manager google tại đây" name="text"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <div class="form-group form-button-btn clearfix">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-default">Hoàn thành thiết lập</button>
                                <button type="submit" class="btn btn-primary-cancel">Hủy bỏ</button>
                            </div>
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
