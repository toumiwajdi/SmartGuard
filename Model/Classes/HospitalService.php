<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 21:27
 */

class HospitalService
{
    private $hospital;
    private $service;/**
 * HospitalService constructor.
 * @param $hospital
 * @param $service
 */
    public function __construct($hospital, $service)
    {
        $this->hospital = $hospital;
        $this->service = $service;
    }/**
 * @return mixed
 */
    public function getHospital()
    {
        return $this->hospital;
    }/**
     * @param mixed $hospital
     */
    public function setHospital($hospital)
    {
        $this->hospital = $hospital;
    }/**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }/**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }





}