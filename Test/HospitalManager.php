<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 20:35
 */

class HospitalManager
{
    public function createTable(){
        $query="CREATE TABLE `smartguard`.`hospital` ( `id` INT NOT NULL , `lib_gouv` VARCHAR(20) NOT NULL , `code_hc` VARCHAR(20) NOT NULL , `lib_hop` VARCHAR(50) NOT NULL , `adresse` INT(50) NOT NULL , `tel` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
    }

}