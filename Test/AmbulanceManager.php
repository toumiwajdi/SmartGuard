<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 20:04
 */

class AmbulanceManager
{
    public function createTable(){
        $query="CREATE TABLE `smartguard`.`ambulance` ( `serial_number` VARCHAR(20) NOT NULL , `model` VARCHAR(50) NOT NULL , `state` VARCHAR(20) NOT NULL , PRIMARY KEY (`serial_number`)) ENGINE = MyISAM;";

    }

}