<?php 
/*
Template Name: カタログ請求
*/
?>
<?php get_header(); ?>
<body id="catalog" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>
    <div class="pagetitle"><h1 class="title1"><span>CATALOG</span><?php the_title() ?></h1></div>
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