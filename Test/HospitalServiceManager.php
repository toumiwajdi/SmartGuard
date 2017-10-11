<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 21:27
 */

class HospitalServiceManager
{
    public function createTable(){
        $query="CREATE TABLE `smartguard`.`hospitalservice` ( `hospital` INT(11) NOT NULL , `service` INT(11) NOT NULL , PRIMARY KEY (`hospital`, `service`)) ENGINE = MyISAM;";
    }

}