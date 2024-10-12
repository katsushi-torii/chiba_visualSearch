<?php

require_once('../../Config.Inc.php');
require_once('../../class/object/ComparisionAnswers.class.php');
require_once('../../PDOAgent.class.php');
require_once('../../DAO/FunctionComparisionDAO.class.php');
require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Comparision.class.php');

FunctionComparisionDAO::startDb();

if(!empty($_POST)){
    $answersPreliminary = $_POST['answers'];
    $answers = substr($answersPreliminary, 0, -1);

    $answersArray = explode('|', $answers);
    foreach($answersArray as $answerSetString){
        $answerArray = explode(',', $answerSetString);

        $newAnswer = new ComparisionAnswers();
        $newAnswer->setColorA($answerArray[0]);
        $newAnswer->setColorB($answerArray[1]);
        $newAnswer->setSelectedColor($answerArray[2]);
        var_dump($newAnswer);

        // FunctionComparisionDAO::insertAnswer($newAnswer);
    }
}


echo PageHead::pageHead();
echo Comparision::comparision();
echo Comparision::script();