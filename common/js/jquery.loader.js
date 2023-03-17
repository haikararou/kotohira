$(function() {
	var h = $(window).height(); 
	$('#loader-bg ,#loader').height(h).css('display','block');
	$('.drawer-toggle').css({'opacity':'0'});
});
 
$(window).load(function () {
	$('#loader-bg').delay(900).fadeOut(800);
	$('#loader').delay(600).fadeOut(300);
	setTimeout(function(){
		$('.drawer-toggle').stop().animate({opacity:'1'},800);
	},500);
});

//10秒たったら強制的にロード画面を非表示
$(function(){
	setTimeout('stopload()',8000);
});
 
function stopload(){
	$('#loader-bg').delay(900).fadeOut(800);
	$('#loader').delay(600).fadeOut(300);
	setTimeout(function(){
		$('.drawer-toggle').stop().animate({opacity:'1'},800);
	},500);
}


$(window).on('load', function() {
    var url = $(location).attr('href');
    if(url.indexOf("?id=") != -1){
        var id = url.split("?id=");
        var $target = $('#' + id[id.length - 1]);
        if($target.length){
            var pos = $target.offset().top;
            $("html, body").animate({scrollTop:pos}, 1500);
        }
    }
});
