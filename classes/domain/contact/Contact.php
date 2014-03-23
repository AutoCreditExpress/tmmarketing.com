<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class Contact {

    protected $contactFirstName = '';
    protected $contactLastName = '';
    protected $contactEmail = '';
    protected $contactPhone = '';
    protected $contactMessage = '';

    /**
     * @param string $contactPhone
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactLastName
     */
    public function setContactLastName($contactLastName)
    {
        $this->contactLastName = $contactLastName;
    }

    /**
     * @return string
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
    }

    /**
     * @param string $contactFirstName
     */
    public function setContactFirstName($contactFirstName)
    {
        $this->contactFirstName = $contactFirstName;
    }

    /**
     * @return string
     */
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }

    /**
     * @param string $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactMessage
     */
    public function setContactMessage($contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * @return string
     */
    public function getContactMessage()
    {
        return $this->contactMessage;
    }




} 