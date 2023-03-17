<?php get_header('oem'); ?>
<body id="oem" class="oem_faq <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/oem3.css" media="print,screen" />
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.rwdImageMaps.min.js"></script>
<script>
$(function(){
  $('img[usemap]').rwdImageMaps();
});
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-oem3.php"); ?>
    <div class="pagetitle"><h1 class="title1"><span>OEM</span>よくある質問</h1></div>
    <!-- main -->
    <main>
        <article>
            <section class="oem-sec oem_faq" id="top_oem_faq">
            <h2 class="title2"><span>よくある質問</span></h2>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <dl>
            <dt><?php the_title();?></dt>
            <dd><?php the_content(); ?></dd>
            </dl>
            <?php endwhile; endif; ?>
            </section>
        </article>
    </main>
<?php get_footer('oem'); ?>
</body>
</html>