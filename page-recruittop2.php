<?php 
/*
Template Name: リクルートTOP 2018
*/
?>
<?php get_header(); ?>
<body id="recruit" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?> index">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit2.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit2.php"); ?>
    <!-- main -->
    <main>
        <div id="recruit_main">
            <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_main.jpg" alt="勤務中の弊社社員の様子" width="13" height="7"/>
            <div class="recruit_main_txt">
                <h1 class="recruit_title_top"><span>RECRUIT</span><span class="font-eb">Ring for Link</span>人がつながる、コトヒラ</h1>
            </div>
        </div>
        <article>
<!--/ここから-->
<section class="recruit_news white_box">
	<h2 class="recruit_title"><span class="font-eb">News</span><span>採用ニュース</span></h2>
	<?php $news_posts = get_posts('post_type=recruit-news&posts_per_page=3'); if ( !empty($news_posts) ): ?>
    <?php foreach ( $news_posts as $post ): setup_postdata($post); ?>
        <dl class="clearfix">
            <dt><?php the_time('Y年m月d日') ?></dt>
            <?php if( get_field('linkurl') ): ?>
                <dd><a href="<?php the_field('linkurl'); ?>"><?php the_title();?></a></dd>
            <?php else : ?>
                <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
            <?php endif; ?>
        </dl>                
    <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
	<div class="recruit_blog_btn"><a href="/recruit/news/" class="products-list-conts btn products-list-conts2"><span class="btn-inner">一覧を見る</span></a></div>
</section>
<section class="recruit_read pb0">
	<img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_read.jpg" alt="笑顔で並ぶ弊社社員" width="65" height="27"/>
     <h2 class="recruit_title"><span class="font-eb">Creative,KOTOHIRA.</span><span>成功のカギは、チームワーク。</span></h2>
     <div class="recruit_read_txt white_box">
     	<p>コトヒラ工業で働く社員が「生き生きと前向きに仕事を楽しむことができる」、それは「挑戦を歓迎する会社」だからです。大型設備・最新設備が豊富に揃っている全国有数の職場で、それら設備を使って存分に挑戦できる環境が整っています。部門間は垣根のないシームレスな関係性ですので、誰がどんな挑戦をしようとも、多くの先輩社員や同僚がしっかりとサポートし、アドバイスし、時には一緒に悩んでくれます。挑戦の環境は、助け合いの精神があるからこそです。コトヒラ全体に根付く「助け合い」の文化は、社員同士の信頼感の表れでもあります。お互いがお互いを尊敬し、尊重する関係性が、働きやすさと仕事の活力につながっています。</p>
     </div>
</section>

<section class="recruit_2col column-flex recruit_work_cul">
	<div class="recruit_col rec_work">
    	<h2 class="recruit_title"><span class="font-eb">Work</span><span>コトヒラの仕事</span></h2>
        <a href="work">
            <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_work.jpg" alt="Work" width="1" height="1"/>
            <div class="blue_box">コトヒラの仕事を職種別にご紹介します。あらゆる部署が密に連携をとって、チームワークを発揮してクライアントの夢をカタチにしています。</div>
        </a>
    </div>
	<div class="recruit_col rec_cul">
    	<h2 class="recruit_title"><span class="font-eb">Culture</span><span>環境・社風</span></h2>
        <a href="culture">
            <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_cul.jpg" alt="Culture" width="1" height="1"/>
            <div class="blue_box">コトヒラには、個々のスキルを育ててること、仲間との交流を大切にすること、安心して働いてもらうことを重視し、組織の価値を高めていく土壌があります。</div>
        </a>
    </div>
