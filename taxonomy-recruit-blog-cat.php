<?php get_header(); ?>
<body id="recruit" class="blog newsList <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit2.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit2.php"); ?>

    <main>               
        <div id="recruit_main">
            <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/blog_main.jpg" alt="人事ブログ" width="11" height="4"/>
            <div class="recruit_main_txt">
                <h1 class="recruit_title"><span class="font-eb">Blog</span>人事ブログ</h1>
            </div>
        </div>
        <article>
            <section>
            <h2 class="tax_title">人事ブログ : <?php single_term_title(); ?></h2>
            <div class="recruit_blog_list">
            <?php query_posts($query_string .'&order=DESC&orderby=date&posts_per_page=10'); ?>
            
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
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
			<?php endwhile; endif; ?>
            </div>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

            </section>
        </article>
    </main>

<?php get_footer(4); ?>
</body>
</html>