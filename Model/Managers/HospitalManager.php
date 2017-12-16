<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class HospitalManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }
   
    public function createTable()
    {

        $query="CREATE TABLE `SmartGuard`.`hospital` ( `id` INT(11) NOT NULL , `lib_gouv` VARCHAR(20) NOT NULL , `code_hc` VARCHAR(20) NOT NULL , `lib_hop` varchar(50) NOT NULL , `adresse` varchar(50) NOT NULL , `adresse` varchar(50) NOT NULL , `tel` varchar(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addHospital($hospital)
    {

        $query="INSERT INTO hospital VALUE (NULL ,'".$hospital->getLibGouv()."','".$hospital->getCodeHc()."','".$hospital->getLibHop()."','".$hospital->getAdresse()."','".$hospital->getTel()."')";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function updateHospital($hospital)
    {
        $query="UPDATE hospital";
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function setter($line)
    {

    }

    public function getHospitalById($id)
    {
        $query="Select * from hospital WHERE id='$id'";
        var_dump($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteHospitalById($id)
    {
        $query="DELETE FROM hospital WHERE id='".$id."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM hospital";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NAMED);
    }

}
