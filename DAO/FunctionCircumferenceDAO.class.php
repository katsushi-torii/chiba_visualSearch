<?php

    class FunctionCircumferenceDAO {

        private static $db;

        public static function startDb(){
            self::$db = new PDOAgent('CircumferenceAnswers');
        }

        public static function insertAnswer($object){
            $sql = "INSERT into answers(dateTime, answer, selectedTarget, correct, responseTime, targetAmount, answerId, targetId) VALUES (now(), :answer, :selectedTarget, :correct, :responseTime, :targetAmount, :answerId, :targetId)";

            self::$db->query($sql);

            self::$db->bind(":answer", $object->getAnswer());
            self::$db->bind(":selectedTarget", $object->getSelectedTarget());
            self::$db->bind(":correct", $object->getCorrect());
            self::$db->bind(":responseTime", $object->getResponseTime());
            self::$db->bind(":targetAmount", $object->getTargetAmount());
            self::$db->bind(":answerId", $object->getAnswerId());
            self::$db->bind(":targetId", $object->getTargetId());

            self::$db->execute();
            return self::$db->lastInsertId();
        }

        public static function insertAnswerSameColor($object){
            $sql = "INSERT into answersSame(dateTime, answer, correct, responseTime, targetAmount, answerId, targetId) VALUES (now(), :answer, :correct, :responseTime, :targetAmount, :answerId, :targetId)";

            self::$db->query($sql);

            self::$db->bind(":answer", $object->getAnswer());
            self::$db->bind(":correct", $object->getCorrect());
            self::$db->bind(":responseTime", $object->getResponseTime());
            self::$db->bind(":targetAmount", $object->getTargetAmount());
            self::$db->bind(":answerId", $object->getAnswerId());
            self::$db->bind(":targetId", $object->getTargetId());

            self::$db->execute();
            return self::$db->lastInsertId();
        }
    }