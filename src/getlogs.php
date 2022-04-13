<?php

require "awscredentials.php";

//PEGAR TODOS OS LOGS

$result = $cwClient->getLogEvents([
    'logGroupName' => 'lms', // REQUIRED
    'logStreamName' => 'ulms_log', // REQUIRED
    'startFromHead' => true,
]);

//Filtrar logs WARNING

// $result = $cwClient->filterLogEvents([
//     'logGroupName' => 'lms', // REQUIRED
//     'logStreamNames' => ['ulms_log'], // REQUIRED
//     'filterPattern' => '{ $.level_name = "NOTICE" }',
// ]);

//Filtrar logs NOTICE

// $result = $cwClient->filterLogEvents([
//     'logGroupName' => 'lms', // REQUIRED
//     'logStreamName' => ['ulms_logs'], // REQUIRED
// ]);

echo '<pre>'.print_r($result, true).'</pre>';