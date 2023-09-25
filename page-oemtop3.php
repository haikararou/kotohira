<?php 
/*
Template Name: OEM-TOP3
*/
?>
<?php get_header('oem'); ?>
<body id="oem" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/oem3.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-oem3.php"); ?>
    <!-- main -->
    <main>
        <article>

<div id="oem_main">
<div class="oem_main_txt">
<div class="oem_main_txt_inner">
<h1>大型製缶・大型機械加工から大型製品の処理・測定まで対応した社内一貫生産</h1>
<p>生産管理・品質保証体制の整った一貫生産体制により、QCD競争力の高い製品が作り出されています。<br />充実した設備ラインアップと高い技術力が、 大型製缶・大型機械加工だけでなく、板金加工や組立・配線まで含めた幅広いニーズに対応しています。</p>
</div>
</div>
<div class="oem_main_img000 bg-slider"></div>
</div>
<section class="oem-sec">
<h2 class="title2"><span>コトヒラ工業が選ばれる理由</span></h2>
<div class="top_oem_flow">
<dl>
<dt><a href="https://www.kotohira.biz/oem/flow/">ワンストップを可能にした社内一貫生産体制</a></dt>
<dd></dd>
</dl>
<dl>
<dt><a href="https://www.kotohira.biz/oem/facility/">お客様のニーズに応える設備ラインアップ</a></dt>
<dd></dd>
</dl>
<dl>
<dt><a href="https://www.kotohira.biz/oem/technical/">70年以上にわたる伝統の中で培われた技術力</a></dt>
<dd></dd>
</dl>
<dl>
<dt><a href="https://www.kotohira.biz/oem/production_control/">生産管理・品質保証体制">お客様に信頼される生産管理・品質保証体制</a></dt>
<dd></dd>
</dl>
</div>
</section>
<section class="oem-sec">
<h2 class="title2"><span>加工事例</span></h2>
<div id="top_oem_case">
<?php $case_posts = get_posts('post_type=case&posts_per_page=3'); if ( !empty($case_posts) ): ?>
<?php foreach ( $case_posts as $post ): setup_postdata($post); ?>
    <div class="top_oem_case">
        <?php if(get_field('case_ph')): ?>
        <?php
            $attachment_id = get_field('case_ph');
            $size = "full";
            $image = wp_get_attachment_image_src( $attachment_id, $size );
            $attachment = get_post( get_field('case_ph') );
            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
            $image_title = $attachment->post_title;
        ?>
            <img src="<?php echo $image[0]; ?>" width="347" height="auto" alt="<?php echo $image_title; ?>" />
        <?php endif; ?>
        <h2><?php $terms = get_the_terms($post->ID,'case-cat'); foreach( $terms as $term ) {echo $term->name;}?></h2>
        <h3><?php the_title();?></h3>
        <?php the_field('comment'); ?>
    </div>
<?php endforeach; wp_reset_postdata(); ?>
<?php endif; ?>
</div>
<div><a class="btn" href="/oem/case/"><span class="btn-inner">事例一覧</span></a></div>
</section>
<section class="oem-sec oem_faq" id="top_oem_faq">
<h2 class="title2"><span>よくある質問</span></h2>
<?php $faq_posts = get_posts('post_type=faq&posts_per_page=3'); if ( !empty($faq_posts) ): ?>
<?php foreach ( $faq_posts as $post ): setup_postdata($post); ?>
<dl>
<dt><?php the_title();?></dt>
<dd><?php the_content(); ?></dd>
</dl>
<?php endforeach; wp_reset_postdata(); ?>
<?php endif; ?>

<a class="btn" href="/oem/faq/"><span class="btn-inner">よくある質問一覧</span></a></section>
<section id="top_oem_whitepaper">
<h2>工程・設備一覧ダウンロード</h2>
<div class="top_oem_whitepaper">
<div class="top_oem_whitepaperL"><img src="/wp/wp-content/uploads/2019/07/whitepaper.jpg" alt="工程・設備一覧" width="345" height="488"/></div>
<div class="top_oem_whitepaperR">
<p>保有工程・設備をコンパクトにまとめた資料となります。(PDF、全8ページ)</p>
<a class="btn" href="/oem/form/"><span class="btn-inner">ダウンロード</span></a></div>
</div>
</section>
<div class="home_sec">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/wp/wp-content/themes/kotohira/common/module/interview.php"); ?>
</div>
        </article>
    </main>
<?php get_footer('oem'); ?>

<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.bgswitcher.js"></script>
<script>
jQuery(function($) {
    $('.bg-slider').bgSwitcher({
        images: ['/wp/wp-content/themes/kotohira/common/img/oem/main_top.jpg','/wp/wp-content/themes/kotohira/common/img/oem/main_top2.jpg','/wp/wp-content/themes/kotohira/common/img/oem/main_top3.jpg'], // 切り替える背景画像を指定します。
    });
});
</script>
    
<style type="text/css">
.bg-slider {
	width: 50%;
	height: 500px;
	background-position:center center;
	background-size: cover;
}
@media screen and (max-width:1100px){
    .bg-slider { width:100%; height:240px;}
}

</style>




</body>
</html>