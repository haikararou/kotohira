<?php 
/*
Template Name: バイオトイレ20230502
*/
?>
<?php get_header(); ?>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Product",
"name": "バイオトイレ",
"image" : "https://www.kotohira.biz/wp/wp-content/uploads/2017/05/biotoilet001.jpg",
"offers": {
    "@type": "Offer",
    "price": "2,100,000",
    "priceCurrency": "JPY"
    }
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "BreadcrumbList",
    "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "HOME",
    "item": "https://www.kotohira.biz/"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "製品情報",
        "item": "https://www.kotohira.biz/products/"
    },{
        "@type": "ListItem",
        "position": 3,
        "name": "バイオトイレ",
        "item": "https://www.kotohira.biz/products/biotoilet/"
    },{
        "@type": "ListItem",
        "position": 4,
        "name": "用途・構造",
        "item": "https://www.kotohira.biz/products/biotoilet/use/"
    }]
}
</script>
<body id="products" class="sub biotoilet <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/products.css" media="print,screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/tlwimageSkin.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header20230502.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to コトヒラ工業株式会社." href="/" class="home" ><span property="name">HOME</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to 製品情報." href="/products/" class="post post-products-archive" ><span property="name">製品情報</span></a><meta property="position" content="2"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the バイオトイレ カテゴリー archives." href="/products/products-cat/biotoilet/" class="taxonomy products-cat" ><span property="name">バイオトイレ</span></a><meta property="position" content="3"></span>
            <?php if (is_page('use')) : ?>
                &gt; <span class="post post-products current-item">用途・構造</span>
            <?php elseif (is_page('installation')) : ?>
                &gt; <span class="post post-products current-item">設置例</span>
            <?php elseif (is_page('faq-2')) : ?>
                &gt; <span class="post post-products current-item">Q&A</span>
            <?php elseif (is_page('lineup')) : ?>
                &gt; <span class="post post-products current-item">ラインアップ・仕様</span>
            <?php elseif (is_page('option')) : ?>
                &gt; <span class="post post-products current-item">オプション・消耗品</span>
            <?php endif; ?>

        </div>
        <h1 class="title1"><a href="<?php echo home_url('/'); ?>products/#link-biotoilet">バイオトイレ</a><br>バイオトイレ</h1>
    </div>
    <!-- main -->
    <main>
        <article>
            <section>
                <nav id="page-tab2">
                    <ul class="column-flex">
                        <li><a href="/products/biotoilet/"><span>特長</span></a></li>
                        <li><a href="/products/biotoilet/use/"><span>用途・構造</span></a></li>
                        <li><a href="/products/biotoilet/installation/"><span>設置例</span></a></li>
                        <li><a href="/products/biotoilet/faq/"><span>Q&amp;A</span></a></li>
                        <li><a href="/products/biotoilet/lineup/"><span>ラインナップ・仕様</span></a></li>
                        <li><a href="/products/biotoilet/option/"><span>オプション・消耗品</span></a></li>
                    </ul>
                </nav>
				<?php if(have_posts()): while(have_posts()): the_post();?>
                <?php
                    //remove_filter('the_content', 'wpautop');
                    the_content();
                    //add_filter('the_content', 'wpautop');
                ?>
                <?php endwhile; endif; ?>
                <div class="conts">
                    <h3 class="title3">この製品のお問い合わせ</h3>
                    <br>
                    <a class="btn btnL" href="#"><span class="btn-inner">お問い合わせフォーム</span></a>
                </div>
            </section>
        </article>
    </main>
<?php get_footer(2); ?>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/common/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/tlw.ps.min.js"></script>
<script>
jQuery(document).ready(function ($) {
	$('.tlwViewer').tlw_ImageViewer();
});
</script> -->
<script src="<?php echo get_template_directory_uri(); ?>/common/js/slick.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/common/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/common/css/slick.css" rel="stylesheet" type="text/css">
<script>
jQuery(function($){
    $('.slider').slick({
        arrows:false,
        asNavFor:'.thumb',
    });
    $('.thumb').slick({
        asNavFor:'.slider',
        focusOnSelect: true,
        slidesToShow:4,
        slidesToScroll:1
    });
});
</script>

</body>
</html>