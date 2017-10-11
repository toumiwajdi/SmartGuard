<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 19:01
 */

class Ambulance
{
    private $serial_number;
    private $model;
    private $state;


    /**
     * Ambulance constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * @param mixed $serial_number
     */
    public function setSerialNumber($serial_number)
    {
        $this->serial_number = $serial_number;
    }


    public function initamb($num_serie, $model, $state, $serial_number)
    {
        $this->num_serie = $num_serie;
        $this->model = $model;
        $this->state = $state;
        $this->serial_number = $serial_number;
    }

    public function __toString()
    {
        return "Ambulance { ".$this->getSerialNumber().",".$this->getModel().",".$this->getModel()."}";
    }


}