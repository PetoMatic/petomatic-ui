<?php

/*
Conexión a BD con PDO
*/

// Datos para localhost
$Database[0]['Host'] = 'http://128.107.33.219/';
$Database[0]['DB'] = 'petomaticdb';
$Database[0]['Username'] = 'petomaticdb';
$Database[0]['Password'] = 'hackuser';

// Datos para webserver
$Database[1]['Host'] = 'http://128.107.33.219:5432';
$Database[1]['DB'] = 'petomaticdb';
$Database[1]['Username'] = 'petomaticdb';
$Database[1]['Password'] = 'hackuser';

$Server = 1;

try {
echo 'pgsql:host='.$Database[$Server]['Host'].';dbname='.$Database[$Server]['DB'].';user='.$Database[$Server]['Username'].';password='.$Database[$Server]['Password'].';';
	$DB = new PDO('pgsql:host='.$Database[$Server]['Host'].';dbname='.$Database[$Server]['DB'].';user='.$Database[$Server]['Username'].';password='.$Database[$Server]['Password'].';');
	//$DB = new PDO('mysql:host='.$Database[$Server]['Host'].';dbname='.$Database[$Server]['DB'].';charset=UTF8',$Database[$Server]['Username'],$Database[$Server]['Password'],array(PDO::ATTR_EMULATE_PREPARES=>false,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'utf8'"));
    }
catch(PDOException $e)
    {
    echo $e->getMessage().'<br>';
	print_r($DB->errorInfo());
    }

?>
