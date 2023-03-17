<?php 
/*
Template Name: OEM
*/
?>
<?php get_header(); ?>
<body id="oem" class="facility <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/oem.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-oem.php"); ?>
    <div class="pagetitle"><h1 class="title1"><span>OEM</span><?php the_title(); ?></h1></div>
    <!-- main -->
    <main>
        <article>
                <nav id="page-tab3">
                    <ul class="column-flex">
                        <li><a href="/oem/facility/"><span>主な設備</span></a></li>
                        <li><a href="/oem/sheetmetal"><span>板金加工設備</span></a></li>
                        <li><a href="/oem/cutting"><span>切削加工設備</span></a></li>
                        <li><a href="/oem/lathe"><span>旋盤・研削盤設備</span></a></li>
                        <li><a href="/oem/crane"><span>天井クレーン</span></a></li>
                    </ul>
                </nav>
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