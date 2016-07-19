<?php

class MyClass {

public function __destruct() {

echo "I'm about to disappear - bye bye!";

// (Clean things up here)

}

}

 

$myObject = new MyClass();

unset( $myObject );       // Displays "I'm about to disappear - bye bye!"

//or "exit;" insted of "unset( $myObject ); ""
?>
