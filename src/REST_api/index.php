<?php 

require_once __DIR__ . '/vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath('/REST_api');

// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/src/views/home.php';
});


// order map routers
$router->map( 'GET|POST', '/store/order', function() {
	echo "Order placed";
});

$router->map( 'GET', '/store/order/[:id]/', function($id) {
	echo "Order placed number $id";
});


$router->map( 'DELETE', '/store/order/[i:id]/', function($id) {
	require __DIR__ . '/src/views/deleted.php';
});


// Users map routers  
$router->map( 'POST', '/user', function() {
    $arr = array('userId' => 1);
    echo json_encode($arr);
});

$router->map( 'GET', '/user/[i:id]/', function($id) {
    require __DIR__ . '/src/views/user.php';
});

$router->map( 'PUT', '/user/[i:id]/', function($id) {
    require __DIR__ . '/src/views/userUpdate.php';
});

$router->map( 'DELETE', '/user/[i:id]/', function($id) {
    require __DIR__ . '/src/views/userUpdate.php';
});


// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}