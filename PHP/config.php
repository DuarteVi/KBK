<?php
require 'Medoo-master/src/Medoo.php'; 
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'kbk',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'prefix' => 'h2020_'
]);

?>