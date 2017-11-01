<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 19:06
 */

class Intervention
{
    private $id;
    private $rescue_id;
    private $doctor_id;
    private $choix;
    private $etat;
    private $commentry;

    /**
     * Intervention constructor.
     * @param $id
     * @param $rescue_id
     * @param $doctor_id
     * @param $choix
     * @param $etat
     */
    public function __construct($id, $rescue_id, $doctor_id, $choix, $etat,$comm)
    {
        $this->id = $id;
        $this->rescue_id = $rescue_id;
        $this->doctor_id = $doctor_id;
        $this->choix = $choix;
        $this->etat = $etat;
        $this->commentry=$comm;
    }

    /**
     * @return mixed
     */
    public function getCommentry()
    {
        return $this->commentry;
    }

    /**
     * @param mixed $commentry
     */
    public function setCommentry($commentry)
    {
        $this->commentry = $commentry;
    }




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return mixed
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * @param mixed $choix
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }




}