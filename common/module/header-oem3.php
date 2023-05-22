<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJTG2ZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--header-->
<header>
	<div id="header-wrapper">
        <div id="logo"><a href="<?php echo home_url('/'); ?>">コトヒラ工業株式会社</a></div>
        <div class="header-inner">
            <!--globalNav-->
            <nav id="globalNav">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>products/">PRODUCTS<span>自社製品</span></a></li>
                    <li><a href="<?php echo home_url('/'); ?>oem/top/">OEM<span>製造受託</span></a></li>
                    <li><a href="<?php echo home_url('/'); ?>company/outline/">COMPANY<span>会社情報</span></a></li>
                    <li><a href="<?php echo home_url('/'); ?>recruit/">RECRUIT<span>採用情報</span></a></li>
                </ul>
            </nav>
            <div id="header-search" class="clearfix">
                <a href="<?php echo home_url('/'); ?>regist/" class="btn"><span class="btn-inner">お客様情報登録</span></a>
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="サイト内検索" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><span>サイト内検索</span></button>
                </form>
            </div>
            <!-- <div id="header-search" class="clearfix">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="サイト内検索" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><span>サイト内検索</span></button>
                </form>
            </div> -->
            <div id="header-contact3">
                <div class="column-flex column-flex-sp">
                    <a href="<?php echo home_url('/'); ?>contact/" class="contact-link"><span>お問い合わせ</span></a>
                    <span class="tel-link2">0268-63-0004</span>
                </div>
                <a href="" class="catalog-link" target="_blank">カタログ・仕様図・取扱説明書</a>
            </div>
        </div>
        <div id="panel-btn"><div id="panel-btn-icon"></div></div>
        <div class="clearfix panel">
            <nav>
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>products/">PRODUCTS<span>自社製品</span></a></li>
                    <li><a href="<?php echo home_url('/'); ?>oem/top/">OEM<span>製造受託</span></a></li>
                    <li><a href="<?php echo home_url('/'); ?>company/outline/">COMPANY<span>会社情報</span></a></li>
                    <li><a href="<?php echo home_url('/'); ?>recruit/">RECRUIT<span>採用情報</span></a></li>
                </ul>
            </nav>
            <div id="header-search2" class="panel_btn">
                <a href="<?php echo home_url('/'); ?>regist/" class="btn"><span class="btn-inner">お客様情報登録</span></a>
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="サイト内検索" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><span>サイト内検索</span></button>
                </form>
            </div>
            <!-- <div id="header-search2" class="clearfix">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="サイト内検索" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><span>サイト内検索</span></button>
                </form>
            </div> -->
            <div class="panel_btn">
                <a class="tel_js" href="tel:0268630004"><em>0268-63-0004</em></a>
                <a href="<?php echo home_url('/'); ?>contact/" class="btn"><span class="btn-inner">お問い合わせフォーム</span></a>
            </div>
        </div>
    </div>
    <nav id="subNav">
        <ul class="column-flex">
            <li><a href="<?php echo home_url('/'); ?>oem/top/">製造受託トップ</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/flow/">社内一貫生産体制</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/facility/">設備</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/technical/">技術力</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/production_control/">生産管理・品質保証体制</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/case/">加工事例</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/faq/">よくある質問</a></li>
            <li><a href="<?php echo home_url('/'); ?>oem/interview/hashimoto/">インタビュー</a></li>
        </ul>
    </nav>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
</header>