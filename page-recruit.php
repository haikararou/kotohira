<?php 
/*
Template Name: リクルート
*/
?>
<?php get_header(); ?>
<body id="recruit" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit2.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit2.php"); ?>
    <div class="pagetitle"><h1 class="title1"><span>RECRUIT</span><?php the_title(); ?></h1></div>
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
<?php get_footer(4); ?>
</body>
</html>