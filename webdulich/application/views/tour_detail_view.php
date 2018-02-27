<!DOCTYPE html>
<html lang="en">
<head>
	<title> Quản lý chi tiết Tour </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>jqueryUpload/js/vendor/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>jqueryUpload/js/jquery.fileupload.js"></script>
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
                        <li><a href="<?php echo base_url(); ?>index.php/tour_detail/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
                    <?php  } ?>
                    <?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
                        <?php if ($so==$tranghientai) { ?>
                           <li class="current active"><a><?= $so ?></a></li> 
                       <?php  ?>
                    <?php }else { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/tour_detail/page/<?= $so; ?>"><?= $so; ?></a></li>
                    <?php }?>
                    <?php } ?>
                    <?php if ($tranghientai!=$sotrang) { ?>
                         <li><a href="<?php echo base_url(); ?>index.php/tour_detail/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
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
</body>
</html>