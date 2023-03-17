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