<?php 
/*
Template Name: 生産終了製品のご案内
*/
?>
<?php get_header(); ?>
<body id="products" class="sub end-of-production">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/products.css" media="print,screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/tlwimageSkin.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to コトヒラ工業株式会社." href="https://www.kotohira.biz" class="home" ><span property="name">HOME</span></a> &gt; <a property="item" typeof="WebPage" title="Go to 製品情報." href="https://www.kotohira.biz/products/" class="post post-products-archive" ><span property="name">製品情報</span></a><meta property="position" content="1"></span> &gt; <span class="post post-page current-item">生産終了製品のご案内</span>
        </div>
        <h1 class="title1"><a href="<?php echo home_url('/'); ?>products/">PRODUCTS</a><br>生産終了製品のご案内</h1>
    </div>
    <!-- main -->
    <main>
        <article>
			<?php if(have_posts()): while(have_posts()): the_post();?>
            <?php
                //remove_filter('the_content', 'wpautop');
                the_content();
                //add_filter('the_content', 'wpautop');
            ?>
            <?php endwhile; endif; ?>
        </article>
    </main>
<?php get_footer(); ?>
</body>
</html>