<!DOCTYPE html>
<html lang="en">
<head>
<?php 
   $uri = $_SERVER['REQUEST_URI'];
   $uri = explode('/', $uri);
   $tranghientai = end($uri);
    if($tranghientai=='Dulich' ||  $tranghientai=='dulich')
    {
   $tranghientai=1;
    }
?>
    <title> Xem Tour </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>//customer/customer.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">
    <style>
        select#sap_sep {
            width: 200px;
            margin-bottom: 13px;
        }
        .tim_tour:hover{
            cursor :pointer;
        }
    </style>
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
                                            </li>
                                        
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
											<input type="text" class="form-control search_tour" id="formGroupExampleInput" placeholder="Tìm kiếm">
										</fieldset>
									</form>
								</div>
                                <div class="col-lg-5 col-lg-offset-4" id="ketqua_search" style="margin-top: -10px; margin-left: 5px;"> 
                                    
                                </div> <!-- End col-6-offset-3 -->
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 check-list">
                        <div class="wp-top3-2">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="wp-top31">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center"><i class="fa fa-search pull-left"> 
                                                </i>Tìm Kiếm</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="top-search">
                                                    <form>
                                                        <fieldset class="form-group">
                                                            <label for="formGroupExampleInput">Điểm Đến</label>
                                                            <select id="cate_search" class="form-control">
                                                                <option value="0">Tất cả</option>
                                                                <?php foreach ($danhmuc as $key => $value2): ?>
                                                                    <option value="<?= $value2['cate_id'] ?>"><?= $value2['cate_name'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="formGroupExampleInput2">Giá</label>
                                                            <select id="price_search" class="form-control" >
                                                                <option value="0">-- Tất cả --</option>
                                                                <option value="1">Dưới 3 triệu</option>
                                                                <option value="2">3-5 triệu</option>
                                                                <option value="3">5-10 triệu</option>
                                                                <option value="4">10-20 triệu</option>
                                                                <option value="5">Trên 20 triệu</option>
                                                               
                                                            </select>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <input type="button" class="form-control btn btn-success loc_theo_cate" value="Lọc" >
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wp-top32">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center"> <i class="fa fa-list-ul pull-left"></i> Bạn Muốn Đi đâu</h3>
                                            </div>
                                            <div class="panel-body">
                                                <p><a href="http://localhost:8080/webdulich/Dulich"><img src="<?= base_url() ?>images/ten1.gif"> Tất cả</a></p>
                                                <?php foreach ($diadiem as $key => $value1): ?>
                                                <p class="tim_tour" data-id="<?= $value1['local_id'] ?>"><img src="<?= base_url() ?>images/ten1.gif" alt="">
                                                <?= $value1['local_name'] ?></p>
                                                <?php endforeach ?>
                                            </div>
                                        </div> 
                                    </div>
                                </div> <!-- end col:3 -->
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <div class="banner1-right">
                                        <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php $dem=0; ?>
                                                <?php foreach ($slider as $key => $value): ?>
                                                    <div class="item <?php if($dem==0){echo "active";$dem++;} ?>">
                                                    <img src="<?= $value['images'] ?>" alt="">
                                                </div>
                                                <?php endforeach ?>
                                            </div>
                                            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>
                                    </div> <!-- end banner_right -->

                                    <div class="banner2-right">
                                        <div class="banner-title"><p>Địa Điểm Du Lịch</p></div>
                                        <div  id="can_an1">
                                            <select id="sap_sep" class="form-control">
                                                <option value="0">Cũ đến mới</option>
                                                <option value="1">Mới đến cũ</option>
                                                <option value="2">Giá từ cao đến thấp</option>
                                                <option value="3">Giá từ thấp đến cao</option>
                                            </select>
                                        </div>
                                        <div  id="sau_sap_sep">
                                            <div class="row" id="can_chen">
                                            
                                                <?php foreach ($tour as $key => $value): ?>
                                                <div class="tours">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                        <div class="jumbotron"> 
                                                            <div class="img-main">
                                                                <div class="xanh"></div>
                                                                <img class="card-img-top" src="<?php echo $value['avatar'] ?>" width="100%" alt="<?php echo $value['tour_name'] ?>">
                                                            </div>
                                                            <input type="text" class="hidden" value="<?php echo $value['tour_id'] ?>">
                                                            <div class="tours-strong">
                                                                <div class="card-block">
                                                                    <h4 class="card-title"><?php echo $value['tour_name'] ?></h4>
                                                                    <p class="card-text">
                                                                        
                                                                            Thời gian: <?php echo $value['days'] ?> Ngày
                                                                    </p>
                                                                    <p class="card-text">
                                                                        <span class="check-code">Giá Chỉ: </span><span class="price"><?= number_format($value['price_adult'])  ?> VNĐ</span></p>
                                                                    <a href="<?php echo base_url() ?>Dulich/Show/<?php echo $value['links'] ?>" class="btn btn-success">Xem Chi Tiết</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                    </div><!-- endcol:4 -->
                                                </div> <!-- end tours -->
                                                <?php endforeach ?>
                                            </div> <!-- end row -->
                                        </div>
                                        <div class="text-center" id="can_an2">

                                
                                <div class="text-center">
                                    <ul class="pagination an_khi_tim">
                                        <?php if ($tranghientai!=1) { ?>
                                            <li><a href="<?php echo base_url(); ?>dulich/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                                        <?php  } ?>
                                        <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                                            <?php if ($so==$tranghientai) { ?>
                                               <li class="current active"><a><?= $so ?></a></li> 
                                           <?php  ?>
                                        <?php }else { ?>
                                            <li><a href="<?php echo base_url(); ?>dulich/page/<?= $so; ?>"><?= $so; ?></a></li>
                                        <?php }?>
                                        <?php } ?>
                                        <?php if ($tranghientai!=$sotrang) { ?>
                                             <li><a href="<?php echo base_url(); ?>dulich/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
                                        <?php  } ?>
                                    </ul>
                                </div> <!-- End col-3 -->
                            </div>
                        </div> <!-- end banner2-right -->
                    </div> <!-- end col:9 -->
                                
                            
                        </div> <!-- end row -->
                        
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
                        window.location="<?php echo base_url() ?>khachhang/dulich";
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
        $('body').on('click', '.user_dangxuat', function(event) {
            $.ajax({
                url: link+'Account/Out',
                type: 'post',
                success:function(res){
                    
                    window.location="<?php echo base_url() ?>trangchu";
                }
            })
            
            
        });
        // Bắt đầu Ajax tìm tour theo địa điểm
        $(document).on('click', '.tim_tour', function(event) {
            console.log($(this).data('id'));
            $('#can_an1').css('display', 'none');
            $('#can_an2').css('display', 'none');
            $.ajax({
                url: 'http://localhost:8080/webdulich/dulich/tim_theo_local',
                type: 'POST',
                dataType: 'html',
                data: {
                    id: $(this).data('id')
                },
                success: function(res)
                {
                    console.log(res);
                    $('#can_chen').html(res);    
                }
            }) 

        });
        // Kết thúc Ajax tìm tour theo địa điểm

        // Bắt đầu ajax sắp xếp

            $(document).on('change', '#sap_sep', function(event) {
                console.log($('#sap_sep').val());
                $.ajax({
                    url: 'http://localhost:8080/webdulich/dulich/sap_xep',
                    type: 'POST',
                    dataType: 'html',
                    data: {type: $('#sap_sep').val()},
                    success: function(res)
                    {
                        $('#sau_sap_sep').html(res);
                    }
                })
                
            });
            
        // Kết thúc ajax sắp xếp

        // Bắt đầu ajax tìm kiếm theo danh mục
            $('.loc_theo_cate').click(function(event) {
                /* Act on the event */
                console.log($('#cate_search').val());
                console.log($('#price_search').val());
                $('#can_an1').css('display', 'none');
                $('#can_an2').css('display', 'none');

                $.ajax({
                    url: 'http://localhost:8080/webdulich/dulich/tim_kiem_cate_price',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        cate_id: $('#cate_search').val(),
                        price: $('#price_search').val()
                    },success: function(res)
                    {
                        $('#can_chen').html(res);
                    }
                })
                
            });
        // Kết thúc ajax  tìm kiếm theo danh mục

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