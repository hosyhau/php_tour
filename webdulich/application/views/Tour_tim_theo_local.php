
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
                                <span class="check-code">Giá Chỉ:</span><span class="price"><?php echo $value['price_adult'] ?> VNĐ</span></p>
                                <a href="<?php echo base_url() ?>Dulich/Show/<?php echo $value['links'] ?>" class="btn btn-success">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div><!-- endcol:4 -->
            </div> <!-- end tours -->
        <?php endforeach ?>