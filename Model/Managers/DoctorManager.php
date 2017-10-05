<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 14:06
 */
require_once "CONFIGMANAGER.php";


class DoctorManager
{
    private $cnx;

    public function __construct()
    {
        $this->cnx=new CONFIGMANAGER();
    }

    public function createTable()
    {
        $query="";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function addDoctor($doctor)
    {


    }

    public function updateDoctor($doctor)
    {

    }

    public function setter($line)
    {

    }

    public function getDoctorByMatricule($matricule)
    {
        $query="Select * from doctor WHERE matricule=$matricule";

    }


    public function deleteDoctorByMatricule($matricule)
    {
        $query="DELETE FROM doctor WHERE matricule=".$matricule;

    }

    public function getAll()
    {
        $query="SELECT * FROM doctor";
        $res=$this->cnx->query($query);
        return $res->fetechAll($res);

    }

}