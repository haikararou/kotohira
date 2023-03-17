
//ページ内リンク
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 800; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});



$(window).load(function () {
	$('#main').delay(10).animate({opacity:'1'},1500);
});
$(window).load(function () {
	$('#main_ph').delay(10).animate({opacity:'1','padding-top':'0'},1500);
});
$(window).load(function () {
	$(window).scroll(function (){
		$(".inview_block").each(function(){
			var imgPos = $(this).offset().top;    
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > imgPos - windowHeight + windowHeight/8){
				$(this).animate({opacity:'1','padding-top':'0px'},800);
			} else {
			}
		});
	});
});

jQuery(document).ready(function($) {
	if (window.matchMedia('(max-width: 600px)').matches) {
		$('#lead .inview_block').delay(500).animate({opacity:'1','padding-top':'0'},1500);
	};
});

jQuery(document).ready(function($) {
	if (window.matchMedia('(max-width: 600px)').matches) {
		$('#page_title.inview_block').delay(500).animate({opacity:'1','padding-top':'0'},1500);
	};
});


/*クロスフェード画像スライドショー*/
$(function(){
	$(window).load(function(){
		var setElm = $('.viewer'),
		setMaxWidth = 3000,
		setMinWidth = 320,
		fadeSpeed = 1500,
		switchDelay = 5000,
		sideNavi = 'off', // 'on' or 'off'
		sideHide = 'hide', // 'hide' or 'show'
		naviOpc = 0.5;

		setElm.each(function(){
			var targetObj = $(this),
			findUl = targetObj.find('ul'),
			findLi = targetObj.find('li'),
			findLiFirst = targetObj.find('li:first');

			findLi.css({display:'block',opacity:'0',zIndex:'99'});
			findLiFirst.css({zIndex:'100'}).stop().animate({opacity:'1'},fadeSpeed);

			function timer(){
				setTimer = setInterval(function(){
					slideNext();
				},switchDelay);
			}
			timer();

			function slideNext(){
				findUl.find('li:first-child').not(':animated').animate({opacity:'0'},fadeSpeed).next('li').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).end().appendTo(findUl).css({zIndex:'99'});
			}
			function slidePrev(){
				findUl.find('li:first-child').not(':animated').css({zIndex:'99'}).animate({opacity:'0'},fadeSpeed).siblings('li:last-child').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).prependTo(findUl);
			}
			targetObj.css({width:setMaxWidth,display:'block'});

			// メイン画像をベースにエリアの幅と高さを設定
			var setLiImg = findLi.find('img'),
			baseWidth = setLiImg.width(),
			baseHeight = setLiImg.height();

			// レスポンシブ動作メイン
			function imgSize(){
				var windowWidth = parseInt($(window).width());
				if(windowWidth >= setMaxWidth) {
					targetObj.css({width:setMaxWidth,height:baseHeight});
					findUl.css({width:baseWidth,height:baseHeight});
					findLi.css({width:baseWidth,height:baseHeight});
				} else if(windowWidth < setMaxWidth) {
					if(windowWidth >= setMinWidth) {
						targetObj.css({width:'100%'});
						findUl.css({width:'100%'});
						findLi.css({width:'100%'});
					} else if(windowWidth < setMinWidth) {
						targetObj.css({width:setMinWidth});
						findUl.css({width:setMinWidth});
						findLi.css({width:setMinWidth});
					}
					var reHeight = setLiImg.height();
					targetObj.css({height:reHeight});
					findUl.css({height:reHeight});
					findLi.css({height:reHeight});
				}
			}
			$(window).resize(function(){imgSize();}).resize();

			// サイドナビボタン（有り無し）
			var agent = navigator.userAgent;
			if(sideNavi == 'on'){
				targetObj.append('<a href="javascript:void(0);" class="btnPrev"></a><a href="javascript:void(0);" class="btnNext"></a>');
				var btnPrev = targetObj.find('.btnPrev'),btnNext = targetObj.find('.btnNext'),btnPrevNext = targetObj.find('.btnPrev,.btnNext');

				if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1){
					btnPrevNext.css({opacity:naviOpc});
				} else {
					btnPrevNext.css({opacity:naviOpc}).hover(function(){
						$(this).stop().animate({opacity:naviOpc+0.2},200);
					},function(){
						$(this).stop().animate({opacity:naviOpc},200);
					});
				}

				if(sideHide == 'hide'){
					if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1){
						btnPrevNext.css({visibility:'visible'});
					} else {
						btnPrevNext.css({visibility:'hidden'});
						targetObj.hover(function(){
							btnPrevNext.css({visibility:'visible'});
						},function(){
							btnPrevNext.css({visibility:'hidden'});
						});
					}
				}

				btnPrev.click(function(){switchPrev();});
				btnNext.click(function(){switchNext();});
			}

			// ボタン移動動作
			function switchNext(){
				findLi.not(':animated').parents('ul').each(function(){
					clearInterval(setTimer);
					slideNext();
					timer();
				});
			}
			function switchPrev(){
				findLi.not(':animated').parents('ul').each(function(){
					clearInterval(setTimer);
					slidePrev();
					timer();
				});
			}

		});
	});
});



