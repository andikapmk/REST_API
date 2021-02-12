<?php

$data = file_get_contents('http://localhost:8080/categories');

$orang = json_decode($data, true);
// $encode = json_encode($orang);

echo $orang[0]['category_name'];
