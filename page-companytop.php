<?php 
/*
Template Name: 会社情報TOP
*/
?>
<?php get_header(); ?>
<body id="company" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/company.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-company.php"); ?>
    <!-- main -->
    <main>
        <div id="company_main">
            <img src="/wp/wp-content/themes/kotohira/common/img/company/company_main.jpg" alt="社屋とその周辺の写真" width="13" height="5"/>
            <div class="company_main_txt">
                <h1><span>COMPANY</span>人と社会の<br class="br_600">無限の可能性を追求する</h1>
            </div>
        </div>
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
<?php get_footer(6); ?>
</body>
</html>