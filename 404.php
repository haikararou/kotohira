<?php 
/*
Template Name: このサイトについて
*/
?>
<?php get_header(); ?>
<body id="help" class="notFound">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/wp/wp-content/themes/kotohira/common/module/header2.php"); ?>
    <div class="pagetitle">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
        <h1 class="title1"><span>404</span>Not Found</h1>
    </div>
    <!-- main -->
    <main>
        <article>
            <section>
                <div class="conts">
                    <h2 class="title">お探しのページは見つかりません。</h2>
                    <p class="t-center">アクセスいただいたページは削除、変更されたか、現在利用できない可能性があります。<br>お手数ですが、トップページ、またはサイトマップより再度お探しください。</p>
                    <div class="btn_box">
                        <a href="/" class="btn"><span class="btn-inner">トップページ</span></a>
                        <!-- <a href="/sitemap" class="btn"><span class="btn-inner">サイトマップ</span></a> -->
                    </div>
                </div>
            </section>
        </article>
    </main>
<?php get_footer(); ?>
</body>
</html>

<style>
.btn_box {display: flex; -webkit-flex-wrap: wrap; flex-wrap: wrap; -webkit-box-pack: justify; justify-content: center; gap: 1rem;}
h2.title { line-height: 160%;}
@media screen and (max-width:600px){
h2.title { text-align: left!important;}
.t-center { text-align: left!important;}
}
</style>
