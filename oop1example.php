<?php

class mathematics
   {

        private $num;

        public function setNum($num)
		{
         $this->num = $num;
        }



       public function addTwo()
	   {
          return $this->num+2;
        }
    }
/*** end of class ***/
class Member

{

public $username = "";
private $firstname = "";

}

 

$member = new Member();
$member->username = "Fred";

//$member->firstname = "akhil";   //gets a fatal error because private property cant call like this

echo "username is:".$member->username."<br/ >"; 
//echo "fstname is:".$member->firstname; 

/*** Instantiate a new class instance ***/

$math = new mathematics;

 

/*** set the value of the number ***/

$math->setNum(5);

 echo $math->addTwo();

 

?>
