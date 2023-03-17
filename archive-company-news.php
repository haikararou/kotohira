<?php get_header('archive'); ?>
<body id="company" class="news newsList <?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/company.css" media="print,screen" />
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header-company.php"); ?>

    <div class="pagetitle"><h1 class="title1"><span>COMPANY</span>社外活動</h1></div>

    <main>               
        <article>
            <section>
            <p>豊かな自然に囲まれた東御市に社屋を構え、開発・生産を日々続けていけるのは、地域の皆様のご理解・ご協力を頂いているからであると考えています。従業員が地域への感謝の気持ちを込めて周辺のゴミ拾いを定期的に実施しています。また地域行事へも積極的に参加し、市民の皆様との交流やふれあいを大切にしています。<br>
            企業としては青少年の育成等を目的に、「コトヒラ杯スポーツ少年野球大会、コトヒラ杯小学生・中学生バレーボール大会、コトヒラ杯東御ソフトテニス大会・コトヒラ杯東信ジュニアスキー大会やコトヒラ杯囲碁大会などのコトヒラ工業冠大会を開催・運営をしています。</p>

            <h2 class="title2"><span>活動報告</span></h2>
            <div class="activity-bnr column-flex">
            	<a href="<?php echo home_url('/'); ?>company-activity-cat/ekiden/"><img src="/wp/wp-content/themes/kotohira/common/img/company/ekiden.jpg" alt="コトヒラ工業駅伝部" width="380" height="180" ><br>コトヒラ工業駅伝部</a>
            	<a href="<?php echo home_url('/'); ?>company-activity-cat/sports/"><img src="/wp/wp-content/themes/kotohira/common/img/company/sports.jpg" alt="コトヒラスポーツ" width="380" height="180"><br>コトヒラスポーツ</a>
            	<a href="<?php echo home_url('/'); ?>company-activity-cat/kotohira-cap/"><img src="/wp/wp-content/themes/kotohira/common/img/company/kotohira-cap.jpg" alt="コトヒラ杯" width="380" height="180"><br>コトヒラ杯</a>
            	<a href="<?php echo home_url('/'); ?>company-activity-cat/contribution/"><img src="/wp/wp-content/themes/kotohira/common/img/company/contribution.jpg" alt="地域貢献活動" width="380" height="180"><br>地域貢献活動</a>
            </div>

            <div class="news_list">
				<?php query_posts($query_string .'&posts_per_page=10'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<dl class="clearfix">
                	<dt><?php the_time('Y年m月d日') ?><span><?php $terms = get_the_terms($post->ID,'company-activity-cat'); foreach( $terms as $term ) { echo '<a href="'.get_term_link($term->slug, 'company-activity-cat').'">'.$term->name.'</a>'; }?></span></dt>
                    <dd><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></dd>
                </dl>
				<?php endwhile; endif; ?>
            </div>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>


            </section>
        </article>
    </main>

<?php get_footer(6); ?>
</body>
</html>