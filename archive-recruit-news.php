<?php get_header(); ?>
<body id="recruit" class="news <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?> index">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/recruit2.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-recruit2.php"); ?>

    <div class="pagetitle"><h1 class="title1"><span>RECRUIT</span>採用ニュース</h1></div>

    <main>               
        <article>
            <section>

            <div class="news_list">
				<?php query_posts($query_string .'&posts_per_page=10'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<dl class="clearfix">
                	<dt><?php the_time('Y年m月d日') ?><span>
					<?php
                    	$terms = get_the_terms($post->ID,'recruit-news-cat');
						if (empty( $terms )) {
						} else {
							foreach( $terms as $term ) {
								echo '<a href="'.get_term_link($term->slug, 'recruit-news-cat').'">'.$term->name.'</a>';
							}
						}
					?>
                    </span></dt>
                    <dd><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></dd>
                </dl>
				<?php endwhile; endif; ?>
            </div>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

            </section>
        </article>
    </main>

<?php get_footer(4); ?>
</body>
</html>