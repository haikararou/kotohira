$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
        $('.tel-link').each(function(){
            if($(this).is('img')) {
                var str = $(this).attr('alt');
                $(this).wrap('<a class="tel_js" href="tel:'+str.replace(/-/g,'')+'"><em></em></a>');
            } else {
                var str = $(this).text();
                $(this).replaceWith('<a class="tel_js" href="tel:'+str.replace(/-/g,'')+'"><em>' + str + '</em></a>');
            }
        });
    }
});
