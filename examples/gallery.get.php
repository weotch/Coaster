<?php

require_once "../src/TM.php";

define('PUBLIC_API_KEY', '');
define('PRIVATE_API_KEY', '');

$signal_site = '';
$tm = new TM($signal_site, PUBLIC_API_KEY, PRIVATE_API_KEY, $service_data);
$tm->exit_on_error = true;

$api_data = array('gallery_id' => '1');

try {
    $res = $tm->call('/gallery/get', $api_data);
    print_r($res);
    echo "Results: PASSED\n";
} catch( TM_Client_Exception $e ) {
    sleep(3);
    echo "Results: FAILED\n";
}

?>
