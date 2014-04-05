<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class ApplicantActivity {

    protected $activityID = '';
    protected $activityStatusID = '';
    protected $applicantStatus = '';
    protected $activityDate = '';

    /**
     * @return string
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * @param string $activityDate
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;
    }

    /**
     * @return string
     */
    public function getActivityID()
    {
        return $this->activityID;
    }

    /**
     * @param string $activityID
     */
    public function setActivityID($activityID)
    {
        $this->activityID = $activityID;
    }

    /**
     * @return string
     */
    public function getActivityStatusID()
    {
        return $this->activityStatusID;
    }

    /**
     * @param string $activityStatusID
     */
    public function setActivityStatusID($activityStatusID)
    {
        $this->activityStatusID = $activityStatusID;
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




} 
