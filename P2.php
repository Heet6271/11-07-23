<?php
class student{
  private $name;
  private $gender;
  public function setname($name){
  $this->name=$name;
  echo "Name is ".$name;
  echo "<br>";
  }
  public function setgender($gender){
  if($gender == "Male" || $gender == "Female")
  {
  $this->gender=$gender;
  echo "Gender is ".$gender;
  }
  }
  public function getname(){
  return $this->name;
  } 
  public function getgender(){
  return $this->gender;
  } 
  }
  $shine = new student();
  $shine ->setname("Heet");
  $shine ->setgender("Male");
?>