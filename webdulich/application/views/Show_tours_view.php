<!DOCTYPE html>
<html lang="en">
<head>
    <title> Xem chi tiết tour </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/customer/customer.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="<?= base_url() ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>js/easing.js"></script>
    <script src="<?= base_url() ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css">
    <style>
        .tim_tour:hover{
            cursor :pointer;
        }
    </style>
    <script src="<?= base_url() ?>js/slides.min.jquery.js"></script>
    <script>
        $(function(){
            $('#products').slides({
                preload: true,
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="wp-top">
            <div class="wp-introduce">

                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li  class="dropdown-toggle"><a href="#" >TOURS DỊCH VỤ TRỰC TUYẾN HÀNG ĐẦU VIỆT NAM</a></li>
                                        
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php if($this->session->has_userdata('email')){?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?= $this->session->userdata('cus_name'); ?><b class="caret"></b></a>
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

                                        
                                            <li>
                                            <a href="http://localhost:8080/webdulich/wishlist"><i class="fa fa-shopping-cart"></i>  Đã xem <b class="caret"></b></a>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        
                    </div>
                </nav> <!-- end nav -->

            </div> <!-- end wp-introduce -->
        </div> <!-- end wp-top -->
        <div class="wp-top1">
            <div class="wp-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <div class="banner-logo text-center"><img src="<?= base_url() ?>images/diamond_icn.png" alt=""></div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
                                        <form>
                                            <fieldset class="form-group form-inline">
                                                <input type="text" class="form-control search_tour" id="formGroupExampleInput" placeholder="Tìm kiếm">
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="col-lg-5 col-lg-offset-4" id="ketqua_search" style="margin-top: -10px; margin-left: 5px;"> 

                                    </div> <!-- End col-6-offset-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
        </div> <!-- end wp-top1 -->
        <div class="wp-top2">
            <div class="container">
                <div class="bg-big">

                    <nav class="navbar navbar-light" role="navigation">
                        <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                <li class="active">
                                    <li><a href="<?= base_url() ?>trangchu" >Trang Chủ</a></li>
                                    <li><a href="<?= base_url() ?>dulich">Du Lịch</a></li>
                                    <li><a href="<?= base_url() ?>LienHe">LIÊN HỆ</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                            
                        </div>

                    </nav>
                </div>
            </div>

        </div> <!-- end wp-top2 -->
        <div class="wp-top3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 check-list">
                        <div class="wp-top3-2">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="banner1-right">
                                        <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php $dem=0; ?>
                                                <?php foreach ($Loadslider as $key => $value): ?>
                                                    <div class="item <?php if($dem==0){echo "active";$dem++;} ?>">
                                                    <img src="<?= $value['images'] ?>" alt="">
                                                </div>
                                                <?php endforeach ?>
                                            </div>
                                            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>
                                    </div> <!-- end banner_right -->
                                    <div class="banner2-right" id="#can_chen">
                                        <div class="banner2-fix">
                                            <div class="banner-title"><p>Thông Tin Tours</p></div>
                                            <div class="banner-between">
                                                <?php foreach ($Show_tours as $key => $value): ?>
                                                <h4 class="banner2-tittle"><?= $value['local_name'] ?></h4>
                                                    <div class="card-group">
                                                        <div class="card">
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                <div id="products_example">
                                                                 <div id="products">
                                                                    <div class="slides_container">
                                                                        <a href="#" target="_blank"><img width="100%" src="<?php echo $value['image1'] ?>" alt=" " /></a>
                                                                        <a href="#" target="_blank"><img width="100%" src="<?php echo $value['image2'] ?>" alt=" " /></a>

                                                                    </div>
                                                                    <ul class="pagination">
                                                                        <li><a href="#"><img src="<?php echo $value['image1'] ?>" width="100%" alt=" " /></a></li>
                                                                        <li><a href="#"><img src="<?php echo $value['image2'] ?>" width="100%" alt=" " /></a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                                <i class="fa fa-plane" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                                <p>Điểm đến :<?= $value['tour_name'] ?></p>
                                                            </div>
                                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><?php $x=0; ?>
                                                                <p>Khởi Hành :<?php foreach ($ngaydi as $key => $value1): ?>
                                                                    <?= date('d/m/20y',strtotime($value1['date_start'])) ?>
                                                                <?php $x++; endforeach ?>
                                                                <?php if($x==0) echo '<b style="color:red;">Chưa có lịch đi</b>'; ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><?php $y=0; ?>
                                                                <p>Thời gian :<?php foreach ($ngaydi as $key => $value1): ?>
                                                                    <?= $value1['Time_start'] ?>
                                                                <?php $y++; endforeach ?>
                                                                <?php if($y==0) echo '<b style="color:red;">Chưa có lịch đi</b>'; ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                                <p>Giá/trẻ em : <?= number_format($value['price_chil'])  ?> VNĐ</p>
                                                                <p>Giá/người lớn : <?= number_format($value['price_adult'])  ?> VNĐ</p>
                                                                <input type="text" class="hidden" id="gianguoilon" value="<?= $value['price_chil'] ?>">
                                                                <input type="text" class="hidden" id="giatreem" value="<?= $value['price_adult'] ?>">
                                                                <input type="text" class="hidden" id="tour_id" value="<?= $value['tour_id'] ?>">
                                                                <input type="text" class="hidden" id="tour_links" value="<?= $value['links'] ?>">
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <p>Mô Tả: 
                                                                    <?= $value['description'] ?></p>
                                                                </div> <!-- end col:12 of 6 of 8 -->
                                                            </div> <!-- end col:12 -->
                                                        </div> <!-- end card -->
                                                    </div> <!-- end card-group -->
                                                <?php endforeach ?>
                                            </div> <!-- end banner-between -->
                                        </div> <!-- end bannerfix -->
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="panel panel-info">
                                                    <div class="banner-title"><p>Bình Luận</p></div>
                                                  
                                                    <div class="panel-body">

                                                        <table class="table table-hover">
                                                            <tbody id="reload">
                                                                <?php foreach ($coment as $key => $value1): ?>
                                                                    <tr class="rename">
                                                                        <td><input style="display: none" type="text" class="id_sua_coment" value="<?= $value1['coment_id'] ?>"></td>
                                                                        <th><?= $value1['cus_name'] ?></th>
                                                                        <td>
                                                                            <?php if ($value1['cus_id'] == $this->session->userdata('cus_id')){ ?>
                                                                            <input type="text" class="form-control text_sua_coment" value="<?= $value1['content'] ?>">
                                                                            <?php }else{ ?>
                                                                            <?= $value1['content'] ?>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td><?php if ($value1['cus_id'] == $this->session->userdata('cus_id')) { echo '<button type="button" class="btn btn-danger xoa_coment">Xóa</button> <button type="button" class="btn btn-warning sua_coment">Sửa</button>';

                                                                            } ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach ?>
                                                            </tbody>
                                                        </table>
                                                        <hr>
                                                        <div id="thongbao" style="color: red;"></div>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <div id="thanhcong" style="display: none" class="alert alert-success form-gruop">
                                                                   Bình luận thành công  <span class="glyphicon glyphicon-ok"></span>
                                                               </div>
                                                               <label for="coment_input">Bình luận của bạn :</label>
                                                               <textarea class="form-control" rows="5" placeholder="Nhập bình luận của bạn ở đây" id="coment_input"></textarea>
                                                               <div class="bao_loi loi_noi_dung" style="color: red;"></div>
                                                           </div>
                                                           <div class="col-lg-3">
                                                            <button type="button" class="btn btn-success add_comment" style="margin-top: 60px;">Gửi bình luận</button>
                                                            <div id="bao_dang_nhap"></div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Panel-Body -->
                                            </div> <!-- End Panel -->
                                            </div>  <!-- End Col-12 -->
                                        </div>
                                    </div> <!-- end banner2-right -->
                            <div class="banner3-right">

                                <div class="banner-title"><p>Thông Tin Liên Hệ</p></div>
                                
                                
                                <h4 class="banner3-tittle">Thông Tin Liên Hệ:</h4>
                                <fieldset class="form-group form-inline">

                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <label for="name">Họ Và Tên</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                        <input type="gmail" class="form-inline"  id="name">(*)
                                        <br>
                                        <div class="text-check check_name"></div>
                                    </div>

                                </fieldset>
                                <fieldset class="form-group form-inline">

                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <label for="address">Địa Chỉ</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                        <input type="text"  class="form-inline"  id="address">(*)
                                        <div class="text-check check_address"></div>
                                    </div>

                                </fieldset>
                                <fieldset class="form-group form-inline">

                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <label for="phone">Số Điện Thoại</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                        <input type="text" class="form-inline" maxlength="12" id="phone">(*)
                                        <div class="text-check check_phone"></div>
                                    </div>

                                </fieldset>
                                <fieldset class="form-group form-inline">

                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <label for="request">Yêu Cầu Khác</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                        <textarea name="" id="request" cols="20"></textarea>
                                    </div>

                                </fieldset>
                                <fieldset>
                                    <h4 class="banner3-tittle">Thông Tin Khách Hàng Đi Tours</h4>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                <label for="price_adult">Người Lớn</label>
                                            </div>
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                <input type="number" class="form-inline"  id="price_adult">(*)
                                                <div class="text-check check_adult"></div>
                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                <label for="price_child">Trẻ Em</label>
                                            </div>
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                <input type="number" class="form-inline"  id="price_child">(*)
                                                <div class="text-check check_child "></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check_quan text-center" style="color:red;"></div>
                                    <div style="margin-top: 20px;">
                                        <b>Chọn phòng: </b>
                                        <?php $l=0; ?>
                                            <?php  foreach ($room as $value): ?>
                                            <input type="checkbox" class="room_book" value="<?= $value['room_id'] ?>"> Số người :<?= $value['type'] ?> . 
                                        <?php $l++; endforeach  ?>
                                        <?php if($l==0) echo '<b style="color:red;">Không còn phòng trống</b>'; ?>
                                        <div class="check_room  text-center" style="color:red;"></div>
                                        <div class="date_start text-center"></div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group form-inline">
                                    <h4 class="banner3-tittle">Hình thức thanh toán</h4>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <label for="payment">Hình thức thanh toán</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                        <select class="" id="pay_id">
                                            <option value="0">Mời bạn chọn</option>
                                            <?php foreach ($Show_payment as $key => $value): ?>
                                                <option value="<?php echo $value['pay_id'] ?>"><?php echo $value['pay_name'] ?></option>
                                            <?php endforeach ?>
                                        </select>(*)
                                        <div class="text-check check_payment"></div>
                                    </div>

                                </div>
                            </fieldset>
                            <p class="text-check request_infomation text-center"></p>
                            <fieldset class="form-group text-center mt-1">
                                <input type="button" class="btn btn-success click_dattour" id="" value="Đặt tour">
                            </fieldset>



                        </div> <!-- end banner3-right -->
                    </div> <!-- end col:9 -->
                </div> 
            </div><!-- end row -->
        </div>
    </div>
</div> <!-- end container -->
</div> <!-- end wp-top3 -->
</div> <!-- end wapper -->
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


<!-- Banner dang nhap -->
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
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-push-1">
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
    var tour_links=$('#tour_links').val();
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
                        window.location="<?php echo base_url() ?>dulich/show/"+tour_links+"";
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
                        $('#form_thanhcong').css('display', 'block');
                        $('#form_pass').val('');
                        $('#form_rep_pass').val('');
                        $('#form_check_phonenumber').val('');
                        $('#form_check_email').val('');
                        $('#form_check_name').val('');
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
    </script>
    <script>
        var link='<?php echo base_url() ?>';
        // click đang xuất
        $('body').on('click', '.user_dangxuat', function(event) {
            $.ajax({
                url: link+'Account/Out',
                type: 'post',
                success:function(res){

                    window.location="<?php echo base_url() ?>trangchu";
                }
            })
        });
        // click đặt tour_name

        $('body').on('click', '.click_dattour', function(event) {
            var link='<?php echo base_url() ?>';
            var check='<?= $this->session->has_userdata('email'); ?>';
            console.log(check);
            var cus_id='<?= $this->session->userdata('cus_id'); ?>';
            var adult_quan=parseInt($('#price_adult').val());
            var chirld_quan=parseInt($('#price_child').val());
            var total_quan = adult_quan+chirld_quan;
            console.log(total_quan);
            var so_ngay = '<?= $Show_tours[0]['days'] ?>';
            var name=$('#name').val();
            var phone=$('#phone').val();
            var request=$('#request').val();
            var address=$('#address').val();
            var pay_id=$('#pay_id').val();
            var gianguoilon=$('#gianguoilon').val();
            var giatreem=$('#giatreem').val();
            var tour_id=$('#tour_id').val();
            var ngaydi ='<?php foreach ($ngaydi as $key => $value): ?> <?= $value['date_start'] ?><?php endforeach ?>';
            $('.text-check').css('color', 'red');
            var a = new Array();
            var x = 0;
            var co =0;
            var checkbox = document.getElementsByClassName('room_book');
            for (var i = 0; i < checkbox.length; i++){
                if (checkbox[i].checked === true){
                    a[x++] = checkbox[i].value;
                    co=co+1;
                }
            }
            if(check==false){
                $('.request_infomation').html('<b>Yêu cầu bạn đăng nhập trước khi nhập</b>');
            }else if(pay_id==0){
                $('.check_payment').html('<b>Lựa chọn hình thức thanh toán</b>');
            }else if(total_quan>15){
                $('.check_quan').html('<b>Tổng số người vượt quá 15, vui lòng giảm bớt</b>');
            }else if(co==0){
                $('.check_room').html('<b>Chưa chọn phòng</b>');
                $('.check_payment').html('');
                $('.check_quan').html('');
            }
            else if(ngaydi == ''){
                $('.check_room').html('');
                $('.check_payment').html('');
                $('.check_quan').html('');
                $('.date_start').html('<b style="color:red;">Chưa có ngày khởi hành</b>');
            }else{
                $('.check_payment').html('');
                $('.check_room').html('');
                $('.check_quan').html('');
                $('.date_start').html('');
                $.ajax({
                    url:link+ 'Book/InsertDatabase',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        chirld_quan:chirld_quan,
                        adult_quan:adult_quan,
                        cus_id:cus_id,
                        name:name,
                        phone:phone,
                        request:request,
                        address:address,
                        phone:phone,
                        pay_id:pay_id,
                        gianguoilon:gianguoilon,
                        giatreem:giatreem,
                        tour_id:tour_id,
                        room: a,
                        so_ngay : so_ngay,
                        date_start: ngaydi
                    },
                    success:function(data){
                        $('.check_adult').html(data[0]);
                        $('.check_child').html(data[1]);
                        $('.check_address').html(data[2]);
                        $('.check_phone').html(data[3]);
                        $('.check_name').html(data[4]);
                        if(data=="1"){
                            window.location='<?php echo base_url() ?>khachhang/show/'+cus_id+'';
                        }
                    }
                })
                $('#name').val('');
                $('#phone').val('');
                $('#request').val('');
                $('#address').val('');
                $('#pay_id').val('');
                $('#price_adult').val('');
                $('#price_child').val('');
            }
        });
        
        // Bắt đầu ajax thêm bình luận
        $('.add_comment').click(function(event) {
            /* Act on the event */
            var cus_id_coment = '<?= $this->session->userdata('cus_id'); ?>';
            var content = $('#coment_input').val();
            var tour_id = '<?= $Show_tours[0]['tour_id'] ?>';
            if(cus_id_coment == '')
            {
                $('.loi_noi_dung').html('<b>Bạn phải đăng nhập để thực hiện chức năng này</b>');
                $('.loi_noi_dung').css('display', 'block');
            }
            else if ($('#coment_input').val() == '') {
                $('.loi_noi_dung').html('<b>Bạn chưa nhập nội dung</b>');
                $('.loi_noi_dung').css('display', 'block');
            } 
            else{
                $('.loi_noi_dung').css('display', 'none');
                $.ajax({
                    url: 'http://localhost:8080/webdulich/Dulich/them_binhluan',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        cus_id: cus_id_coment,
                        tour_id: tour_id,
                        content: content
                    },
                    success: function(res)
                    {
                        if(res == '1')
                        {
                            $('#thanhcong').css('display', 'block');
                            $('#reload').load(location.href + " #reload>*");
                            $('#coment_input').val('');
                        }
                    }
                })
            }
            
        });
        // Kết thúc ajax thêm bình luận
        // Start ajax delete_coment
        $('body').on('click', '.xoa_coment', function(event) {

            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename');
            var coment_id = parentOjb.find('.id_sua_coment').val();    
            console.log(coment_id);
            $.ajax({
                url: 'http://localhost:8080/webdulich/Dulich/xoa_binhluan',
                type: 'POST',
                dataType: 'json',
                data: {coment_id: coment_id}
            })
            xoa.remove();

        });
        // End ajax delete_coment
        // Start ajax sua_coment
        $('body').on('click', '.sua_coment', function(event) {

            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename');
            var coment_id = parentOjb.find('.id_sua_coment').val();   
            var content = parentOjb.find('.text_sua_coment').val();  
            console.log(coment_id);
            $.ajax({
                url: 'http://localhost:8080/webdulich/Dulich/sua_binhluan',
                type: 'POST',
                dataType: 'json',
                data: {
                    coment_id: coment_id,
                    content : content
                }
            })

        });
        // End ajax sua_coment
        // Bắt đầu ajax tìm kiếm theo keyup
        $('.search_tour').keyup(function(event) {
            /* Act on the event */
            var tour_name = $('.search_tour').val();
            if(tour_name != '')
            {
                $('#ketqua_search').css('display', 'inline-block');
            }
            else
            {
                $('#ketqua_search').css('display', 'none');
            }
            console.log(tour_name);
            $.ajax({
                url: 'http://localhost:8080/webdulich/dulich/search_tour',
                type: 'POST',
                dataType: 'html',
                data: {tour_name: tour_name},
                success: function(res)
                {

                    $('#ketqua_search').html(res);
                }

            })
        });
        // Kết thúc ajax tìm kiếm theo keyup
        

    </script>

    

</body>

</html>