<?php

require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/DemoSameColor.class.php');

$count = 0;
$result = "不正解";

if(!empty($_POST)){
    
    if($_POST['check'] == 1){
        $result = "正解";
    }
    echo PageHead::pageHead();
    echo DemoSameColor::demoResult($_POST['answer_id']+1, $_POST['target_id']+1, $result);

}else{
    echo PageHead::pageHead();
    echo DemoSameColor::demoTest();
    echo DemoSameColor::script($count);
}
