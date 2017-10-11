<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 19:04
 */

class Bracelet
{
    private $id;
    private $reference;
    private $longitude;
    private $latitude;

    /**
     * Bracelet constructor.
     */
    public function __construct()
    {
    }

    /**
     * Bracelet constructor.
     * @param $id
     * @param $reference
     * @param $longitude
     * @param $latitude
     */

    public function initbra($id, $reference, $longitude, $latitude)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function __toString()
    {
        return "Bracelet { ".$this->getId()." , ".$this->getReference()." ,".$this->setLongitude()." ".$this->getLatitude()." }";
    }


}