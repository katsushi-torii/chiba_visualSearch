<?php

require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Introduction.class.php');

$colorList = [
    "red", "yellow-red", "yellow", "yellow-green", "green","blue-green", "blue", "purple-blue", "purple",  "red-purple", "pink", "white"
];

echo PageHead::pageHead();
echo Introduction::introductionComparision();
echo Introduction::colorList($colorList);
echo Introduction::next("_comparision");