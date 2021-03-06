<?php

require_once "../src/Coaster.php";

define('PUBLIC_API_KEY', '');
define('PRIVATE_API_KEY', '');

$signal_site = '';
$coaster = new Coaster($signal_site, PUBLIC_API_KEY, PRIVATE_API_KEY, $service_data);
$coaster->exit_on_error = true;

$api_data = array(
    'gallery_id' => '1',
    'environment' => 'brand',
);

try {
    $res = $coaster->call('/gallery/get', $api_data);
    print_r($res);
    echo "Results: PASSED\n";
} catch( TM_Client_Exception $e ) {
    sleep(3);
    echo "Results: FAILED\n";
}

?>
