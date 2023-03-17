<?php get_header('oem'); ?>
<body id="oem" class="case <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/oem3.css" media="print,screen" />
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.rwdImageMaps.min.js"></script>
<script>
$(function(){
  $('img[usemap]').rwdImageMaps();
});
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-oem3.php"); ?>
    <div class="pagetitle"><h1 class="title1"><span>OEM</span>加工事例</h1></div>
    <!-- main -->
    <main>
        <article>

            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <section class="oem-sec">
                <h2 class="title2"><span><?php the_title();?></span><em><?php $terms = get_the_terms($post->ID,'case-cat'); foreach( $terms as $term ) {echo $term->name;}?></em></h2>
                <div class="oem_list">
                    <div class="oem_listR">
                        <?php if(get_field('case_ph')): ?>
                        <?php
                            $attachment_id = get_field('case_ph');
                            $size = "full";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                            $attachment = get_post( get_field('case_ph') );
                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                            $image_title = $attachment->post_title;
                        ?>
                            <div class="oem_listR-box">
                                <img src="<?php echo $image[0]; ?>" width="400" height="auto" alt="<?php echo $image_title; ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="oem_listL">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <?php endwhile; endif; ?>
<section id="top_oem_whitepaper">
<h2>工程・設備一覧ダウンロード</h2>
<div class="top_oem_whitepaper">
<div class="top_oem_whitepaperL"><img src="/wp/wp-content/uploads/2019/07/whitepaper.jpg" alt="工程・設備一覧" width="345" height="488" /></div>
<div class="top_oem_whitepaperR">
<p>保有工程・設備をコンパクトにまとめた資料となります。(PDF、全8ページ)</p>
<a class="btn" href="/oem/form/"><span class="btn-inner">ダウンロード</span></a></div>
</div>
</section>
        </article>
    </main>
<?php get_footer('oem'); ?>
</body>
</html>