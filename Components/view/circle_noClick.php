<?php

require_once('../../Config.Inc.php');
require_once('../../class/object/CircumferenceAnswers.class.php');
require_once('../../PDOAgent.class.php');
require_once('../../DAO/FunctionCircumferenceDAO.class.php');
require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/CircleNew.class.php');

FunctionCircumferenceDAO::startDb();

$count = 0;

if(!empty($_POST)){
    
    $newAnswer = new CircumferenceAnswers();
    $newAnswer->setAnswer($_POST['answer']);
    $newAnswer->setSelectedTarget($_POST['selectedTarget']);
    $newAnswer->setCorrect($_POST['check']);
    $newAnswer->setResponseTime($_POST['responseTime']);
    $newAnswer->setTargetAmount($_POST['item_num']);
    $newAnswer->setAnswerId($_POST['answer_id']);
    $newAnswer->setTargetId($_POST['target_id']);
    $newAnswer->setColors($_POST['other_colors']);
    $count = $_POST['count'];

    // var_dump($newAnswer);

    FunctionCircumferenceDAO::insertAnswer($newAnswer);

    // 実験回数の操作
    if($count == 40){
        header("Location: ./home.php");
    }
}

echo PageHead::pageHead();
echo Circle::target();
echo Circle::circleList();
echo Circle::script($count);