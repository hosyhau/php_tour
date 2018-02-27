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
  <a class="navbar-brand" href="#">Quản Lý dữ liệu </a>
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
    <div class="container">
    <?php 
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        $tranghientai = end($uri);
        if($tranghientai=='room')
        {
            $tranghientai=1;
        }
    ?>
      <h2 class="text-center">Quản lý phòng</h2>
      <hr>
      <div class="row">
        <div style="float: right; width: 300px;">
          <button class="btn btn-succes form-control" disabled style="float:left;">Tìm kiếm</button><input type="text" class="form-control timkiem" placeholder="Nhập tên phòng cần tìm">
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên phòng</th>
              <th>Giá/ngày</th>
              <th>Loại</th>
              <th>Trạng thái</th>
              <th>Lựa chọn</th>
            </tr>
          </thead>
          <tbody id="reload">
                    <h4 class="text-center hien_khi_tim" style="display: none">Kết quả tìm kiếm</h4>
            <?php $i=1; foreach ($phong as $key => $value): ?>
            <tr class="rename">
              <td><?= $i; ?><i style="display: none"><input type="text" value="<?= $value['room_id'] ?>" class="id_room"></i></td>
              <td width="380"><input type="text" class="form-control name_view" value="<?= $value['room_name'] ?>">
              </td>
            <td width="180"><input type="number" class="form-control price_view" value="<?= $value['price'] ?>">
            </td>
            <td width="80"><input type="number" class="form-control type_view" value="<?= $value['type'] ?>">
            </td> 
            <td>
                            <select name="status" class="status_view form-control" id="status_view">
                                <?php if( ( $value['status'])==1){
                                    echo '<option value="1" selected="selected">Mở</option><option value="0">Đóng</option>';
                                }else{
                                echo '<option value="1">Mở</option><option value="0" selected="selected">Đóng</option>';
                                } ?>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger xoa_phong">Xóa</button>
                            <button type="button" class="btn btn-warning sua_phong">Sửa</button>
                        </td>
          </tr>
            <?php $i++; endforeach ?>
          </tbody>
        </table>
            <hr>
        <div class="col-lg-3 col-lg-offset-4">
                <ul class="pagination an_khi_tim">
                    <?php if ($tranghientai!=1) { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>room/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                    <?php  } ?>
                    <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                        <?php if ($so==$tranghientai) { ?>
                           <li class="current active page-item"><a class="page-link"><?= $so ?></a></li> 
                       <?php  ?>
                    <?php }else { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>room/page/<?= $so; ?>"><?= $so; ?></a></li>
                    <?php }?>
                    <?php } ?>
                    <?php if ($tranghientai!=$sotrang) { ?>
                         <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>room/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
                    <?php  } ?>
                </ul>
            </div> <!-- End col-3 -->
      </div> <!-- End row -->
        <hr>
    </div>  <!-- End container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form>
                    <legend>Tạo phòng mới</legend>
                
                    <div id="thanhcong" style="display: none" class="alert alert-success form-gruop">
                    Thêm phòng thành công  <span class="glyphicon glyphicon-ok"></span>
                    </div>

                    <div class="form-group">
                        <label for="">Tên phòng</label>
                        <input type="text" class="form-control" id="name_add" placeholder="Nhập Tên phòng" name="name">
                    </div>
                    <div class="form-group">
                        <label id="loi_ten" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Giá/ngày</label>
                        <input type="number" class="form-control" id="price_add" placeholder="Nhập giá">
                    </div>
                    <div class="form-group">
                        <label id="loi_gia" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Loại phòng</label>
                        <input type="number" class="form-control" id="type_add" placeholder="Nhập loại phòng">
                    </div>
                    <div class="form-group">
                        <label id="loi_phong" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái: </label>
                        <select id="status_add" class="form-control">
                            <option value="1" selected="selected">Mở</option>
                            <option value="0">Đóng</option>
                        </select>
                    </div>
                
                    <button type="button" class="btn btn-primary add_room">Tạo mới</button>
                    <button type="reset" class="btn btn-danger">Hủy bỏ</button>
                </form>
            </div> <!-- End col-4 -->
        </div>  <!-- End row -->
    </div>  <!-- End container -->
    <script>
      // Bắt đầu ajax thêm phòng
      $('.add_room').click(function(event) {
        /* Act on the event */
        $.ajax({
          url: '<?php echo base_url(); ?>room/them_phong',
          type: 'POST',
          dataType: 'json',
          data: {
            name: $('#name_add').val(),
            price: $('#price_add').val(),
            type: $('#type_add').val(),
            status: $('#status_add').val()
          },success:function(data){
          $('#loi_ten').html(data[0]);
          $('#loi_ten').css('display', 'block');
          $('#loi_gia').html(data[1]);
          $('#loi_gia').css('display', 'block');
          $('#loi_phong').html(data[2]);
          $('#loi_phong').css('display', 'block');
          if(data=='1'){
            $('#thanhcong').css('display', 'block');
            $('#loi_ten').css('display', 'none');
            $('#loi_gia').css('display', 'none');
            $('#loi_phong').css('display', 'none');
            $('#name_add').val('');
            $('#price_add').val('');
            $('#type_add').val('');
            $('#status_add').val(1);
            $('#reload').load(location.href + " #reload>*");
          }
          }
        })
      });
      // Kết thúc ajax thêm phòng
      // Start ajax delete_room
      $('table').on('click', '.xoa_phong', function(event) {
              xoa = $(this).parent().parent();
              var parentOjb = $(this).closest('.rename');
              var id = parentOjb.find('.id_room').val();            
              $.ajax({
                  url: '<?php echo base_url(); ?>room/xoa_phong',
                  type: 'POST',
                  dataType: 'json',
                  data: {id: id}
              })
              xoa.remove();
      
      });
      // End ajax delete_room
        // Start ajax update_room
        $('table').on('click', '.sua_phong', function(event) {
            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename');
            var id = parentOjb.find('.id_room').val();
            var name = parentOjb.find('.name_view').val();
            var price = parentOjb.find('.price_view').val();
            var type = parentOjb.find('.type_view').val();
            var status = parentOjb.find('.status_view').val();
            $.ajax({
                url: 'http://localhost:8080/webdulich/room/sua_phong',
                type: 'POST',
                dataType: 'json',
                data: {
                  id: id,
                    name: name,
                    price: price,
                    type: type,
                    status: status
                    }
                })
        });
        // End ajax update_room
        // Bắt đầu ajax tìm kiếm
      $('.timkiem').keyup(function(event) {
        /* Act on the event */
        var cantim = $('.timkiem').val();
            if(cantim!='')
            {
                $('.an_khi_tim').css('display', 'none');
                $('.hien_khi_tim').css('display', 'block');
                $.ajax({
                url: 'http://localhost:8080/webdulich/room/index',
                type: 'POST',
                dataType: 'html',
                data: {search: cantim},
                success:function(res){
                    var re = $('<div/>').append(res).find('#reload_search').html();
                    $('#reload').html(re);
                }
                })
            }
        else{
                $('#reload').load(location.href + " #reload>*");
                 $('.an_khi_tim').css('display', 'block');
                $('.hien_khi_tim').css('display', 'none');
            } 
      });
    // Kết thúc ajax tìm kiếm
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
