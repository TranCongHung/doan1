<html>

<head>
    <link rel="stylesheet" type="text/css" href="puclic/css/css.css">
    <link rel="stylesheet" type="text/css" href="puclic/css/trangchu.css">
    <link rel="stylesheet" type="text/css" href="puclic/css/css.hover.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="puclic/CSS/font-awesome/css/fontawesome-all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=vietnamese" rel="stylesheet">
    <title>Trang chủ</title>


</head>

<body>
    <!-- mở menu-->
    <?php
    include_once './View/inc/header.php'
    ?>

    <!--đóng phần menu-->
    <!--mở ô mặt hàng-->

    <!--đố ô mặt hàng-->

    <!--mở phần giới thiệu-->
    <div class="container">
        <div class="row m-3">
            <div class="col-md-12 text-light ">

                <strong>
                    <h2>Hay đồng hành cùng VN GO</h2>
                </strong>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-1">
                <br>
                <br>
                <img src="puclic/images/ảnh logo/chat-square-quote-fill.svg" class="img-fluid" width="50px">
                <br>
                <br>
                <img src="puclic/images/ảnh logo/cart4.svg" class="img-fluid" width="50px">
                <br>
                <br>
                <img src="puclic/images/ảnh logo/calendar-check.svg" class="img-fluid" width="50px">
                <br>
                <br>

                <img src="puclic/images/ảnh logo/gift.svg" class="img-fluid" width="50px">
            </div>
            <div class="col-md-5 ">
                <br>
                <strong>Sự hài lòng của khác hàng</strong>
                <P>đội ngủ nhân viên tư vấn nhiệt tinh phản hồi nhanh chóng</P>
                <br>
                <strong>Mạng bán tour số 1 Việt Nam</strong>
                <P>Các thông tin của bạn sẽ được hiển thị chính xác & rõ ràng</P>
                <br>
                <strong>Đặt Tour dễ dàng nhanh chóng</strong>
                <P>đội ngủ nhân viên tư vấn nhiệt tinh phản hồi nhanh chóng</P>
                <br>
                <strong>Nhiều ưu đãi đặc biệt hấp dẫn</strong>
                <P>Luôn luôn khuyến mãi – sẵn sàng ưu đãi – quà tặng bất ngờ.

                </P>
            </div>
            <div class="col-md-6">
                <img src="puclic/images/donghanh-removebg-preview.png" class="img-fluid">
            </div>
        </div>
    </div>
    <!----giới thiêu-->

    <!--MẶT HÀNG TRONG NƯỚC-->
    <div class="row" id="menu">
        <div class="col-md-12">

            <h3 class="title-comm" style="background-color:#a9c7e1;">
                <span class="title-holder">TOUR TRONG NƯỚC</span>
            </h3>

        </div>

        <div class="san-pham">
            <div class="row">
            <!-- Vung du lieu -->
            <?php
            foreach ($productList as $product) { ?>
                <div class="col-xs-2 col-2 col-lg-2 mb-4">
                    <a href="single.php?id=<?php echo $product->id; ?>">
                        <div class="card">
                            <img src="<?php echo $product->image; ?>" width="100%" height="200px">
                            <div class="card-body">
                                <p style="color: black"><?php echo $product->name; ?></p>
                                <b class="card-text  " style="color: orange"><?php echo $product->price; ?>đ</b>
                                <a  class="btn btn-success" href="<?php echo url_pattern('homeController', 'cart', $product->id); ?>">Thêm vào giỏ </a>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>
            </div>
        </div>




    </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <nav aria-label="Page navigation example ">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">
                            << </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"> >> </a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
    <!--mặt hàng trong nước -->
    <!--MẶT HÀNG NƯỚC NGOÀI -->
    <div class="row ">
        <div class="col-md-12 ">
            <h3 class="title-comm" style="background-color:#a9c7e1;">
                <span class="title-holder">TOUR NGOÀI NƯỚC</span>
            </h3>
        </div>
        
    </div>
    <!--ĐÓNG MẶT HÀNG NƯỚC NGOÀI-->
    <!--end-->
    <?php include_once 'inc/foder.php' ?>
    <!--end-->


    <script src="js/trangchu.js"></script>
    <script src="js/cart.js"></script>
</body>

</html>