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
        if($tranghientai=='location')
        {
            $tranghientai=1;
        }
    ?>
  <div class="container">
  <h2 class="text-center">Quản lí Địa điểm</h2>
    <hr>
    <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Địa điểm</th>
            <th>Tên Danh mục</th>
            <th>Trạng thái</th>
            <th>Lựa chọn</th>
          </tr>
        </thead>
        <tbody id="reload_local">
          <?php $i=1; foreach ($diadiem as $key => $value): ?>
            <tr class="rename_local">
              <td><?= $i; ?><i style="display: none"><input type="text" class="id_local_input" value="<?= $value['local_id'] ?>"></i></td>
              <td><input class="form-control name_local_input" type="text" value="<?= $value['local_name'] ?>"></td>
              <td>
                <select class="cate_id_input_local">
                  <option value="<?= $value['cate_id'] ?>"><?= $value['cate_name'] ?></option>
                  <?php foreach ($danhmuc as $key => $value1): ?>
                    <option value="<?= $value1['cate_id'] ?>"><?= $value['cate_name'] ?></option>
                  <?php endforeach ?>
                </select>
              </td>
              <td>
                <select class="status_local_input">
                   <?php if( ( $value['local_status'])==1){
                                      echo '<option value="1" selected="selected">Mở</option><option value="0">Đóng</option>';
                                  }else{
                                  echo '<option value="1">Mở</option><option value="0" selected="selected">Đóng</option>';
                                  } ?>
                </select>
              </td>
              <td>
                              <button type="button" class="btn btn-danger xoa_local">Xóa</button>
                              <button type="button" class="btn btn-warning sua_local">Sửa</button>
                          </td>
            </tr>
          <?php $i++; endforeach ?>
        </tbody>
      </table>
      <hr>
            <div class="col-lg-3 col-lg-offset-4">
                <ul class="pagination an_khi_tim">
                    <?php if ($tranghientai!=1) { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/location/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                    <?php  } ?>

                    <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                        <?php if ($so==$tranghientai) { ?>
                           <li class="current page-item active"><a class="page-link"><?= $so ?></a></li> 
                       <?php  ?>
                    <?php }else { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/location/page/<?= $so; ?>"><?= $so; ?></a></li>
                    <?php }?>
                    <?php } ?>
                    <?php if ($tranghientai!=$sotrang) { ?>
                         <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/location/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
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
                    <legend class="text-center">Tạo Địa điểm</legend>
                    
                    <div id="thanhcong" style="display: none" class="alert alert-success form-gruop">
                    Thêm mới thành công  <span class="glyphicon glyphicon-ok"></span>
                    </div>

                    <div class="form-group">
                        <label for="local_add\
                        ">Tên địa điểm</label>
                        <input type="text" class="form-control" id="local_add" placeholder="Nhập địa điểm đến" name="local_add">
                    </div>
                    <div class="form-group">
                        <label id="loi_dia_diem" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục: </label>
                        <select name="danhmuc_tour" id="danhmuc_tour_local">
                            <option value="">---</option>
                            <?php foreach ($danhmuc as $key => $value): ?>
                                <option value="<?= $value['cate_id']?>"><?= $value['cate_name']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label id="loi_danh_muc" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái: </label>
                        <select name="status" id="local_status">
                            <option value="1" selected="selected">Mở</option>
                            <option value="0">Đóng</option>
                        </select>
                    </div>
                  
                    <button type="button" class="btn btn-primary add_local">Tạo mới</button>
                    <button type="reset" class="btn btn-danger">Hủy bỏ</button>
                </form>
            </div> <!-- End col-6 -->
        </div>  <!-- End row -->
    </div>  <!-- End container -->

    <script>
      $('.add_local').click(function(event) {
        /* Act on the event */
        $.ajax({
          url: 'http://localhost:8080/webdulich/index.php/location/them_dia_diem',
          type: 'POST',
                dataType: 'json',
          data: {name: $('#local_add').val(),
               cate_id: $('#danhmuc_tour_local').val(),
               status: $('#local_status').val()
            },
                success:function(data){
                    $('#loi_dia_diem').html(data[0]);
                    $('#loi_dia_diem').css('display', 'block');
                    $('#loi_danh_muc').html(data[1]);
                    $('#loi_danh_muc').css('display', 'block');
                    if(data=='1'){
                        $('#thanhcong').css('display', 'block');
                        $('#loi_danh_muc').css('display', 'none');
                        $('#loi_danh_muc').css('display', 'none'); 
                        $('#local_add').val('');
                        $('#danhmuc_tour_local').val('');
                        $('#local_status').val(1);
                    }
                }
        })
        .always(function() {
          $('#reload_local').load(location.href + " #reload_local>*");
        });
      });

      $('table').on('click', '.xoa_local', function(event) {
            xoa = $(this).parent().parent();
            var parentOjb = $(this).closest('.rename_local');
            var id = parentOjb.find('.id_local_input').val(); 
            console.log(id);           
            $.ajax({
                url: 'http://localhost:8080/webdulich/index.php/location/xoa_dia_diem',
                type: 'POST',
                dataType: 'json',
                data: {id: id}
            })
            xoa.remove();
    });
    //jquery sửa địa điểm
    $('table').on('click', '.sua_local', function(event) {
        xoa = $(this).parent().parent();
        var parentOjb = $(this).closest('.rename_local');
        var id_local = parentOjb.find('.id_local_input').val();
        var name_local = parentOjb.find('.name_local_input').val();
        var cate_id = parentOjb.find('.cate_id_input_local').val();
        var status_local = parentOjb.find('.status_local_input').val();
        console.log(id_local);
        console.log(name_local);
        console.log(cate_id);
        console.log(status_local);
        $.ajax({
            url: 'http://localhost:8080/webdulich/index.php/location/sua_dia_diem',
            type: 'POST',
            dataType: 'json',
            data: {id_local: id_local,
                name_local: name_local,
                cate_id: cate_id,
                status: status_local
                }
            })
    });
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
