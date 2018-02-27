<?php 
	//bước 1 : kết nối csdl
	//bước 2 :Lấy dữ liệu
 	$sql_cate = "SELECT * FROM category";
    //bước 3 : Thực hiện câu lệnh truy vấn
    $sql_query = mysqli_query($conn,$sql_cate);
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$parentId = $_POST['parentId'];
		$status = $_POST['status'];

		//bước 3 : Viết câu lệnh truy vấn
		$sql = "INSERT INTO category(name, parentId,status) VALUES('$name','$parentId','$status')";
		//bước 4 : Thực hiên câu lệnh truy vấn
		$query = mysqli_query($conn,$sql);
		if($query){
			echo '<script>alert("Thêm mới thành công !!!");location.href="index.php?module=category&view=list"</script>';
		}else{
			echo '<script>alert("Thêm mới không thành công !!!");location.href="index.php?module=category&view=list"</script>';
		}

		//var_dump($sql_cate_post);
	}

 ?>

<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới danh mục</h3>
	</div>
	<div class="panel-body">
		<p>
			<a href="index.php?module=category&view=list" class="btn btn-success">Về danh sách</a>
		</p>
		<form action="" method="POST">
			<div class="form-group">
				<label for="usr">Tên danh mục:</label>
				<input type="text" class="form-control" id="usr" name="name">
			</div>
			<div class="form-group">
				<label for="pwd">Tên danh mục cha:</label>
				<select name="parentId" id="parent" class="form-control">
					<option value="0">Không có</option>
					<?php while($cat = mysqli_fetch_assoc($sql_query)) : ?>
					<option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
				<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
					<label for="pwd">Trạng thái:</label>

				<select class="form-control" name="status">
				  <option value="1">Kích hoạt</option>
				  <option value="0">Không kích hoạt</option>
				</select>
			</div>
			<div class="col-md-6">
				<button class="btn btn-success">Tạo mới</button>
	</div>
</form>
	</div>
</div>