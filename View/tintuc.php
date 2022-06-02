<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/CSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="CSS/font-awesome/css/fontawesome-all.css"> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=vietnamese" rel="stylesheet">
</head>
<body>
    <?php 
    include_once'inc/hender.php'
    ?>

    <div class=" container-fluid" >
    <div class="row">
        <div class="col-md-12">
            <div class="clearfix vi-header">
                <h3 class="vi-left-title pull-left"> TRANG CHỦ >TIN TỨC> </h3>
                </div>  
        </div>
    </div>
</div>
<BR>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title pull-left">TIN TỨC</h3>
                   </div>
            </div>
            <div class="col-md-4">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title pull-left">DANH MỤC</h3>
                   </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
               <BR>
               <p><img src="ảnh/sanpham/untitled-1.jpg" class="img-fluid" width="400px"></p> 
                <br>
                 
               <p><img src="ảnh/sanpham/untitled-2.jpg" class="img-fluid" width="400px"></p> 
               <br>
                
               <p><img src="ảnh/sanpham/untitled-3.jpg" class="img-fluid" width="400px"></p> 
                <br>
                
            </div>
            <div class="col-md-5">
                <BR>
                <strong>Đi tìm giấc mơ màu tím</strong>
                <p>Xe tôi trườn qua con đường nhỏ uốn lượn trong những ngôi làng miền Nam nước Pháp. Nắng chiều ngọt như mật và có chút gì đó thênh thang b...</p>
                <br>
                <br>
                
                <br>
                <br>
                <strong>Khu vườn thượng lưu giựa lòng london</strong>
                <p>Được ví như “Khu vườn thượng lưu” giữa lòng London, lễ hội hoa xuân Chelsea 2018 là sự kiện tầm cỡ thế giới làm thỏa lòng hàng triệu du ...</p>
                <br>
                <br>
                <br>
                <br>
                <strong>Phải lòng mùa đông ở Nam Bán Cầu</strong>
                <p>Mùa hè, dường như ai cũng mơ về nắng vàng - biển xanh - cát trắng. Nhưng bạn có biết vẫn có nơi nào đó tuyết rơi trắng xóa và mọi người ...</p>
            </div>
            <div class="col-md-4" style="height: 100px;" >
                <P class=" dropdown "id="navbarDropdown"data-bs-toggle="dropdown" aria-expanded="false">Trang chủ </P>
            <il class=" dropdown">
                <P class=" dropdown-toggle "id="navbarDropdown"data-bs-toggle="dropdown" aria-expanded="false">Tour du lịch </P>
                 <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" >Hạ Long</a>
                     <a class="dropdown-item" >Ninh Bình</a>
                     <a class="dropdown-item" >Nghệ AN</a>
                     <a class="dropdown-item" >Đà Năng</a>
                     <a class="dropdown-item" >Tam Đảo </a>
                     <a class="dropdown-item" >Quảng Ninh  </a>
                     <a class="dropdown-item" >Xem Thêm</a>
                 </ul>
             </il>
             <P class=" dropdown "id="navbarDropdown"data-bs-toggle="dropdown" aria-expanded="false">Tin tức </P>
             <P class=" dropdown "id="navbarDropdown"data-bs-toggle="dropdown" aria-expanded="false">Liên hệ </P>
             <div class="clearfix vi-header">
                <h3 class="vi-left-title pull-left">TIN TỨC NỔI BẬT</h3>
               </div>
                <div class="row">
                    <div class="col-md-6">
                        <BR>
                        <p><img src="ảnh/sanpham/untitled-1.jpg"  width="150px"></p>
                        
                        <p><img src="ảnh/sanpham/untitled-2.jpg"  width="150px"></p>
                        
                        <img src="ảnh/sanpham/untitled-3.jpg"  width="150px">
                    </div>
                    <div class="col-md-6 ">
                        <BR>
                     <p> Đi tìm giấc mơ màu tím<p>
                         <p>22/06/2021</p>      
                         <p>Khu vườn thượng lưu giựa lòng london<p>
                             <p>22/06/2021</p>
                             <br>
                     <p>Phải lòng mùa đông ở Nam Bán Cầu<p>
                         <p>22/06/2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once'inc/foder.php'
?>

   
    
</body>
</html>