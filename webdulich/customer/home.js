 // Slide Banner
 $(function(){
 	/* test dang ky*/
 	/* end dang ky*/
 	/*Chinh slide banner7*/

 	$('.banner7 .click-moves p,.banner7 .click-moves.active p').slideUp();
 	$('.banner7 p.active').slideDown();
 	$('.banner7 .h3-top.active').addClass('before');
 	$('.h3-top').click(function(event) {
 		$('.banner7 .h3-top').removeClass('before');
	 	$('.banner7 .click-moves p,.banner7 .click-moves.active p').slideUp();
		$(this).next().slideToggle();
		$(this).addClass('before');

	 });
 	/*end banner7*/
 	/*scroll*/
 	$(window).scroll(function(event) {
 		vitrihientai= $('body').scrollTop();
 	//vitri=$('.banner1').offset().top;
	 	var vittri=$('.banner1').offset().top;
	 	console.log(vitrihientai);
 	})

 	
 	// Hàm tự chuyển slide : Sau 3s thì sẽ tự động chuyển sang slide mới.
	time = setInterval(function(){
		/*$('.banner-right').trigger('click'); // Hàm tự động click vào nút chuyển slide*/
		var sau= $('.banner1 .active').next();
	 	// Ket Hop Nut moves-right voi moves-color - Bat dau
	 	var vitri= $('.banner1 .moves-color').index()+1;
	 	if(vitri==$('.banner1 .banner-work-crossbar ul li').length){
	 		vitri=0;
	 	};
	 	$('.banner1 .banner-work-crossbar ul li').removeClass('moves-color');
	 	$('.banner1 .banner-work-crossbar ul li:nth-child('+(vitri+1)+')').addClass('moves-color');
	 	// Ket Hop Nut moves-right voi moves-color - Ket Thuc
	 	// Khi Click Moves-right thi chuyen sang slide tiep theo - Bat dau
	 	if(sau.length==0){
	 		$('.banner1 .active').addClass('moves-left').one('webkitAnimationEnd', function(event) {
 				$('.moves-left').removeClass('moves-left');
 			});
 			$('.banner-slide:first-child').addClass('moves-right').one('webkitAnimationEnd', function(event) {
	 			$('.banner1 .active').removeClass('active');
	 			$('.moves-right').addClass('active').removeClass('moves-right');
 			});
	 	}else{
	 		$('.banner1 .active').addClass('moves-left').one('webkitAnimationEnd', function(event) {
 				$('.moves-left').removeClass('moves-left');
 			});
	 		sau.addClass('moves-right').one('webkitAnimationEnd', function(event) {
	 			$('.banner1 .active').removeClass('active');
	 			$('.moves-right').addClass('active').removeClass('moves-right');
	 		});
	 	}
	},6000);
	 // 3000 là thời gian
 	//one('webkitAnimationEnd', function(event) {}); : câu lệnh này tức là khi mình thêm 1 Class vào một class. thì đợi khi class đó thêm và chuyển động xog sẽ thực hiện câu lệnh trog function
	 $('.banner-right').click(function(event) {
	 	var sau= $('.banner1 .active').next();
	 	// Ket Hop Nut moves-right voi moves-color - Bat dau
	 	var vitri= $('.moves-color').index()+1;
	 	if(vitri==$('.banner1 .banner-work-crossbar ul li').length){
	 		vitri=0;
	 	};
	 	$('.banner1 .banner-work-crossbar ul li').removeClass('moves-color');
	 	$('.banner1 .banner-work-crossbar ul li:nth-child('+(vitri+1)+')').addClass('moves-color');
	 	// Ket Hop Nut moves-right voi moves-color - Ket Thuc
	 	// Khi Click Moves-right thi chuyen sang slide tiep theo - Bat dau
	 	if(sau.length==0){
	 		$('.banner1 .active').addClass('moves-left').one('webkitAnimationEnd', function(event) {
 				$('.moves-left').removeClass('moves-left');
 			});
 			$('.banner-slide:first-child').addClass('moves-right').one('webkitAnimationEnd', function(event) {
	 			$('.banner1 .active').removeClass('active');
	 			$('.moves-right').addClass('active').removeClass('moves-right');
 			});
	 	}else{
	 		$('.banner1 .active').addClass('moves-left').one('webkitAnimationEnd', function(event) {
 				$('.moves-left').removeClass('moves-left');
 			});
	 		sau.addClass('moves-right').one('webkitAnimationEnd', function(event) {
	 			$('.banner1 .active').removeClass('active');
	 			$('.moves-right').addClass('active').removeClass('moves-right');
	 		});
	 	}
	 	// Khi Click Moves-right thi chuyen sang slide tiep theo - Ket Thuc
 		clearInterval(time); // Bỏ tự động chuyển Slide
	 });
	 $('.banner-left').click(function(event) {
	 	var truoc=$('.banner1 .active').prev();
	 	// Ket Hop Nut moves-right voi moves-color - Bat dau
	 	var vitri= $('.moves-color').index()+1;
	 	if(vitri==1){
	 		vitri=$('.banner1 .banner-work-crossbar ul li').length+1;
	 	};
	 	$('.banner1 .banner-work-crossbar ul li').removeClass('moves-color');
	 	$('.banner1 .banner-work-crossbar ul li:nth-child('+(vitri-1)+')').addClass('moves-color');
	 	// Ket Hop Nut moves-right voi moves-color - Ket Thuc
	 	// Khi Click Moves-right thi chuyen sang slide tiep theo - Bat dau
 		if(truoc.length==1){
 			$('.banner1 .active').addClass('moves-right1').one('webkitAnimationEnd', function(event) {
 				$('.moves-right1').removeClass('moves-right1');
 			});
	 		truoc.addClass('moves-left1').one('webkitAnimationEnd', function(event) {
	 			$('.banner1 .active').removeClass('active');
	 			$('.moves-left1').addClass('active').removeClass('moves-left1');
	 		});


	 	}else{
	 		$('.banner1 .active').addClass('moves-right1').one('webkitAnimationEnd', function(event) {
 				$('.moves-right1').removeClass('moves-right1');
 			});
	 		$('.banner-slide:last-child').addClass('moves-left1').one('webkitAnimationEnd', function(event) {
	 			$('.banner1 .active').removeClass('active');
	 			$('.moves-left1').addClass('active').removeClass('moves-left1');
	 		});
	 	}
	 	clearInterval(time); // Bỏ tự động chuyển Slide
	 });

	 // Click thanh tron ben duoi
	 $('.banner1 .banner-work-crossbar ul li').click(function(event) {
	 	clearInterval(time); // Bỏ tự động chuyển Slide
 		$('.banner1 .banner-work-crossbar ul li').removeClass('moves-color');
	 	$(this).addClass('moves-color');
	 	$('.active').addClass('moves-right1').one('webkitAnimationEnd', function(event) {
 				$('.moves-right1').removeClass('moves-right1');
			});
 		$('.banner-slide:nth-child('+($(this).index()+1)+')').addClass('moves-left1').one('webkitAnimationEnd', function(event) {
 			$('.banner1 .active').removeClass('active');
 			$('.moves-left1').addClass('active').removeClass('moves-left1');
 		});
	 });
	 
})  
// end slide banner

 