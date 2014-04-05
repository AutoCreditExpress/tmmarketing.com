<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class ApplicantAppointment {

    protected $appointmentID = '';
    protected $applicantID = '';
    protected $appointmentDate = '00-00-00 00:00:00';
    protected $appointmentTypeID = '';
    protected $appointmentType = '';
    protected $appointmentContactID = '';
    protected $appointmentContact = '';
    protected $appointmentOfficeID = '';
    protected $appointmentOffice = '';
    protected $appointmentStatus = '';

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
    public function getAppointmentContact()
    {
        return $this->appointmentContact;
    }

    /**
     * @param string $appointmentContact
     */
    public function setAppointmentContact($appointmentContact)
    {
        $this->appointmentContact = $appointmentContact;
    }

    /**
     * @return string
     */
    public function getAppointmentContactID()
    {
        return $this->appointmentContactID;
    }

    /**
     * @param string $appointmentContactID
     */
    public function setAppointmentContactID($appointmentContactID)
    {
        $this->appointmentContactID = $appointmentContactID;
    }

    /**
     * @return string
     */
    public function getAppointmentDate()
    {
        return $this->appointmentDate;
    }

    /**
     * @param string $appointmentDate
     */
    public function setAppointmentDate($appointmentDate)
    {
        $this->appointmentDate = $appointmentDate;
    }

    /**
     * @return string
     */
    public function getAppointmentID()
    {
        return $this->appointmentID;
    }

    /**
     * @param string $appointmentID
     */
    public function setAppointmentID($appointmentID)
    {
        $this->appointmentID = $appointmentID;
    }

    /**
     * @return string
     */
    public function getAppointmentOffice()
    {
        return $this->appointmentOffice;
    }

    /**
     * @param string $appointmentOffice
     */
    public function setAppointmentOffice($appointmentOffice)
    {
        $this->appointmentOffice = $appointmentOffice;
    }

    /**
     * @return string
     */
    public function getAppointmentOfficeID()
    {
        return $this->appointmentOfficeID;
    }

    /**
     * @param string $appointmentOfficeID
     */
    public function setAppointmentOfficeID($appointmentOfficeID)
    {
        $this->appointmentOfficeID = $appointmentOfficeID;
    }

    /**
     * @return string
     */
    public function getAppointmentStatus()
    {
        return $this->appointmentStatus;
    }

    /**
     * @param string $appointmentStatus
     */
    public function setAppointmentStatus($appointmentStatus)
    {
        $this->appointmentStatus = $appointmentStatus;
    }

    /**
     * @return string
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * @param string $appointmentType
     */
    public function setAppointmentType($appointmentType)
    {
        $this->appointmentType = $appointmentType;
    }

    /**
     * @return string
     */
    public function getAppointmentTypeID()
    {
        return $this->appointmentTypeID;
    }

    /**
     * @param string $appointmentTypeID
     */
    public function setAppointmentTypeID($appointmentTypeID)
    {
        $this->appointmentTypeID = $appointmentTypeID;
    }




} 