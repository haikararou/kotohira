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
            <div id="header-contact2">
                <a href="<?php echo home_url('/'); ?>contact/" class="btn"><span class="btn-inner">お問い合わせはこちら</span></a>
                <div>
                    <span class="tel-link tel-link2">0268-63-0120</span>
                </div>
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
                <!--<span class="tel-link">0268-63-0001</span>--><a class="tel_js" href="tel:0268630001"><em>0268-63-0001</em></a>
                <a href="<?php echo home_url('/'); ?>contact/" class="btn"><span class="btn-inner">お問い合わせフォーム</span></a>
            </div>
        </div>
    </div>
    <nav id="subNav">
        <ul class="column-flex">
            <li><a href="<?php echo home_url('/'); ?>recruit/">採用トップ</a></li>
            <li><a href="<?php echo home_url('/'); ?>recruit/work">仕事紹介</a></li>
            <li><a href="<?php echo home_url('/'); ?>recruit/culture">環境・社風</a></li>
            <li><a href="<?php echo home_url('/'); ?>recruit#voice">先輩の声</a></li>
			<li><a href="<?php echo home_url('/'); ?>recruit/blog/">人事ブログ</a></li>
            <li><a href="<?php echo home_url('/'); ?>recruit/graduates/">新卒採用</a></li>
            <li><a href="<?php echo home_url('/'); ?>recruit/carrer/">キャリア採用</a></li>
            <li><a href="<?php echo home_url('/'); ?>recruit/internship/">インターンシップ</a></li>
        </ul>
    </nav>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
</header>

