<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/10/2017
 * Time: 13:37
 */
require_once "Person.php";

class Doctor extends Person
{
    private $doctor_id;

    public function __construct($id, $firstname, $lastname, $phone, $mail, $username, $password,$status,$picture,$matricule)
    {
        $this->doctor_id=$matricule;
        parent::init($id, $firstname, $lastname, $phone, $mail, $username, $password,$status,$picture);

    }

    /**
     * @return mixed
     */
    public function getDoctorId()
    {
        return $this->doctor_id;
    }

    /**
     * @param mixed $doctor_id
     */
    public function setDoctorId($doctor_id)
    {
        $this->doctor_id = $doctor_id;
    }


}