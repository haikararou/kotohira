<!-- footer -->
<footer id="footer-wrapper">
    <div class="footer-top">
       	<h2>コトヒラ工業の製造受託に関する<br />ご相談はお気軽に<br />お問い合わせください。</h2>
        <div class="footer_sec column-flex">
            <div class="footer-topL">
                <div><span class="tel-link">0268-63-0004</span><small>受付時間／平日9:00～17:00</small></div>
            </div>
            <div class="footer-topR">
                <div><a href="<?php echo home_url('/'); ?>contact/oem" class="btn"><span class="btn-inner">製造受託についてのお問い合わせ</span></a></div>
            </div>
        </div>
    </div>
    <nav>
        <div id="acMenu" class="acMenuOpen">サービス一覧</div>
        <div class="footer_sec column-flex" id="footer_link">
            <div class="column-flex footer_navL">
                <div>
                    <h2>PRODUCTS</h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-clean">クリーンルーム機器</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-dust">小型集塵・集煙機器</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-sanitary">長靴・短靴衛生機器</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-jiasui">電解水関連機器</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-ozone">小型脱臭器</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-sterilize">殺菌ロッカー・殺菌庫</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-experimental">実験研究用機器</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-biotoilet">バイオトイレ</a></li>
                        <li><a href="<?php echo home_url('/'); ?>products/#link-ski">スキー関連製品</a></li>
                    </ul>
                </div>
                <div>
                    <h2>OEM</h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>oem/top/">製造受託トップ</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/flow/">社内一貫生産体制</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/facility/">設備</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/technical/">技術力</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/production_control/">生産管理・品質保証体制</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/case/">加工事例</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/faq/">よくある質問</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/interview/hashimoto/">インタビュー</a></li>
                    </ul>
                </div>
            </div>
            <div class="column-flex footer_navR">
                <div>
                    <h2>COMPANY</h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>company/outline/">会社概要</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/activity/">社外活動</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/society/">社会・環境活動(CSR)</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/procurement/">資材調達</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/health/">健康経営</a></li>
                    </ul>
                </div>
                <div>
                    <h2>RECRUIT</h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>recruit/">採用情報</a></li>
                        <li><a href="<?php echo home_url('/'); ?>recruit/graduates/">新卒採用</a></li>
                        <li><a href="<?php echo home_url('/'); ?>recruit/carrer/">キャリア採用</a></li>
                        <li><a href="<?php echo home_url('/'); ?>recruit/internship/">インターンシップ</a></li>
                    </ul>
                </div>
                <div>
                    <h2>CONTACT</h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
                        <li><a href="https://www.ipros.jp/search/catalog/%E3%82%B3%E3%83%88%E3%83%92%E3%83%A9%E5%B7%A5%E6%A5%AD/" class="link" target="_blank">カタログ請求</a></li>
                    </ul>
                </div>
                <div class="footer_nav_last">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>news/">新着情報</a></li>
                        <li><a href="<?php echo home_url('/'); ?>regist/">お客様情報登録</a></li>
                        <li><a href="<?php echo home_url('/'); ?>help/">このサイトについて</a></li>
                        <li><a href="<?php echo home_url('/'); ?>privacy/">プライバシーポリシー</a></li>
                        <li><a href="<?php echo home_url('/'); ?>sitemap/">サイトマップ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="footer-bottom">
        <h2><img src="/wp/wp-content/themes/kotohira/common/img/logo2.svg" alt="Kotohira" width="142" height="25"/></h2>
        <p>本社：〒389-0512 長野県東御市滋野乙1320<span>TEL.0268-63-0001(代) FAX.0268-63-0111</span></p>
        <div class="footer-copyright"><small>copyright 2017 kotohira. all rights reserved.</small></div>
    </div>
</footer>

<div class="bottom_nav">
    <nav class="column-flex">
        <a href="<?php echo home_url('/'); ?>contact/"><span>お問い合わせ</span></a>
        <a href="tel:0268630004"><em>0268-63-0004</em></a>
    </nav>
</div>
<script>
$(function() {
//$('.bottom_nav').css('opacity', 0);
$('#footer-wrapper').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	if (isInView) {
		$('.bottom_nav').stop().animate({opacity: 0}, 500);
	}
	else {
		$('.bottom_nav').stop().animate({opacity: 1}, 500);
	}
});
});
</script>


<?php wp_footer(); ?>