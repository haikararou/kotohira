<?php get_header(); ?>
<body id="search" class="sub">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>

    <div class="pagetitle"><h1 class="title1"><span>検索結果</span><br>『<?php echo get_search_query(); ?>』での検索結果(<?php echo $wp_query->found_posts; ?>件)</h1></div>

    <main>
        <article>
            <section>
                <div class="search_list">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <dl class="clearfix">
                        <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
                        <dd>
						<span><?php $url = get_permalink(); echo urldecode($url); ?></span>
						<?php if(mb_strlen($post->post_content,'UTF-8')>200){
							$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 200,'UTF-8'));
							echo $content.'……';
							}else{
								echo str_replace('\n', '', strip_tags($post->post_content));
							}
						?>
						</dd>
                    </dl>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <p>検索条件にヒットした記事がありませんでした。</p>
                    <?php endif; ?>
                </div>
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </section>
        </article>
    </main>                 

<?php get_footer(); ?>
</body>
</html>