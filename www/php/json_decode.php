<?php
//预定义变量
$http_json_data = null;

//将HTTP报文Body赋值给预定义变量
$http_json_data = file_get_contents('php://input');

//如果HTTP报文内容不为空
if ( !empty($http_json_data) ) {

	//使用json_decode函数解码数据包为数组
	$data = json_decode($http_json_data, true);

	//如果解码时，没有出现错误
	if ( json_last_error() == JSON_ERROR_NONE ) {

		//解码后的数据是个数组
		if ( is_array($data) ) {
			//答应数组的内容
			var_dump($data);
		}
	}

}







