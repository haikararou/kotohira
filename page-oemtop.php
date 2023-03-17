<?php 
/*
Template Name: OEM-TOP
*/
?>
<?php get_header(); ?>
<body id="oem" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/oem.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-oem.php"); ?>
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
<?php get_footer(3); ?>
</body>
</html>