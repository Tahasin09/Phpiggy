<?php
//echo "hello from index.php";
//phpinfo();
// ini_set('memory_limit','512M');
//echo ini_get('memory_limit');

$app = include __DIR__.'/../src/App/bootstrap.php';

$app->run();