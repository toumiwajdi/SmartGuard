<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class DoctorManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }

    public function createTable()
    {
        $query="CREATE TABLE `SmartGuard`.`person` ( `id` INT(6) NOT NULL , `firstname` VARCHAR(20) NOT NULL , `lastname` VARCHAR(20) NOT NULL , `phone` INT(10) NOT NULL , `mail` VARCHAR(50) NOT NULL , `type` VARCHAR(18) NOT NULL , `matricule` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addDoctor($doctor)
    {
        $query="INSERT INTO person VALUE ('".$doctor->getId()."','".$doctor->getFirstname()."','".$doctor->getLastname()."','".$doctor->getPhone()."','".$doctor->getMail()."','doctor','".$doctor->getMatricule()."')";
        $res=$this->cnx->exec($query);
        return $res;


    }

    public function updateDoctor($doctor)
    {

    }

    public function setter($line)
    {

    }

    public function getDoctorByMatricule($matricule)
    {
        $query="Select * from person WHERE matricule='$matricule'";
        var_dump($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteDoctorByMatricule($matricule)
    {
        $query="DELETE FROM person WHERE matricule='".$matricule."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM person";
        $res=$this->cnx->query($query);
        return $res->fetechAll($res);

    }

}
