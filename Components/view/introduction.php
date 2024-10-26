<?php

require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Introduction.class.php');

$colorList = [
    "red", "yellow-red", "yellow", "yellow-green", "green","blue-green", "blue", "purple-blue", "purple",  "red-purple", "pink", "gray"
];

echo PageHead::pageHead();
echo Introduction::introduction();
echo Introduction::colorList($colorList);
echo Introduction::next("");