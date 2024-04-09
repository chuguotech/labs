<?php
$http_json_data = null;
$http_json_data = file_get_contents('php://input');
if ( !empty($http_json_data) ) {
	$data = json_decode($http_json_data, true);
	if ( json_last_error() == JSON_ERROR_NONE ) {
		if ( is_array($data) ) {
			var_dump($data);
		}
	}

}
