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
        if($tranghientai=='danhmuc')
        {
            $tranghientai=1;
        }
    ?>
    <div class="container">
      <h2 class="text-center">Quản lí danh mục</h2>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Tên Danh mục</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Lựa chọn</th>
                    </tr>
                </thead>
                <tbody  id="reload">

                <?php $i=1; foreach ($dulieu as $key => $value): ?>
                    <tr class="rename">
                        <td><?= $i ?></td>
                        <td style="display: none;"><input name="id" type="text" class="form-control id_view" id="id_view" value="<?= $value['cate_id']?> "></td>
                        <td><div class="form-group">
                                <input type="text" class="form-control name_view" name="name" id="name_view" value="<?= $value['cate_name']?> "></div> </td>
                        <td><div class="form-group">
                            <input type="text" class="form-control content_view" name="content" id="content_view" value="<?= $value['contents']?> "></div>  </td>
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
                            <button type="submit" class="btn btn-danger xoa_cate">Xóa</button>
                            <button type="submit" class="btn btn-warning sua_cate">Sửa</button>
                        </td>
                    </tr>
                <?php $i++; endforeach ?>
                </tbody>
            </table>
            <hr>
            <div class="col-lg-3 col-lg-offset-5">
                <ul class="pagination an_khi_tim">
                    <?php if ($tranghientai!=1) { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/danhmuc/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                    <?php  } ?>
                    <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                        <?php if ($so==$tranghientai) { ?>
                           <li class="current active page-item"><a class="page-link"><?= $so ?></a></li> 
                       <?php  ?>
                    <?php }else { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/danhmuc/page/<?= $so; ?>"><?= $so; ?></a></li>
                    <?php }?>
                    <?php } ?>
                    <?php if ($tranghientai!=$sotrang) { ?>
                         <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/danhmuc/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
                    <?php  } ?>
                </ul>
            </div> <!-- End col-3 -->
        </div>   <!-- End row  -->
        <hr>
    </div>  <!-- End container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form>
                    <legend>Tạo Danh mục mới</legend>
                
                    <div id="thanhcong" style="display: none" class="alert alert-success form-gruop">
                    Thêm danh mục thành công  <span class="glyphicon glyphicon-ok"></span>
                    </div>

                    <div class="form-group">
                        <label for="">Tên Danh mục</label>
                        <input type="text" class="form-control" id="name_add" placeholder="Nhập Tên Danh mục" name="name">
                    </div>
                    <div class="form-group">
                        <label id="loi_ten" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" class="form-control" id="content_add" placeholder="Nhập mô tả" name="content">
                    </div>
                    <div class="form-group">
                        <label id="loi_mota" class="bao_loi"></label>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái: </label>
                        <select name="status" id="status_add">
                            <option value="1" selected="selected">Mở</option>
                            <option value="0">Đóng</option>
                        </select>
                    </div>
                
                    <button type="button" class="btn btn-primary add_cate">Tạo mới</button>
                    <button type="reset" class="btn btn-danger">Hủy bỏ</button>
                </form>
            </div> <!-- End col-4 -->
        </div>  <!-- End row -->
    </div>  <!-- End container -->
    <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
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
