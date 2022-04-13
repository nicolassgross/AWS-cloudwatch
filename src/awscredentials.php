<?php
use Aws\CloudWatchLogs\CloudWatchLogsClient;
require "../vendor/autoload.php";


//Credenciais AWS
$awsCredentials = [
    'region' => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key' => 'QKIA5LHWPGXRTNB4XGGE',
        'secret' => '+45eNvxTZIXTDjCRpwWrXJ3XOHK1UdxyVFGYOEhC',
    ]    
];

$cwClient = new CloudWatchLogsClient($awsCredentials);


