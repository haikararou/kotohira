$(function() {
    //ページトップへのスクロール
    $('#pagetop').click(function () {
        //id名#pagetopがクリックされたら、以下の処理を実行
        $("html,body").animate({scrollTop:0},"300");
    });
    //ページトップの出現
    $('#pagetop').hide();
    $(window).scroll(function () {
        if($(window).scrollTop() > 0) {
            //$('#pagetop').slideDown(600);
			$('#pagetop').fadeIn("slow");
        } else {
            //$('#pagetop').slideUp(600);
			$('#pagetop').fadeOut("slow");
        }
    });
    //ホバーイベント
    /*$("#pagetop").mouseover(function(){
        $(this).animate({
            bottom:"0px"
        },300);
    });
    $("#pagetop").mouseout(function(){
        $(this).animate({
            bottom:"-60px"
        },300);
    });*/
});
