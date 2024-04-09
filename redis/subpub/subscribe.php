<?php 
try {   
    $redis = new Redis(); 
    $redis->connect('127.0.0.1', 6379);
    //$redis->setOption(Redis:: OPT_READ_TIMEOUT, -1);       

    $redis->subscribe(['message'], function($instance, $channelName, $message) { 
        echo "get message ".$message;
        echo chr(10);
    });
} catch (Exception $e) {
    echo $e->getMessage();
}
