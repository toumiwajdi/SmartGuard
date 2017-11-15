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

        $query="INSERT INTO  intervention VALUES (NULL ,'".$intervention->getCommentry()."',".$intervention->getRescueId().",NULL,NULL,'In progress')";
        $res=$this->cnx->exec($query);
        return $this->cnx->lastInsertId();

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
    public function getDoctor($inter){
        $query="SELECT CONCAT(p.firstname,' ',p.lastname) as namedoc,p.id FROM intervention i , person p WHERE p.id=i.doctor_id AND i.id=$inter";
        return $this->cnx->query($query)->fetch();
    }
    public function getChoice($inter){
        $query="SELECT choix FROM intervention WHERE id=$inter";
        return $this->cnx->query($query)->fetch();
    }
    public function getChoiceName($choix){
        $query="SELECT h.lib_hop , s.name FROM hospital h , service s , bloc b  WHERE h.id=b.hospital AND s.id=b.service AND b.id=$choix";
        return $this->cnx->query($query)->fetch();
    }
}