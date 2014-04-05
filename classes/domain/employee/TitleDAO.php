<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class TitleDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function getAllTitles(){

        $qAllTitles = $this->db->prepare("
            SELECT * FROM title;
        ");

        try{
            $allTitleResults = $qAllTitles->execute();

            $allTitles = $this->mapTitleToObjects($allTitleResults);

            return $allTitles;
        }
        catch(\Exception $e){
            echo $e;
            return false;
        }
    }

    function getTitleFromID($titleID){

        $qTitle = $this->db->prepare("
            SELECT * FROM title WHERE title_id = ".$titleID.";
        ");

        try{
            $titleResults = $qTitle->execute();

            $title = $this->mapTitleToObjects($titleResults);

            return $title;
        }
        catch(\Exception $e){
            echo $e;
            return false;
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Create
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Update
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Delete
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Mapping
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    protected function mapTitleToObjects(PDOStatement $stmt){
        $titles = array(); //Array that will contain many titles.
        try{
            //Checks to see if there are no titles returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each titles selected.
                $title = new Applicant();
                $title->setApplicantID($aRow['applicant_id']);
                $title->setApplicantFirst($aRow['applicant_first']);
                $title->setApplicantLast($aRow['applicant_last']);
                $title->setApplicantStreet($aRow['applicant_street']);
                $title->setApplicantUnit($aRow['applicant_unit']);
                $title->setApplicantCity($aRow['applicant_city']);
                $title->setApplicantState($aRow['applicant_state']);
                $title->setApplicantZip($aRow['applicant_zip']);
                $title->setApplicantPhone($aRow['applicant_phone']);
                $title->setApplicantEmail($aRow['applicant_email']);
                $title->setApplicantCompany1($aRow['applicant_company1']);
                $title->setApplicantPosition1($aRow['applicant_position1']);
                $title->setApplicantResponse1($aRow['applicant_response1']);
                $title->setApplicantCompany2($aRow['applicant_company2']);
                $title->setApplicantPosition2($aRow['applicant_position2']);
                $title->setApplicantResponse2($aRow['applicant_response2']);
                $title->setApplicantDate($aRow['applicant_response2']);
                $title->setApplicantOfficeID($aRow['applicant_office_id']);
                $titles[] = $title; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the titles.
        if(count($titles) == 1){
            return $titles[0];
        }
        else{
            return $titles;
        }

    }
} 