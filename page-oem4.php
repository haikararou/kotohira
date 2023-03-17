<?php 
/*
Template Name: OEM4
*/
?>
<?php get_header(); ?>
<body id="oem" class="facility <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/oem3.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-oem3.php"); ?>
    <div class="pagetitle"><h1 class="title1"><span>OEM</span><?php the_title(); ?></h1></div>
    <!-- main -->
    <main>
        <article>
                <nav id="page-tab3">
                    <ul class="column-flex">
                        <li><a href="../facility/"><span>主な設備</span></a></li>
                        <li><a href="../sheetmetal"><span>板金加工設備</span></a></li>
                        <li><a href="../cutting"><span>切削加工設備</span></a></li>
                        <li><a href="../lathe"><span>旋盤・研削盤設備</span></a></li>
                        <li><a href="../measurement"><span>処理・測定設備</span></a></li>
                        <li><a href="../crane"><span>天井クレーン</span></a></li>
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
<section id="top_oem_whitepaper">
<h2>工程・設備一覧ダウンロード</h2>
<div class="top_oem_whitepaper">
<div class="top_oem_whitepaperL"><img src="/wp/wp-content/uploads/2019/07/whitepaper.jpg" alt="工程・設備一覧" width="345" height="488"/></div>
<div class="top_oem_whitepaperR">
<p>保有工程・設備をコンパクトにまとめた資料となります。(PDF、全8ページ)</p>
<a class="btn" href="/oem/form/"><span class="btn-inner">ダウンロード</span></a></div>
</div>
</section>

<?php get_footer('oem'); ?>
</body>
</html>