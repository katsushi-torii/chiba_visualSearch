<?php

require_once('../../Config.Inc.php');
require_once('../../class/object/CircumferenceAnswers.class.php');
require_once('../../PDOAgent.class.php');
// require_once('../../DAO/FunctionCircumferenceDAO.class.php');
require_once('../../class/html/PageHead.class.php');
require_once('../../class/html/Comparision.class.php');

if(!empty($_POST)){
    $answers = $_POST['answers'];
    echo $answers;
}

echo PageHead::pageHead();
echo Comparision::comparision();
echo Comparision::script();