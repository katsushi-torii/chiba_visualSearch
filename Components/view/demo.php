<?php

require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Demo.class.php');

$count = 0;
$result = "不正解";

if(!empty($_POST)){
    
    if($_POST['check'] == 1){
        $result = "正解";
    }
    echo PageHead::pageHead();
    echo Demo::demoResult($_POST['answer'], $_POST['selectedTarget'], $result);

}else{
    echo PageHead::pageHead();
    echo Demo::target("normal");
    echo Demo::circleList();
    echo Demo::script($count, "normal");
}
