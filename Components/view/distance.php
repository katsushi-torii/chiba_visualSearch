<?php

// require_once('../../Config.Inc.php');
require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Distance.class.php');

echo PageHead::pageHead();
echo Distance::distance();
echo Distance::script();