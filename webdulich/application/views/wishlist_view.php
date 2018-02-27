<!DOCTYPE html>
<html lang="en">
<head>
    <title> Xem chi tiết tour </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>customer/customer.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="<?= base_url() ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>js/easing.js"></script>
    <script src="<?= base_url() ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
    <link href="<?= base_url() ?>css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
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
                                        <?php if($this->session->has_userdata('cus_id')){ ?>
                                        <li class="dropdown">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $this->session->userdata('cus_name'); ?><b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    
                                                    <li><a href="<?= base_url() ?>khachhang/show/<?= $this->session->userdata('cus_id'); ?>">Quản lý đơn hàng</a></li>
                                                    <li><a href="<?= base_url() ?>khachhang/personal/<?= $this->session->userdata('cus_id'); ?>">Hồ sơ cá nhân</a></li>
                                                    <li><a href="#">Thông tin địa chỉ</a></li>
                                                    <li><a class="user_dangxuat" href="#">Đăng Xuất</a></li>
                                                </ul>
                                            </li>
                                        </li>
                                        <?php }else{ ?>
                                        <li><a href="#form-dangnhap" data-toggle="modal"><i class="fa fa-user" title="Đăng Nhập"  aria-hidden="true"></i> Đăng nhập</a></li>
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
        <div class="main main-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-center">Danh sách tour vừa xem</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tour</th>
                                    <th>Giá</th>
                                    <th>Số ngày</th>
                                    <th width="200px" >Hình ảnh</th>
                                    <th>Xem Thêm</th>
                                </tr>
                            </thead>
                           
                            <?php if(isset($_SESSION['wishlist'])){ ?>
                            <?php $i=1; foreach ($_SESSION['wishlist'] as $key => $value): ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $value['tour_name'] ?></td>
                                    <td><?= number_format($value['price_adult'])  ?> VNĐ</td>
                                    <td><?= $value['days'] ?></td>
                                    <td><img width="200px" height="80px" src="<?= $value['avatar'] ?>" alt="Ảnh mô tả"></td>
                                    <td><a href="<?php echo base_url() ?>Dulich/Show/<?= $value['links'] ?>" class="btn btn-danger">Đặt Tour</a></td>
                                </tr>
                            <?php $i++;; endforeach ?>
                                <?php } ?>
                            
                        </table>
                    </div>
                </div>
                <div class="text-center">
                    <a href="http://localhost:8080/webdulich/wishlist/xoa" type="button" class="btn btn-danger">Xóa lịch sử</a>
                </div>
            </div>

        </div>
        
        
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
                        window.location="<?php echo base_url() ?>wishlist";
                    }
                }
            })
            $('#Username').val('');
            $('#Passwork').val('');
        });
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