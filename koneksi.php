<?php

$host = 'localhost';
$username = 'root';
$paswword = '';
$db = 'db_teman';

$conn = mysqli_connect($host, $username, $paswword, $db);


mysqli_select_db($conn,$db);