//フッターアコーディオン
$(function(){
	$("#acMenu").on("click", function() {
		$(this).next().slideToggle(400);
		$("#acMenu").toggleClass("acMenuOpen");
	});
});

jQuery(document).ready(function($) {
	if (window.matchMedia('(max-width: 600px)').matches) {
		$("#footer_link").slideUp();
		$("#acMenu").removeClass("acMenuOpen");
	} else {
		$("#footer_link").slideDown();
		$("#acMenu").addClass("acMenuOpen");
	};
});


//モバイルナビパネル
$(function(){
	$("#panel-btn").on("click", function() {
		$("#panel-btn-icon").toggleClass("close");
		$("header .panel").slideToggle(400);
	});
});




//ユーザーエージェントを取得しclassを付与

// 変数
var agent       = navigator.userAgent; // ユーザーエージェント
var htmlElement = document.documentElement; // html要素

// UserAgentで振り分けてhtmlにclassを振る
if (navigator.platform.search("Mac") != -1) { htmlElement.className += ' mac'; }
if(agent.search("Windows") != -1){
    htmlElement.className += ' win';
    if((agent.search("Trident") != -1) || ((agent.search("MSIE") != -1))) {
        htmlElement.className += ' ie';
        if(agent.search("Trident") != -1) { htmlElement.className += ' gte_ie8'; }
        if(agent.search("Trident") == -1) { htmlElement.className += ' lte_ie8'; }
        if(agent.search("MSIE 7") != -1){ htmlElement.className += ' ie7'; }
        if(agent.search("MSIE 8") != -1){ htmlElement.className += ' ie8'; }
        if(agent.search("MSIE 9") != -1){ htmlElement.className += ' ie9'; }
        if(agent.search("MSIE 10") != -1){ htmlElement.className += ' ie10'; }
        if(agent.search("Trident/7") != -1){ htmlElement.className += ' ie11'; }
    }
}
if((agent.search("Chrome") != -1) && (agent.search("OPR") == -1)){ htmlElement.className += ' chrome'; }
if((agent.search("Safari") != -1) && (agent.search("Chrome") == -1) && (agent.search("OPR") == -1) && (agent.search("Presto") == -1)) { htmlElement.className += ' safari'; }
if(agent.search("Firefox") != -1) { htmlElement.className += ' firefox'; }
if(agent.search("iPad") != -1){ htmlElement.className += ' ipad'; }
if(agent.search("iPhone") != -1){ htmlElement.className += ' iphone'; }
if(agent.search("Android") != -1){ htmlElement.className += ' android'; }




jQuery(document).ready(function($) {
	if (window.matchMedia('(min-width: 900px)').matches) {
		$(function() {
			$("#page-tab li").click(function() {
				var num = $("#page-tab li").index(this);
				$(".tab_wrap").addClass('disnon');
				$(".tab_wrap").eq(num).removeClass('disnon');
				$("#page-tab li").removeClass('select');
				$(this).addClass('select')
			});
		});
	};
});



//サブナビの固定
jQuery(function($) {
  
var nav    = $('#subNav'),
    offset = nav.offset();
  
$(window).scroll(function () {
  if($(window).scrollTop() > offset.top) {
    $('body').addClass('fixed');
  } else {
    $('body').removeClass('fixed');
  }
});
  
});