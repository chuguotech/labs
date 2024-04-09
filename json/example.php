<?php
$a['name'] = 'Hawk';
$a['age'] = 20;
$a['single'] = false;
$fruits[] = 'Apple';
$fruits[] = 'Mango';
$a['fruits'] = $fruits;
$friend['name'] = 'Lucy';
$friend['age'] = 18;
$a['girlfriend'] = $friend;
echo json_encode($a);
