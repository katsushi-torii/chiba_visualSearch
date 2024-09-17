<?php

    class ComparisionAnswers {
        private int $id;
        private string $colorA;
        private string $colorB;
        private string $selectedColor;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
            return $this;
        }

        public function getColorA(){
            return $this->colorA;
        }
        public function setColorA($colorA){
            $this->colorA = $colorA;
            return $this;
        }

        public function getColorB(){
            return $this->colorB;
        }
        public function setColorB($colorB){
            $this->colorB = $colorB;
            return $this;
        }

        public function getselectedColor(){
            return $this->selectedColor;
        }
        public function setselectedColor($selectedColor){
            $this->selectedColor = $selectedColor;
            return $this;
        }
    }