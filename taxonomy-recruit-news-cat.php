<?php get_header(); ?>
<body id="recruit" class="news newsList <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit2.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit2.php"); ?>

    <div class="pagetitle"><h1 class="title1"><span>RECRUIT</span>採用ニュース <?php single_term_title(); ?></h1></div>

    <main>               
        <article>
            <section>
    
            <?php query_posts($query_string .'&order=DESC&orderby=date&posts_per_page=10'); ?>
            
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="entry-list">
                <h2 class="title2"><span><?php the_title() ?></span><?php $terms = get_the_terms($post->ID,'recruit-news-cat'); foreach( $terms as $term ) { echo '<em>['.$term->name.']</em>'; }?></h2>
                <div class="post_date"><?php the_time('Y年m月d日') ?></div>
                <div class="entry clearfix">                
                    <?php the_content(); ?>
                </div>
			</div>
			<?php endwhile; endif; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

            </section>
        </article>
    </main>

<?php get_footer(4); ?>
</body>
</html>