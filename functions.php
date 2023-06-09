<?php


//タイトルを表示
add_theme_support('title-tag');


function customizeTitle($title) {
  // キャッチフレーズをタイトルタグに含めることはあまりないのでunset。
  unset($title['tagline']);
 
  // あまり変更はしないかもだけどサイトネームもここでカスタマイズ出来ます。
  $title['site'] = 'コトヒラ工業株式会社';
 
  //ページごとの分岐
  if(is_post_type_archive('case')){
    $title['title'] = $title['title'].'｜OEM製造受託';
  }else if(is_post_type_archive('faq')){
    // 個別記事の分岐
    $title['title'] = $title['title'].'｜OEM製造受託';
  }
  return $title;
}
// 第３、4引数の10,1はとりあえず初期値を入れています。
add_filter('document_title_parts','customizeTitle');
 
// タイトルとサイトネームを区切るセパレータはデフォルトでは'-'なので任意に変更する。
function customizeSeparator($separator) {
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator','customizeSeparator');





//
/*
remove_action('wp_head','wp_enqueue_scripts',1);
remove_action('wp_head','wp_resource_hints',2);
remove_action('wp_head','feed_links',2);
remove_action('wp_head','feed_links_extra',3);
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head',10,0);
remove_action('wp_head','locale_stylesheet');
remove_action('wp_head','noindex',1);
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_head','wp_print_styles',8);
remove_action('wp_head','wp_print_head_scripts',9);
remove_action('wp_head','wp_generator');
remove_action('wp_head','rel_canonical');
remove_action('wp_head','wp_shortlink_wp_head',10,0);
remove_action('wp_head','wp_site_icon',99);
remove_action('wp_head','wp_no_robots');
remove_action('wp_head','wp_post_preview_js',1);
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head','rest_output_link_wp_head',10,0);
remove_action('wp_head','_custom_logo_header_styles');
*/

//カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
	//カスタム投稿タイプ2（ここから）
	register_post_type(
	'exhibition',
	array(
	'labels' => array(
	'name' => __( '展示会情報' ),
	'singular_name' => __( '展示会情報' ),
    'add_new_item' => '新規展示会情報を追加',
    'add_new' => '新規追加',
    'new_item' => '新規展示会情報',
    'view_item' => '展示会情報を表示'
	),
	'description' => 'コトヒラ工業が出展予定の展示会情報をご紹介します',
	'keywords' => 'コトヒラ,長野県,東御市,展示会情報,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title','thumbnail','revisions'),
	'yarpp_support' => true,
	'public' => true,
	'has_archive' => true,
	'menu_position' =>5,
	)
	);
	//カスタム投稿タイプ2（ここまで）

	//カスタム投稿タイプ3（ここから）
	register_post_type(
	'products',
	array(
	'labels' => array(
	'name' => __( '製品情報' ),
	'singular_name' => __( '製品情報' ),
    'add_new_item' => '製品情報を追加',
    'add_new' => '新規追加',
    'new_item' => '新規製品情報',
    'view_item' => '製品情報を表示'
	),
	'description' => 'コトヒラ工業の自社製品は、製造・生産技術、開発・設計、システム開発などの複合技術力を生かした製品群です。',
	'keywords' => 'コトヒラ,長野県,東御市,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
	'has_archive' => true,
	'menu_position' =>6,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'products-cat',  /* タクソノミーのslug */
		'products',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		  'show_ui' => true
		)
	);
	//カスタム投稿タイプ3（ここまで）

	//カスタム投稿タイプ4（ここから）
	register_post_type(
	'news',
	array(
	'labels' => array(
	'name' => __( 'NEWS' ),
	'singular_name' => __( 'NEWS' ),
    'add_new_item' => 'NEWSを追加',
    'add_new' => '新規追加',
    'new_item' => '新規NEWS',
    'view_item' => 'NEWSを表示'
	),
	'description' => 'コトヒラ工業が最新ニュースをご紹介します',
	'keywords' => 'コトヒラ,長野県,東御市,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
	'has_archive' => true,
	'menu_position' =>6,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'news-cat',  /* タクソノミーのslug */
		'news',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		  'show_ui' => true
		)
	);
	//カスタム投稿タイプ4（ここまで）
	
	//カスタム投稿タイプ5（ここから）
	register_post_type(
	'company-news',
	array(
	'labels' => array(
	'name' => __( '社外活動' ),
	'singular_name' => __( '社外活動' ),
    'add_new_item' => '社外活動を追加',
    'add_new' => '新規追加',
    'new_item' => '新規社外活動',
    'view_item' => '社外活動を表示'
	),
	'description' => 'コトヒラ工業の社外活動をご紹介します',
	'keywords' => 'コトヒラ,長野県,東御市,社外活動,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
	'has_archive' => true,
	'menu_position' =>6,
	'rewrite' => array('slug' => 'company/activity'),
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'company-activity-cat',  /* タクソノミーのslug */
		'company-news',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		  'show_ui' => true
		)
	);
	//カスタム投稿タイプ5（ここまで）

	//カスタム投稿タイプ6（ここから）
	register_post_type(
	'newproducts',
	array(
	'labels' => array(
	'name' => __( 'NEW PRODUCT' ),
	'singular_name' => __( 'NEW PRODUCT' ),
    'add_new_item' => 'NEW PRODUCTを追加',
    'add_new' => '新規追加',
    'new_item' => '新規製品情報',
    'view_item' => '製品情報を表示'
	),
	'description' => 'コトヒラ工業の新製品情報をご紹介します',
	'keywords' => 'コトヒラ,長野県,東御市,社外活動,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', /*'editor',*/ 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
	'has_archive' => true,
	'menu_position' =>6,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'newproducts-cat',  /* タクソノミーのslug */
		'newproducts',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		  'show_ui' => true
		)
	);
	//カスタム投稿タイプ6（ここまで）

	//カスタム投稿タイプ7（ここから）
	register_post_type(
	'recruit-news',
	array(
	'labels' => array(
	'name' => __( '採用ニュース' ),
	'singular_name' => __( '採用ニュース' ),
    'add_new_item' => '採用ニュースを追加',
    'add_new' => '新規追加',
    'new_item' => '新規採用ニュース',
    'view_item' => '採用ニュースを表示'
	),
	'description' => 'コトヒラ工業の採用最新ニュースをご紹介します',
	'keywords' => 'コトヒラ,長野県,東御市,社外活動,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"show_in_menu" => true,
	'has_archive' => "recruit/news",
	'menu_position' =>6,
	'rewrite' => array('slug' => 'recruit/news'),
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"query_var" => true,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'recruit-news-cat',  /* タクソノミーのslug */
		'recruit-news',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'recruit/news/cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
		)
	);
	//カスタム投稿タイプ7（ここまで）

	//カスタム投稿タイプ8（ここから）
	register_post_type(
	'recruit-blog',
	array(
	'labels' => array(
	'name' => __( '人事ブログ' ),
	'singular_name' => __( '人事ブログ' ),
    'add_new_item' => '人事ブログを追加',
    'add_new' => '新規追加',
    'new_item' => '新規人事ブログ',
    'view_item' => '人事ブログを表示'
	),
	'description' => 'コトヒラ工業の人事ブログをご紹介します',
	'keywords' => 'コトヒラ,長野県,東御市,社外活動,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"show_in_menu" => true,
	'has_archive' => "recruit/blog",
	'menu_position' =>6,
	'rewrite' => array('slug' => 'recruit/blog'),
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"query_var" => true,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'recruit-blog-cat',  /* タクソノミーのslug */
		'recruit-blog',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'recruit/blog/cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
		)
	);
	//カスタム投稿タイプ8（ここまで）

	//カスタム投稿タイプ9（ここから）
	register_post_type(
	'case',
	array(
	'labels' => array(
	'name' => __( '加工事例' ),
	'singular_name' => __( '加工事例' ),
    'add_new_item' => '加工事例を追加',
    'add_new' => '新規追加',
    'new_item' => '新規加工事例',
    'view_item' => '加工事例を表示'
	),
	'description' => 'コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。加工事例をご紹介します。',
	'keywords' => 'コトヒラ,長野県,東御市,社外活動,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"show_in_menu" => true,
	'has_archive' => "oem/case",
	'menu_position' =>6,
	'rewrite' => array('slug' => 'oem/case'),
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"query_var" => true,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'case-cat',  /* タクソノミーのslug */
		'case',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'oem/case/cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
		)
	);
	//カスタム投稿タイプ9（ここまで）

	//カスタム投稿タイプ10（ここから）
	register_post_type(
	'faq',
	array(
	'labels' => array(
	'name' => __( 'よくある質問' ),
	'singular_name' => __( 'よくある質問' ),
    'add_new_item' => 'よくある質問を追加',
    'add_new' => '新規追加',
    'new_item' => '新規よくある質問',
    'view_item' => 'よくある質問を表示'
	),
	'description' => 'コトヒラ工業は大型製缶・大型機械加工から大型製品の処理・測定まで社内一貫生産が可能です。よくある質問をご紹介します。',
	'keywords' => 'コトヒラ,長野県,東御市,社外活動,環境,クリーンルーム機器,小型集塵機・集煙機,長靴・短靴衛生機器,電解水関連機器,小型脱臭器,殺菌ロッカー・殺菌庫,実験研究用機器,バイオトイレ,スキー関連製品',
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'yarpp_support' => true,
	'public' => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"show_in_menu" => true,
	'has_archive' => "oem/faq",
	'menu_position' =>6,
	'rewrite' => array('slug' => 'oem/faq'),
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"query_var" => true,
	)
	);
	/* カスタムタクソノミー */
	register_taxonomy(
		'faq-cat',  /* タクソノミーのslug */
		'faq',           /* 属する投稿タイプ */
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'カテゴリー',
		  'singular_label' => 'カテゴリー',
		  'public' => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'oem/faq/cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
		)
	);
	//カスタム投稿タイプ10（ここまで）

}


