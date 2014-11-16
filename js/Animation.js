$(document).ready(function(){
	var selector = '.nav li';
	var time =500;

	$(selector).on('click', function(){
		$(selector).removeClass('active');
		$(this).addClass('active');
	})
 	$('#home').show(time).siblings().hide();
	$('#NAVhome').click(function () {
 		$('#home').show(time).siblings().hide(time);
	})
	$('#NAVbrand').click(function () {
		$(selector).removeClass('active');
 		$('#home').show(time).siblings().hide(time);
	})
	$('#NAVannual').click(function () {
 		$('#annual').show(time).siblings().hide(time);
	})
	$('#NAVabout').click(function () {
 		$('#about').show(time).siblings().hide(time);
	})
})