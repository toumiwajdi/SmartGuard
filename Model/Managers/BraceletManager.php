<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class BraceletManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }

    public function createTable()
    {
        $query="CREATE TABLE `SmartGuard`.`bracelet` ( `id` INT(6) NOT NULL , `reference` VARCHAR(15) NOT NULL , `longitude` float(16,15) NOT NULL , `latitude` float(16,15) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addBracelet($bracelet)
    {
        $query="INSERT INTO bracelet VALUE ('".$bracelet->getId()."','".$bracelet->getReference()."','".$bracelet->getLongitude()."','".$bracelet->getLatitude()."')";
        $res=$this->cnx->exec($query);
        return $res;


    }

    public function updateBracelet($bracelet)
    {
        $query="UPDATE bracelet";
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function setter($line)
    {

    }

    public function getBraceletById($id)
    {
        $query="Select * from bracelet WHERE id='$id'";
        var_dump($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteBraceletById($id)
    {
        $query="DELETE FROM bracelet WHERE id='".$id."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM bracelet";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NUM);

    }

}
