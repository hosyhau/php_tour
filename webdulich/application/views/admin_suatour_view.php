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
    <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <form>
              <legend class="text-center">Sửa Danh mục</legend>
              <i style="display: none"><input type="text" value="<?= $tour[0]['tour_id'] ?>" id="id_tour_sua"></i>
              <div class="form-group">
                  <label for="">Tên Tour</label>
                  <input type="text" class="form-control" id="name_tour_sua" value="<?= $tour[0]['tour_name'] ?>">
              </div>
              
              <div class="form-group">
                  <label for="">Địa điểm: </label>
                  <select id="local_tour_sua">
                      <option value="<?= $tour[0]['local_id'] ?>"><?= $tour[0]['local_name'] ?></option>
                      <?php foreach ($diadiem as $key => $value1): ?>
                        <option value="<?= $value1['local_id'] ?>"><?= $value1['local_name'] ?></option>
                      <?php endforeach ?>
                  </select>
              </div>
              
              <div class="form-group">
                  <label for="">Nhập mô tả</label>
                  <input type="text" class="form-control" id="content_tour_sua" value="<?= $tour[0]['description'] ?>">
              </div>

              <div class="form-group">
                  <label for="">Giảm giá</label>
                  <input type="number" class="form-control" id="discount_sua" value="<?= $tour[0]['discount'] ?>">
              </div>

              <div class="form-group">
                  <label for="">Giá người lớn</label>
                  <input type="number" class="form-control" id="price_adult_sua" value="<?= $tour[0]['price_adult'] ?>">
              </div>

              <div class="form-group">
                  <label for="">Giá trẻ em</label>
                  <input type="number" class="form-control" id="price_child_sua" value="<?= $tour[0]['price_chil'] ?>">
              </div>

              <div class="form-group">
                  <label for="">Số ngày</label>
                  <input type="number" class="form-control" id="days_sua" value="<?= $tour[0]['days'] ?>">
              </div>
              
              <div class="form-group">
                  <label for="">Link tour</label>
                  <input type="text" class="form-control" id="link_tour_sua" value="<?= $tour[0]['links'] ?>">
              </div>

              <div class="form-group">
                  <label for="">Ảnh avatar</label>
                  <input type="file" class="form-control" id="anh_avatar_sua" placeholder="Nhập Tên Tour" name="files[]">
                  <i style="display: none"><input type="text" id="avatar_sua_2" value="<?= $tour[0]['avatar']?>"></i>
              </div>
              
              <div class="form-group">
                  <label for="">Ảnh mô tả 1</label>
                  <input type="file" class="form-control" id="anh_mota1_sua" placeholder="Nhập Tên Tour" name="files[]">
                  <i style="display: none"><input type="text" id="anh_mota1_sua_2" value="<?= $tour[0]['image1']?>"></i>
              </div>

              <div class="form-group">
                  <label for="">Ảnh mô tả 2</label>
                  <input type="file" class="form-control" id="anh_mota2_sua" placeholder="Nhập Tên Tour" name="files[]">
                  <i style="display: none"><input type="text" id="anh_mota2_sua_2" value="<?= $tour[0]['image2']?>"></i>
              </div>
              
              <div class="form-group">
                  <label for="">Trạng thái: </label>
                  <select name="status" id="status_tour_sua">
                      <option value="1" selected="selected">Mở</option>
                      <option value="0">Đóng</option>
                  </select>
              </div>

              <button type="button" class="btn btn-primary sua_tour">Sửa</button>
              <button type="reset" class="btn btn-danger">Làm lại</button>
          </form>
        </div>
    </div>
  </div>
  <script>
    duongdan = '<?php echo base_url() ?>';
        //Bắt đầu ajax upload file ảnh avatar
        linkavatar_sua = $('#anh_mota1_sua_2').val();
        linkanh1_sua = $('#anh_mota1_sua_2').val();
        linkanh2_sua = $('#anh_mota2_sua_2').val();
       $('#anh_avatar_sua').fileupload({
        url: duongdan+'index.php/tour/uploadfile1',
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                console.log(file.url);
                linkavatar_sua= file.url;
            });
        }
        })
        //Kết thúc ajax upload file ảnh avatar
        //Bắt đầu ajax upload file ảnh mô tả 1
        $('#anh_mota1_sua').fileupload({
        url: duongdan+'index.php/tour/uploadfile2',
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                linkanh1_sua= file.url;
            });
        }
        })
        //Kết thúc ajax upload file ảnh mô tả 1
        //Bắt đầu ajax upload file ảnh mô tả 2
        $('#anh_mota2_sua').fileupload({
        url: duongdan+'index.php/tour/uploadfile3',
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                console.log(file.url);
                linkanh2_sua= file.url;
            });
        }
        })
    // Bắt đầu ajax sửa tour
    $('.sua_tour').click(function(event) {
            /* Act on the event */
            $.ajax({
                url: 'http://localhost:8080/webdulich/tour/sua_tour1',
                type: 'POST',
                dataType: 'json',
                data: {
                  id : $('#id_tour_sua').val(),
                    name : $('#name_tour_sua').val(),
                    id_local : $('#local_tour_sua').val(),
                    content : $('#content_tour_sua').val(),
                    disscont : $('#discount_sua').val(),
                    price_adult : $("#price_adult_sua").val(),
                    price_child : $("#price_child_sua").val(),
                    days : $("#days_sua").val(),
                    link : $("#link_tour_sua").val(),
                    anh_avatar : linkavatar_sua,
                    anh_mota1 : linkanh1_sua,
                    anh_mota2 : linkanh2_sua,
                    status : $("#status_tour_sua").val()
                },
            })
            window.location="http://localhost:8080/webdulich/tour";
        });
        // Kết thúc ajax sửa tour
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
