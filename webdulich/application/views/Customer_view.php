
<?php
   // $this->session->unset_userdata('email');
 if($this->session->has_userdata('email') && $this->session->has_userdata('password'))
{
       //redirect(base_url('Account/personal'),'refresh'); 
?>
<?php }else{
    redirect(base_url('trangchu'),'refresh');   
?>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>customer/customer.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">

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
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="banner-logo text-center"><img src="<?= base_url() ?>images/diamond_icn.png" alt=""></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
                                    <form>
                                        <fieldset class="form-group form-inline">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm">
                                            <button class="submit wp-search btn btn-info"><i class="fa fa-search"></i></button>
                                        </fieldset>
                                    </form>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="wp-h3top">Quản lý đơn hàng</h3>
                        <hr class="m-y-md">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <ul class="list-group">
                                    <li class="list-group-item  ">
                                        <a href="<?php echo base_url() ?>khachhang/show/<?php echo $this->session->userdata('cus_id'); ?>">Quản lý đơn hàng </a><span class="pull-right"><i class="fa fa-share" aria-hidden="true"></i></span></li>
                                    <li class="list-group-item wp-active"><a href=""></a>Hồ sơ cá nhân<span class="pull-right"><i class="fa fa-share" aria-hidden="true"></i></span></li>
                                    <li class="list-group-item">Thông tin địa chỉ<span class="pull-right"><i class="fa fa-share" aria-hidden="true"></i></span></li>
                                </ul>
                            </div> <!-- end col-sx-3 -->
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <div class="top3-content">
                                    <h4>Thông Tin Cơ Bản</h4> 
                                    <?php foreach ($hosocanhan as $key => $value): ?>
                                        
                                    
                                    <div class="wp-information">
                                        <input type="text" class="form-control hidden" name="cus_id" id="cus_id" value="<?php echo $value['cus_id'] ?>">
                                        <div class="wp-sum">
                                            <div class="wp-left">
                                                Họ tên
                                            </div>
                                            <div class="wp-between">
                                                <div class="personal"><?php echo $value['cus_name'] ?></div>
                                                <input type="text" class="form-control hidden" name="cus_name" id="cus_name" value="<?php echo $value['cus_name'] ?>">

                                            </div>
                                            <div class="wp-right">
                                                <i class="fa fa-pencil edit"> Chỉnh Sửa</i>
                                                <i class="fa fa-check save hidden"> Lưu</i>
                                            </div>
                                        </div>
                                    </div> <!-- end wp information -->
                                    <div class="wp-information">
                                        <div class="wp-sum">
                                            <div class="wp-left">
                                                Mật Khẩu
                                            </div>
                                            <div class="wp-between">
                                                <div class="personal">
                                                    <i class="fa fa-circle" aria-hidden="true"></i> 
                                                    <i class="fa fa-circle" aria-hidden="true"></i> 
                                                    <i class="fa fa-circle" aria-hidden="true"></i> 
                                                    <i class="fa fa-circle" aria-hidden="true"></i> 
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="edit-pass hidden clearfix">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <form action="" method="POST" role="form">
                                                                <div class="form-group">
                                                                    <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                                                                        <label for="">Mật khẩu cũ</label>
                                                                    </div>
                                                                    <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                                                        <input type="password" class="form-control" id="old_pass" placeholder="Mật khẩu cũ">
                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                                                                        <label for="">Mật khẩu mới</label>
                                                                    </div>
                                                                    <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                                                        <input type="password" class="form-control" id="new_pass" placeholder="Mật khẩu mới">
                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                                                                        <label for="">Nhập lại mật khẩu</label>
                                                                    </div>
                                                                    <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                                                        <input type="password" class="form-control" id="rep_pass" placeholder="Nhập lại mật khẩu mới">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group text-right">
                                                                        <label class="check_rep hidden"></label><br>
                                                                </div>
                                                                <div class="form-group text-center">
                                                                        <button type="button" class="btn btn-danger savepass text-center">Thay Đổi</button>
                                                                </div>
                                                                
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="wp-right">
                                                <i class="fa fa-pencil edit"> Chỉnh Sửa</i>
                                                <i class="fa fa-check save hidden"> Đóng</i>

        
                                            </div>
                                        </div>
                                    </div><!-- end wp information -->
                                    <div class="wp-information">
                                        <div class="wp-sum">
                                            <div class="wp-left">
                                               Số điện thoại
                                            </div>
                                            <div class="wp-between">
                                                <div class="personal"><?php echo $value['phone'] ?></div>
                                                
                                                <input type="text" class="form-control hidden" name="phonenumber" id="phonenumber" value="<?php echo $value['phone'] ?>">
                                            </div>
                                            <div class="wp-right">
                                                <i class="fa fa-pencil edit"> Chỉnh Sửa</i>
                                                <i class="fa fa-check save hidden "> Lưu</i>
                                            </div>
                                            </form>
                                        </div>
                                    </div> <!-- end wp information -->
                                    <div class="wp-information">
                                        <div class="wp-sum">
                                            <div class="wp-left">
                                               Gmail    
                                            </div>
                                            <div class="wp-between">
                                                <div class="personal"><?php echo $value['email'] ?></div>
                                                <input type="text" name="email" class="form-control hidden" id="" value="<?php echo $value['email'] ?>">
                                            </div>
                                        </div>
                                    </div> <!-- end wp information -->
                                    <div class="wp-information">
                                        <div class="wp-sum1">
                                            <div class="wp-left">
                                                Ngày Sinh
                                            </div>
                                            <div class="wp-between">
                                                <div class="personal"> <?= date('d/m/20y',strtotime($value['Birthday'])) ?></div>
                                                <input type="date" class="form-control hidden" name="Birthday" id="Birthday" value=" <?= date('d/m/20y',strtotime($value['Birthday'])) ?>">
                                            </div>
                                            <div class="wp-right">
                                                <i class="fa fa-pencil edit"> Chỉnh Sửa</i>
                                                <i class="fa fa-check save hidden"> Lưu</i>

                                            </div>
                                        </div>
                                    </div> <!-- end wp information -->
                                    <?php endforeach ?>
                                </div>
                            </div> <!-- end col-sx-9 -->
                        </div>
                    </div> <!-- end col:12 -->
                </div> <!-- end row -->
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
                                <form action="" method="POST">
                                
                                    <div class="form-group">
                                        <label for="Username">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="Username" placeholder="Tên đăng nhập" required="" pattern="[0-9a-z]{6,30}">
                                        <label for="Passwork">Mật khẩu</label>
                                        <input type="password" class="form-control" id="Passwork" placeholder="Mật khẩu" required="[0-9a-z]{6,30}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Đăng Nhập</button>
                                    <p class="text-muted modal_qmk">Quên Mật Khẩu?</p>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab">
                            <!-- Form đăng ký -->
                                <form action="Account" method="POST" role="form">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                                <label for="dangnhap">Tên Đăng Nhập (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                 <input type="text" class="form-control" id="dangnhap" name="tendangnhap" required="" pattern="[a-z0-9]{6,30}">
                                            </div>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                                <label for="matkhau" >Mật Khẩu (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                                                 <input type="password" class="form-control" id="matkhau" name="matkhau" required="" pattern="[a-z0-9]{6,30}">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                                <label for="matkhau" >Nhập lại mật khẩu (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                                                 <input type="password" class="form-control" id="testmatkhau" required="" pattern="[a-z0-9]{6,30}">
                                            </div>
                                        </div><br>
                                        
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                               <label for="form-email">Email (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                 <input type="gmail" class="form-control" id="form-email" required="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                               <label for="so-phone">Số điện thoại (*)</label>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                 <input type="text" class="form-control" id="so-phone" required="" pattern="[0-9]{10,11}">
                                            </div>
                                        </div><br>   
                                    </div> <!-- end form-group -->
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-push-1">
                                           <button type="submit" class="btn btn-success btn-block ">Đăng Ký</button>
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
        var link= '<?php echo base_url() ?>';
        //click chỉnh sửa
        $('body').on('click', '.edit', function(event) {
            console.log('hihi');
            $(this).parent().prev().children().removeClass('hidden');
            $(this).next().removeClass('hidden');
            $(this).addClass('hidden');
            $(this).parent().prev().find('.personal').addClass('hidden');
        });
        //click lưu
        $('body').on('click', '.save', function(event) { 
            var giatriinput=$(this).parent().prev().children('input').val();
            $(this).prev().removeClass('hidden');
            $(this).addClass('hidden');
            $(this).parent().prev().children().addClass('hidden');
            $(this).parent().prev().find('.personal').html(giatriinput).removeClass('hidden');
            /* Act on the event */
            $.ajax({
            url: link+'khachhang/Information',
            type: 'post',
            //dataType: 'json',
            data: {
                cus_id:$('#cus_id').val(),
                cus_name:$('#cus_name').val(),
                phone:$('#phonenumber').val(),
                Birthday:$('#Birthday').val(),
                password:$('#password').val()
            }
            })
            .done(function() {
               // console.log("success");
            })
            .fail(function() {
               // console.log("error");
            })
            .always(function() {
                //console.log("complete");
            });
        });
        // click đổi mk
        $('body').on('click', '.savepass', function(event) {
            var oldpass=$('#old_pass').val();
            var newpass=$('#new_pass').val();
            var reppass=$('#rep_pass').val();
            var cus_id=$('#cus_id').val();
            if(oldpass==''||newpass==''||reppass==''){
                $('.check_rep').removeClass('hidden');
                $('.check_rep').css("color","red");
                $('.check_rep').html('Vui lòng điền đầy đủ thông tin bên trên.');
            }else{

                $.ajax({
                    url: link+'khachhang/Edit_mk',
                    type: 'post',
                    //dataType: 'json',
                    data:{
                        old_pass: oldpass,
                        new_pass: newpass,
                        rep_pass: reppass,
                        cus_id: cus_id
                    },
                    success:function(res){
                        
                        $('.check_rep').removeClass('hidden');
                        $('.check_rep').html(res);
                        $('.check_rep').css("color","red");
                    }
                })
                .done(function() {
                    //console.log("success");
                })
                .fail(function() {
                   // console.log("error");
                })
                .always(function() {
                });
                $('#old_pass').val('');
                $('#new_pass').val('');
                $('#rep_pass').val('');
                
            }
            /* Act on the event */
        });
        
    </script>
    <!--  click dang xuat -->
    <script>
        var link= '<?php echo base_url() ?>';
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
