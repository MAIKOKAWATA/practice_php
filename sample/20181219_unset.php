<?php

$members = [];
$members[] = "gun";
$members[] = "maiko";
$members[] = "yayoi";

//var_dump($members);
//unset($members[0]);
//var_dump($members);

foreach($members as $key=>$member){
    if($member == "gun"){
        unset($member);
    }
}
var_dump($members);