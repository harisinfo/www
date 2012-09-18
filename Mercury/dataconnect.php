<?php
global $connection;
$connection = new mysqli($db['host'],$db['user'],$db['password'],$db['db_name']);
