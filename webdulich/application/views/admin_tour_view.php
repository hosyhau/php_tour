<?php
   // $this->session->unset_userdata('email');
 if($this->session->has_userdata('ad_name'))
{
       //redirect(base_url('Account/personal'),'refresh'); 
?>
<?php }else{
    redirect(base_url('dangnhap'),'refresh');   
?>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trang Quản Trị</title>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?= base_url() ?>public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>public/css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>jqueryUpload/js/vendor/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>jqueryUpload/js/jquery.fileupload.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.php">Quản Lý dữ liệu </a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.php">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Trang chủ</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text">Quản lý sản phẩm</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="<?= base_url() ?>/slider">slider</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/danhmuc">Danh mục</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/location">Địa điểm</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/room">room</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/tour">Tour</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/tour_detail">Tour_detail</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-file"></i>
          <span class="nav-link-text">Quản lý tổng hợp</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          <li>
            <a href="<?= base_url() ?>QLKhachhang">Quản lý user</a>
          </li>
          <li>
            <a href="<?= base_url() ?>coment">Quản lý bình luận</a>
          </li>
          <li>
            <a href="<?= base_url() ?>ql_book">Quản lý đơn hàng</a>
          </li>
          <li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">Menu Levels</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
            <ul class="sidenav-third-level collapse" id="collapseMulti2">
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-link"></i>
          <span class="nav-link-text">Link</span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link  user_dangxuat"  href="#">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
    <script>
        var link='<?php echo base_url() ?>';
        $('body').on('click', '.user_dangxuat', function(event) {
            $.ajax({
                url: link+'dangnhap/out',
                type: 'post',
                success:function(res){
                    
                    window.location="<?php echo base_url() ?>trangchu";
                }
            })
        });
    </script>
  </div>
</nav>
<div class="content-wrapper">
  <div class="container-fluid">
    <?php 
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        $tranghientai = end($uri);
        if($tranghientai=='tour')
        {
            $tranghientai=1;
        }
    ?>
    <div class="container">
      <h2 class="text-center">Quản lí Tour</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-inline">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Tour</th>
                            <th>Mô tả</th>
                            <th>Ảnh avatar</th>
                            <th>Trạng thái</th>
                            <th>Lựa chọn</th>
                        </tr>
                    </thead>
                    <tbody id="#reload">
                        <?php $i=1;  foreach ($tour as $key => $value): ?>
                            <tr class="rename_tour">
                                <td><?= $i; ?><i style="display: none;"><input class="id_tour_xoa" type="text" value="<?= $value['tour_id'] ?>"></i>
                                </td>
                                <td><?= $value['tour_name']?></td>
                                <td><?= $value['description']?></td>
                                <td><img width="60px" height="30px" src="<?= $value['avatar']?>" title="ảnh"></td>
                                <td>
                                    <select name="status" class="status_view" id="status_view">
                                        <?php if( ( $value['status'])==1){
                                            echo '<option value="1" selected="selected">Mở</option><option value="0">Đóng</option>';
                                        }else{
                                        echo '<option value="1">Mở</option><option value="0" selected="selected">Đóng</option>';
                                        } ?>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger xoa_tour">Xóa</button>
                                    <a href="http://localhost:8080/webdulich/index.php/tour/sua_tour/<?= $value['tour_id'] ?>"><button type="submit" class="btn btn-warning sua_tour">Sửa</button></a>
                                </td>
                            </tr>    
                        <?php $i++; endforeach ?>
                    </tbody>
                </table>
                <hr>
                <div class="col-lg-3 col-lg-offset-4">
                    <ul class="pagination an_khi_tim">
                        <?php if ($tranghientai!=1) { ?>
                            <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>tour/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                        <?php  } ?>
                        <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                            <?php if ($so==$tranghientai) { ?>
                               <li class="current active page-item"><a class="page-link"><?= $so ?></a></li> 
                           <?php  ?>
                        <?php }else { ?>
                            <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>tour/page/<?= $so; ?>"><?= $so; ?></a></li>
                        <?php }?>
                        <?php } ?>
                        <?php if ($tranghientai!=$sotrang) { ?>
                             <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>tour/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
                        <?php  } ?>
                    </ul>
                </div> <!-- End col-3 -->
            </div> <!-- End col-12 -->
        </div> <!-- End row -->
        <hr>
    </div>  <!-- End container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form>
                    <legend class="text-center">Tạo Tour mới</legend>
                    
                    <div id="thanhcong" style="display: none" class="alert alert-success form-gruop">
                   Thêm mới thành công  <span class="glyphicon glyphicon-ok"></span>
                    </div>

                    <div class="form-group">
                        <label for="">Tên Tour</label>
                        <input type="text" class="form-control" id="name_tour_input" placeholder="Nhập Tên Tour" name="name_tour">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_ten bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Địa điểm: </label>
                        <select id="local_tour_input">
                            <option value="">---</option>
                            <?php foreach ($diadiem as $key => $value): ?>
                                <option value="<?= $value['local_id']?>"><?= $value['local_name']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_diadiem bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Nhập mô tả</label>
                        <input type="text" class="form-control" id="content_tour_input" placeholder="Nhập mô tả" name="content_tour">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_mota bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Giảm giá</label>
                        <input type="number" class="form-control" id="discount_input" placeholder="Nhập % giảm giá" name="discount">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_giamgia bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Giá người lớn</label>
                        <input type="number" class="form-control" id="price_adult_input" placeholder="Nhập giá người lớn" name="price_adult">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_gianglon bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Giá trẻ em</label>
                        <input type="number" class="form-control" id="price_child_input" placeholder="Nhập giá trẻ em" name="price_child">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_giatrem bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Số ngày</label>
                        <input type="number" class="form-control" id="days_input" placeholder="Nhập số ngày" name="days">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_songay bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Link tour</label>
                        <input type="text" class="form-control" id="link_tour_input" placeholder="Nhập link tour" name="link_tour">
                    </div>
                        
                    <div class="form-group">
                        <label class="baoloi_link bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh avatar</label>
                        <input type="file" class="form-control" id="anh_avatar_input" placeholder="Nhập Tên Tour" name="files[]">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_avatar bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh mô tả 1</label>
                        <input type="file" class="form-control" id="anh_mota1_input" placeholder="Nhập Tên Tour" name="files[]">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_anh1 bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh mô tả 2</label>
                        <input type="file" class="form-control" id="anh_mota2_input" placeholder="Nhập Tên Tour" name="files[]">
                    </div>
                    
                    <div class="form-group">
                        <label class="baoloi_anh2 bao_loi" style="display: none"></label>
                    </div>

                    <div class="form-group">
                        <label for="">Trạng thái: </label>
                        <select name="status" id="status_tour_input">
                            <option value="1" selected="selected">Mở</option>
                            <option value="0">Đóng</option>
                        </select>
                    </div>

                    <button type="button" class="btn btn-primary add_tour">Tạo mới</button>
                    <button type="reset" class="btn btn-danger">Hủy bỏ</button>
                </form>
            </div> <!-- End col-6 -->
        </div>  <!-- End row -->
    </div>  <!-- End container -->
    <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
    <script>
        duongdan = '<?php echo base_url() ?>';
        // Bắt đầu thêm ảnh Avartar
        $('#anh_avatar_input').fileupload({
          url: duongdan+'index.php/slider/uploadfile1',
          dataType: 'json',
          done: function (e, data) {
              $.each(data.result.files, function (index, file) {
                  console.log(file.url);
                  anh_avatar= file.url;
              });
          }
          })
        // Kết thúc thêm ảnh Avartar
        // Bắt đầu thêm ảnh Mô tả 1
        $('#anh_mota1_input').fileupload({
          url: duongdan+'index.php/slider/uploadfile1',
          dataType: 'json',
          done: function (e, data) {
              $.each(data.result.files, function (index, file) {
                  console.log(file.url);
                  anh_mota1= file.url;
              });
          }
          })
        // Kết thúc thêm ảnh Mô tả 1
        // Bắt đầu thêm ảnh Mô tả 2
        $('#anh_mota2_input').fileupload({
          url: duongdan+'index.php/slider/uploadfile1',
          dataType: 'json',
          done: function (e, data) {
              $.each(data.result.files, function (index, file) {
                  console.log(file.url);
                  anh_mota2= file.url;
              });
          }
          })
        // Kết thúc thêm ảnh Mô tả 2
        // Bắt đầu ajax thêm mới tour
        $('.add_tour').click(function(event) {
            /* Act on the event */
            $.ajax({
                url: 'http://localhost:8080/webdulich/tour/them_tour',
                type: 'POST',
                dataType: 'json',
                data: {
                    name : $('#name_tour_input').val(),
                    id_local : $('#local_tour_input').val(),
                    content : $('#content_tour_input').val(),
                    disscont : $('#discount_input').val(),
                    price_adult : $("#price_adult_input").val(),
                    price_child : $("#price_child_input").val(),
                    days : $("#days_input").val(),
                    link : $("#link_tour_input").val(),
                    anh_avatar : anh_avatar,
                    anh_mota1 : anh_mota1,
                    anh_mota2 : anh_mota2,
                    status : $("#status_tour_input").val()
                },
                success:function(data){
                    $('.baoloi_ten').html(data[0]);
                    $('.baoloi_ten').css('display', 'block');
                    $('.baoloi_diadiem').html(data[1]);
                    $('.baoloi_diadiem').css('display', 'block');
                    $('.baoloi_mota').html(data[2]);
                    $('.baoloi_mota').css('display', 'block');
                    $('.baoloi_giamgia').html(data[3]);
                    $('.baoloi_giamgia').css('display', 'block');
                    $('.baoloi_gianglon').html(data[4]);
                    $('.baoloi_gianglon').css('display', 'block');
                    $('.baoloi_giatrem').html(data[5]);
                    $('.baoloi_giatrem').css('display', 'block');
                    $('.baoloi_songay').html(data[6]);
                    $('.baoloi_songay').css('display', 'block');
                    $('.baoloi_link').html(data[7]);
                    $('.baoloi_link').css('display', 'block');
                    if(data=='1'){
                        $('#reload').load(location.href + " #reload>*");
                        $('#thanhcong').css('display', 'block');
                        $('.baoloi_ten').css('display', 'none');
                        $('.baoloi_diadiem').css('display', 'none');
                        $('.baoloi_mota').css('display', 'none');
                        $('.baoloi_giamgia').css('display', 'none');
                        $('.baoloi_gianglon').css('display', 'none');
                        $('.baoloi_giatrem').css('display', 'none');
                        $('.baoloi_songay').css('display', 'none');
                        $('.baoloi_link').css('display', 'none');
                        
                    }
                    
                }
            })
        });
        //Kết thúc ajax thêm mới tour

        // Bắt đầu ajax xóa tour
        $('table').on('click', '.xoa_tour', function(event) {
        
            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename_tour');
            var id = parentOjb.find('.id_tour_xoa').val();            
            $.ajax({
                url: 'http://localhost:8080/webdulich/index.php/tour/xoa_tour',
                type: 'POST',
                dataType: 'json',
                data: {id: id}
            })
            xoa.remove();
        });
        // Kết thúc ajax xóa tour
    </script>
</div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <small>Copyright © Your Website 2017</small>
      </div>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>public/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="<?= base_url() ?>public/vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url() ?>public/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url() ?>public/vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>public/js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="<?= base_url() ?>public/js/sb-admin-datatables.min.js"></script>
  <script src="<?= base_url() ?>public/js/sb-admin-charts.min.js"></script>
</div>
</body>
</html>
