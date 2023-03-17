<?php 
/*
Template Name: お問い合わせ-コトヒラ工業に関するお問い合わせ
*/
?>
<?php get_header(); ?>
<body id="contact" class="<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; ?><?php echo $slug; ?>">
<?php get_template_part("common/module/header3"); ?>
    <div class="pagetitle"><h1 class="title1"><span>CONTACT</span><?php the_title() ?></h1></div>
    <!-- main -->
    <main>
        <article>
            <section id="form">
                <h2>コトヒラ工業に関するお問い合わせフォーム</h2>
                <?php echo do_shortcode('[contact-form-7 id="4743" title="コトヒラ工業に関するお問い合わせ"]'); ?>
            </section>
        </article>
    </main>
<?php get_footer(7); ?>
</body>
</html>