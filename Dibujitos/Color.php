<?php
/**
 *
 */
class Color
{
  private $str;
  function __construct(){
    $this->randomColor();
  }

  function randomColor(){
    unset($str);
   $str = "#";
   $randNum2 = "";
   for($i = 1 ; $i <= 6 ; $i++){
     $randNum = rand(1, 6);
     switch ($randNum) {
       case 1: $randNum2 .= "A";
       break;
       case 2: $randNum2 .= "B";
       break;
       case 3: $randNum2 .= "C";
       break;
       case 4: $randNum2 .= "D";
       break;
       case 5: $randNum2 .= "E";
       break;
       case 6: $randNum2 .= "F";
       break;
     }
   }
   $str .= $randNum2;
    return $this->str = $str;
  }

  public function __toString() {
    return (string) $this->str;
  }
}
