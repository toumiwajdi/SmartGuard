<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 19:00
 */

class Service
{
    private $id;
    private $name;
    private $specialty;

    public function __construct()
    {
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param mixed $specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }



    public function __toString()
    {
        return "Service { ".$this->getId()." , ".$this->getName()." , ".$this->getSpecialty()." }";
    }


    /**
     * Service constructor.
     * @param $id
     * @param $name
     * @param $specialty
     */
    public function initser($id, $name, $specialty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->specialty = $specialty;
    }


}