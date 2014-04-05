<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class Title {

    protected $titleID = '';
    protected $titleName = '';

    /**
     * @return string
     */
    public function getTitleID()
    {
        return $this->titleID;
    }

    /**
     * @param string $titleID
     */
    public function setTitleID($titleID)
    {
        $this->titleID = $titleID;
    }

    /**
     * @return string
     */
    public function getTitleName()
    {
        return $this->titleName;
    }

    /**
     * @param string $titleName
     */
    public function setTitleName($titleName)
    {
        $this->titleName = $titleName;
    }



} 