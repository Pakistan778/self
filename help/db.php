<?php
  require 'config.php';

   $connection = mysqli_connect(
     $config['db']['server'],
     $config['db']['username'],
     $config['db']['password'],
     $config['db']['name']
   );

   if($connection == false){
     echo "Error, data base can't be include";
     echo mysqli_connect_error();
     exit();
   }



?>