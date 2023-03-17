<?php 
/*
Template Name: スキー・スノーボードスタンド
*/
?>
<?php get_header(); ?>
<body id="products" class="sub ski-board <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/products.css" media="print,screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/tlwimageSkin.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to コトヒラ工業株式会社." href="/" class="home" ><span property="name">HOME</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to 製品情報." href="/products/" class="post post-products-archive" ><span property="name">製品情報</span></a><meta property="position" content="2"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the スキー関連製品 カテゴリー archives." href="<?php echo home_url('/'); ?>products/#link-ski" class="taxonomy products-cat" ><span property="name">スキー関連製品</span></a><meta property="position" content="3"></span> &gt; <span class="post post-products current-item">スキー・スノーボードスタンド</span>
        </div>
        <h1 class="title1"><a href="<?php echo home_url('/'); ?>products/#link-ski">スキー関連製品</a><br>スキー・スノーボードスタンド</h1>
    </div>
    <!-- main -->
    <main>
        <article>
            <section>
                <nav id="page-tab3">
                    <ul class="column-flex">
                        <li><a href="../ski/stand"><span>スタンド</span></a></li>
                        <li><a href="../ski/rack"><span>ラック</span></a></li>
                        <li><a href="../ski/hi-rack"><span>ハイグレードラック</span></a></li>
                        <li><a href="../ski/holder"><span>ホルダー</span></a></li>
                    </ul>
                </nav>
				<?php if(have_posts()): while(have_posts()): the_post();?>
                <?php
                    //remove_filter('the_content', 'wpautop');
                    the_content();
                    //add_filter('the_content', 'wpautop');
                ?>
                <?php endwhile; endif; ?>
            </section>
            <section id="form">
                <h2>この製品のお問い合わせ</h2>
                <?php echo do_shortcode('[contact-form-7 id="4758" title="スキー・スノーボードスタンドお問い合わせ"]'); ?>           
            </section>
        </article>
    </main>
<?php get_footer(2); ?>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/tlw.ps.min.js"></script>
<script>
jQuery(document).ready(function ($) {
	$('.tlwViewer').tlw_ImageViewer();
});
</script>
</body>
</html>