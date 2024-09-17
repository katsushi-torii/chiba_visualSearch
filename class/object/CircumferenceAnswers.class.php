<?php

    class CircumferenceAnswers {
        private int $id;
        private int $dateTime;
        private string $answer;
        private string $selectedTarget;
        private string $correct;
        private int $responseTime;
        private int $targetAmount;
        private int $answerId;
        private int $targetId;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
            return $this;
        }

        public function getDateTime(){
            return $this->dateTime;
        }
        public function setDateTime($dateTime){
            $this->dateTime = $dateTime;
            return $this;
        }

        public function getAnswer(){
            return $this->answer;
        }
        public function setAnswer($answer){
            $this->answer = $answer;
            return $this;
        }
        
        public function getSelectedTarget(){
            return $this->selectedTarget;
        }
        public function setSelectedTarget($selectedTarget){
            $this->selectedTarget = $selectedTarget;
            return $this;
        }
        
        public function getCorrect(){
            return $this->correct;
        }
        public function setCorrect($correct){
            $this->correct = $correct;
            return $this;
        }

        public function getResponseTime(){
            return $this->responseTime;
        }
        public function setResponseTime($responseTime){
            $this->responseTime = $responseTime;
            return $this;
        }
        
        public function getTargetAmount(){
            return $this->targetAmount;
        }
        public function setTargetAmount($targetAmount){
            $this->targetAmount = $targetAmount;
            return $this;
        }
        
        public function getAnswerId(){
            return $this->answerId;
        }
        public function setAnswerId($answerId){
            $this->answerId = $answerId;
            return $this;
        }
        
        public function getTargetId(){
            return $this->targetId;
        }
        public function setTargetId($targetId){
            $this->targetId = $targetId;
            return $this;
        }
    }