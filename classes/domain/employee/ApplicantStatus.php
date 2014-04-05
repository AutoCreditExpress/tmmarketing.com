<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class ApplicantStatus {

    protected  $statusID = '';
    protected  $statusName = '';
    protected  $statusGroup = '';
    protected $statusCreateUser = '';
    protected $statusCreateDate = '';

    /**
     * @return string
     */
    public function getStatusID()
    {
        return $this->statusID;
    }

    /**
     * @param string $statusID
     */
    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;
    }

    /**
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * @param string $statusName
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
    }

    /**
     * @param string $statusGroup
     */
    public function setStatusGroup($statusGroup)
    {
        $this->statusGroup = $statusGroup;
    }

    /**
     * @return string
     */
    public function getStatusGroup()
    {
        return $this->statusGroup;
    }

    /**
     * @param string $statusCreateDate
     */
    public function setStatusCreateDate($statusCreateDate)
    {
        $this->statusCreateDate = $statusCreateDate;
    }

    /**
     * @return string
     */
    public function getStatusCreateDate()
    {
        return $this->statusCreateDate;
    }

    /**
     * @param string $statusCreateUser
     */
    public function setStatusCreateUser($statusCreateUser)
    {
        $this->statusCreateUser = $statusCreateUser;
    }

    /**
     * @return string
     */
    public function getStatusCreateUser()
    {
        return $this->statusCreateUser;
    }

} 