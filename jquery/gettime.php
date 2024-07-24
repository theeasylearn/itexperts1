<?php
header("Access-Control-Allow-Origin: *"); // Allow access from any origin
header("Access-Control-Allow-Methods: GET, POST"); // Allow specific HTTP methods
header("Access-Control-Allow-Headers: Content-Type");
date_default_timezone_set("asia/kolkata");
$currenttime = date("h:i:s A");
echo $currenttime;