//カスタムポストacv ページ送り
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    if ( $query->is_post_type_archive('news') ) {
        $query->set( 'posts_per_page', '20' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



//検索
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}


//アイキャッチ
add_theme_support( 'post-thumbnails' );
//サイズを指定する場合は以下も記述
//set_post_thumbnail_size(180, 150, true);


//出力側の変換機能を無効化する
remove_filter( 'the_content', 'wpautop' );

//出力側の余計な変換機能を無効化する
remove_filter( 'the_content', 'wptexturize' );

//ビジュアルエディタの余計な機能を無効化する
function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );



/*ショートコード サイトURL：[url]*/
function shortcode_url() {
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');



/*ショートコード テンプレートURL：[t_url]*/
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('t_url', 'shortcode_templateurl');



/*固定ページの画像パス*/
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');





//Contact Form 7の入力欄に文字を自動で入れる
function my_form_tag_filter($tag){

//そのページにフォームがある場合は直接値を渡す。
$posttitle= get_the_title();
if(isset($posttitle)){
$name = $tag['name'];
if($name == 'posttitle')
$tag['values'] = (array) $posttitle;
}
return $tag;
}
add_filter('wpcf7_form_tag','my_form_tag_filter', 11);





//ショートコードを使ったphpファイルの呼び出し方法
function my_php_Include($params = array()) {
 extract(shortcode_atts(array('file' => 'default'), $params));
 ob_start();
 include(STYLESHEETPATH . "/common/module/$file.php");
 return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');



// ビジュアルエディタ用CSS
add_editor_style('editor-style.css');

//フォーマットのh1,h2を削除する
function custom_editor_settings( $initArray ){
    // WordPress3くらい
    //$initArray['theme_advanced_blockformats'] = 'p,address,pre,code,h3,h4,h5,h6';
    // WordPress4から
    $initArray['block_formats'] = "段落=p; 見出し3=h3; 見出し4=h4; 見出し5=h5; 見出し6=h6;";
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );



//TinyMCEの斜体と太字をspanタグにする
function _tinyMCESettings($arr){
	$formats = array(
		'italic' => array(
			'inline' => 'span',
			'styles' => array(
				'fontStyle' => 'italic'
			)
		),	
		'bold' => array(
			'inline' => 'span',
			'styles' => array(
				'fontWeight' => 'bold'
			)
		)
	);
	$arr['formats'] = json_encode($formats);
	return $arr;
}
add_filter('tiny_mce_before_init','_tinyMCESettings',1000);




// カスタム投稿タイプでカテゴリ未選択時にデフォルトで お知らせ（info）を設定
function add_defaultcategory_automatically($post_ID) {
    global $wpdb;
    // 設定されているカスタム分類のタームを取得
    $curTerm = wp_get_object_terms($post_ID, 'news-cat');
    // 既存のターム指定数が 0（つまり未設定）であれば）「お知らせ（info）」を指定
    if (0 == count($curTerm)) {
        // お知らせ（info） のターム ID
        $defaultTerm= array(26);
        wp_set_object_terms($post_ID, $defaultTerm, 'news-cat');
    }
}
// news を作成する際に指定
add_action('publish_news', 'add_defaultcategory_automatically');




// カスタム投稿タイプでカテゴリ未選択時にデフォルトで お知らせ（info）を設定
function add_defaultcategory_automatically2($post_ID) {
    global $wpdb;
    // 設定されているカスタム分類のタームを取得
    $curTerm = wp_get_object_terms($post_ID, 'company-news-cat');
    // 既存のターム指定数が 0（つまり未設定）であれば）「お知らせ（info）」を指定
    if (0 == count($curTerm)) {
        // お知らせ（info） のターム ID
        $defaultTerm= array(29);
        wp_set_object_terms($post_ID, $defaultTerm, 'company-news-cat');
    }
}
// company-news を作成する際に指定
add_action('publish_company-news', 'add_defaultcategory_automatically2');






//AddQuicktagをカスタム投稿タイプで使用する
add_filter('addquicktag_post_types', 'my_addquicktag_post_types');
function my_addquicktag_post_types($post_types){
array_push($post_types, "news", "company-news", "products");
return $post_types;
}





//All in One SEO Packでアーカイブページにもtitle,descriptionを設定する
function aioseop_title_extention($title){
  //if(is_post_type_archive('products')){
  if(is_post_type_archive(array('products','news','company-news'))){
    $title = get_post_meta(get_page_by_path('products')->ID, _aioseop_title, true);
  }
  return $title;
}
add_filter('aioseop_title', 'aioseop_title_extention');

function aioseop_description_extention($description){
  //if(is_post_type_archive('products')){
  if(is_post_type_archive(array('products','news','company-news'))){
    $description = get_post_meta(get_page_by_path('products')->ID, _aioseop_description, true);
  }
  return $description;
}
add_filter('aioseop_description', 'aioseop_description_extention');

function aioseop_keywords_extention($keywords){
  //if(is_post_type_archive('products')){
  if(is_post_type_archive(array('products','news','company-news'))){
    $keywords = get_post_meta(get_page_by_path('products')->ID, _aioseop_keywords, true);
  }
  return $keywords;
}
add_filter('aioseop_keywords', 'aioseop_keywords_extention');








//get_the_archive_title()で呼び出したタイトルから”アーカイブ：”、”カテゴリー：”、”タグ：”、”作者：”を消す
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_archive() ) {       
            $title = post_type_archive_title( '', false );   
        } elseif (  is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = get_the_author();
        }
    return $title;
});






