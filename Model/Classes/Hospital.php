<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 19:00
 */

class Hospital
{
    private $id;
    private $lib_gouv;
    private $code_hc;
    private $lib_hop;
    private $adresse;
    private $tel;

    public function __construct()
    {
    }

    public function __toString()
    {
        return " Hospital {  ".$this->getId().",".$this->getLibHop().",".$this->getLibGouv().",".$this->getAdresse().",".$this->setCodeHc()." } ";
    }

    /**
     * Hospital constructor.
     * @param $id
     * @param $lib_gouv
     * @param $code_hc
     * @param $lib_hop
     * @param $adresse
     * @param $tel
     */

    public function inithosp($id, $lib_gouv, $code_hc, $lib_hop, $adresse, $tel)
    {
        $this->id = $id;
        $this->lib_gouv = $lib_gouv;
        $this->code_hc = $code_hc;
        $this->lib_hop = $lib_hop;
        $this->adresse = $adresse;
        $this->tel = $tel;
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
    public function getLibGouv()
    {
        return $this->lib_gouv;
    }

    /**
     * @param mixed $lib_gouv
     */
    public function setLibGouv($lib_gouv)
    {
        $this->lib_gouv = $lib_gouv;
    }

    /**
     * @return mixed
     */
    public function getCodeHc()
    {
        return $this->code_hc;
    }

    /**
     * @param mixed $code_hc
     */
    public function setCodeHc($code_hc)
    {
        $this->code_hc = $code_hc;
    }

    /**
     * @return mixed
     */
    public function getLibHop()
    {
        return $this->lib_hop;
    }

    /**
     * @param mixed $lib_hop
     */
    public function setLibHop($lib_hop)
    {
        $this->lib_hop = $lib_hop;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }



}