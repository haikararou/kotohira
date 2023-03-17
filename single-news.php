<?php get_header(); ?>
<body id="news" class="newsPost <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
        <h1 class="title1">NEWS</h1>
    </div>
    <!-- main -->
    <main>
		<article>
    
            <section class="wrapper clearfix">
                <div class="clearfix">
                    <h2 class="title2"><span><?php the_title() ?></span></h2>
                    <div class="post_date"><?php the_time('Y年m月d日') ?>　<span><?php $terms = get_the_terms($post->ID,'news-cat'); foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'news-cat').'">'.$term->name.'</a>'; }?></span></div>
                </div>
                <div class="entry clearfix">
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                    ?>
					<?php if( get_field('linkurl') ): ?>
                        <a href="<?php the_field('linkurl'); ?>"><?php the_title();?></a>
                    <?php else : ?>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </div>
                
                <div class="pagenate">
                    <div class="left"><?php next_post_link('%link','&lt') ?></div>
                    <div class="right"><?php previous_post_link('%link','&gt;') ?></div>
                    <div class="center"><a href="/news/">NEWSトップへ</a></div>
                </div>
            </section>

        </article>
    </main>
<?php get_footer(); ?>
</body>
</html>