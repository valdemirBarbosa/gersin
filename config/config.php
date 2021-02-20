<?php 
require 'environment.php';
$config = array();
if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/gersin/");
    $config['dbname'] = 'gps';
    $config['host'] = '127.0.0.1';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';

}else{
    $config['dbname'] = "gps";
    $config['host'] = "hostnet";
    $config['dbuser'] = "gpsproduction";
    $config['dbpass'] = "156426";
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'],$config['dbpass']);
}Catch(PDOException $erro){
    echo "erro: ".$erro->getMessage();
    exit;
}

?>