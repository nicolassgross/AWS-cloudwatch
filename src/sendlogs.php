<?php
require "awscredentials.php";

use Maxbanton\Cwh\Handler\CloudWatch;
use Monolog\Logger;
use Monolog\Formatter\JsonFormatter;

// Log group name, will be created if none
$cwGroupName = 'lms';
// Log stream name, will be created if none
$cwStreamNameInstance = 'ulms_log';
// Days to keep logs, 14 by default
$cwRetentionDays = 90;

$handler = new CloudWatch
(
    $cwClient, 
    $cwGroupName, 
    $cwStreamNameInstance, 
    $cwRetentionDays, 
    10000, 
    [ 'application' => 'php-testapp01' ],
    Logger::NOTICE
);

//Parametros do LOG
$logger = new Logger('Teste de logs LMS');
$formatter = new JsonFormatter();
$handler->setFormatter($formatter);
$logger->pushHandler($handler);
// $logger->notice('Registro de nome:',[ 'Nome'=>'BRUNÃO','Sobrenome'=>'Gross' ]);
$logger->warning('Registro de nome:',[ 'Nome'=>'NICOLAS','Sobrenome'=>'Gross' ]);

?>

<div style="text-align: center;">
    <a href="index.php">VOLTAR</a>
</div>