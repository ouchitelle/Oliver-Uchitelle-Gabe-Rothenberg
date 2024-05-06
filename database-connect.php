<?php
$databaseName = 'OUCHITEL_labs';
$dsn = "mysql:host=webdb.uvm.edu;dbname=" . $databaseName;
$username = 'ouchitel_writer';
$password = 'oMicivdV:9})).F!v4u,';

$pdo = new PDO($dsn, $username, $password);
if($pdo) print '<!-- Connection complete -->';
?>
