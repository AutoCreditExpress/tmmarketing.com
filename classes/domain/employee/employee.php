<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 3/16/14
 * Time: 8:57 PM
 */

namespace classes\domain\employee;


class employee {

    protected $employeeID = '';
    protected $firstName = '';
    protected $lastName = '';
    protected $address = '';
    protected $unit = '';
    protected $city = '';
    protected $state = '';
    protected $zip = '';
    protected $userID = '';
    protected $titleID = '';
    protected $payProfileID = '';
    protected $startDate = '';
    protected $endDate = '';
    protected $officeID = '';
    protected $employmentStatus = '';
    protected $title = '';
    protected $payProfile = '';

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $employeeID
     */
    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    /**
     * @return string
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * @param string $employmentStatus
     */
    public function setEmploymentStatus($employmentStatus)
    {
        $this->employmentStatus = $employmentStatus;
    }

    /**
     * @return string
     */
    public function getEmploymentStatus()
    {
        return $this->employmentStatus;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
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
    public function getOfficeID()
    {
        return $this->officeID;
    }

    /**
     * @param string $payProfileID
     */
    public function setPayProfileID($payProfileID)
    {
        $this->payProfileID = $payProfileID;
    }

    /**
     * @return string
     */
    public function getPayProfileID()
    {
        return $this->payProfileID;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $titleID
     */
    public function setTitleID($titleID)
    {
        $this->titleID = $titleID;
    }

    /**
     * @return string
     */
    public function getTitleID()
    {
        return $this->titleID;
    }

    /**
     * @param string $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getPayProfile()
    {
        return $this->payProfile;
    }

    /**
     * @param string $payProfile
     */
    public function setPayProfile($payProfile)
    {
        $this->payProfile = $payProfile;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }



    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

} 