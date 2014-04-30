<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class Note {

    protected $noteID = '';
    protected $applicantID = '';
    protected $noteName = '';
    protected $noteValue = '';
    protected $noteAppointmentID = '';
    protected $noteCreateEmployeeID = '';
    protected $noteCreateDate = '00-00-00 00:00:00';

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
    public function getApplicantID()
    {
        return $this->applicantID;
    }

    /**
     * @param string $noteAppointmentID
     */
    public function setNoteAppointmentID($noteAppointmentID)
    {
        $this->noteAppointmentID = $noteAppointmentID;
    }

    /**
     * @return string
     */
    public function getNoteAppointmentID()
    {
        return $this->noteAppointmentID;
    }

    /**
     * @param string $noteID
     */
    public function setNoteID($noteID)
    {
        $this->noteID = $noteID;
    }

    /**
     * @return string
     */
    public function getNoteID()
    {
        return $this->noteID;
    }

    /**
     * @param string $noteName
     */
    public function setNoteName($noteName)
    {
        $this->noteName = $noteName;
    }

    /**
     * @return string
     */
    public function getNoteName()
    {
        return $this->noteName;
    }

    /**
     * @param string $noteValue
     */
    public function setNoteValue($noteValue)
    {
        $this->noteValue = $noteValue;
    }

    /**
     * @return string
     */
    public function getNoteValue()
    {
        return $this->noteValue;
    }

    /**
     * @param string $noteCreateDate
     */
    public function setNoteCreateDate($noteCreateDate)
    {
        $this->noteCreateDate = $noteCreateDate;
    }

    /**
     * @return string
     */
    public function getNoteCreateDate()
    {
        return $this->noteCreateDate;
    }

    /**
     * @param string $noteCreateEmployeeID
     */
    public function setNoteCreateEmployeeID($noteCreateEmployeeID)
    {
        $this->noteCreateEmployeeID = $noteCreateEmployeeID;
    }

    /**
     * @return string
     */
    public function getNoteCreateEmployeeID()
    {
        return $this->noteCreateEmployeeID;
    }



} 