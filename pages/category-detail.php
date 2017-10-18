<?php 
    $login=0;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700,900&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <link rel="stylesheet" href="/bundle/app.bundle.min.css">
    <script src="/bundle/app.bundle.min.js"></script>
</head>
<body>

<section class="container-header-top" id="container-header-top">
    <?php include "../includes/inc_header.php" ?>
</section>

<section class="container-breadcrumbs" id="container-breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Trang Chủ</a></li>
            <li><a href="#">Danh Mục</a></li>
            <li class="active">Bất động sản</li>
        </ol>
    </div>
</section>

<section class="container-banner-category" id="container-banner-category">
    <div class="vp-section-row">
        <div class="container vp-section-row-container">
            <div class="row row-section">
                <div class="col-sm-12 one-column column-add-item item-can-resize col-b1" data-type="column" data-vpage="column">
                    <div class="component-item item-h1" data-type="heading">
                        <h1 class="widget widget-heading hd1" data-vpage="widget">3000+ dự án landing page bất động sản trên sàn vpage</h1>
                    </div>
                    <div id="box_search" class="search">
                        <form class="get_grid_e" name="myForm" action="" onsubmit="return validatesreach()" method="post">
                            <div class="input-width ">
                                <input class="go fl_left" type="text" name="fsreach" placeholder="Tìm kiếm dự án landing page bạn quan tâm">
                                <button id="tdb1" class="btn-one" type="submit" value="sreach">Tìm Kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-list-item-category-detail" id="container-list-item-category-detail">
    <div class="vp-section-row">
        <div class="container vp-section-row-container vp-tbl-ci vp-ctn">
            <!-- Một row chỉ có 4 cột ứng với col-sm-12 : dùng col-sm-... để set cho cột -->
            <div class="row row-section vp-row-tbl">
                <!-- Cột 12 -->
                <div class="col-sm-3 one-column column-add-item item-can-resize vp-tbl-cell-md col-content-sreach" data-type="column" data-vpage="column">
                    <div class="component-item pic-hd1" data-type="heading-pic">
                        <div class="box-component box-c1" data-ci="vp-content" data-type="icon">
                            <a class="vp-link-img" href="javascript:;">
                                <img src="http://icons.iconarchive.com/icons/icons8/windows-8/256/Security-Shield-icon.png" class="img img-responsive widget widget-picture" data-vpage="widget" data-type="picture" style="width: 100%;">
                            </a>
                        </div>
                        <div class="box-component box-c2" data-type="text">
                            <p class="widget widget-text texts" data-vpage="widget">
                                Tất cả các dự án trên vstore sẽ hỗ trợ bán tới khi chạy chiến dịch đạt được những khách hàng mong muốn nhất
                            </p>
                        </div>
                    </div>
                    <div class="component-item" data-type="line">
                        <div class="vp-line"></div>
                    </div>
                    <div class="component-item" data-type="heading-filter">
                        <div class="component-item" data-type="heading">
                            <h1 class="widget widget-heading hd-h1" data-vpage="widget">Khoảng Giá</h1>
                        </div>
                        <div class="component-item" data-type="heading">
                            <div id="slider-rangce"></div>
                            <div class="box-text">
                                <span class="pull-left">0 ₫</span>
                                <span class="pull-right">759.000 ₫</span>
                            </div>
                            <div class="row box-price">
                                <div class="col-md-12 text-center">
                                    <input class="form-control input-sm priceMin fomat-price" size="8" id="start" type="text" name="priceMin" value="0"> &nbsp;-&nbsp;
                                    <input class="form-control input-sm priceMax fomat-price" size="8" id="stop" type="text" name="priceMax" value="759000">
                                    <button type="submit" class="btn btn-primary btn-sm">Lọc giá</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="component-item" data-type="heading-filters">
                        <div class="component-item" data-type="heading">
                            <h1 class="widget widget-heading hd-h1" data-vpage="widget">Đánh Giá</h1>
                        </div>
                        <div class="component-item" data-type="heading">
                            <form action="#">
                                <p>
                                    <input type="radio" id="test1" name="test-t1" />
                                    <label class="lb-checkbox" for="test1">
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="test2" name="test-t1" />
                                    <label class="lb-checkbox" for="test2">
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="test3" name="test-t1" />
                                    <label class="lb-checkbox" for="test3">
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="test4" name="test-t1" />
                                    <label class="lb-checkbox" for="test4">
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                    </label>
                                </p>
                                <p>
                                    <input type="radio" id="test5" name="test-t1" />
                                    <label class="lb-checkbox" for="test5">
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                    </label>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 one-column column-add-item item-can-resize vp-tbl-cell-md" data-type="column" data-vpage="column">
                    <nav class="nav-n2" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand logo nav-lg" href="#">
                                Sắp xếp gợi ý theo
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-right custome-menu nav-menu2">
                                <li class="vp-clone active"><a href="#">Mới gần đây</a></li>
                                <li class="vp-clone"><a href="#">Đánh giá tốt</a></li>
                                <li class="vp-clone"><a href="#">Giá từ thấp đến cao</a></li>
                                <li class="vp-clone"><a href="#">Giá từ cao đến thấp</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    
                    <?php for ($i = 0; $i < 12; $i++) { ?>
                        <div class="component-item-col" data-type="heading">
                            <div class="col-sm-3" data-type="column" data-vpage="column">
                                <div class="component-item col-component" data-type="picture">
                                    <a class="vp-link-img" href="javascript:;">
                                        <img src="/images/1234.jpg" class="img img-responsive widget widget-picture" data-vpage="widget" data-type="picture">
                                    </a>
                                </div>
                                <div class="component-item col-component" data-ci="vp-content" data-type="icon">
                                    <a href="javascript:;" class="vp-link-icon">
                                        <i class="fa vp-icon fa-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:;" class="vp-link-icon">
                                        <i class="fa vp-icon fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:;" class="vp-link-icon">
                                        <i class="fa vp-icon fa-folder-open" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" data-type="column" data-vpage="column">
                                <div class="component-item" data-type="heading">
                                    <h1 class="widget widget-heading headings-col" data-vpage="widget">
                                        <a href="/pages/landing-page-detail.php">Dự án bất động sản
                                        vinpeal với giá 2 tỷ đang thu rất nhiều...</a></h1>
                                </div>
                                <div class="component-item" data-type="text">
                                    <p class="widget widget-text text-col" data-vpage="widget">
                                        Tạo bởi : <span>Hưng Thiết Kế</span>
                                    </p>
                                </div>
                                <div class="component-item cpn-btn" data-type="button">
                                    <a href="/pages/preview-landing-page.php" class="btn btn-primary widget widget-button btn-review">
                                        Xem Trước
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 box" data-type="column" data-vpage="column">
                                <div class="component-item" data-type="text">
                                    <p class="widget widget-text texts text-s1" data-vpage="widget">
                                        Ngày tạo : <span> 20/10/2017 </span>
                                    </p>
                                </div>
                                <div class="component-item item-textr" data-type="text">
                                    <p class="widget widget-text texts text-s1" data-vpage="widget">
                                        Dự án bất động sản vinpeal đang được triển khai tại nhiều thí điểm
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-2" data-type="column" data-vpage="column">
                                <div class="component-item" data-type="heading">
                                    <h1 class="widget widget-heading headings-col-h1" data-vpage="widget">2.000.000 <span>VND</span></h1>
                                </div>
                                <div class="component-item star-item" data-type="icon">
                                    <label for="test1">
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                        <i class="fa check-icon fa-star" aria-hidden="true"></i>
                                    </label>
                                </div>
                                <div class="component-item" data-type="text">
                                    <p class="widget widget-text texts-s" data-vpage="widget">
                                        200 Đánh Giá
                                    </p>
                                </div>
                                <div class="component-item cpn-icon" data-ci="vp-content" data-type="icon">
                                    <a href="javascript:;" class="vp-link-icon">
                                        <i class="fa vp-icon fa-area-chart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="component-item" data-type="text">
                                    <p class="widget widget-text texts-s" data-vpage="widget">
                                        200 Lượt Mua
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="component-item" data-type="heading">
                        <ul class="pagination">
                            <li><a href="#" class="control"> &lt; </a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">60</a></li>
                            <li><a href="#" class="control"> &gt; </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="container-footer">
    <?php include "../includes/inc_footer.php"; ?>
</section>

</body>
</html>