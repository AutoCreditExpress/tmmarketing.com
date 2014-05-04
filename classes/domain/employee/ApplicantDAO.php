<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class ApplicantDAO {
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    protected $db = '';

    function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    function getApplicant($applicantID){
    echo $applicantID; exit;
        $qGetApplicant = $this->db->prepare("
            SELECT * FROM applicant WHERE applicant_id = ".$applicantID."
        ");

        try{
            $qGetApplicant->execute();
            $applicant = $this->mapApplicantToObjects($qGetApplicant);

            return $applicant;

        }catch(Exception $e){
            echo $e;
            return false;
        }

    }

    function getAllApplicants($dateStart = null, $dateEnd = null){

        if($dateStart && $dateEnd){
            $dateInput = "WHERE applicant_date >= '".$dateStart."' AND applicant_date <= '".$dateEnd."'";
        }

        $qGetApplicant = $this->db->prepare("
            SELECT * FROM applicant $dateInput;

        ");

        try{
            $qGetApplicant->execute();
            $applicants = $this->mapApplicantToObjects($qGetApplicant);

            return $applicants;

        }catch(Exception $e){
            echo $e;
            return false;
        }

    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Create
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function createApplicant($postData){
        try{
            $qCreateEmployment = $this->db->prepare("
            INSERT INTO applicant (applicant_first, applicant_last, applicant_street,applicant_unit,applicant_city, applicant_state,
            applicant_zip, applicant_phone, applicant_email, applicant_company1, applicant_position1, e_response1, applicant_company2,
            applicant_position2, applicant_response2, applicant_date,applicant_office_id)
             VALUES (:fname,:lname,:street,:unit,:city,:state,:zip,:phone,:email,:company1,:position1,:response1,:company2,
             :position2,:response2,:edate,:officeID);
        ");

            $qCreateEmployment->execute(array(
                ':fname' => $postData['first'],
                ':lname' => $postData['last'],
                ':street' => $postData['street'],
                ':unit' => $postData['unit'],
                ':city' => $postData['city'],
                ':state' => $postData['state'],
                ':zip' => $postData['zip'],
                ':phone' => $postData['phone'],
                ':email' => $postData['email'],
                ':company1' => $postData['company1'],
                ':position1' => $postData['position1'],
                ':response1' => $postData['respons1'],
                ':company2' => $postData['company2'],
                ':position2' => $postData['position2'],
                ':response2' => $postData['respons2'],
                ':edate' => date('Y-m-d H:i:s'),
                ':officeID' => $postData['officeID']
            ));

            //TODO: need to add check to see what office the applicant is for and send an email to the appropriate people.
            //TODO: need to pull in the recipients dynamically based on the office that the applicantion goes to.
            $to = 'tmurphy@wemarketenergy.com'.', ';
            $to .= 'cadams@wemarketenergy.com';

            mail($to,'New Application',
                'First Name: '.$postData['first'].'\r\n
                Last Name: '.$postData['last'].'\r\n
                Address: '.$postData['street'].' '.$postData['city'].', State: '.$postData['state'].' '.$postData['zip'].'\r\n
                Phone: '.$postData['phone'].'\r\n
                Email: '.$postData['email'].'\r\n
                Company 1: '.$postData['company1'].'\r\n
                Position 1: '.$postData['position1'].'\r\n
                Responsibility 1: '.$postData['response1'].'\r\n
                Company 2: '.$postData['company2'].'\r\n
                Position 2: '.$postData['position2'].'\r\n
                Responsibility 2: '.$postData['response2'].'\r\n
                Application Date: '.date('Y-m-d H:i:s').'\r\n'
                ,
                'FROM: employment@wemarketenergy.com');

            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Update
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Mapping
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    protected function mapApplicantToObjects(PDOStatement $stmt){
        $applicants = array(); //Array that will contain many Lists.

        try{
            //Checks to see if there are no applicants returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $applicant = new Applicant();
                $applicant->setApplicantID($aRow['applicant_id']);
                $applicant->setApplicantFirst($aRow['applicant_first']);
                $applicant->setApplicantLast($aRow['applicant_last']);
                $applicant->setApplicantStreet($aRow['applicant_street']);
                $applicant->setApplicantUnit($aRow['applicant_unit']);
                $applicant->setApplicantCity($aRow['applicant_city']);
                $applicant->setApplicantState($aRow['applicant_state']);
                $applicant->setApplicantZip($aRow['applicant_zip']);
                $applicant->setApplicantPhone($aRow['applicant_phone']);
                $applicant->setApplicantEmail($aRow['applicant_email']);
                $applicant->setApplicantCompany1($aRow['applicant_company1']);
                $applicant->setApplicantPosition1($aRow['applicant_position1']);
                $applicant->setApplicantResponse1($aRow['applicant_response1']);
                $applicant->setApplicantCompany2($aRow['applicant_company2']);
                $applicant->setApplicantPosition2($aRow['applicant_position2']);
                $applicant->setApplicantResponse2($aRow['applicant_response2']);
                $applicant->setApplicantDate($aRow['applicant_date']);
                $applicant->setApplicantOfficeID($aRow['applicant_office_id']);
                $OfficeDAO = new OfficeDAO($this->db);
                $ApplicantStatusDAO = new ApplicantStatusDAO($this->db);
                $latestAppointment = $ApplicantStatusDAO->getLatestAppointmentStatusForUser($applicant->getApplicantID());
                $applicant->setApplicantStatus($latestAppointment);
                $office = $OfficeDAO->getOfficeFromID($applicant->getApplicantOfficeID());
                $applicant->setApplicantOffice($office->getOfficeName());



                $applicants[] = $applicant; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        if(count($applicants) == 1){
            return $applicants[0];
        }
        else{
            return $applicants;
        }

    }
} 
