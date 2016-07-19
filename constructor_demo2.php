
<?php

class Member
{

private $username;
private $location;
private $homepage;

 

public function __construct( $uname, $loc, $hpage ) {

$this->username = $uname;

$this->location = $loc;

$this->homepage = $hpage;

}

public function showProfile() {

echo "<dl>";

echo "<dt>Username is:</dt><dd>$this->username</dd>";

echo "<dt>Location is:</dt><dd>$this->location</dd>";

echo "<dt>Homepage:</dt><dd>$this->homepage</dd>";

echo "</dl>";

}

}

$aMember = new Member( "akhil", "ipswich", "http://www.akhilthomas.com" );

$aMember->showProfile();
?>