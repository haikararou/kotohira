<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJTG2ZR');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="ja">

<link rel="apple-touch-icon" href="apple-touch-icon.png">

<meta name="format-detection" content="telephone=no">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no">  
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<!-------------------------------------------------------------------------------------------->
<?php wp_head(); ?>
<?php if ( is_post_type_archive('case')): ?>
<meta name="description"  content="コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。加工事例をご紹介します。" />
<link rel="canonical" href="https://www.kotohira.biz/oem/case/" />
<meta property="og:title" content="加工事例｜OEM製造受託 | コトヒラ工業株式会社" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.kotohira.biz/oem/case/" />
<meta property="og:image" content="https://www.kotohira.biz/wp/wp-content/themes/kotohira/common/img/ogp.png" />
<meta property="og:site_name" content="コトヒラ工業株式会社" />
<meta property="og:description" content="コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。加工事例をご紹介します。" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="加工事例｜OEM製造受託 | コトヒラ工業株式会社" />
<meta name="twitter:description" content="コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。加工事例をご紹介します。" />
<meta name="twitter:image" content="https://www.kotohira.biz/wp/wp-content/themes/kotohira/common/img/ogp.png" />
<meta itemprop="image" content="https://www.kotohira.biz/wp/wp-content/themes/kotohira/common/img/ogp.png" />
<?php elseif(is_post_type_archive('faq')): ?>
<meta name="description"  content="コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。よくある質問をご紹介します。" />
<link rel="canonical" href="https://www.kotohira.biz/oem/faq/" />
<meta property="og:title" content="よくある質問｜OEM製造受託 | コトヒラ工業株式会社" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.kotohira.biz/oem/faq/" />
<meta property="og:image" content="https://www.kotohira.biz/wp/wp-content/themes/kotohira/common/img/ogp.png" />
<meta property="og:site_name" content="コトヒラ工業株式会社" />
<meta property="og:description" content="コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。よくある質問をご紹介します。" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="よくある質問｜OEM製造受託 | コトヒラ工業株式会社" />
<meta name="twitter:description" content="コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。よくある質問をご紹介します。" />
<meta name="twitter:image" content="https://www.kotohira.biz/wp/wp-content/themes/kotohira/common/img/ogp.png" />
<meta itemprop="image" content="https://www.kotohira.biz/wp/wp-content/themes/kotohira/common/img/ogp.png" />
<?php endif; ?>
<!-------------------------------------------------------------------------------------------->
<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css" media="print,screen" />
<script src="https://api.html5media.info/1.1.5/html5media.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.tel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/config.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.inview.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/swiper.min.css" media="print,screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/home.css" media="print,screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/flexslider.css" type="text/css" media="screen" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script type="text/javascript">
$(function(){
  $('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','pref','addr');
  })
})
</script>
</head>