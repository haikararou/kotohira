<?php 
/*
Template Name: サイトマップ
*/
?>
<?php get_header(); ?>
<body id="help" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>
    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
        <h1 class="title1"><span>SITE MAP</span><?php the_title() ?></h1>
    </div>
    <!-- main -->
    <main>
        <article>
            <div class="sitemapList">
                <div class="sitemapListL">
                    <h2>自社製品<span>PRODUCTS</span></h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>products/">製品一覧</a></li>
                    </ul>
                    <?php
                        $tax_name = 'products-cat';
                        $posttype_name = 'products';
                        $terms = get_terms($tax_name);
                        foreach ( $terms as $term ):

                        $args = array(
                        'post_type' => $posttype_name,
                        'tax_query' => array(
                        array(
                        'taxonomy' => $tax_name,
                        'field'    => 'slug',
                        'terms'    => $term->slug,
                        ),
                        ),
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                        <h3><?php echo $term->name ?></h3>
                        <?php if ($the_query->have_posts()): ?>
                            <ul>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <div class="sitemapListR">
                    <h2>製造受託<span>OEM</span></h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>oem/top/">製造受託トップ</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/flow/">社内一貫生産体制</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/facility/">設備</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/technical/">技術力</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/production_control/">生産管理・品質保証体制</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/case/">加工事例</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/faq/">よくある質問</a></li>
                        <li><a href="<?php echo home_url('/'); ?>oem/interview/hashimoto/">インタビュー</a></li>
                    </ul>
                    <h2>会社情報<span>COMPANY</span></h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>company/outline/">会社概要</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/activity/">社外活動</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/society/">社会・環境活動(CSR)</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/procurement/">資材調達</a></li>
                        <li><a href="<?php echo home_url('/'); ?>company/health/">健康経営</a></li>
                    </ul>
                    <h2>採用情報<span>RECRUIT</span></h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>recruit/">採用情報</a></li>
                        <li><a href="<?php echo home_url('/'); ?>recruit/graduates/">新卒採用</a></li>
                        <li><a href="<?php echo home_url('/'); ?>recruit/carrer/">キャリア採用</a></li>
                        <li><a href="<?php echo home_url('/'); ?>recruit/internship/">インターンシップ</a></li>
                    </ul>
                    <h2>お問い合わせ<span>CONTACT</span></h2>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
                        <li><a href="https://www.ipros.jp/search/catalog/%E3%82%B3%E3%83%88%E3%83%92%E3%83%A9%E5%B7%A5%E6%A5%AD/" class="link" target="_blank">カタログ請求</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>news/">新着情報</a></li>
                        <li><a href="<?php echo home_url('/'); ?>help/">このサイトについて</a></li>
                        <li><a href="<?php echo home_url('/'); ?>privacy/">プライバシーポリシー</a></li>
                        <li><a href="<?php echo home_url('/'); ?>sitemap/">サイトマップ</a></li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
<?php get_footer(); ?>
</body>
</html>