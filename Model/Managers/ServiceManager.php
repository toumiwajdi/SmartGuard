<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class ServiceManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }

    public function createTable()
    {
        $query="CREATE TABLE `SmartGuard`.`service` ( `id` INT(11) NOT NULL , `name` VARCHAR(15) NOT NULL , `specialty` VARCHAR(15) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addService($service)
    {
        $query="INSERT INTO service VALUE ('".$service->getId()."','".$service->getName()."','".$service->getSpecialty()."')";
        $res=$this->cnx->exec($query);
        return $res;


    }

    public function updateService($service)
    {
        $query="UPDATE service";
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function setter($line)
    {

    }

    public function getServiceById($id)
    {
        $query="Select * from service WHERE id='$id'";
        var_dump($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteServiceById($id)
    {
        $query="DELETE FROM service WHERE id='".$id."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM service";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

}
