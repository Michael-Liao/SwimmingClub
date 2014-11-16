$(document).ready(function(){
	var selector = '.nav li';
	var time =500;

	$(selector).on('click', function(){
		$(selector).removeClass('active');
		$(this).addClass('active');
	})

	$.getJSON('home.json',function(data){
		$('.jumbotron').prepend(data.sub).prepend('<h1>'+ data.main +'</h1>');
		//$('.jumbotron').prepend(data.sub);
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
 		$('#error').hide();
	})
	$('#NAVlog').click(function () {
 		$('#login').show(time).siblings().hide(time);
	})
	$('#deactivated').click(function () {
 		$('#error').show(time);
	})
})
function openKCFinder(field) {
    var div = document.getElementById('kcfinder_div');
    if (div.style.display == "block") {
        div.style.display = 'none';
        div.innerHTML = '';
        return;
    }
    window.KCFinder = {
        callBack: function(url) {
            window.KCFinder = null;
            field.value = url;
            div.style.display = 'none';
            div.innerHTML = '';
        }
    };
    div.innerHTML = '<iframe name="kcfinder_iframe" src="/kcfinder/browse.php?type=images&dir=upload" ' +
        'frameborder="0" width="100%" height="100%" marginwidth="0" marginheight="0" scrolling="no" />';
    div.style.display = 'block';
}