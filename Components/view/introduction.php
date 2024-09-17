<?php

// require_once('../../Config.Inc.php');
require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Introduction.class.php');

$colorList = [
    "HSL0", "HSL30", "HSL60", "HSL90", "HSL120", 
        "HSL150", "HSL180", "HSL210", "HSL240", "HSL270", 
        "HSL300", "HSL330", "black", "white" 
];

echo PageHead::pageHead();
echo Introduction::introduction();
echo Introduction::colorList($colorList);
echo Introduction::next();
echo Introduction::script();