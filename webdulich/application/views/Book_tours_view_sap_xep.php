<?php 
   $uri = $_SERVER['REQUEST_URI'];
   $uri = explode('/', $uri);
   $tranghientai = end($uri);
    if($tranghientai=='sap_xep' ||  $tranghientai=='Sap_xep')
    {
   $tranghientai=1;
    }
?>

<div class="row" id="can_chen">

	<?php foreach ($tour as $key => $value): ?>
		<div class="tours">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="jumbotron"> 
					<div class="img-main">
						<div class="xanh"></div>
						<img class="card-img-top" src="<?php echo $value['avatar'] ?>" width="100%" alt="<?php echo $value['tour_name'] ?>">
					</div>
					<input type="text" class="hidden" value="<?php echo $value['tour_id'] ?>">
					<div class="tours-strong">
						<div class="card-block">
							<h4 class="card-title"><?php echo $value['tour_name'] ?></h4>
							<p class="card-text">

								Thời gian: <?php echo $value['days'] ?> Ngày
							</p>
							<p class="card-text">
								<span class="check-code">Giá Chỉ:</span><span class="price"><?= number_format($value['price_chil'])  ?> VNĐ</span></p>
								<a href="<?php echo base_url() ?>Dulich/Show/<?php echo $value['links'] ?>" class="btn btn-success">Xem Chi Tiết</a>
							</div>
						</div>
					</div>
				</div><!-- endcol:4 -->
			</div> <!-- end tours -->
		<?php endforeach ?>
	</div> <!-- end row -->
	<div class="text-center" id="can_an2">
		<div class="col-lg-3 col-lg-offset-6">
			<ul class="pagination an_khi_tim">
				<?php if ($tranghientai!=1) { ?>
				<li><a href="<?php echo base_url(); ?>index.php/dulich/page/<?= $tranghientai-1; ?>">&laquo; Trước</a></li>
				<?php  } ?>
				<?php for ($so = 1; $so <=$sotrang ; $so++) { ?>
				<?php if ($so==$tranghientai) { ?>
				<li class="current active"><a><?= $so ?></a></li> 
				<?php  ?>
				<?php }else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/dulich/page/<?= $so; ?>"><?= $so; ?></a></li>
				<?php }?>
				<?php } ?>
				<?php if ($tranghientai!=$sotrang) { ?>
				<li><a href="<?php echo base_url(); ?>index.php/dulich/page/<?= $tranghientai+1; ?>">Tiếp &raquo;</a></li>
				<?php  } ?>
			</ul>
		</div> <!-- End col-3 -->
	</div>