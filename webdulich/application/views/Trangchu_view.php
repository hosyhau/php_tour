<!DOCTYPE html>
<html lang="en">
<head>
    <title> Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>customer/home.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>customer/2.css">
    <link rel="stylesheet" href="<?= base_url() ?>customer/1.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">

</head>
<body >
    <header>
        <div class="banner1">
            <!-- bắt đầu banner-inside -->
            <div class="banner-inside">
                <div class="banner-navbar">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?= base_url() ?>trangchu"><img src="<?= base_url() ?>images/diamond_icn.png" alt=""></a>
                            </div>
                    
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?= base_url() ?>trangchu" >Trang Chủ</a></li>
                                    <li><a href="<?= base_url() ?>dulich">Du Lịch</a></li>
                                    <li><a href="<?= base_url() ?>LienHe">LIÊN HỆ</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                  <?php if($this->session->has_userdata('email')){?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    
                                                    <li><a href="<?= base_url() ?>khachhang/show/<?= $this->session->userdata('cus_id'); ?>">Quản lý đơn hàng</a></li>
                                                    <li><a href="<?= base_url() ?>khachhang/personal/<?= $this->session->userdata('cus_id'); ?>">Hồ sơ cá nhân</a></li>
                                                    <li><a href="#">Thông tin địa chỉ</a></li>
                                                    <li><a class="user_dangxuat" href="#">Đăng Xuất</a></li>
                                                </ul>
                                            </li>;
                                        
                                        <?php }else{ ?>
                                        <li><a href="#form-dangnhap" data-toggle="modal"><i class="fa fa-user" title="Đăng Nhập"  aria-hidden="true"></i></a></li>
                                        <?php } ?>
                                        <li style="margin-top: 40px">
                                            <a href="http://localhost:8080/webdulich/wishlist"><i class="fa fa-shopping-cart"></i>  Đã xem <b class="caret"></b></a>
                                        </li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
                <?= $this->session->userdata('cus_id'); ?>
                <!-- end banner-navbar -->
                <div class="banner-img">
                    <?php $k=1; ?>
                    <?php foreach ($Loadslider as $key => $value): ?>
                        
                   
                        <div class="banner-slide <?php if($k==1){echo "active";$k++;} ?> ?>">
                            <img src="<?= $value['images'] ?>" alt="">
                            <div class="banner-img-view">
                                <a href="#"><p class="btn btn-success">Xem Chi Tiết</p></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="banner-style">
                    <div class="banner-right"><img src="<?= base_url() ?>images/8_03.png" alt=""></div>
                    <div class="banner-left"><img src="<?= base_url() ?>images/8_04.png" alt=""></div>
                </div> <!-- end banner-style -->
                <div class="banner-work-crossbar">
                    <ul>
                        <li class="moves-color">1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div> <!-- end banner-work-crossbar -->
            </div><!--  end banner-inside -->
        </div> <!-- end banner1 -->
    </header>
    <!-- END Header -->

    <main>
        <div class="banner2">
            <div class="container fix-dx">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form action="" method="POST" role="form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <div class="form-group">
                                        <label> Tìm kiếm</label>
                                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center">
                                   <button type="submit" class="btn btn-primary fix-dx-submit">search</button>
                                </div>

                            </div> <!-- END ROW CON -->
                            
                        </form>
                    </div> <!-- end col:12 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end banner2 -->
        <div class="banner3">
            <div class="banner-img-logo"><img src="<?= base_url() ?>images/palm.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="text-center">
                            <h2 class="banner3-h2">Chọn điểm đến</h2>
                            <div class="banner3-gift-box"><img src="<?= base_url() ?>images/Hopqua.png" alt=""></div>
                            <div class="banner3-crossbar"></div>
                            <p class="text-muted">Mời bạn lựa chọn tour</p>
                        </div>
                        <div class="row">
                            <?php foreach ($LoadTourSapKhoiHanh as $key => $value): ?>
                                
                            
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                                <div class="banner3-small">
                                    <div class="thumbnail">

                                        <div class="banner3-img">
                                            <div class="usd"><?= number_format($value['price_chil']) ?> VNĐ</div>
                                            <div class="mausac"></div>
                                            <img src="<?= $value['avatar'] ?>" class="img-responsive" width="100%" alt="">
                                        </div>
                                        <div class="caption">
                                            <h3><?= $value['tour_name'] ?></h3>
                                            <p>Ngày khởi hành: <span class="alert-danger"> <?= date('d/m/20y',strtotime($value['date_start'])) ?></span></p>
                                            <p class="clearfix">
                                                <a href="<?php echo base_url() ?>Dulich/Show/<?php echo $value['links'] ?>" class="btn btn-success text-center">Xem Chi Tiết</a>
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end banner3-small -->
                            </div> <!-- end (1) -->
                            <?php endforeach ?>

                            <div class="text-center check_now">
                                 <a href="<?php echo base_url() ?>Dulich"><div class="btn btn-default banner5-xt">Xem Thêm</div></a>
                             </div>
                            

                        </div>
                    </div> <!-- end col:12 -->
                </div><!--  end roww -->
            </div><!--  end container -->
        </div> <!-- end banner3 -->
        <div class="banner4">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="text-center">
                            <h2 class="banner3-h2">Điểm đến HOT</h2>
                            <div class="banner3-crossbar">
                                <div class="banner3-gift-box"><img src="<?= base_url() ?>images/Forma-1-12.png" alt=""></div>
                                <div class="banner3-crossbarleft"></div>
                                <div class="banner3-crossbarright"></div>
                            </div>
                            <p class="text-muted">Mời bạn lựa chọn tour</p>
                        </div>
                        <div class="khung_move">
                            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                                    <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php $dem=1; ?>
                                    <?php foreach ($LoadTourHOT as $key => $value): ?>
                                    <div class="item <?php if($dem==1){echo "active";$dem++;} ?>">
                                        <div class="khung-left">
                                            
                                                <div class="carousel-caption">
                                                    <h1><?= $value['tour_name'] ?></h1>
                                                    <div class="slider_check text-center">
                                                        <div class="price_child">Giá :<span class=""><?= number_format($value['price_chil'])  ?> VNĐ/Người</span></div>
                                                    </div>
                                                    <p><a class="btn btn-lg btn-success" href="<?php echo base_url() ?>Dulich/Show/<?php echo $value['links'] ?>" role="button">Xem Chi Tiết</a></p>
                                                </div>
                                            
                                        </div>    <!-- end khung right -->
                                        <div class="khung-right"><img src="<?= $value['avatar'] ?>" alt=""></div>
                                    </div> <!-- end item -->    
                                    <?php endforeach ?>
                                    
                                </div>
                               
                            </div>
                        </div>
                      



                    </div> <!-- end col:12 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end banner4 -->
        <div class="banner5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="text-center">
                            <h2 class="banner3-h2">Điểm đến mới nhất</h2>
                            <div class="banner3-gift-box"><img src="<?= base_url() ?>images/Hopqua.png" alt=""></div>
                            <div class="banner3-crossbar"></div>
                            <p class="text-muted">Mời bạn lựa chọn tour</p>

                        </div>
                        <div id="banner5-id" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="item active ">
                                    <?php $dem=0; ?>
                                    <?php foreach ($LoadTourByNew as $key => $value): ?>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <div class="thumbnail banner5-fix">
                                                <div class="banner5-img">
                                                    <img src="<?= $value['avatar'] ?>" class="img-responsive" width="100%" alt="">
                                                    <div class="banner5-color"></div>
                                                </div>
                                                
                                                <div class="caption">
                                                    <h3 class="caption-tittle"><?php echo $value['tour_name'] ?></h3>
                                                    <p class="price_tot">Giá: <?= number_format($value['price_chil']) ?> VNĐ/Người</p>
                                                    <p>Ngày khởi hành: <span class="alert-danger"> <?= date('d/m/20y',strtotime($value['date_start'])) ?></span></p>
                                                    
                                                    <p class="text-center">
                                                        <a href="<?php echo base_url() ?>dulich/show/<?php echo $value['links'] ?>" class="btn btn-success ">Xem Chi Tiết</a>
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                        $dem++;
                                        if($dem==3){
                                            echo '</div>';
                                            echo '<div class="item">';
                                        }
                                    ?>
                                    <?php endforeach ?>
                                </div>


                                
                            </div> <!-- end carousel-inner -->
                            <a class=" left carousel-control" href="#banner5-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            <a class=" right carousel-control" href="#banner5-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
                        </div> <!-- end carousel -->
                        <div class="text-center">
                            <a href="<?php echo base_url() ?>Dulich"><div class="btn btn-default banner5-xt">Xem Thêm</div></a>
                        </div>
                    </div><!--  end col:12 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
            
        </div> <!-- end banner5 -->
        <div class="banner7">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="text-center">
                            <h2 class="banner3-h2">Hướng dẫn đăng ký tours</h2>
                            <div class="banner3-gift-box"><img src="<?= base_url() ?>images/Hopqua.png" alt=""></div>
                            <div class="banner3-crossbar"></div>
                            <p class="text-muted">Bạn click từng bước để có thể trải nghiệm.</p>
                        </div>
                        <div class="banner7-slide">
                            
                            <div id="banner7-id" class="carousel slide" >
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="<?= base_url() ?>images/dk.png" alt="">
                                                
                                            </div>
                                            <div class="item">
                                                <img src="<?= base_url() ?>images/dn.png" alt="">
                                            </div>
                                            <div class="item">
                                                 <img src="<?= base_url() ?>images/dt.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                        <div class="carousel-indicators list-group">
                                            <div data-target="#banner7-id" data-slide-to="0" class="click-moves active">
                                                <h3 class="h3-top active">Bước 1 </h3>
                                                <p class="active text-justify">
                                                    <span Class="text-center">Đăng Ký tài khoản</span><br>
                                                    - Nhập đầy đủ email <br>
                                                    - Nhập đầy đủ mật khẩu <br>
                                                    - Nhập đầy đủ họ tên, số điện thoại <br>
                                                    - Nhấp đăng kí để tạo tài khoản <br>
                                                </p>


                                            </div>
                                            <div data-target="#banner7-id" data-slide-to="1" class="click-moves">
                                                <h3 class="h3-top">Bước 2:</h3>
                                                <p class="text-justify">
                                                    <span Class="text-center">Truy cập trang cá nhân</span><br>
                                                    - Nhập đầy đủ email <br>
                                                    - Nhập đầy đủ mật khẩu <br>
                                                    - Nhấp đăng nhập để truy cập trang cá nhân <br>
                                                    
                                                </p>

                                            </div>
                                            <div data-target="#banner7-id" data-slide-to="2" class="click-moves ">
                                                <h3 class="h3-top">Bước 3:</h3>
                                                <p class="text-justify">
                                                    <span Class="text-center">Đặt tour</span><br>
                                                    - Lưu ý: Đăng nhập trước khi đặt tour <br>
                                                    - Điền đầy đủ thông tin vào form đặt tour <br>
                                                    - Nhấp Đặt tour để đặt hàng. <br>
                                                </p>

                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div> <!-- end banner7-slide -->
                    </div> <!-- end col:12 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end banner7 -->
        <div class="banner6">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        
                        <div class="text-center">
                            <h2 class="banner3-h2">Tại sao lựa chọn chúng tôi</h2>
                            <div class="banner3-gift-box"><img src="<?= base_url() ?>images/Hopqua.png" alt=""></div>
                            <div class="banner3-crossbar"></div>
                            <p class="text-muted">Mời bạn trải nghiệm phía dưới</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center top21 sml">
                                <div class="khungimage"><i class="fa fa-car" aria-hidden="true"></i></div>
                                <h3>Chất lượng dịch vụ</h3>
                                <p>Du lịch Việt luôn đặt chất lượng dịch vụ lên hàng đầu, đảm bảo uy tín đối với khách hàng</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center top22 sml">
                                <div class="khungimage"><i class="fa fa-file-image-o" aria-hidden="true"></i></div>
                                <h3>Điểm đến lý tưởng</h3>
                                <p>Chúng tôi luôn lựa chọn những điểm đến hấp dẫn và thú vị nhất dành cho du khách khi đến Việt</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center top23 sml">
                                <div class="khungimage"><i class="fa fa-usd" aria-hidden="true"></i></div>
                                <h3>Giá cả phải chăng</h3>
                                <p> Tổ chức các chương trình tour tham quan Hà Nội với mức giá ưu đãi, hâp dẫn</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center top24 sml">
                                <div class="khungimage"><i class="fa fa-binoculars" aria-hidden="true"></i></div>
                                <h3>Trải nghiệm khó quên</h3>
                                <p>Các chương trình du lịch của Du lịch Việt đều mang đậm chất riêng, lưu lại dấu ấn khó quên</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div>   
        </div> <!-- end banner6 -->

    </main>
    <!-- END Main -->

    <footer>
        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="footer-w"><h3>Tên Web</h3></div>
                        <div class="footer-w"><span>Địa Chỉ:xx-xx-xx</span></div>
                        <div class="footer-w"><span>Số điện thoại:xx-xx-xx</span></div>
                        <div class="footer-w"><span>Email:Googlythattuyet@gmail.com</span></div>
                        <div class="footer-w">
                            <a href="#"><span class="fa fa-facebook kfc-fix"></span></a>
                            <a href="#"><span class="fa fa-google-plus-square kfc-fix"></span></a>
                        </div>
                        <div class="footer-w"><a href="#"><span>Facebook group hỗ trợ tour du lịch</span></a></div>

                    </div> <!-- end col:12 -->
                </div>
            </div> <!-- end container -->
        </div> <!-- end footer1 -->
    </footer>
    <!-- END Footer -->
    <div class="banner-modal-dangky">
        <div class="modal fade" id="form-dangnhap">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <!-- Tab panes -->
                    </div>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Đăng Nhập</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Đăng Ký</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <!-- <form action="Account/login" method="POST" role="form"> -->
                                
                                    <div class="form-group">
                                        <label for="Username">Tên đăng nhập</label>
                                        <input type="email" class="form-control" id="Username" name="tendangnhap" placeholder="Tên đăng nhập" required="">
                                        <label for="Passwork">Mật khẩu</label>
                                        <input type="password" class="form-control" name="matkhau" id="Passwork" placeholder="Mật khẩu" required="" pattern="[0-9a-z]{6,30}">
                                        <br>
                                        <p class="text-center check_tk"></p>
                                    </div>
                                    <button type="submit" class="btn btn-success check_dangnhap">Đăng Nhập</button>
                                    <p class="text-muted modal_qmk">Quên Mật Khẩu?</p>
                                <!-- </form> -->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab">
                            <!-- Form đăng ký -->
                                <form action="" method="POST" role="form">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                               <label for="form-email">Email (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                 <input type="email" class="form-control" id="form_email" >
                                                 <p class="bg-danger form_check_email"></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                                <label for="dangnhap">Họ Và Tên (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                 <input type="text"  class="form-control" id="form_name"  pattern="[a-z0-9]{6,30}">
                                                  <p class="bg-danger form_check_name"></p>
                                            </div>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                                <label for="matkhau" >Mật Khẩu (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                                                 <input type="password" maxlength="12" class="form-control" id="form_pass" pattern="[a-z0-9]{6,30}">
                                                  <p class="bg-danger form_check_password"></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                                <label for="matkhau" >Nhập lại mật khẩu (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                                                 <input type="password" maxlength="12" class="form-control" id="form_rep_pass"  pattern="[a-z0-9]{6,30}">
                                                 <p class="bg-danger form_check_rep_password"></p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                               <label for="so-phone">Số điện thoại (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                 <input type="text" class="form-control" id="form_phonenumber" required="" pattern="[0-9]{10,11}">
                                                 <p class="bg-danger form_check_phonenumber"></p>
                                            </div>
                                        </div><br>   
                                        <div class="row">
                                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-push-1">
                                            <p class="text-center bg-danger form_check_dangky"></p>
                                            <div id="form_thanhcong" style="display: none;" class="alert alert-success form-gruop">
                                            Tạo mới thành công  <span class="glyphicon glyphicon-ok"></span>
                                            </div>
                                        </div>
                                    </div><br>
                                    </div> <!-- end form-group -->
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                           <button type="button" class="btn btn-success btn-block form_dangky ">Đăng Ký</button>
                                        </div>
                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                             
                                        </div>
                                    </div><br>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div><!--  end form- dang nhap -->
    </div>
    <script>
        var link='<?php echo base_url() ?>';
        var cus_id='<?php echo $this->session->userdata('cus_id'); ?>'
        // click đăng nhập
        $('body').on('click', '.check_dangnhap', function(event) {
            $.ajax({
                url: link+'Account/login',
                type: 'post',
                //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: {
                    tendangnhap: $('#Username').val(),
                    matkhau: $('#Passwork').val()
                },
                success:function(res){
                    if(res){
                        $('.check_tk').html(res);
                        $('.check_tk').css("color","red");
                    }else{
                        window.location='<?php echo base_url() ?>trangchu';
                    }
                }
            })
            $('#Username').val('');
            $('#Passwork').val('');
        });
        // click đăng ký   
        $('body').on('click', '.form_dangky', function(event) {
            var cus_name=$('#form_name').val();
            var email=$('#form_email').val();
            var phone=$('#form_phonenumber').val();
            var password=$('#form_pass').val();
            var rep_password=$('#form_rep_pass').val();
            console.log(cus_name);
            console.log(email);
            console.log(phone);
            console.log(password);
            console.log(rep_password);
            $.ajax({
                url: link+'dangki/Dangkyngay',
                type: 'post',
                dataType: 'json',
                data: {
                    cus_name:cus_name,
                    email:email,
                    phone:phone,
                    password:password,
                    rep_password:rep_password
                },
                success:function(data){
                    
                    
                    if(data=="1"){
                        $('#form_pass').val('');
                        $('#form_rep_pass').val('');
                        $('#form_check_phonenumber').val('');
                        $('#form_check_email').val('');
                        $('#form_check_name').val('');
                        $('#form_thanhcong').css('display', 'block');
                        
                    }
                    else if(data=='2'){
                        $('.form_check_rep_password').html("Yêu cầu bạn nhập mật khẩu an toàn hơn");
                    }
                    else if(data=='3'){
                        $('.form_check_rep_password').html("Mật khẩu không trùng với mật khẩu trên");
                    }
                    else if(data=='4'){
                        $('.form_check_email').html('Tài khoản đã tồn tại');
                    }else {
                        $('.form_check_name').html(data[0]);
                        $('.form_check_email').html(data[1]);
                        $('.form_check_phonenumber').html(data[2]);
                        $('.form_check_rep_password').html(data[3]);
                        $('.form_check_password').html(data[4]);
                    }
                } 
            });
            $('#form_pass').val('');
            $('#form_rep_pass').val('');
        });
        // click đăng xuất
        $('body').on('click', '.user_dangxuat', function(event) {
            $.ajax({
                url: link+'Account/Out',
                type: 'post',
                success:function(res){
                    
                    window.location="<?php echo base_url() ?>trangchu";
                }
            })
        });
    </script>
</body>
</html>