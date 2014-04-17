<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



class Office {

    protected $officeID = '';
    protected $officeName = '';
    protected $officeAddress = '';
    protected $officeUnit = '';
    protected $officeCity = '';
    protected $officeState = '';
    protected $officeZip = '';
    protected $officePhone = '';
    protected $officeFax = '';
    protected $officeManagerID = '';
    protected $officeManager = '';

    /**
     * @return string
     */
    public function getOfficeAddress()
    {
        return $this->officeAddress;
    }

    /**
     * @param string $officeAddress
     */
    public function setOfficeAddress($officeAddress)
    {
        $this->officeAddress = $officeAddress;
    }

    /**
     * @return string
     */
    public function getOfficeCity()
    {
        return $this->officeCity;
    }

    /**
     * @param string $officeCity
     */
    public function setOfficeCity($officeCity)
    {
        $this->officeCity = $officeCity;
    }

    /**
     * @return string
     */
    public function getOfficeFax()
    {
        return $this->officeFax;
    }

    /**
     * @param string $officeFax
     */
    public function setOfficeFax($officeFax)
    {
        $this->officeFax = $officeFax;
    }

    /**
     * @return string
     */
    public function getOfficeID()
    {
        return $this->officeID;
    }

    /**
     * @param string $officeID
     */
    public function setOfficeID($officeID)
    {
        $this->officeID = $officeID;
    }

    /**
     * @return string
     */
    public function getOfficeManager()
    {
        return $this->officeManager;
    }

    /**
     * @param string $officeManager
     */
    public function setOfficeManager($officeManager)
    {
        $this->officeManager = $officeManager;
    }

    /**
     * @return string
     */
    public function getOfficeManagerID()
    {
        return $this->officeManagerID;
    }

    /**
     * @param string $officeManagerID
     */
    public function setOfficeManagerID($officeManagerID)
    {
        $this->officeManagerID = $officeManagerID;
    }

    /**
     * @return string
     */
    public function getOfficeName()
    {
        return $this->officeName;
    }

    /**
     * @param string $officeName
     */
    public function setOfficeName($officeName)
    {
        $this->officeName = $officeName;
    }

    /**
     * @return string
     */
    public function getOfficePhone()
    {
        return $this->officePhone;
    }

    /**
     * @param string $officePhone
     */
    public function setOfficePhone($officePhone)
    {
        $this->officePhone = $officePhone;
    }

    /**
     * @return string
     */
    public function getOfficeState()
    {
        return $this->officeState;
    }

    /**
     * @param string $officeState
     */
    public function setOfficeState($officeState)
    {
        $this->officeState = $officeState;
    }

    /**
     * @return string
     */
    public function getOfficeUnit()
    {
        return $this->officeUnit;
    }

    /**
     * @param string $officeUnit
     */
    public function setOfficeUnit($officeUnit)
    {
        $this->officeUnit = $officeUnit;
    }

    /**
     * @return string
     */
    public function getOfficeZip()
    {
        return $this->officeZip;
    }

    /**
     * @param string $officeZip
     */
    public function setOfficeZip($officeZip)
    {
        $this->officeZip = $officeZip;
    }



} 