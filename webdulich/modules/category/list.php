<?php 
    //bước 1:
    // bước 2 : Viết câu lệnh truy vấn
    $sql_cate = "SELECT * FROM category";
    //bước 3 : Thực hiện câu lệnh truy vấn
    $sql_query = mysqli_query($conn,$sql_cate);


 ?>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Danh sách danh mục</h3>
  </div>
  <div class="panel-body">
  <form action="" method="POST" class="form-inline" role="form">
  
    <div class="form-group">
      <input type="email" class="form-control" id="" placeholder="Input field">
    </div>
    
    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    <a href="index.php?module=category&view=add" class="btn btn-success">Thêm mới</a>
  </form>
    <table class="table">
  <thead>
    <tr>
      <th>Số thứ tự</th>
      <th>Tên danh mục</th>
      <th>Danh mục cha</th>
      <th>Trạng thái</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php $n=1; while ($row = mysqli_fetch_assoc($sql_query)) {
    // echo "Vong lap While lan thu: ".$n;
    // echo '<pre>';
    // print_r($row);

    // echo '</pre>';
   ?>
    <tr>
      <td><?php echo $n ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['parentId'] ?></td>
      <td><?php if($row['status'] == 1){
        echo '<label class="btn btn-success btn-xs">Kích hoạt</label>';
        }else{
        echo '<label class="btn btn-danger btn-xs">Không kích hoạt</label>';
          } ?></td>
      <td>
        <a href="" class="btn btn-primary btn-xs">Sửa</a>
        <a href="" class="btn btn-danger btn-xs">Xóa</a>
      </td>
    </tr>
  <?php $n++;} ?>
  </tbody>
</table>
  </div>
</div>