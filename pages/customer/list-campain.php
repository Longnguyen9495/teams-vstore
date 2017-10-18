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
                        <div class="content-control content-control-list-campain">
                            <div class="form-group clearfix list-campain-first">
                                <div class="col-sm-6 list-campain-search">
                                    <input type="text" class="form-control" id="name" placeholder="Tên chiến dịch" name="email">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm
                                    </button>
                                </div>
                                <div class="col-sm-6 list-campain-add">
                                    <a class="btn btn-primary btn-default" data-toggle="modal" href="#modal-id">Thêm mới</a>
                                    <div class="modal fade" id="modal-id">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Thêm mới chiến dịch</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" action="">
                                                        <legend class="content-information-personal">Thông tin cơ bản
                                                        </legend>
                                                        <div class="form-group">
                                                            <div class="col-sm-6 form-padding-right">
                                                                <label>Tên chiến dịch</label>
                                                                <input type="text" class="form-control" id="names"
                                                                       placeholder="Tên chiến dịch" name="email">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label>Đường dẫn</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon input-sm sel_domain">http://vpage</span>
                                                                    <input type="text" name="slug" value=""
                                                                           class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form class="form-horizontal" action="">
                                                        <legend class="content-information-personal">Thông tin SEO
                                                            Google
                                                        </legend>
                                                        <div class="form-group">
                                                            <div class="col-sm-6 form-padding-right">
                                                                <div class="col-sm-12 form-group-padding">
                                                                    <label>Meta title <i class="fa fa-question-circle"
                                                                                         aria-hidden="true"></i></label>
                                                                    <input type="text" class="form-control" id="titles"
                                                                           placeholder="Tên chiến dịch" name="email">
                                                                </div>
                                                                <div class="col-sm-12 form-group-padding">
                                                                    <label>Meta description <i
                                                                            class="fa fa-question-circle"
                                                                            aria-hidden="true"></i></label>
                                                                    <textarea class="form-control" rows="5"
                                                                              id="description" placeholder="Thông tin landing page bất động sản chi tiết"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label>Thêm ảnh chia sẻ MXH</label>
                                                                <div class="input-group">
                                                                    <input type="file" class="hidden" multiple="">
                                                                    <img class="album-image "
                                                                         src="/images/logo-plus.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form class="form-horizontal" action="">
                                                        <legend class="content-information-personal">Thiết lập mã nhúng
                                                        </legend>
                                                        <div class="form-group">
                                                            <div class="col-sm-6 form-padding-right">
                                                                <div class="col-sm-12 form-group-padding">
                                                                    <label>ID Google Analystic <i class="fa fa-question-circle"
                                                                                                  aria-hidden="true"></i></label>
                                                                    <input type="text" class="form-control" id="idgoogle"
                                                                           placeholder="ID Google Analystic" name="email">
                                                                </div>
                                                                <div class="col-sm-12 form-group-padding">
                                                                    <label>Mã nhúng css <i
                                                                            class="fa fa-question-circle"
                                                                            aria-hidden="true"></i></label>
                                                                    <textarea class="form-control" rows="5"
                                                                              id="Embeddedcss" placeholder="Thêm mã nhúng css vào đây"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="col-sm-12 form-group-padding">
                                                                    <label>ID Facebook Pixel <i class="fa fa-question-circle"
                                                                                                aria-hidden="true"></i></label>
                                                                    <input type="text" class="form-control" id="idfacebook"
                                                                           placeholder="ID Facebook Pixel" name="email">
                                                                </div>
                                                                <div class="col-sm-12 form-group-padding">
                                                                    <label>Mã nhúng script <i
                                                                            class="fa fa-question-circle"
                                                                            aria-hidden="true"></i></label>
                                                                    <textarea class="form-control" rows="5"
                                                                              id="comment" placeholder="Thêm mã nhúng script vào đây"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Lưu thông tin</button>
                                                    <button type="button" class="btn btn-primary-cancel">Hủy bỏ</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            </div>
                            <table class="table table-condensed posted-desinn">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Tên chiến dịch</th>
                                    <th>Ngày tạo</th>
                                    <th>Số lượng</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cần thuê thiết kế landing page bất động sản đà nẵng ...</td>
                                    <td>20/10/2018</td>
                                    <td><span class="label label-danger">1</span></td>
                                    <td><a href="" class="detail">Chi tiết</a><a href="" class="edit">Sửa</a><a href="" class="delete">Xóa</a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cần thuê thiết kế landing page bất động sản đà nẵng ...</td>
                                    <td>20/10/2018</td>
                                    <td><span class="label label-danger">1</span></td>
                                    <td><a href="" class="detail">Chi tiết</a><a href="" class="edit">Sửa</a><a href="" class="delete">Xóa</a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cần thuê thiết kế landing page bất động sản đà nẵng ...</td>
                                    <td>20/10/2018</td>
                                    <td><span class="label label-danger">1</span></td>
                                    <td><a href="" class="detail">Chi tiết</a><a href="" class="edit">Sửa</a><a href="" class="delete">Xóa</a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cần thuê thiết kế landing page bất động sản đà nẵng ...</td>
                                    <td>20/10/2018</td>
                                    <td><span class="label label-danger">1</span></td>
                                    <td><a href="" class="detail">Chi tiết</a><a href="" class="edit">Sửa</a><a href="" class="delete">Xóa</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form-group content-table-design clearfix">
                                <div class="content-table-design">
                                    <div class="content-table-design-left col-sm-4">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Hiển thị 1-20 tin</a></li>
                                            <li><a href="#">200 tin</a></li>
                                        </ol>
                                    </div>
                                    <div class="content-table-design-right col-lg-8">
                                        <ul class="pagination">
                                            <li><a href="#"> &lt; </a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#"> &gt; </a></li>
                                        </ul>
                                    </div>
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
