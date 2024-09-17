<?php

    class FunctionComparisionDAO {

        private static $db;

        public static function startDb(){
            self::$db = new PDOAgent('ComparisionAnswers');
        }

        public static function insertAnswer($object){
            $sql = "INSERT into comparision(colorA, colorB, selectedColor) VALUES (:colorA, :colorB, :selectedColor)";

            self::$db->query($sql);

            self::$db->bind(":colorA", $object->getColorA());
            self::$db->bind(":colorB", $object->getColorB());
            self::$db->bind(":selectedColor", $object->getSelectedColor());

            self::$db->execute();
            return self::$db->lastInsertId();
        }
    }