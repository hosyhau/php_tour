<?php 
$datas = get_all('product');
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <a href="#">Dashboard</a>
</li>
<li class="breadcrumb-item active">Danh sách sản phẩm</li>
</ol>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách sản phẩm</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Ngày tạo</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
				
			</thead>
			<tbody>
			<?php if(count($datas)) : foreach($datas as $pro) : ?>
				<tr>
					<td style="vertical-align: middle;"><?php echo $pro['id'] ?></td>
					<td style="vertical-align: middle;">
						<img src="../uploads/<?php echo $pro['image']; ?>" alt="" width="60">
					</td>
					<td style="vertical-align: middle;"><?php echo $pro['name'] ?> </td>
					<td style="vertical-align: middle;"><?php echo number_format($pro['price'],3,'.',',') ?></td>
					<td style="vertical-align: middle;">
						<?php echo date('d-m-Y',strtotime($pro['created_at'])) ?>
					</td>
					<td style="vertical-align: middle;">
						<?php if($pro['status'] == 1) : ?>
							<span class="label label-success">kích hoạt</span>
						<?php else: ?>
							<span class="label label-danger">Chưa kích hoạt</span>
						<?php endif; ?>
					</td>
					<td style="vertical-align: middle;">
						<a href="index.php?module=product&view=detail&id=<?php echo $pro['id'] ?>" class="btn btn-xs btn-info">Xem</a>
						<a href="index.php?module=product&view=edit&id=<?php echo $pro['id'] ?>" class="btn btn-xs btn-success">Sửa</a>
						<a href="index.php?module=product&view=delete&id=<?php echo $pro['id'] ?>" class="btn btn-xs btn-danger">Xóa</a>
					</td>
			
				</tr>
			<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>