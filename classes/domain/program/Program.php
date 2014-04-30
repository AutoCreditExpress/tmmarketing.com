<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Program {

    protected $programID = '';
    protected $programName = '';
    protected $programDesc = '';
    protected $programCreateDate = '00-00-00 00:00:00';
    protected $programCreateUser = '';
    protected $programStatus = '';

    /**
     * @param string $programCreateDate
     */
    public function setProgramCreateDate($programCreateDate)
    {
        $this->programCreateDate = $programCreateDate;
    }

    /**
     * @return string
     */
    public function getProgramCreateDate()
    {
        return $this->programCreateDate;
    }

    /**
     * @param string $programCreateUser
     */
    public function setProgramCreateUser($programCreateUser)
    {
        $this->programCreateUser = $programCreateUser;
    }

    /**
     * @return string
     */
    public function getProgramCreateUser()
    {
        return $this->programCreateUser;
    }

    /**
     * @param string $programDesc
     */
    public function setProgramDesc($programDesc)
    {
        $this->programDesc = $programDesc;
    }

    /**
     * @return string
     */
    public function getProgramDesc()
    {
        return $this->programDesc;
    }

    /**
     * @param string $programID
     */
    public function setProgramID($programID)
    {
        $this->programID = $programID;
    }

    /**
     * @return string
     */
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * @param string $programName
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * @param string $programStatus
     */
    public function setProgramStatus($programStatus)
    {
        $this->programStatus = $programStatus;
    }

    /**
     * @return string
     */
    public function getProgramStatus()
    {
        return $this->programStatus;
    }



} 