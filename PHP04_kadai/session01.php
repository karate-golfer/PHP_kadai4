<?php

session_start();

$_SESSION['name'] = 'keigo';
$_SESSION['age'] = 45;



$sid = session_id();
echo $sid;





