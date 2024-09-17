<?php

    class CircumferenceAnswerConverter {

        public static function convertCircumferenceAnswer($newCircumferenceAnswer){

            if ( ! is_array( $newCircumferenceAnswer ) ) {
                $stdObj = new stdClass;
    
                $stdObj->id = $newCircumferenceAnswer->getId();
                $stdObj->answer = $newCircumferenceAnswer->getAnswer();
                $stdObj->selectedTarget = $newCircumferenceAnswer->getCologetSelectedTargetrB();
                $stdObj->correct = $newCircumferenceAnswer->getCorrect();
                $stdObj->targetAmount = $newCircumferenceAnswer->getTargetAmount();
                $stdObj->targetNumber = $newCircumferenceAnswer->getTargetNumber();
                $stdObj->time = $newCircumferenceAnswer->getTime();
    
                return $stdObj;
            } else {
                $objList = [];
                for($i = 0; $i < count($newCircumferenceAnswer); $i++){
                    $stdObj = new stdClass;
    
                    $stdObj->id = $newCircumferenceAnswer[$i]->getId();
                    $stdObj->answer = $newCircumferenceAnswer[$i]->getAnswer();
                    $stdObj->colselectedTargetorB = $newCircumferenceAnswer[$i]->getSelectedTarget();
                    $stdObj->correct = $newCircumferenceAnswer[$i]->getCorrect();
                    $stdObj->targetAmount = $newCircumferenceAnswer[$i]->getTargetAmount();
                    $stdObj->targetNumber = $newCircumferenceAnswer[$i]->getTargetNumber();
                    $stdObj->time = $newCircumferenceAnswer[$i]->getTime();
                    
                    $objList[] = $stdObj;
                }
    
                return $objList;
            }

        }
    }