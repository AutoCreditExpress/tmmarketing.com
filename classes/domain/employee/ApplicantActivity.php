<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



class ApplicantActivity {

    protected $activityID = '';
    protected $activityStatusID = '';
    protected $activityDate = '';
    protected $activityStatusName = '';
    protected $activityCreateUser = '';
    protected $activityUpdateUser = '';
    protected $activityCreateDate = '';
    protected $activityUpdateDate = '';

    /**
     * @param string $activityCreateDate
     */
    public function setActivityCreateDate($activityCreateDate)
    {
        $this->activityCreateDate = $activityCreateDate;
    }

    /**
     * @return string
     */
    public function getActivityCreateDate()
    {
        return $this->activityCreateDate;
    }

    /**
     * @param string $activityCreateUser
     */
    public function setActivityCreateUser($activityCreateUser)
    {
        $this->activityCreateUser = $activityCreateUser;
    }

    /**
     * @return string
     */
    public function getActivityCreateUser()
    {
        return $this->activityCreateUser;
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
    public function getActivityDate()
    {
        return $this->activityDate;
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
    public function getActivityID()
    {
        return $this->activityID;
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
    public function getActivityStatusID()
    {
        return $this->activityStatusID;
    }

    /**
     * @param string $activityUpdateDate
     */
    public function setActivityUpdateDate($activityUpdateDate)
    {
        $this->activityUpdateDate = $activityUpdateDate;
    }

    /**
     * @return string
     */
    public function getActivityUpdateDate()
    {
        return $this->activityUpdateDate;
    }

    /**
     * @param string $activityUpdateUser
     */
    public function setActivityUpdateUser($activityUpdateUser)
    {
        $this->activityUpdateUser = $activityUpdateUser;
    }

    /**
     * @return string
     */
    public function getActivityUpdateUser()
    {
        return $this->activityUpdateUser;
    }

    /**
     * @param string $activityStatusName
     */
    public function setActivityStatusName($activityStatusName)
    {
        $this->activityStatusName = $activityStatusName;
    }

    /**
     * @return string
     */
    public function getActivityStatusName()
    {
        return $this->activityStatusName;
    }



} 
