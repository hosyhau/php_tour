<!DOCTYPE html>
<html lang="en">
<head>
	<title> Liên Hệ </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>customer/home.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>customer/3.css">
    <link rel="stylesheet" href="<?= base_url() ?>customer/1.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">
</head>
<body >
    <header>
        <div class="banner1">
            <!-- bắt đầu banner-inside -->
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
                                    <ul class="nav navbar-nav">
                                    <li><a href="<?= base_url() ?>trangchu" >Trang Chủ</a></li>
                                    <li><a href="<?= base_url() ?>dulich">Du Lịch</a></li>
                                    <li><a href="<?= base_url() ?>LienHe">LIÊN HỆ</a></li>
                                </ul>
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
                                  
                                  
                              </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
                <!-- end banner-navbar -->
        </div> <!-- end banner1 -->
    </header>
    <!-- END Header -->
    <!-- END Header -->
	
    <main>
        
        <div class="top-line-one">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>Thông tin liên hệ</h3><hr>
                        <div class="diachi">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                                    <label for=""><span class="fa fa-map-marker"></span> Địa Chỉ</label>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-10 col-lg-10">
                                    <p class="diachi-p">xxx-xxx-xxx</p>
                                </div>    
                            </div> <!-- end row -->
                        </div> <!-- end diachi -->
                        <div class="dienthoai">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                                    <label for=""><span class="fa fa-phone"></span> Điện Thoại</label>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-10 col-lg-10">
                                    <p class="diachi-p">0971 533 898</p>
                                </div>    
                            </div> <!-- end row -->
                        </div> <!-- end diachi -->
                        <div class="email">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                                    <label for=""><span class="fa fa-envelope"></span> Email</label>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-10 col-lg-10">
                                    <p class="diachi-p">Googlythattuyet@Gmail.com</p>
                                </div>    
                            </div> <!-- end row -->
                        </div> <!-- end diachi -->      
                    </div> <!-- end col:12 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end banner1 -->
        <div class="top-line-two">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.96010021009!2d105.80194390959187!3d21.02278043585441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1498204379073" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> <!-- end container -->
        </div> <!-- end banner2 -->
        <div class="top-line-three">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>Câu Hỏi Đề Xuất</h3>
                        <form action="#" method="POST" role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" class="form-control" id="" placeholder="Họ Tên*" required="">
                                    </div><div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="email" class="form-control" id="" placeholder="Địa Chỉ Email*" required="">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" class="form-control" id="" placeholder="Tiêu đề*" required="">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea name="" placeholder="Ghi Chú*" class="ghichu" required="" ></textarea>
                                    </div>
                                </div>
                                
                            </div>
                        
                            
                        
                            <button type="submit" class="btn btn-lg btn-primary">Gửi</button>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end banner3 -->
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
                        window.location="<?php echo base_url() ?>khachhang";
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
</body>
</html>