<?php

class mathematics
   {

        protected $num;

        public function setNum($num)
		{
         $this->num = $num;
        }



       public function addTwo()
	   {
          return $this->num+2;
        }
    }
/*** end of first class ***/

class divide extends mathematics
    {

        public function divideByTwo(){

         $new_num = $this->num/2;


         return round($new_num);

        }

    } 

/*** Instantiate a new class instance ***/

//$math = new mathematics;
$math = new divide;
/*** set the value of the number ***/

$math->setNum(7);

 



 
 echo $math->addTwo()."<br />";
 echo $math->divideByTwo();

 

?>