</section>
<section class="recruit_voice_top" id="voice">
    <h2 class="recruit_title"><span class="font-eb">Voice</span><span>先輩の声</span></h2>
    <div class="recruit_4col column-flex">
        <div class="recruit_col">
            <a href="<?php echo home_url('/'); ?>recruit/voice1">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_voice1.jpg" alt="商品部開発課 熊井岳史" width="29" height="38"/>
                <div class="blue_box"><h3>「よりよい品質」を求め、<br class="pc600">地元・長野県で<br class="pc600">胸を張って働く喜び</h3><span>2009年入社 / 商品部開発課</span>熊井岳史</div>
            </a>
        </div>
        <div class="recruit_col">
            <a href="<?php echo home_url('/'); ?>recruit/voice5">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_voice5.jpg" alt="開発部開発課 篠原涼雅" width="29" height="38"/>
                <div class="blue_box"><h3>論理的思考力を武器に、<br class="pc600">これまで例のない製品の開発に挑む</h3><span>2020年入社 / 開発部開発課</span>篠原涼雅</div>
            </a>
        </div>
        <div class="recruit_col">
            <a href="<?php echo home_url('/'); ?>recruit/voice3">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_voice6.jpg" alt="経営企画部経営企画課 宮川千里" width="29" height="38"/>
                <div class="blue_box"><h3>会社のコアな部分に携わり、<br class="pc600">様々な意思決定を支援する面白さ</h3><span>2016年入社 / 経営企画部経営企画課</span>宮川千里</div>
            </a>
        </div>
        <div class="recruit_col">
            <a href="<?php echo home_url('/'); ?>recruit/voice4">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/recruit2_voice4.jpg" alt="産機部産機営業課 高木孝亮" width="29" height="38"/>
                <div class="blue_box"><h3>開発から営業へ。<br class="pc600">経験と日々の出会いから<br class="pc600">学び成長する「今日の自分」</h3><span>2013年入社 / 産機部産機営業課</span>高木孝亮</div>
            </a>
        </div>
    </div>
</section>
<section class="recruit_blog white_box">
    <div id="recruit_main2">
        <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/blog_main.jpg" alt="弊社社員の写真" width="11" height="4"/>
        <div class="recruit_main_txt">
            <h2 class="recruit_title"><span class="font-eb">Blog</span>人事ブログ</h2>
        </div>
    </div>
    <div class="recruit_blog_list">
	<?php $news_posts = get_posts('post_type=recruit-blog&posts_per_page=3'); if ( !empty($news_posts) ): ?>
    <?php foreach ( $news_posts as $post ): setup_postdata($post); ?>
        <div class="recruit_2col column-flex">
            <div class="recruit_col_img">
                <a href="<?php echo get_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="200" height="200"/></a>
            </div>
            <div class="recruit_col white_box">
                <p class="recruit_blog_day"><?php the_time('Y年m月d日') ?><span>
                <?php
                    $terms = get_the_terms($post->ID,'recruit-blog-cat');
                    if (empty( $terms )) {
                    } else {
                        foreach( $terms as $term ) {
                            echo '<a href="'.get_term_link($term->slug, 'recruit-blog-cat').'">'.$term->name.'</a>';
                        }
                    }
                ?>
                </span></p>
                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>


    </div>
	<div class="recruit_blog_btn"><a href="/recruit/blog/" class="products-list-conts btn products-list-conts2"><span class="btn-inner">一覧を見る</span></a></div>
</section>

<nav id="recruit-nav" class="column-flex">
	<div class="recruit-nav">
    	<h2>新卒採用</h2>
        <div class="box2"><p>何ごとにも前向きに取り組めるフレッシュな人材を求めています！</p></div>
        <a href="./graduates/" class="btn"><span class="btn-inner">詳細を見る</span></a>
    </div>
	<div class="recruit-nav">
    	<h2>キャリア採用</h2>
        <div class="box2"><p>あなたのこれまでのキャリアを生かして、コトヒラで一緒に働きませんか？</p></div>
        <a href="./carrer/" class="btn"><span class="btn-inner">詳細を見る</span></a>
    </div>
    <div class="recruit-nav">
        <h2>インターンシップ</h2>
        <div class="box2"><p>学生さんのインターンシップを行っています。コトヒラの仕事を知るチャンスです</p></div>
        <a href="./internship/" class="btn"><span class="btn-inner">詳細を見る</span></a>
    </div>
</nav>
</section>
<div class="insta"><a href="https://www.instagram.com/kotohira_official/" target="_blank"><img src="/wp/wp-content/uploads/2019/10/kotohira_instagram.jpg" alt="kotohira_instagram" class="pc"><img src="/wp/wp-content/uploads/2019/10/kotohira_instagram_SP.jpg" alt="kotohira_instagram" width="1" height="1" class="sp"></a></div>

<script>
$(function(){
	$(".box2>div").heightLine({
		minWidth:600
	});
});
</script>
<!--/ここまで-->
        </article>
    </main>
<?php get_footer(4); ?>
</body>
</html>