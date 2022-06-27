<?php

require("userclass.php");

//INSERT DATA

//The user detais are stored in an array

$new_user = [
    "username"=>"Peter1",
    "password"=>"6789",
    "status"=>"active",
];

$user = new User("users.json");

$user->insertNewUser($new_user);

