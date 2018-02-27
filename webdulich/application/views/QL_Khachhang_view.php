<!DOCTYPE html>
<html lang="en">
<head>
	<title> Quản lý thành viên </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Title</a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <?php 
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        $tranghientai = end($uri);
        if($tranghientai=='QLKhachhang')
        {
            $tranghientai=1;
        }
    ?>
    <div class="container">
    	<h2 class="text-center">Quản lý thành viên</h2>
    	<hr>
    	<div class="row">
    		<table class="table table-hover">
    			<thead>
    				<tr>
    					<th width="10">STT</th>
    					<th width="300">Tên khách hàng</th>
    					<th width="300">Email</th>
    					<th width="300">Địa chỉ</th>
    					<th>Trạng thái</th>
    					<th>Lựa chọn</th>
    				</tr>
    			</thead>
    			<tbody>
    			<?php $i=1; foreach ($khach as $key => $value): ?>
    				<tr class="rename">
    					<td><?= $i; ?><input style="display: none;" class="id_cus" type="text" value="<?= $value['cus_id'] ?>" ></td>
    					<td><?= $value['cus_name'] ?></td>
    					<td><?= $value['email'] ?></td>
    					<td><?= $value['address'] ?></td>
    					<td>
    						<select class="status_cus form-control">
                                <?php if( ( $value['status'])==1){
                                    echo '<option value="1" selected="selected">Mở</option><option value="0">Đóng</option>';
                                }else{
                                echo '<option value="1">Mở</option><option value="0" selected="selected">Đóng</option>';
                                } ?>
                            </select>
    					</td>
    					<td>
    						<button type="submit" class="btn btn-danger xoa_cus">Xóa</button>
                            <button type="submit" class="btn btn-warning sua_cus">Sửa</button>
    					</td>
    				</tr>
    			<?php $i++; endforeach ?>
    			</tbody>
    		</table>
    		<hr>
    		<div class="col-lg-3 col-lg-offset-4">
                <ul class="pagination an_khi_tim">
                    <?php if ($tranghientai!=1) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/customer/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                    <?php  } ?>
                    <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                        <?php if ($so==$tranghientai) { ?>
                           <li class="current active"><a><?= $so ?></a></li> 
                       <?php  ?>
                    <?php }else { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/customer/page/<?= $so; ?>"><?= $so; ?></a></li>
                    <?php }?>
                    <?php } ?>
                    <?php if ($tranghientai!=$sotrang) { ?>
                         <li><a href="<?php echo base_url(); ?>index.php/customer/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
                    <?php  } ?>
                </ul>
            </div> <!-- End col-3 -->
    	</div> <!-- End row -->

    </div> <!-- End container -->
    <script>
    	$('table').on('click', '.xoa_cus', function(event) {
	            xoa = $(this).parent().parent();
	            var parentOjb = $(this).closest('.rename');
	            var id = parentOjb.find('.id_cus').val();
	            console.log(id);            
	            $.ajax({
	                url: '<?php echo base_url(); ?>index.php/customer/xoa_cus',
	                type: 'POST',
	                dataType: 'json',
	                data: {id: id}
	            })
	            xoa.remove();
	    });
	    $('table').on('click', '.sua_cus', function(event) {
	            xoa = $(this).parent().parent();
	            var parentOjb = $(this).closest('.rename');
	            var id = parentOjb.find('.id_cus').val();
	            var status = parentOjb.find('.status_cus').val();
	            console.log(id);            
	            console.log(status);            
	            $.ajax({
	                url: '<?php echo base_url(); ?>index.php/customer/sua_cus',
	                type: 'POST',
	                dataType: 'json',
	                data: {
	                	id: id,
	                	status : status
	                }
	            })
	    });
    </script>
</body>

</html>