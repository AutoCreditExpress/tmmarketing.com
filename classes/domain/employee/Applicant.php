<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 3/16/14
 * Time: 9:08 PM
 */

namespace classes\domain\employee;


class Applicant {

    protected $applicantID = '';
    protected $applicantFirst = '';
    protected $applicantLast = '';
    protected $applicantStreet = '';
    protected $applicantCity = '';
    protected $applicantUnit = '';
    protected $applicantState = '';
    protected $applicantZip = '';
    protected $applicantPhone = '';
    protected $applicantEmail = '';
    protected $applicantCompany1 = '';
    protected $applicantPosition1 = '';
    protected $applicantResponse1 = '';
    protected $applicantCompany2 = '';
    protected $applicantPosition2 = '';
    protected $applicantResponse2 = '';
    protected $applicantDate = '';
    protected $applicantEmployeeID = '';
    protected $applicantOfficeID = '';
    protected $applicantStatus = '';

    /**
     * @return string
     */
    public function getApplicantCity()
    {
        return $this->applicantCity;
    }

    /**
     * @param string $applicantCity
     */
    public function setApplicantCity($applicantCity)
    {
        $this->applicantCity = $applicantCity;
    }

    /**
     * @return string
     */
    public function getApplicantCompany1()
    {
        return $this->applicantCompany1;
    }

    /**
     * @param string $applicantCompany1
     */
    public function setApplicantCompany1($applicantCompany1)
    {
        $this->applicantCompany1 = $applicantCompany1;
    }

    /**
     * @return string
     */
    public function getApplicantCompany2()
    {
        return $this->applicantCompany2;
    }

    /**
     * @param string $applicantCompany2
     */
    public function setApplicantCompany2($applicantCompany2)
    {
        $this->applicantCompany2 = $applicantCompany2;
    }

    /**
     * @return string
     */
    public function getApplicantDate()
    {
        return $this->applicantDate;
    }

    /**
     * @param string $applicantDate
     */
    public function setApplicantDate($applicantDate)
    {
        $this->applicantDate = $applicantDate;
    }

    /**
     * @return string
     */
    public function getApplicantEmail()
    {
        return $this->applicantEmail;
    }

    /**
     * @param string $applicantEmail
     */
    public function setApplicantEmail($applicantEmail)
    {
        $this->applicantEmail = $applicantEmail;
    }

    /**
     * @return string
     */
    public function getApplicantEmployeeID()
    {
        return $this->applicantEmployeeID;
    }

    /**
     * @param string $applicantEmployeeID
     */
    public function setApplicantEmployeeID($applicantEmployeeID)
    {
        $this->applicantEmployeeID = $applicantEmployeeID;
    }

    /**
     * @return string
     */
    public function getApplicantFirst()
    {
        return $this->applicantFirst;
    }

    /**
     * @param string $applicantFirst
     */
    public function setApplicantFirst($applicantFirst)
    {
        $this->applicantFirst = $applicantFirst;
    }

    /**
     * @return string
     */
    public function getApplicantID()
    {
        return $this->applicantID;
    }

    /**
     * @param string $applicantID
     */
    public function setApplicantID($applicantID)
    {
        $this->applicantID = $applicantID;
    }

    /**
     * @return string
     */
    public function getApplicantLast()
    {
        return $this->applicantLast;
    }

    /**
     * @param string $applicantLast
     */
    public function setApplicantLast($applicantLast)
    {
        $this->applicantLast = $applicantLast;
    }

    /**
     * @return string
     */
    public function getApplicantOfficeID()
    {
        return $this->applicantOfficeID;
    }

    /**
     * @param string $applicantOfficeID
     */
    public function setApplicantOfficeID($applicantOfficeID)
    {
        $this->applicantOfficeID = $applicantOfficeID;
    }

    /**
     * @return string
     */
    public function getApplicantPhone()
    {
        return $this->applicantPhone;
    }

    /**
     * @param string $applicantPhone
     */
    public function setApplicantPhone($applicantPhone)
    {
        $this->applicantPhone = $applicantPhone;
    }

    /**
     * @return string
     */
    public function getApplicantPosition1()
    {
        return $this->applicantPosition1;
    }

    /**
     * @param string $applicantPosition1
     */
    public function setApplicantPosition1($applicantPosition1)
    {
        $this->applicantPosition1 = $applicantPosition1;
    }

    /**
     * @return string
     */
    public function getApplicantPosition2()
    {
        return $this->applicantPosition2;
    }

    /**
     * @param string $applicantPosition2
     */
    public function setApplicantPosition2($applicantPosition2)
    {
        $this->applicantPosition2 = $applicantPosition2;
    }

    /**
     * @return string
     */
    public function getApplicantResponse1()
    {
        return $this->applicantResponse1;
    }

    /**
     * @param string $applicantResponse1
     */
    public function setApplicantResponse1($applicantResponse1)
    {
        $this->applicantResponse1 = $applicantResponse1;
    }

    /**
     * @return string
     */
    public function getApplicantResponse2()
    {
        return $this->applicantResponse2;
    }

    /**
     * @param string $applicantResponse2
     */
    public function setApplicantResponse2($applicantResponse2)
    {
        $this->applicantResponse2 = $applicantResponse2;
    }

    /**
     * @return string
     */
    public function getApplicantState()
    {
        return $this->applicantState;
    }

    /**
     * @param string $applicantState
     */
    public function setApplicantState($applicantState)
    {
        $this->applicantState = $applicantState;
    }

    /**
     * @return string
     */
    public function getApplicantStatus()
    {
        return $this->applicantStatus;
    }

    /**
     * @param string $applicantStatus
     */
    public function setApplicantStatus($applicantStatus)
    {
        $this->applicantStatus = $applicantStatus;
    }

    /**
     * @return string
     */
    public function getApplicantStreet()
    {
        return $this->applicantStreet;
    }

    /**
     * @param string $applicantStreet
     */
    public function setApplicantStreet($applicantStreet)
    {
        $this->applicantStreet = $applicantStreet;
    }

    /**
     * @return string
     */
    public function getApplicantUnit()
    {
        return $this->applicantUnit;
    }

    /**
     * @param string $applicantUnit
     */
    public function setApplicantUnit($applicantUnit)
    {
        $this->applicantUnit = $applicantUnit;
    }

    /**
     * @return string
     */
    public function getApplicantZip()
    {
        return $this->applicantZip;
    }

    /**
     * @param string $applicantZip
     */
    public function setApplicantZip($applicantZip)
    {
        $this->applicantZip = $applicantZip;
    }





} 
