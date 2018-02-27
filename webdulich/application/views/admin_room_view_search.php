

    		<table class="table table-hover">
    			<thead>
    				<tr>
    					<th>STT</th>
    					<th>Tên phòng</th>
    					<th>Giá/ngày</th>
    					<th>Loại</th>
    					<th>Trạng thái</th>
    					<th>Lựa chọn</th>
    				</tr>
    			</thead>
    			<tbody id="reload_search">
    				<?php $i=1; foreach ($phong as $key => $value): ?>
    				<tr class="rename">
    					<td><?= $i; ?><i style="display: none"><input type="text" value="<?= $value['room_id'] ?>" class="id_room"></i></td>
    					<td width="380"><input type="text" class="form-control name_view" value="<?= $value['room_name'] ?>">
    					</td>
						<td width="180"><input type="number" class="form-control price_view" value="<?= $value['price'] ?>">
						</td>
						<td width="80"><input type="number" class="form-control type_view" value="<?= $value['type'] ?>">
						</td>	
						<td>
                            <select name="status" class="status_view" id="status_view">
                                <?php if( ( $value['status'])==1){
                                    echo '<option value="1" selected="selected">Mở</option><option value="0">Đóng</option>';
                                }else{
                                echo '<option value="1">Mở</option><option value="0" selected="selected">Đóng</option>';
                                } ?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger xoa_phong">Xóa</button>
                            <button type="submit" class="btn btn-warning sua_phong">Sửa</button>
                        </td>
					</tr>
    				<?php $i++; endforeach ?>
    			</tbody>
    		</table>
    		