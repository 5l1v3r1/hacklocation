<?php
$json = (file_get_contents('php://input'));
$dejson = json_decode($json, true);
$location = $dejson['data'];
file_put_contents("location.txt", " "  . $location . "\n", FILE_APPEND);
exit();
?>
