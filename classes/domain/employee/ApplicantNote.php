<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class ApplicantNote {

    protected $noteID = '';
    protected $applicantID = '';
    protected $noteName = '';
    protected $noteValue = '';
    protected $noteAppointmentID = '';

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
    public function getNoteAppointmentID()
    {
        return $this->noteAppointmentID;
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
    public function getNoteID()
    {
        return $this->noteID;
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
    public function getNoteName()
    {
        return $this->noteName;
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
    public function getNoteValue()
    {
        return $this->noteValue;
    }

    /**
     * @param string $noteValue
     */
    public function setNoteValue($noteValue)
    {
        $this->noteValue = $noteValue;
    }




} 