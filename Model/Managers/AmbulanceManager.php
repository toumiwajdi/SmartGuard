<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class AmbulanceManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }

    public function createTable()
    {
        $query="CREATE TABLE `SmartGuard`.`ambulance` ( `serial_number` varchar(20) NOT NULL , `model` VARCHAR(50) NOT NULL , `state` VARCHAR(20) NOT NULL , PRIMARY KEY (`serial_number`)) ENGINE = MyISAM;";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addAmbulance($ambulance)
    {
        $query="INSERT INTO ambulance VALUE ('".$ambulance->getSerialNumber()."','".$ambulance->getModel()."','".$ambulance->getState()."')";
        $res=$this->cnx->exec($query);
        return $res;


    }

    public function updateAmbulance($ambulance)
    {
        $query="UPDATE ambulance";
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function setter($line)
    {

    }

    public function getAmbulanceBySerialNumber($serial_number)
    {
        $query="Select * from ambulance WHERE serial_number='$serial_number'";
        var_dump($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteAmbulanceBySerialNumber($serial_number)
    {
        $query="DELETE FROM ambulance WHERE serial_number='".$serial_number."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM ambulance";
        $res=$this->cnx->query($query);
        return $res->fetechAll($res);

    }

}
