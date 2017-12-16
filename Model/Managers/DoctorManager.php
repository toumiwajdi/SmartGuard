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


    public function addDoctor($doctor)
    {

        $query="INSERT INTO person VALUE (NULL ,'".$doctor->getFirstname()."','".$doctor->getLastname()."','".$doctor->getPhone()."','".$doctor->getMail()."','doctor','".$doctor->getDoctorId()."','".$doctor->getUsername()."','".$doctor->getPassword()."',0,1)";
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function updateDoctor($doctor)
    {
        $query="UPDATE person";
        $res=$this->cnx->exec($query);
        return $res;
    }


    public function getDoctorByWorkId($matricule)
    {
        $query="Select * from person WHERE work_id='$matricule' AND type='doctor'";
        $res=$this->cnx->query($query);
        return $res->fetch();
    }


    public function deleteDoctorByMatricule($matricule)
    {
        $query="DELETE FROM person WHERE work_id='".$matricule."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM person WHERE type='doctor'";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function login($login,$pwd){
        $query="SELECT * FROM person WHERE password='$pwd' AND username='$login' AND  type='doctor'";
        $res=$this->cnx->query($query);
        return $res->fetch();
    }
    public function getDoctorByMail($mail){
        $query="SELECT * FROM person WHERE mail='$mail'";
        $res=$this->cnx->query($query);
        return $res->fetch();
    }
}
