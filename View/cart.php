<?php require_once './Model/ProductModel.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Trade</title>

    <link rel="stylesheet" href="./Public/css/style1.css">
    <link rel="stylesheet" type="text/css" href="puclic/css/css.css">
    <link rel="stylesheet" type="text/css" href="puclic/css/trangchu.css">
    <link rel="stylesheet" type="text/css" href="puclic/css/css.hover.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Own Carousel -->
    <link rel="stylesheet" href="./Public/css/owl.carousel.css">
    <link rel="stylesheet" href="./Public/css/owl.theme.green.css">
    <!-- JQuery & Own Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./Public/js/owl.carousel.js"></script>
    <script src="./Public/js/web.js"></script>
</head>

<body onload="autoloadimg ()">
    <?php include_once './View/inc/header.php' ?>

    <div class="container-fluid">
        <div class="row mt-5">

            <div class="col-md-8">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $total_all = 0; ?>
                        <?php if (count($productList) > 0) foreach ($productList as $product) { ?>

                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img style="width: 50px; height: 50px;" src="<?php echo $product['image']; ?>" alt="">
                                </td>
                                <td><?php echo $product['name']; ?></td>
                                <td><?php echo number_format($product['price']); ?></td>
                                <td><?php echo $product['quantity']; ?></td>
                                <td><?php echo calc_product_price($product); ?></td>
                            </tr>

                        <?php
                            $total_all += $product['price'] * $product['quantity'];
                        } ?>
                    </tbody>

                </table>
                <button type="button" class="btn btn-outline-success "><i class="fa fa-arrow-left" aria-hidden="true"></i> <a href="<?php echo url_pattern('homeController', 'home'); ?>" style="text-decoration: none; color:black">TIẾP TỤC XEM SẢN PHẨM</a></button>
            </div>
            <div class="col-md-4">
                <table class="table" border="2">
                    <thead>
                        <tr>
                            <th> TỔNG HÓA ĐƠN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Tổng</td>
                        <td> <?= number_format($total_all) ?></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-danger" style="width: 480px;">TIẾN HÀNH THANH TOÁN</button>
            </div>
        </div>
    </div>
    <?php include_once './View/inc/foder.php' ?>
    <!--end footer-->
</body>
<script type="text/javascript">
    var vimg = document.getElementById("anhnen-a")
    var t;
    var i = 1;

    function autoloadimg() {
        t = setInterval(function autoloadimg() {
            i++;
            if (i > 3) {
                i = 1;
            }
            vimg.src = "./Public/images/" + "banner" + i + ".jpg";
        }, 2000)
    }
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            // loop:true,
            margin: 0,
            nav: true,
            // items: 2,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     -->

</html>