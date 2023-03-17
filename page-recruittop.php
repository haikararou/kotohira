<?php 
/*
Template Name: リクルートTOP
*/
?>
<?php get_header(); ?>
<body id="recruit" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit.php"); ?>
    <!-- main -->
    <main>
        <div id="recruit_main">
            <img src="/wp/wp-content/uploads/2017/05/recruit_main.jpg" alt="" />
            <div class="recruit_main_txt">
                <h1><span>RECRUIT</span>人がつながる、コトヒラ</h1>
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
<?php get_footer(4); ?>
</body>
</html>