<?php
//set front page id global 
global $fpid;
$fpid = get_option('page_on_front');

//acf include in theme
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/acf/';
    return $path;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/acf/';
    return $dir;
}
include_once( get_stylesheet_directory() . '/acf/acf.php' );
//end acf include in theme

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Продукты',
		'menu_title' 	=> 'Продукты',
        'menu_slug' 	=> 'valemi-products',
        'position'      => 20,
        'icon_url'      => 'dashicons-cart',
		'capability' 	=> 'edit_posts',
		'redirect' 	    => false
	));
 
}

add_image_size('block1_points', 115, 115, true);
add_image_size('star_image', 236, 281, true);
add_image_size('block3_points', 146, 146, true);
add_image_size('block4_points', 252, 188, true);
add_image_size('pool_size', 113, 93, true);
add_image_size('bubble', 104, 104, true);
add_image_size('block5_slider', 359, 261, true);
add_image_size('rewies_big_photo', 540, 301, true);
add_image_size('rewies_small_photo', 229, 141, true);

function custom_menu_page_removing() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );

function price_html($full, $sale){
    if(!empty($sale)) {
        echo "<div class='old-price'>{$full}</div>
                    <div class='price'>
                         <div>Цена:</div>
                         <div>{$sale}</div>
                         <div>рублей</div>
                    </div>";
    } else {
        echo "<div class='price'>
                         <div>Цена:</div>
                         <div>{$full}</div>
                         <div>рублей</div>
                    </div>";
    }
}

function price_value($full, $sale){
    if(!empty($sale)) {
        echo $sale;
    } else {
        echo $full;
    }
}

add_action('wp_ajax_nopriv_zakaz_zvonka', 'zakaz_zvonka');
add_action('wp_ajax_zakaz_zvonka', 'zakaz_zvonka');
function zakaz_zvonka(){
    
    parse_str($_POST['data'], $data);

    $post_data = array(
		'post_type'		=> 'zakaz_zvonka',
		'post_title'    => date('d-m-Y') . ' - ' . $data['name'],
        'post_content'  =>  'Имя : ' . $data['name'] . '<br>' .
                            'Телефон : ' . $data['phone'],
	);

    $post_id = wp_insert_post( $post_data );

    if($post_id){
        echo 'ok';
    } else {
        echo 'error';
    }
    
    wp_die();
}

add_action('wp_ajax_nopriv_order_pool', 'order_pool');
add_action('wp_ajax_order_pool', 'order_pool');
function order_pool(){
    
    parse_str($_POST['data'], $data);

    $post_data = array(
		'post_type'		=> 'order_pool',
		'post_title'    => date('d-m-Y') . ' - ' . $data['name'],
        'post_content'  =>  'Имя : ' . $data['name'] . '<br>' .
                            'Телефон : ' . $data['phone'] . '<br>' .
                            'Город : ' . $data['city'] . '<br>' .
                            'Размер : ' . $data['size'] . 'см' . '<br>' .
                            'Промокод : ' . $data['promocode'] . '<br>' .
                            'Сумма заказа : ' . $data['order-price'],
	);

    $post_id = wp_insert_post( $post_data );

    if($post_id){
        echo 'ok';
    } else {
        echo 'error';
    }
    
    wp_die();
}

add_action('wp_ajax_nopriv_order_hill', 'order_hill');
add_action('wp_ajax_order_hill', 'order_hill');
function order_hill(){
    
    parse_str($_POST['data'], $data);

    $post_data = array(
		'post_type'		=> 'order_hill',
		'post_title'    => date('d-m-Y') . ' - ' . $data['name'],
        'post_content'  =>  'Имя : ' . $data['name'] . '<br>' .
                            'Телефон : ' . $data['phone'] . '<br>' .
                            'Город : ' . $data['city'] . '<br>',
	);

    $post_id = wp_insert_post( $post_data );

    if($post_id){
        echo 'ok';
    } else {
        echo 'error';
    }
    
    wp_die();
}

add_action('wp_ajax_nopriv_promocode', 'promocode');
add_action('wp_ajax_promocode', 'promocode');
function promocode(){

    $promocodes = get_field('promo', options);
    foreach ($promocodes as $item) {
        if($item['title'] == $_POST['promocode']){
            $result['status'] = 1;
            $result['message'] = 'Промокод с скидкой в ' . $item['percent'] . '% применен!';
            $result['percent'] = "{$item['percent']}";
            break;
        } else {
            $result['status'] = 0;
        }
    }

    echo json_encode($result);

    wp_die();

}