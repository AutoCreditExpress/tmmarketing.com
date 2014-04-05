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



} 