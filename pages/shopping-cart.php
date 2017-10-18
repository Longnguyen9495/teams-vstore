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

<section id="container-list-item-cart">
    <div class="container">
        <div class="content-left">
            <div class="content-first-list-card">
                <div class="col-sm-3">
                    <div class="conponent-text-first-cart">
                        <!-- <p class="text"></p> -->
                        <a href="#" class="button-continute-buy-landing-page btn btn-default">Tiếp tục mua landing page</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="conponent-text-first-cart">
                        <p class="text text-t1">Bạn có 2 sản phẩm trong giỏ hàng</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="conponent-text-empty-cart">
                        <a href="" class="btn-empty-cart btn btn-default">Xoá rỗng giỏ hàng</a>
                    </div>
                </div>
            </div>
            <div class="content-list">
                <div class="content-list-cart">
                    <div class="col-sm-2">
                        <div class="content-list-picture">
                            <a href="" class="link-img">
                                <img src="/images/12223.jpg" class="content-list-pic img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-heading-list">
                            <h1 class="heading">Leo baby Responsive 3dcart Theme</h1>
                        </div>
                        <div class="content-heading-list">
                            <h1 class="heading-note">Item by theme</h1>
                        </div>
                        <div class="content-heading-list">
                            <h1 class="list-group-item-heading">License : <span>Regular License</span></h1>
                            <h1 class="list-group-item-heading">Support : <span>6 months support</span></h1>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="content-list-icon">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <div class="content-list-price">
                            <h1 class="heading-price">2.000.000<b class="currency">₫</b></h1>
                        </div>
                    </div>
                </div>
                <div class="upgrade-item-líst">
                    <div class="col-sm-12">
                        <form action="#" class="radio-check-item">
                            <p class="radio-check-p">
                                <input type="checkbox" class="check-sp-price" id="sp-price" name="test-t1">
                                <label class="lb-checkbox">Extend support to 12 months. +$31.50
                                    <span>Save $42</span>.<a>Learn More</a></label>
                            </p>
                        </form>
                    </div>
                </div>
        </div>
            <div class="footer-cart">
                <div class="footer-cart-price">
                    <div class="col-sm-12">
                        <h1 class="heading-cart-price-footer">Tổng tiền : <span>4.000.000</span><b class="currency">₫</b>
                        </h1>
                    </div>
                </div>
                <div class="cart-footer-controls">
                    <div class="col-sm-12">
                        <div class="cart-footer-continue">
                            <a href="#" class="text-cart-continue">Tiếp tục mua landing page</a>
                        </div>
                        <div class="check-cart-footer">
                            <a href="/pages/checkout.php" class="btn btn-check-cart">Kiểm tra</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-right-report-cart">
                <div class="col-sm-12">
                    <div class="content-right-text-cart">
                        <p class="text-report">Tổng giỏ hàng</p>
                    </div>
                    <div class="content-right-text-cart">
                        <p class="text-report text-report-t1">4.000.000 <b class="currency">₫</b></p>
                    </div>
                    <div class="content-right-button-cart">
                        <a href="/pages/checkout.php" class="btn btn-block button-checkout">Kiếm tra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="container-footer">
    <?php include "../includes/inc_footer.php"; ?>
</section>
</div>
</body>
</html>