<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 13:40
 */

require_once "Person.php";

class Rescueagent extends Person
{
    private $rescue_id;

    /**
     * Rescueagent constructor.
     */
    public function __construct($id, $firstname, $lastname, $phone, $mail, $username, $password,$status,$picture,$matricule)
    {
        $this->rescue_id=$matricule;
        parent::init($id, $firstname, $lastname, $phone, $mail, $username, $password,$status,$picture);

    }


    /**
     * @return mixed
     */
    public function getRescueId()
    {
        return $this->rescue_id;
    }

    /**
     * @param mixed $rescue_id
     */
    public function setRescueId($rescue_id)
    {
        $this->rescue_id = $rescue_id;
    }



}