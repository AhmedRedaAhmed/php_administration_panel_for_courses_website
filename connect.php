<?php
/**
 * Created by ahmedreda
 * Date: 18/5/2017
 */


$dsn='mysql:host=localhost;dbname=corsecs';//data sours name
$user='root'; //the user to connect
$pass='';//password of this user
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',//lwad3 tarmez utf8
);

try{
    $con = new PDO($dsn,$user,$pass,$option);//connect to databeas
    
    
    }

catch(PDOException $e){
    echo 'failed to connect' . $e->getMessage();   //getMessage aslan heya mawgoda fe nzam try wal catch
	
	}


    