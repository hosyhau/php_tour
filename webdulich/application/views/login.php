<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="" >
          <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input class="form-control" id="ursername" type="text" placeholder="Nhập tên tài khoản" name="username">
            
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input class="form-control" id="password" type="password" placeholder="Nhập mật khẩu" name="password">
            <p class="baoloi_user text-center"></p>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Nhớ mật khẩu</label>

            </div>
          </div>
          <button type="button" class="btn btn-primary btn-block dangnhap">Đăng nhập</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>public/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script>
    $('.dangnhap').click(function(event) {
      /* Act on the event */
      $.ajax({
        url: '<?php echo base_url(); ?>index.php/dangnhap/dang_nhap',
        type: 'POST',
        // dataType: 'json',
        data: {
          ur_name: $('#ursername').val(),
          password : $('#password').val()
        },
        success:function(res){
          if(res){
            $('.baoloi_user').html(res);
            
            $('.baoloi_user').css('color', 'red');

          }else{
            window.location="<?= base_url() ?>danhmuc"; 
          }

        }
      })
      
    });
  </script>
</body>


<!-- Mirrored from file:///C:/Users/ADMIN/Downloads/startbootstrap-sb-admin-gh-pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2017 13:15:32 GMT -->
</html>
