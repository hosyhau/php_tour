<?php 
	
	// lay danh sach danh muc
	$sql_cat = "SELECT * FROM category";
	$query_cat = mysqli_query($conn,$sql_cat);
	$img_name = '';
	if (!empty($_FILES['image'])) {
		$file = $_FILES['image'];
		if (move_uploaded_file($file['tmp_name'], '../uploads/'.$file['name'])) {
			$img_name  = $file['name'];
		}
	}

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$catId = $_POST['catId'];
		$price = $_POST['price'];
		$sale_price = $_POST['sale_price'];
		$status = $_POST['status'];
		$created_at = date('Y-m-d');

		//bước 3 : Viết câu lệnh truy vấn
		$sql = "INSERT INTO product(name, catId,image,status,created_at) VALUES('$name','$catId','$img_name','$status','$created_at')";
		//bước 4 : Thực hiên câu lệnh truy vấn
		$query = mysqli_query($conn,$sql);

		// echo $sql;die;
		if($query){
			echo '<script>alert("Thêm mới thành công !!!");location.href="index.php?module=product&view=list"</script>';
		}else{
			echo '<script>alert("Thêm mới không thành công !!!");location.href="index.php?module=product&view=list"</script>';
		}

		//var_dump($sql_cate_post);
	}

 ?>


<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới sản phẩm</h3>
	</div>
	<div class="panel-body">
		<p>
			<a href="index.php?module=category&view=list" class="btn btn-success">Về danh sách</a>
		</p>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="usr">Tên Sản phẩm:</label>
				<input type="text" class="form-control" id="usr" name="name">
			</div>
			<div class="form-group">
				<label for="pwd">Tên danh mục:</label>
				<select name="catId" id="catId" class="form-control" required>
					<option value="">Không có</option>
				<?php while($cat = mysqli_fetch_assoc($query_cat)) : ?>
					<option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
				<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="price">Giá:</label>
				<input type="number" class="form-control" id="price" name="price">
			</div>
			<div class="form-group">
				<label for="price">Giá khuyến mãi:</label>
				<input type="number" class="form-control" id="price" name="sale_price">
			</div>
			<div class="form-group">
				<label for="image">Hình ảnh:</label>
				<input type="file" class="form-control" id="image" name="image">
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