//記事内の最初にある画像URLを取得して表示させるコード
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
 
    if(empty($first_img)){ //Defines a default image
        $first_img = "/wp/wp-content/themes/kotohira/common/img/noimage2.jpg";
    }
return $first_img;
}


//抜粋の文末に表示される文字列をリンクにする
function new_excerpt_more($post) {
	return '<a href="'. get_permalink($post->ID) . '">' . '...続きはこちら' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



//自動更新時に配信されるメールの停止
add_filter( 'auto_core_update_send_email', '__return_false' );

/*
add_filter( 'wp_lazy_loading_enabled', '__return_false' );

add_filter('wp_calculate_image_srcset_meta', '__return_null');
*/



// function linkbtn_func( $atts, $content = null ) {
// 	return '<a href="'.$url.'" class="btn"><span class="btn-blank">'.$content.'</span></a>';
// }
// add_shortcode('linkbtn', 'linkbtn_func');




// function linkbtn_func($atts, $content=null){
// $a = shortcode_atts( array(
// 'url' => 'URL',
// 'txt' => 'テキスト'
// ), $atts, 'linkbtn_func');
// return '<a href="'.$a['url'].'" class="btn"><span class="btn-blank">'.$a['txt'].'</span></a>';
// }
// add_shortcode('linkbtn','linkbtn_func');



function linkbtn_func($atts){
return '<a href="'.$atts['url'].'" class="btn"><span class="btn-blank">'.$atts['txt'].'</span></a>';
}
add_shortcode('linkbtn', 'linkbtn_func');