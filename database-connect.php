<?php
$databaseName = 'OUCHITEL_labs';
$dsn = "mysql:host=webdb.uvm.edu;dbname=" . $databaseName;
$username = 'ouchitel_writer';
$password = 'nq{xt_,>uq+QUEyn%xy!';

    $pdo = new PDO($dsn, $username, $password);
    if($pdo) print '<!-- Connection complete -->';
    ?>