<?php

session_start();
$name = $_SESSION['name'];
$age = $_SESSION['age'];

echo $name;
echo $age;