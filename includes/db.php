<?php

//accumulate data into an array called db:
  $db['db_host'] = 'localhost';
  $db['db_user'] = 'root';
  $db['db_pass'] = 'root';
  $db['db_name'] = 'cms';

//loop through array to convert all into constants
  foreach($db as $key => $value){
    define(strtoupper($key), $value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if($connection){
    echo "We are connected to the database!";
  }

//easiest way to connect to database:
  // $connection = mysqli_connect('localhost', 'root', 'root', 'cms');

 ?>
