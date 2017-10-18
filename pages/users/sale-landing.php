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
                        <legend class="main-content-right-title">Thiết lập bán landing page</legend>
                        <form>
                            <fieldset>
                                <legend>Thông tin cơ bản</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Tên dự án</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" placeholder="" name="text">
                                        <p class="form-group-note">Maxium 100 characters. No HTML allowed</p>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Mô tả ngắn dự án</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control form-description" id="description"
                                        placeholder="" name="text"></textarea>
                                        <p class="form-group-note">This field is used for search, so pleease be
                                            descriptivel
                                            If you're linking to external images, please mid the page load speed
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group form-logo-image clearfix">
                                    <label class="control-label col-sm-4">Ảnh đại diện</label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-3 col-logo-image">
                                            <label for="">
                                                <input type="file" class="hidden" multiple>
                                                <img class="album-image " src="/images/logo-plus.png" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-place clearfix">
                                    <label class="control-label col-sm-4">Địa điểm dự án</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="place" placeholder="" name="text">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend>Danh mục & thuộc tính</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4" for="sel1">Danh mục dự án làm</label>
                                    <div class="col-sm-8 checkbox-popup">
                                        <select class="form-control" id="category" name="sl">
                                            <option>Chọn một danh mục</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4" for="sel1">Compatible Browsers</label>
                                    <div class="col-sm-8 checkbox-popup">
                                        <select class="form-control" id="compatible-br" name="sl">
                                            <option>FireFox</option>
                                            <option>Safari</option>
                                            <option>Opera</option>
                                            <option>Chrome</option>
                                            <option>Edge</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4" for="sel1">Theme Forest Files Included</label>
                                    <div class="col-sm-8 checkbox-popup">
                                        <select class="form-control" id="sel1" name="sl">
                                            <option>Layered PNG</option>
                                            <option>Layered PSD</option>
                                            <option>HTML FILE</option>
                                            <option>CSS FILE</option>
                                            <option>JS FILE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4" for="sel1">Giao diện</label>
                                    <div class="col-sm-8 checkbox-popup">
                                        <select class="form-control" id="Display" name="sl">
                                            <option>Reponsive</option>
                                            <option>N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-logo-image clearfix">
                                    <label class="control-label col-sm-4">Ảnh màn hình pc</label>
                                    <div class="col-sm-2">
                                        <a href="" class="link-image-form">
                                            <img class="form-image" src="/images/logo-plus.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="form-group form-logo-image clearfix">
                                    <label class="control-label col-sm-4">Ảnh reponsive mobile</label>
                                    <div class="col-sm-2">
                                        <a href="" class="link-image-form">
                                            <img class="form-image" src="/images/logo-plus.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="form-group form-logo-image form-album clearfix">
                                    <label class="control-label col-sm-4">Album ảnh</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img class="album-image img-responsive img" src="/images/logo-plus.png"
                                                alt="">
                                            </div>
                                            <div class="col-sm-3">
                                                <img class="album-image img-responsive img" src="/images/logo-plus.png"
                                                alt="">
                                            </div>
                                            <div class="col-sm-3">
                                                <img class="album-image img-responsive img" src="/images/logo-plus.png"
                                                alt="">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="">
                                                    <input type="file" class="hidden" multiple>
                                                    <img class="album-image img-responsive img" src="/images/logo-plus.png" alt="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend>Tags</legend>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Mô tả bằng thẻ tag sẽ xuất hiện nhiều hơn</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control form-description" id="description"
                                        placeholder="" name="text"></textarea>
                                        <p class="form-group-note">Maximum of 15 keywords covering features, usage and styling keywords
                                        </p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend class="form-group-text-establish">Thiết lập giá bán cho dự án</legend>
                                <label class="control-label-note-heading col-sm-12">Giá tiền sẽ bao gồm chi phí khởi tạo và duy trì dự án của bạn</label>
                                <div class="form-group clearfix form-group-Spreadsheet">
                                    <label class="control-label col-sm-4">Giá bán mặc định</label>
                                    <div class="col-sm-8 form-pay-Spreadsheet" >
                                        <div style="width: 32%;" class="clearfix pull-left">
                                            <p>Giá item</p>
                                            <div>
                                                <i>$</i>
                                                <input type="text" style="max-width: 70%; margin-left: 10px">
                                            </div>
                                        </div>
                                        <div style="width: 32%" class="clearfix pull-left">
                                            <p>Phí lưu hành</p>
                                            <div class="font-nummber-text">
                                                <strong>+</strong><span>$4</span>
                                            </div>
                                        </div>
                                        <div style="width: 32%;" class="clearfix pull-left">
                                            <p>Giá mua</p>
                                            <div class="font-nummber-text">
                                                <strong>=</strong><span>$4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix form-group-Spreadsheet">
                                    <label class="control-label col-sm-4">Hỗ trợ mở rộng</label>
                                    <div class="col-sm-8 form-pay-Spreadsheet" >
                                        <div style="width: 32%;" class="clearfix pull-left">
                                            <p>Giá item</p>
                                            <div>
                                                <i>$</i>
                                                <input type="text" style="max-width: 70%; margin-left: 10px">
                                            </div>
                                        </div>
                                        <div style="width: 32%" class="clearfix pull-left">
                                            <p>Phí lưu hành</p>
                                            <div class="font-nummber-text">
                                                <strong>+</strong><span>$50</span>
                                            </div>
                                        </div>
                                        <div style="width: 32%;" class="clearfix pull-left">
                                            <p>Giá mua</p>
                                            <div class="font-nummber-text">
                                                <strong>=</strong><span>$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <div class="checkbox-input-rules-confirm clearfix">
                            <label class="col-sm-10 text-confirm">
                                <input type="checkbox" name="remember">Khi đăng việc, bạn sẽ xác nhận đồng ý các điều khoản sử dựng của Vpage.vn và không để lộ bất ký thông tin liên lạc cá nhân nào trong phần mô tả nội dung công việc
                            </label>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="form-group form-button-btn clearfix">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-default">Đăng ký bán</button>
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
