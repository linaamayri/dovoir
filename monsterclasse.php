<?php
class Monsters{
    private $name;
    private $strength;
    private $life;
    private $type;
     function getName(){
         return $this->name;

     }
     function getStrength(){
         return $this->strength;
     }
     function getLife(){
         return $this->life;
     }
     function getType(){
         return $this->type;
     }
     function setName($name){
         $this->name=$name;
     }
     function setStrength($strength){
         $this->strength=$strength;
     }
     function setLife($life){
         $this->life=$life;
     }
     function setType($type){
         $this->type=$type;
     }
     






}