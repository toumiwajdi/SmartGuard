<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
include_once path . "Model/Classes/CONFIG.php";


class PersonManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }

    public function createTable()
    {
        $query="CREATE TABLE `SmartGuard`.`person` ( `id` INT(6) NOT NULL , `firstname` VARCHAR(20) NOT NULL , `lastname` VARCHAR(20) NOT NULL , `phone` INT(10) NOT NULL , `mail` VARCHAR(50) NOT NULL , `type` VARCHAR(18) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addPerson($person)
    {
        $query="INSERT INTO person VALUE ('".$person->getId()."','".$person->getFirstname()."','".$person->getLastname()."','".$person->getPhone()."','".$person->getMail()."','doctor','".$person->getMatricule()."')";
        $res=$this->cnx->exec($query);
        return $res;


    }

    public function updatePerson($person)
    {
        $query="UPDATE person";
        $res=$this->cnx->exec($query);
        return $res;
    }
    public function approvepending($workd_id){
        $query="UPDATE person SET status=1 WHERE work_id='$workd_id'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getPersonById($id)
    {
        $query="Select * from person WHERE id='$id'";
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deletePersonById($id)
    {
        $query="DELETE FROM person WHERE work_id='".$id."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM person";
        $res=$this->cnx->query($query);
        return $res->fetechAll($res);

    }
    public function getWaiting()
    {
        $query="SELECT work_id,firstname,lastname FROM person WHERE status=0";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NUM);

    }

}
