<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 21:34
 */

class ServiceManager
{
    public function createTable(){
        $query="CREATE TABLE `smartguard`.`service` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `specialty` VARCHAR (15) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
    }

}