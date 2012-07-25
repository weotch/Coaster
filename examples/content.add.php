<?php

require_once "../src/Coaster.php";

define('PUBLIC_API_KEY', '');
define('PRIVATE_API_KEY', '');

$signal_site = '';
$coaster = new Coaster($signal_site, PUBLIC_API_KEY, PRIVATE_API_KEY, $service_data);
$coaster->exit_on_error = true;

$api_data = array(
        'gallery_id' => '3',
        'title' => 'This is a test title.',
        'description' => 'This is a test description.',
        'active' => '0',
        'meta' => '123456',
        );

try {
    $res = $coaster->call('/content/add', $api_data);
    echo 'Results: PASSED';
} catch( TM_Client_Exception $e ) {
    sleep(3);
    echo 'Results: FAILED';
}

?>
