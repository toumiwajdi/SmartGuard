<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 20:16
 */

class BraceletManager
{
    public function createTable(){
        $query="CREATE TABLE `smartguard`.`Bracelet` ( `id` INT(6) NOT NULL , `reference` VARCHAR(15) NOT NULL , `longitude` FLOAT(16,15) NOT NULL , `latitude` FLOAT(16,15) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
    }

}