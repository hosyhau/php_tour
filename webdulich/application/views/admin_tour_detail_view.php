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
        <a class="nav-link" href="<?php echo base_url() ?>trangchu">
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
            <a href="<?= base_url() ?>/slider">Quản Lý slider</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/danhmuc">Quản Lý Danh mục</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/location">Quản Lý Địa điểm</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/room">Quản Lý room</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/tour">Quản Lý Tour</a>
          </li>
          <li>
            <a href="<?= base_url() ?>/tour_detail">Quản Lý Tour_detail</a>
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
        if($tranghientai=='tour_detail')
        {
            $tranghientai=1;
        }
    ?>
  <div class="container-fluid">
    <h2 class="text-center">Danh sách chi tiết tour</h2>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tour</th>
              <th>Phòng</th>
              <th>Ngày</th>
              <th>Giờ</th>
              <th>Trạng thái</th>
              <th>Lựa chọn</th>
            </tr>
          </thead>
          <tbody id="reload">
            <?php $i=1; foreach ($chitiettour as $key => $value): ?>
              <tr class="rename">
                <td><?= $i ?></td>
                <td width="400px">
                  <input class="id_tour_sua" style="display: none" type="text" value="<?= $value['tour_id'] ?>">
                  <select class="form-control id_tour_xoa">
                    <option value="<?= $value['tour_id'] ?>"><?= $value['tour_name'] ?>
                    </option>
                    <?php foreach ($tour as $key => $value1): ?>
                      <option value="<?= $value1['tour_id'] ?>"><?= $value1['tour_name'] ?>
                    </option>
                    <?php endforeach ?>
                  </select>
                </td>
                <td width="400px">
                <input class="id_room_sua" style="display: none" type="text" value="<?= $value['room_id'] ?>">
                  <select class="form-control id_room_xoa">
                    <option value="<?= $value['room_id'] ?>"><?= $value['room_name'] ?>
                    </option>
                    <?php foreach ($rooms as $key => $value2): ?>
                      <option value="<?= $value2['room_id'] ?>"><?= $value2['room_name'] ?>
                    </option>
                    <?php endforeach ?>
                  </select>
                </td>
                <td width="160">
                  <input class="date_xoa" style="display: none" type="text" value="<?= $value['date_start'] ?>">
                  <input type="date" class="form-control date_sua" value="<?= $value['date_start'] ?>">
                </td>
                <td width="160">
                  <input class="time_xoa" style="display: none" type="text" value="<?= $value['Time_start'] ?>">
                  <input type="time" class="form-control time_sua" value="<?= $value['Time_start'] ?>">
                </td>
                <td width="120px">
                  <select class="form-control status_sua">
                                    <?php if( ( $value['status'])==1){
                                        echo '<option value="1" selected="selected">Mở</option><option value="0">Đóng</option>';
                                    }else{
                                    echo '<option value="1">Mở</option><option value="0" selected="selected">Đóng</option>';
                                    } ?>
                                </select>
                </td>
                <td>
                                <button type="submit" class="btn btn-danger xoa_chitiet_tour">Xóa</button>
                                <button type="submit" class="btn btn-warning sua_chitiet_tour">Sửa</button>
                            </td>
              </tr>
            <?php $i++; endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-lg-3 col-lg-offset-5">
                <ul class="pagination an_khi_tim">
                    <?php if ($tranghientai!=1) { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/tour_detail/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                    <?php  } ?>
                    <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                        <?php if ($so==$tranghientai) { ?>
                           <li class="current active page-item"><a class="page-link"><?= $so ?></a></li> 
                       <?php  ?>
                    <?php }else { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/tour_detail/page/<?= $so; ?>"><?= $so; ?></a></li>
                    <?php }?>
                    <?php } ?>
                    <?php if ($tranghientai!=$sotrang) { ?>
                         <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/tour_detail/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
                    <?php  } ?>
                </ul>
            </div> <!-- End col-3 -->
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <form action="" method="POST" role="form">
          <legend class="text-center">Thêm mới chi tiết tour</legend>
          
          <div id="thanhcong" style="display: none" class="alert alert-success form-gruop">
                    Thêm chi tiết tour thành công  <span class="glyphicon glyphicon-ok"></span>
                    </div>

          <div class="form-group">
            <label for="">Thêm Tour: </label>
            <select id="tour_id_add" class="form-control">
              <option value="">---</option>
              <?php foreach ($tour as $key => $value): ?>
                <option value="<?= $value['tour_id'] ?>"><?= $value['tour_name'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        
          <div class="form-group">
                        <label id="loi_tour" class="bao_loi"></label>
                    </div>

          <div class="form-group">
            <label for="">Thêm phòng: </label>
            <select id="room_id_add" class="form-control">
              <option value="">---</option>
              <?php foreach ($rooms as $key => $value1): ?>
                <option value="<?= $value1['room_id'] ?>"><?= $value1['room_name'] ?>
                  -loại: <?= $value1['type'] ?> người 
                </option>
              <?php endforeach ?>
            </select>
          </div>
          
          <div class="form-group">
                        <label id="loi_room" class="bao_loi"></label>
                    </div>

          <div class="form-group">
            <label for="">Thêm ngày: </label>
            <input type="date" class="form-control" id="date_add">
          </div>
          
          <div class="form-group">
                        <label id="loi_date" class="bao_loi"></label>
                    </div>

          <div class="form-group">
            <label for="">Thêm giờ: </label>
            <input type="time" class="form-control" id="time_add">
          </div>
          
          <div class="form-group">
                        <label id="loi_time" class="bao_loi"></label>
                    </div>

          <div class="form-group">
                        <label for="">Trạng thái: </label>
                        <select id="status_add" class="form-control">
                            <option value="1" selected="selected">Mở</option>
                            <option value="0">Đóng</option>
                        </select>
                    </div>

          <button type="button" class="btn btn-primary add_tour_detail">Thêm mới</button>
          <button type="reset" class="btn btn-danger">Tạo lại</button>
        </form>
      </div>
    </div>
  </div>
  <script>
    // Start ajax add_new_tour_detail
        $('.add_tour_detail').click( function(){
            $.ajax({
                url: 'http://localhost:8080/webdulich/index.php/tour_detail/them_chitiet_tour',
                type: 'POST',
                dataType: 'json',
                data: {
                      tour_id: $('#tour_id_add').val(),
                      room_id: $('#room_id_add').val(),
                      date: $('#date_add').val(),
                      time: $('#time_add').val(),
                      status: $('#status_add').val() 
                      },
                success:function(data){
                   $('#loi_tour').html(data[0]);
          $('#loi_tour').css('display', 'block');
          $('#loi_room').html(data[1]);
          $('#loi_room').css('display', 'block');
          $('#loi_date').html(data[2]);
          $('#loi_date').css('display', 'block');
          $('#loi_time').html(data[3]);
          $('#loi_time').css('display', 'block');
                   if(data=='1'){
                      $('#thanhcong').css('display', 'block');
                        $('#loi_tour').css('display', 'none');
                        $('#loi_room').css('display', 'none');
                        $('#loi_date').css('display', 'none');
                        $('#loi_time').css('display', 'none');
                        $('#tour_id_add').val('');
                        $('#room_id_add').val('');
                        $('#date_add').val('');
                        $('#time_add').val('');
                        status: $('#status_add').val(1);
                    }
                }
            })
            .always(function() {
                $('#reload').load(location.href + " #reload>*");
            });
        });
    // End ajax add_new_tour_detail
    // Start ajax delete_tour_detail
      $('table').on('click', '.xoa_chitiet_tour', function(event) {
              xoa = $(this).parent().parent();
              var parentOjb = $(this).closest('.rename');
              var tour_id = parentOjb.find('.id_tour_sua').val();            
              var room_id = parentOjb.find('.id_room_sua').val();
              var date = parentOjb.find('.date_xoa').val();
              var time = parentOjb.find('.time_xoa').val();       
              $.ajax({
                  url: 'http://localhost:8080/webdulich/index.php/tour_detail/xoa_chitiet_tour',
                  type: 'POST',
                  dataType: 'json',
                  data: {
                    tour_id: tour_id,
                      room_id: room_id,
                      date: date,
                      time: time
                  }
              })
              xoa.remove();
      });
    // End ajax delete_tour_detail
    // Start ajax update_tour_detail
        $('table').on('click', '.sua_chitiet_tour', function(event) {
            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename');
            var tour_id_sua = parentOjb.find('.id_tour_sua').val();
            var room_id_sua = parentOjb.find('.id_room_sua').val();
            var date_sua = parentOjb.find('.date_xoa').val();
            var time_sua = parentOjb.find('.time_xoa').val();
            var tour_id = parentOjb.find('.id_tour_xoa').val();
            var room_id = parentOjb.find('.id_room_xoa').val();
            var date = parentOjb.find('.date_sua').val();
            var time = parentOjb.find('.time_sua').val();
            var status = parentOjb.find('.status_sua').val();
            $.ajax({
                url: 'http://localhost:8080/webdulich/index.php/tour_detail/sua_chitiet_tour',
                type: 'POST',
                dataType: 'json',
                data: {
                  tour_id: tour_id,
                    room_id: room_id,
                    date: date,
                    time: time,
                    status: status,
                    tour_id_sua: tour_id_sua,
                    room_id_sua: room_id_sua,
                    date_sua: date_sua,
                    time_sua: time_sua
                    }
                })
        });
        // End ajax update_tour_detail
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
