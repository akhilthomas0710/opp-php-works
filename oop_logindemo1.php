<?php

class Member

{

public $username = "";

private $loggedIn = false;

public function login() {

$this->loggedIn = true;

}

public function logout() {

$this->loggedIn = false;

}

public function isLoggedIn() {

return $this->loggedIn;

}

}
$member = new Member();

$member->username = "akhil";

echo $member->username . " isss " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";//the ?: used in this exampleis the ternary operator. 
//It’s like a compact version of an if ... else statement.

$member->login();

echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

$member->logout();

echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

 
?>
