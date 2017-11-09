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


    public function addSecourAgent($secour_agent)
    {

        $query="INSERT INTO person VALUE (NULL ,'".$secour_agent->getFirstname()."','".$secour_agent->getLastname()."','".$secour_agent->getPhone()."','".$secour_agent->getMail()."','secure','".$secour_agent->getRescueId()."','".$secour_agent->getUsername()."','".$secour_agent->getPassword()."',0,1)";
        echo $query;
        $res=$this->cnx->exec($query);
        return $res;
    }

    public function updateSecourAgent($secour_agent)
    {
        $query="UPDATE person";
        $res=$this->cnx->exec($query);
        return $res;
    }


    public function getSecourAgentByWorkId($matricule)
    {
        $query="Select * from person WHERE work_id='$matricule' AND type='secure'";
        echo($query);
        $res=$this->cnx->query($query);
        return $res->fetch();

    }


    public function deleteSecourAgentByMatricule($matricule)
    {
        $query="DELETE FROM person WHERE work_id='".$matricule."'";
        $res=$this->cnx->exec($query);
        return $res;

    }

    public function getAll()
    {
        $query="SELECT * FROM person WHERE type='secure'";
        $res=$this->cnx->query($query);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function login($login,$pwd){
        $query="SELECT * FROM person WHERE password='$pwd' AND username='$login' AND  type='secure'";
        $res=$this->cnx->query($query);
        return $res->fetch();
    }

}
