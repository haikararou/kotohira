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

<meta itemprop="image" content="<?php the_field('top_ph01'); ?>" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no">  
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<!-------------------------------------------------------------------------------------------->
<?php wp_head(); ?>
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
<?php
$attachment_id = get_field('top_ph01');
$size = "full";
$image = wp_get_attachment_image_src( $attachment_id, $size );
$attachment = get_post( get_field('top_ph01') );
$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
$image_title = $attachment->post_title;
echo '<script type="application/ld+json">';
echo '{';
echo '"@context": "http://schema.org",';
echo '"@type": "Product",';
echo '"name": "';
echo the_title();
echo '",';
echo '"image": "';
echo $image[0];
echo '",';
echo '"offers": {';
echo '"@type": "Offer",';
echo '"price": "';
echo the_field('price');
echo '",';
echo '"priceCurrency": "JPY"';
echo '}';
echo '}';
echo '</script>';
?>
</head>