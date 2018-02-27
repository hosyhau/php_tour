<table class="table table-hover">
	<tbody >
		<label>Kết quả tìm kiếm</label>
		<label style="float: right">Có :<?= $sodong; ?>  kết quả</label>
		<?php foreach ($tour as $key => $value): ?>
			<tr>
				<th class="text-center"><a href="http://localhost:8080/webdulich/Dulich/Show/<?= $value['links'] ?>"><?= $value['tour_name'] ?></a></th>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>