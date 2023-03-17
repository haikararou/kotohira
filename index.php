<?php get_header('top'); ?>
<body id="home">
<div id="loader-bg"><div id="loader"><div class="loader">Loading...</div></div></div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header.php"); ?>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.loader.js"></script>
	<!--slider-->
	<div id="slider">
    	<div id="lead">
        	<h2>Creative,KOTOHIRA.</h2>
            <p>コトヒラ工業は、卓越した技術力と最新鋭の設備をベースに<br class="pc750">設計・開発から製造・生産まで一貫した製品開発体制でお客様の夢をカタチにする会社です</p>
        </div>
    	<div class="viewer">
            <ul>
                <li><img src="<?php echo get_template_directory_uri(); ?>/common/img/slider/slider1.jpg" alt="工場内風景" width="2000" height="1046" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/common/img/slider/slider2.jpg" alt="工場内風景" width="2000" height="1046" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/common/img/slider/slider3.jpg" alt="溶接風景" width="2000" height="1046" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/common/img/slider/slider4.jpg" alt="工場内風景" width="2000" height="1046" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/common/img/slider/slider5.jpg" alt="工場内風景" width="2000" height="1046" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/common/img/slider/slider6.jpg" alt="工場内風景" width="2000" height="1046" /></li>
            </ul>
        </div>
    	<div class="slider column-flex">
        	<div class="sliderL">
            	<h2>NEW PRODUCT</h2><div class="swiper-button-prev"></div><div class="swiper-button-next"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
					<?php
                    $news_posts = get_posts('post_type=newproducts&posts_per_page=5');
                    if ( !empty($news_posts) ): ?>
                    <?php foreach ( $news_posts as $post ): setup_postdata($post); ?>
                        <!--?php $checked = get_field('new_arrival'); if($checked) { ?-->
                        <a href="<?php the_field('producturl'); ?>" class="slider_conts swiper-slide">
                            <div class="sliderL-txt">
                                <h3><?php $terms = get_the_terms($post->ID,'newproducts-cat'); foreach($terms as $term) {echo $term->name;} ?></h3>
                                <h4><?php the_title() ?></h4>
                                <?php if( get_field('intro') ): ?><p><?php remove_filter ('acf_the_content', 'wpautop'); the_field("intro", $post_id);?></p><?php endif; ?>
                            </div>
                            <div class="sliderL-PH">
                            <?php
                                $attachment_id = get_field('top_ph01');
                                $size = "full";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                $attachment = get_post( get_field('top_ph01') );
                                $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                $image_title = $attachment->post_title;
                            ?>
                            <?php if(get_field('top_ph01')): ?>
                                <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" />
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/common/img/noimage.jpg" alt="NO IMEAGE" width="290" height="290" />
                            <?php endif; ?>
                            </div>
                        </a>
                        <!--?php } ?-->
                    <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="sliderR">
            	<h2>NEWS<a href="./news/">一覧を見る</a></h2>
				<?php $news_posts = get_posts('post_type=news&posts_per_page=3'); if ( !empty($news_posts) ): ?>
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
            </div>
        </div>
    </div>

    <!-- main -->
    <main>
        
        <article>

            <!--EXHIBITION-->
            
				<?php $exhibition_post_count = wp_count_posts('exhibition')->publish; ?>
				<?php if( $exhibition_post_count == 1 ) : ?>
					<?php
                    $exhibition_posts = get_posts('post_type=exhibition&posts_per_page=1');
                    if ( !empty($exhibition_posts) ): ?>
            <section id="home_EXHIBITION">
                <h2 class="title">展示会情報<span>EXHIBITION</span></h2>
                <div class="home_sec column-flex home_EXHIBITION">
                    <?php foreach ( $exhibition_posts as $post ): setup_postdata($post); ?>
                        <div class="home_EXHIBITION_box bgLightBlue home_EXHIBITION_box01">
                            <h3><?php if( get_field('agenda') ): ?><?php the_field('agenda'); ?><?php endif; ?></h3>
                            <h4><?php if( get_field('url') ): ?><a href="<?php the_field('url'); ?>" target="_blank"><?php endif; ?><?php the_title() ?><?php if( get_field('url') ): ?></a><?php endif; ?></h4>
                            <?php if( get_field('session') ): ?><dl class="clearfix"><dt>会期：</dt><dd><?php the_field('session'); ?></dd></dl><?php endif; ?>
                            <?php if( get_field('time') ): ?><dl class="clearfix"><dt>時間：</dt><dd><?php the_field('time'); ?></dd></dl><?php endif; ?>
                            <?php if( get_field('place') ): ?><dl class="clearfix"><dt>会場：</dt><dd><?php the_field('place'); ?></dd></dl><?php endif; ?>
                            <?php if( get_field('exhibit') ): ?><dl class="clearfix"><dt>出展：</dt><dd><?php the_field('exhibit'); ?></dd></dl><?php endif; ?>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php else : ?>
					<?php
                    $exhibition_posts = get_posts('post_type=exhibition&posts_per_page=8');
                    if ( !empty($exhibition_posts) ): ?>
                    <?php foreach ( $exhibition_posts as $post ): setup_postdata($post); ?>
                        <div class="home_EXHIBITION_box bgLightBlue">
                            <h3><?php if( get_field('agenda') ): ?><?php the_field('agenda'); ?><?php endif; ?></h3>
                            <h4><?php if( get_field('url') ): ?><a href="<?php the_field('url'); ?>" target="_blank"><?php endif; ?><?php the_title() ?><?php if( get_field('url') ): ?></a><?php endif; ?></h4>
                            <?php if( get_field('session') ): ?><dl class="clearfix"><dt>会期：</dt><dd><?php the_field('session'); ?></dd></dl><?php endif; ?>
                            <?php if( get_field('time') ): ?><dl class="clearfix"><dt>時間：</dt><dd><?php the_field('time'); ?></dd></dl><?php endif; ?>
                            <?php if( get_field('place') ): ?><dl class="clearfix"><dt>会場：</dt><dd><?php the_field('place'); ?></dd></dl><?php endif; ?>
                            <?php if( get_field('exhibit') ): ?><dl class="clearfix"><dt>出展：</dt><dd><?php the_field('exhibit'); ?></dd></dl><?php endif; ?>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </section>
                <?php endif; ?>

            
            <!--PRODUCTS-->
            <section>
                <h2 class="title">自社製品カテゴリー<span>PRODUCT CATEGORY</span></h2>
                <div class="home_sec column-flex2 home_PRODUCTS">
                    <a href="./products/#link-clean">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products01.jpg" alt="クリーンルーム機器" width="580" height="580">
                        <h2>クリーンルーム機器</h2>
                    </a>
                    <a href="./products/#link-dust">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products02.jpg" alt="小型集塵機・集煙機" width="200" height="200">
                        <h2>小型集塵機・集煙機</h2>
                    </a>
                    <a href="./products/#link-sanitary">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products03.jpg" alt="長靴・短靴衛生機器" width="200" height="200">
                        <h2>長靴・短靴衛生機器</h2>
                    </a>
                    <a href="./products/#link-jiasui">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products10.jpg" alt="電解水関連機器" width="371" height="371">
                        <h2>電解水関連機器</h2>
                    </a>
                    <a href="./products/#link-sterilize">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products11.jpg" alt="殺菌ロッカー・殺菌庫" width="431" height="431">
                        <h2>殺菌ロッカー・殺菌庫</h2>
                    </a>
                    <a href="./products/#link-experimental">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products07.jpg" alt="実験研究用機器" width="580" height="580">
                        <h2>実験研究用機器</h2>
                    </a>
                    <a href="./products/#link-biotoilet">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products08.jpg" alt="バイオトイレ" width="345" height="345">
                        <h2>バイオトイレ</h2>
                    </a>
                    <a href="./products/#link-ski">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/top/products09.jpg" alt="スキー関連製品" width="580" height="580">
                        <h2>スキー関連製品</h2>
                    </a>
                </div>
                <a href="./products/" class="btn m-center home_sec"><span class="btn-inner">製品一覧を見る</span></a>
            </section>
            
            <!--OEM-->
            <section id="home_oem">
            	<div class="home_oem">
                	<h2 class="title">製造受託<span>OEM</span></h2>
                    <h3>設計から組立までの一括受託体制と<br class="br_900_600">充実した大型加工設備ラインナップ</h3>
                    <h4>ますます大型化する液晶パネル製造装置・太陽電池製造装置市場の要求に応え、<br class="pc600">各種の大型機械加工設備を導入しております。<br>アルミ・ステンレスプレート加工から製缶品五面加工まで、<br class="pc600">幅広いニーズに対応いたします。</h4>
                    <!--div class="home_oem_flow column-flex">
                    	<div><span>設計</span></div>
                    	<div><span>試作<br>検証</span></div>
                    	<div><span>生産</span></div>
                    	<div><span>量産<br>出荷</span></div>
                    </div-->
                    <a href="./oem/top/" class="btn m-center"><span class="btn-inner">製造受託の詳細を見る</span></a>
                </div>
            </section>
            
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/interview.php"); ?>
            
            <!--banner-->
            <section id="home_banner">
            	<div class="home_sec column-flex">
                	<a href="./recruit/"><div class="home_banner_ph"><img src="<?php echo get_template_directory_uri(); ?>/common/img/top/banner01.jpg" alt="RECRUIT 採用情報" width="640" height="300"></div><h2>採用情報<span>RECRUIT</span></h2></a>
                	<a href="./company/activity/"><div class="home_banner_ph"><img src="<?php echo get_template_directory_uri(); ?>/common/img/top/banner02.jpg" alt="ACTIVITY コトヒラ工業の社外活動" width="640" height="300"></div><h2>コトヒラ工業の社外活動<span>ACTIVITY</span></h2></a>
                	<a href="./company/society/"><div class="home_banner_ph"><img src="<?php echo get_template_directory_uri(); ?>/common/img/top/banner03.jpg" alt="CSR 地域貢献活動" width="640" height="300"></div><h2>地域貢献活動<span>CSR</span></h2></a>
                </div>
            </section>

        </article>
    </main>

<?php get_footer(5); ?>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	parallax: true,
	speed: 600,
	loop: true,
});
</script>
</body>
</html>