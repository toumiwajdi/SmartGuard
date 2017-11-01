<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/11/2017
 * Time: 21:15
 */

include_once path . "Model/Classes/CONFIG.php";

class InterventionManager
{
    private $cnx;

    public function __construct()
    {
        $obj = new CONFIG();
        $this->cnx = $obj->getConnexion();
    }

    public function addIntervention($intervention){

        $query="INSERT INTO intervention VALUES (NULL ,'".$intervention->getCommentry()."',".$intervention->getRescueId().",NULL,NULL,'In progress')";
        return $this->cnx->exec($query);

    }
    public function finishIntervention($id){
        $query="UPDATE intervention SET etat='Done' WHERE id=".$id;
        return $this->cnx->exec($query);

    }
    public function doctorchoice($id_inter,$id_choice){
        $query="UPDATE intervention SET choix=$id_choice WHERE id=$id_inter";
        return $this->cnx->exec($query);
    }
    public function getInterventionById($id){
        $query="SELECT * FROM intervention WHERE id=".$id;
        $res=$this->cnx->query($query);
        return $res->fetch(PDO::FETCH_COLUMN);
    }
    public function getAll(){
        $query="SELECT * FROM intervention ORDER BY (etat) DESC ";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function setDoctor($id,$doctor_id){
        $query="UPDATE intervention SET doctor_id=$doctor_id WHERE id=$id";
        return $this->cnx->exec($query);
    }
}