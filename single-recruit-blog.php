<?php get_header(); ?>
<body id="recruit" class="blog entry newsPost newsList <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit2.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit2.php"); ?>

    <!-- main -->
    <main>
        <div id="recruit_main">
            <img src="<?php echo get_template_directory_uri(); ?>/common/img/recruit/blog_main.jpg" alt="人事ブログ" width="11" height="4"/>
            <div class="recruit_main_txt">
                <h1 class="recruit_title"><span class="font-eb">Blog</span>人事ブログ</h1>
            </div>
        </div>
		<article>
    
            <section class="wrapper clearfix">
                <div class="clearfix entry-list">
                    <h2 class="title2"><span><?php the_title() ?></span></h2>
                    <div class="post_date"><?php the_time('Y年m月d日') ?>　
                    <?php
                            $terms = get_the_terms($post->ID,'recruit-blog-cat');
                            if (empty( $terms )) {
                            } else {
                                foreach( $terms as $term ) {
                                    echo '<a href="'.get_term_link($term->slug, 'recruit-blog-cat').'">'.$term->name.'</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="entry clearfix">                
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                    ?>
                    <div class="body_box"><?php the_content(); ?></div>
                </div>
                
                <div class="pagenate">
                    <div class="left"><?php next_post_link('%link','&lt') ?></div>
                    <div class="right"><?php previous_post_link('%link','&gt;') ?></div>
                    <div class="center"><a href="../">人事ブログトップへ</a></div>
                </div>
            </section>

        </article>
    </main>
<?php get_footer(4); ?>
</body>
</html>