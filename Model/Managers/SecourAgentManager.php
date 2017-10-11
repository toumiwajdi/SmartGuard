<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class SecourAgentManager
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

    public function addSecourAgent($secour_agent)
    {
        $query="INSERT INTO person VALUE ('".$secour_agent->getId()."','".$secour_agent->getFirstname()."','".$secour_agent->getLastname()."','".$secour_agent->getPhone()."','".$secour_agent->getMail()."','secour_agent','".$secour_agent->getMatricule()."')";
        $res=$this->cnx->exec($query);
        return $res;


    }

    public function updateSecourAgent($secour_agent)
    {
        $query="UPDATE person";
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function setter($line)
    {

    }

    public function getSecourAgentByMatricule($matricule)
    {
        $query="Select * from person WHERE matricule='$matricule'";
        var_dump($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteSecourAgentByMatricule($matricule)
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
