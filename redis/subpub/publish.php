<?php 
try {   
    $redis = new Redis(); 
    $redis->connect('127.0.0.1', 6379);

    $i = 10;
    while($i-->0) {
        sleep(1);
        $redis->publish('message', $i);
        echo "publish $i to message";
        echo chr(10);
    }

} catch (Exception $e) {
    echo $e->getMessage();
}
