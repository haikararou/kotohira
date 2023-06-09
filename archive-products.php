<?php get_header('archive'); ?>
<body id="products">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/products.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
        <h1 class="title1"><span>PRODUCTS</span>コトヒラの自社製品</h1>
    </div>

    <main>
        <article>
        <section>
            <div>
                <nav id="page-link">
                    <ul class="column-flex2">
					<?php
                    // タクソノミ取得
                    $catargs = array(
                        'taxonomy' => 'products-cat'
                    );
                    $catlists = get_categories( $catargs );
                    foreach($catlists as $cat) : // 取得したカテゴリの配列でループを回す
                    ?>
                        <li><a href="#link-<?php echo $cat->category_nicename; ?>"><?php echo $cat->name; ?></a></li>
					<?php endforeach; ?>
                    </ul>
                </nav>
                <!--div class="insta_btn"><a href="https://www.instagram.com/kotohira_eigyo/" target="_blank"><span>Instagram @kotohira_eigyo<em>自社製品の紹介、出張の様子などを発信します。</em></span></a></div-->
            </div>
			<?php
            // タクソノミ取得
            $catargs = array(
                'taxonomy' => 'products-cat'
            );
            $catlists = get_categories( $catargs );
            foreach($catlists as $cat) : // 取得したカテゴリの配列でループを回す
            ?>
            <div id="link-<?php echo $cat->category_nicename; ?>" class="products-list-box">
                <h2 class="title3"><?php echo $cat->name; ?></h2>
                <p><?php echo $cat->category_description; ?></p>
                <div class="column-flex2 products-list">
            <?php
            $args = array(
                'post_type' => 'products',
				'posts_per_page' => '-1',
                'products-cat' => $cat->slug
            );
            $my_posts = get_posts( $args );
            if ( $my_posts ) { // 該当する投稿があったら
                foreach ( $my_posts as $post ) :
                    setup_postdata( $post );
                    ?>
                	<?php if( get_field('substitution') ): ?><a href="<?php the_field('substitution'); ?>" class="products-list-conts"><?php else : ?><a href="<?php the_permalink(); ?>" class="products-list-conts"><?php endif; ?>


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


                        <!-- <?php if( get_field('top_ph01') ): ?>
                            <img src="<?php the_field('top_ph01'); ?>" />
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/noimage.jpg" alt="NO IMEAGE" />
                        <?php endif; ?> -->
                        <h3><?php the_title() ?></h3>
                        <?php if( get_field('intro') ): ?><p><?php the_field('intro'); ?></p><?php endif; ?>
                    </a>
                    <?php
                endforeach;
            } else {
                echo 'このカテゴリに投稿はありません';
            }
            wp_reset_postdata();
            ?>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="products-list-line">
                <div class="column-flex2 products-list">
                	<a href="./franchise/" class="products-list-conts btn products-list-conts2"><span class="btn-inner">メンテナンス業者募集</span></a>
                	<a href="./end-of-production/" class="products-list-conts btn products-list-conts2"><span class="btn-inner">生産終了製品のご案内</span></a>
                </div>
            </div>
            <div>
                <h3 class="title4">リンク</h3>
                <div class="column-flex2 products-list">
                	<a href="http://jewa.org/" target="_blank" class="products-list-conts"><img src="/wp/wp-content/uploads/2017/05/jewa_logo.jpg" alt="電解水協会" width="200" height="50"></a>
                	<a href="https://www.fooma.or.jp/" target="_blank" class="products-list-conts"><img src="/wp/wp-content/uploads/2017/05/fooma_logo.jpg" alt="食品工業会" width="200" height="50"></a>
                    <a href="http://www.jaca-1963.or.jp/" target="_blank" class="products-list-conts"><img src="/wp/wp-content/uploads/2022/08/jaca.jpg" alt="公益社団法人 日本空気清浄協会｜JACA (Japan Air Cleaning Association)" width="200" height="50"></a>
                    <a href="https://appie.or.jp/" target="_blank" class="products-list-conts"><img src="/wp/wp-content/uploads/2022/08/appie.jpg" alt="一般社団法人日本粉体工業技術協会" width="200" height="50"></a>
                    <a href="https://www.instagram.com/kotohira_eigyo/" target="_blank" class="products-list-conts"><img src="/wp/wp-content/uploads/2022/09/bnr_insta.jpg" alt="Instagram @kotohira_eigyo" width="200" height="50"></a>
                </div>
            </div>
        </section>
        </article>
    </main>

<?php get_footer(2); ?>
</body>
</html>