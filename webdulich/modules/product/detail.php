<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$product = get_one('product','id',$id);

?>

<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Chi tiết sản phẩm</h3>
	</div>
	<div class="panel-body">
		<?php if($product) : ?>

			<table class="table">
		
				<tr>
					<td>ID</td>
					<td><?php echo $product['id'] ?></td>
				</tr>
				<tr>
					<td>Tên sapnr phẩm</td>
					<td><?php echo $product['name'] ?></td>
				</tr>
		</table>
		<?php endif; ?>
	</div>
</div>