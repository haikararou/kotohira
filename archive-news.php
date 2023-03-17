<?php get_header('archive'); ?>
<body id="news" class="newsList <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
        <h1 class="title1">NEWS</h1>
    </div>

    <main>
        <article>
            <section>

            <h2 class="title2"><span>最新ニュース一覧
			<?php if(is_month()): ?><?php the_time(" : Y年m月") ?><?php endif; ?></span>
            <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
                <option value=""><?php echo attribute_escape(__('Select Month')); ?></option> 
                <?php wp_get_archives('post_type=news&type=monthly&format=option&show_post_count=1'); ?>
            </select></h2>

            <div class="news_list">
				<!--?php query_posts($query_string .'&posts_per_page=1'); ?-->
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<dl class="clearfix">
                	<dt><?php the_time('Y年m月d日') ?><span><?php $terms = get_the_terms($post->ID,'news-cat'); foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'news-cat').'">'.$term->name.'</a>'; }?></span></dt>
					<?php if( get_field('linkurl') ): ?>
                        <dd><a href="<?php the_field('linkurl'); ?>"><?php the_title();?></a></dd>
                    <?php else : ?>
                        <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                    <?php endif; ?>
                </dl>
				<?php endwhile; endif; ?>
            </div>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>


            </section>
        </article>
    </main>

<?php get_footer(); ?>
</body>
</html>