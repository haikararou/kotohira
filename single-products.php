<?php get_header('products'); ?>
<body id="products" class="sub">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/products.css" media="print,screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/tlwimageSkin.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
        <h1 class="title1">
            <?php if(is_single('3551')): ?>
                <em><?php the_title() ?></em>
            <?php else : ?>
            <div>
            <?php $terms = get_the_terms($post->ID,'products-cat'); foreach( $terms as $term ) { echo '<a href="/products/#link-' .$term->slug. '">'.$term->name.'</a>'; } ?>
            </div><br><?php the_title() ?>
            <?php endif; ?>
        </h1>
    </div>

    <!-- main -->
    <main>
               
        <article>

            <section>
                <nav id="products-tab">
                    <ul class="column-flex">
                        <li><a href="#contentsWrap01"><span>特長</span></a></li>
                        <li><a href="#contentsWrap02"><span>用途・構造</span></a></li>
                        <li><a href="#contentsWrap03"><span>ラインナップ・仕様</span></a></li>
                        <li><a href="#contentsWrap04"><span>オプション・消耗品</span></a></li>
                    </ul>
                </nav>

                <div class="contentsWrap" id="contentsWrap01">
                	<div class="clearfix">
                    
                        <?php if( get_field('youtubecode') ): ?>
                        	<div class="t-center videoarea"><?php the_field('youtubecode'); ?></div>
                            <?php 
                            echo '<script type="application/ld+json">';
                            echo '{';
                            echo '"@context": "http://schema.org",';
                            echo '"@type": "VideoObject",';
                            echo '"name": "';
                            echo the_title();
                            echo '",';
                            echo '"description": "';
                            echo the_field('videodescription');
                            echo '",';
                            echo '"thumbnailUrl": "';
                            echo the_field('videothumb');
                            echo '",';
                            echo '"uploadDate": "';
                            echo the_time('Y-m-d');
                            echo 'T08:00:00+09:00"';
                            echo '}';
                            echo '</script>';
                            ?>
                        <?php else : ?>
						<?php if( get_field('videomp4') ): ?>
                            <div class="t-center videoarea">
                                <video id="example_video_1" class="video-js mb10" width="512" height="288" controls preload="auto" poster="<?php the_field('videothumb'); ?>">
                                    <source src="<?php the_field('videomp4'); ?>" type='video/mp4;' />
                                    <object id="flash_fallback_1" class="vjs-flash-fallback" width="512" height="288" type="application/x-shockwave-flash"
                                        data="<?php echo get_template_directory_uri(); ?>/common/flowplayer/flowplayer-3.2.7.swf">
                                        <param name="movie" value="<?php echo get_template_directory_uri(); ?>/common/flowplayer/flowplayer-3.2.7.swf" />
                                        <param name="allowfullscreen" value="true" />
                                        <param name="flashvars" value='config={"playlist":["<?php the_field('videothumb'); ?>", {"url": "<?php the_field('videomp4'); ?>","autoPlay":false,"autoBuffering":true}]}' />
                                        <?php if( get_field('videothumb') ): ?>
                                        <?php
                                            $attachment_id = get_field('videothumb');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('videothumb') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                        <?php endif; ?>
                                    </object>
                                </video>
                            </div>
                            <?php 
                            echo '<script type="application/ld+json">';
                            echo '{';
                            echo '"@context": "http://schema.org",';
                            echo '"@type": "VideoObject",';
                            echo '"name": "';
                            echo the_title();
                            echo '",';
                            echo '"description": "';
                            echo the_field('videodescription');
                            echo '",';
                            echo '"thumbnailUrl": "';
                            echo the_field('videothumb');
                            echo '",';
                            echo '"uploadDate": "';
                            echo the_time('Y-m-d');
                            echo 'T08:00:00+09:00"';
                            echo '}';
                            echo '</script>';
                            ?>
                        <?php endif; ?>

                        <?php endif; ?>
                    
                        <div class="products-lead column-flex">
                            <div class="products-leadL">
                                <?php if( get_field('top_title') ): ?><h2><?php remove_filter ('acf_the_content', 'wpautop'); the_field("top_title", $post_id);?></h2><?php endif; ?>
                                <?php if( get_field('top_lead') ): ?><?php remove_filter ('acf_the_content', 'wpautop'); the_field("top_lead", $post_id);?><?php endif; ?>
                            </div>
                            <div class="products-leadR">
                            	<div class="products-viewer">
                                    <ul class="slider">
                                        <?php if(get_field('top_ph01')): ?>
                                        <?php
                                            $attachment_id = get_field('top_ph01');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('top_ph01') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                            <li><a href="javascript:void(0)"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" /></a></li>
                                        <?php endif; ?>
                                        <?php if(get_field('top_ph02')): ?>
                                        <?php
                                            $attachment_id = get_field('top_ph02');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('top_ph02') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                            <li><a href="javascript:void(0)"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" /></a></li>
                                        <?php endif; ?>
                                        <?php if(get_field('top_ph03')): ?>
                                        <?php
                                            $attachment_id = get_field('top_ph03');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('top_ph03') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                            <li><a href="javascript:void(0)"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" /></a></li>
                                        <?php endif; ?>
                                    </ul>
                                    <ul class="thumb">
                                    <?php if(get_field('top_ph01')): ?>
                                        <?php
                                            $attachment_id = get_field('top_ph01');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('top_ph01') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                            <li><a href="javascript:void(0)"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" /></a></li>
                                        <?php endif; ?>
                                        <?php if(get_field('top_ph02')): ?>
                                        <?php
                                            $attachment_id = get_field('top_ph02');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('top_ph02') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                            <li><a href="javascript:void(0)"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" /></a></li>
                                        <?php endif; ?>
                                        <?php if(get_field('top_ph03')): ?>
                                        <?php
                                            $attachment_id = get_field('top_ph03');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('top_ph03') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                            <li><a href="javascript:void(0)"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" /></a></li>
                                        <?php endif; ?>
                                    </ul>
                                    <style>
                                        .slider, .thumb { margin: 0px auto; height: auto!important; }
                                        .slider img, .thumb img { height: auto; width: 100%; }
                                        .slick-prev:before, .slick-next:before { color: #000; }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if($post->post_content=="") : ?>
                                <?php else : ?>
                                <div class="clearfix">
                                    <div class="entry">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                	<div class="clearfix entry">
					<?php if(have_rows('features')): ?>
                        <?php while(have_rows('features')): the_row(); ?>
							<?php $price = get_sub_field("features_title_style",true); ?>
                            <?php if ($price == 'h2') : ?>
                            <h2 class="title2 mt60"><?php the_sub_field('features_title'); ?></h2>
                            <?php elseif ($price == 'h3') : ?>
                            <h3><?php the_sub_field('features_title'); ?></h3>
                            <?php elseif ($price == 'h4') : ?>
                            <h4><?php the_sub_field('features_title'); ?></h4>
                            <?php elseif ($price == 'h5') : ?>
                            <h5><?php the_sub_field('features_title'); ?></h5>
                            <?php endif; ?>
                            <div class="characteristic column-flex">
                                <?php if(get_sub_field('features_cheak')): ?><div class="CharacteristicL"><?php else : ?><div class="CharacteristicL-over"><?php endif; ?>
									<?php the_sub_field('features_txt'); ?>
                                </div>
                                <?php if(get_sub_field('features_cheak')): ?>
								<?php if(have_rows('features_img')): ?>
                                    <div class="CharacteristicR">
                                    <?php while(have_rows('features_img')): the_row(); ?>
                                        <?php if(get_sub_field('features_ph')): ?>
                                        <?php
                                            $attachment_id = get_sub_field('features_ph');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('features_ph') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                        <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" />
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
						<?php endwhile; ?>
                    <?php else : ?>
                    <!-- <h2 class="title2 no-entry">特長</h2> -->
                    <?php endif; ?>
                    </div>
                    <?php if( get_field('catalog_dl') ): ?>
                    	<p><a href="https://www.ipros.jp/search/catalog/%E3%82%B3%E3%83%88%E3%83%92%E3%83%A9%E5%B7%A5%E6%A5%AD/" target="_blank" class="btn w220px"><span class="btn-blank">カタログ<span class="nakaguro">・</span>仕様図<span class="nakaguro">・</span>取説ダウンロード</span></a></p>
					<?php endif; ?>
                    <!--p><a href="#form" class="btn w220px"><span class="btn-link">この製品のお問い合わせ</span></a></p-->
                </div>
                <div class="contentsWrap" id="contentsWrap02">
                	<div class="clearfix entry">
					<?php if(have_rows('major_use')): ?>
                        <?php while(have_rows('major_use')): the_row(); ?>

							<?php $price = get_sub_field("major_use_title_style",true); ?>
                            <?php if ($price == 'h2') : ?>
                            <h2 class="title2"><?php the_sub_field('major_use_title'); ?></h2>
                            <?php elseif ($price == 'h3') : ?>
                            <h3><?php the_sub_field('major_use_title'); ?></h3>
                            <?php elseif ($price == 'h4') : ?>
                            <h4><?php the_sub_field('major_use_title'); ?></h4>
                            <?php elseif ($price == 'h5') : ?>
                            <h5><?php the_sub_field('major_use_title'); ?></h5>
                            <?php endif; ?>

                            <div class="characteristic column-flex">
                                <?php if(get_sub_field('major_use_cheak')): ?><div class="CharacteristicL"><?php else : ?><div class="CharacteristicL-over"><?php endif; ?>
									<?php the_sub_field('major_use_txt'); ?>
                                </div>
                                <?php if(get_sub_field('major_use_cheak')): ?>
								<?php if(have_rows('major_use_img')): ?>
                                    <div class="CharacteristicR">
                                    <?php while(have_rows('major_use_img')): the_row(); ?>
                                        <?php if(get_sub_field('major_use_ph')): ?>
                                        <?php
                                            $attachment_id = get_sub_field('major_use_ph');
                                            $size = "full";
                                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                                            $attachment = get_post( get_field('major_use_ph') );
                                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                            $image_title = $attachment->post_title;
                                        ?>
                                        <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" />
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
						<?php endwhile; ?>
                    <?php else : ?>
                    <!-- <h2 class="title2 no-entry">用途・構造</h2> -->
                    <?php endif; ?>
                    </div>
                </div>
                <div class="contentsWrap" id="contentsWrap03">
                	<div class="clearfix entry">
					<?php if(have_rows('specification')): ?>
                        <?php while(have_rows('specification')): the_row(); ?>

							<?php $price = get_sub_field("specification_title_style",true); ?>
                            <?php if ($price == 'h2') : ?>
                            <h2 class="title2"><?php the_sub_field('specification_title'); ?></h2>
                            <?php elseif ($price == 'h3') : ?>
                            <h3><?php the_sub_field('specification_title'); ?></h3>
                            <?php elseif ($price == 'h4') : ?>
                            <h4><?php the_sub_field('specification_title'); ?></h4>
                            <?php elseif ($price == 'h5') : ?>
                            <h5><?php the_sub_field('specification_title'); ?></h5>
                            <?php endif; ?>

                            <div class="clearfix conts">
								<?php the_sub_field('specification_txt'); ?>
                            </div>
						<?php endwhile; ?>
                    <?php else : ?>
                    <!-- <h2 class="title2 no-entry">ラインナップ・仕様</h2> -->
                    <?php endif; ?>
                    </div>
                </div>
                <div class="contentsWrap" id="contentsWrap04">
                	<div class="clearfix entry">
					<?php if(have_rows('ryokin')): ?>
                        <?php while(have_rows('ryokin')): the_row(); ?>

							<?php $price = get_sub_field("ryokin_title_style",true); ?>
                            <?php if ($price == 'h2') : ?>
                            <h2 class="title2"><?php the_sub_field('ryokin_title'); ?></h2>
                            <?php elseif ($price == 'h3') : ?>
                            <h3><?php the_sub_field('ryokin_title'); ?></h3>
                            <?php elseif ($price == 'h4') : ?>
                            <h4><?php the_sub_field('ryokin_title'); ?></h4>
                            <?php elseif ($price == 'h5') : ?>
                            <h5><?php the_sub_field('ryokin_title'); ?></h5>
                            <?php endif; ?>

                            <div class="clearfix conts">
								<?php the_sub_field('ryokin_txt'); ?>
                                <p class="asterisk">※料金の詳細はお問い合わせください。表示金額は全て消費税別・運賃別です。</p>
                            </div>
						<?php endwhile; ?>

                    <?php else : ?>
                    <!-- <h2 class="title2 no-entry">料金</h2> -->
                    <?php endif; ?>
                    </div>
                </div>
                <div class="contentsWrap" id="contentsWrap04">
                	<div class="clearfix entry">
					<?php if(have_rows('option')): ?>
                        <?php while(have_rows('option')): the_row(); ?>

							<?php $price = get_sub_field("option_title_style",true); ?>
                            <?php if ($price == 'h2') : ?>
                            <h2 class="title2"><?php the_sub_field('option_title'); ?></h2>
                            <?php elseif ($price == 'h3') : ?>
                            <h3><?php the_sub_field('option_title'); ?></h3>
                            <?php elseif ($price == 'h4') : ?>
                            <h4><?php the_sub_field('option_title'); ?></h4>
                            <?php elseif ($price == 'h5') : ?>
                            <h5><?php the_sub_field('option_title'); ?></h5>
                            <?php endif; ?>

                            <div class="clearfix conts">
								<?php the_sub_field('option_txt'); ?>
                            </div>
						<?php endwhile; ?>
                    <?php else : ?>
                    <!-- <h2 class="title2 no-entry">オプション・消耗品</h2> -->
                    <?php endif; ?>
                    </div>
                </div>
                <section id="form">
                    <h2>この製品のお問い合わせ</h2>
                    <?php echo do_shortcode('[contact-form-7 id="4756" title="製品お問い合わせ"]'); ?>
                </section>
            </section>
        </article>

        <article id="products-link">
        	<div class="products-link">
            	<h2><?php $terms = get_the_terms($post->ID,'products-cat'); foreach($terms as $term) {echo $term->name;} ?>　ラインナップ</h2>
				<?php
                $term = array_shift(get_the_terms($post->ID, 'products-cat'));
                ?>
                <?php $tax_posts = get_posts('post_type=products&posts_per_page=30&taxonomy=products-cat&term='.esc_html($term->slug)); if($tax_posts): ?>
                <ul class="column-flex">
                    <?php foreach($tax_posts as $tax_post): ?>
                    <li>
                        <a href="<?php echo get_permalink($tax_post->ID); ?>">
                        <?php if(get_field('top_ph01',$tax_post->ID)): ?>
                        <?php
                            $attachment_id = get_field('top_ph01',$tax_post->ID);
                            $size = "full";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                            $attachment = get_post( get_field('top_ph01',$tax_post->ID) );
                            $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                            $image_title = $attachment->post_title;
                        ?>
                            <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" />
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/noimage.jpg" alt="NO IMEAGE" width="290" height="290" />
                        <?php endif; ?>
                        <h3><?php echo esc_html($tax_post->post_title); ?></h3>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <a href="<?php echo home_url('/'); ?>products/" class="btn m-center to-products-top"><span class="btn-inner">製品情報トップへ</span></a>
            </div>
        </article>
    </main>

<?php get_footer(2); ?>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/slick.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/common/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/common/css/slick.css" rel="stylesheet" type="text/css">
<script>
jQuery(function($){
    $('.slider').slick({
        arrows:false,
        asNavFor:'.thumb',
    });
    $('.thumb').slick({
        asNavFor:'.slider',
        focusOnSelect: true,
        slidesToShow:4,
        slidesToScroll:1
    });
});
</script>
</body>
</html>