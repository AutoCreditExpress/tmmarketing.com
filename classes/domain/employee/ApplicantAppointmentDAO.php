<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 4/5/14
 * Time: 1:33 PM
 */

namespace classes\domain\employee;


class ApplicantAppointmentDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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
    protected function mapAppointmentToObjects(PDOStatement $stmt){

        $appointments = array(); //Array that will contain many appointments.
        try{
            //Checks to see if there are no appointments returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $appointment = new ApplicantAppointment();
                $appointment->setAppointmentID($aRow['asa_id']);
                $appointment->setApplicantID($aRow['asa_applicant_id']);
                $appointment->setAppointmentDate($aRow['asa_date']);
                $appointment->setAppointmentContactID($aRow['asa_contact_employee_id']);
                $appointment->setAppointmentOfficeID($aRow['asa_office_id']);
                $appointment->setAppointmentStatusID($aRow['asa_as_id']);
                $appointment->setAppointmentCreateUser($aRow['asa_create_employee_id']);
                $appointment->setAppointmentCreateDate(date('Y-m-d H:i:s'));
                $appointments[] = $appointment; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        if(count($appointments) == 1){
            return $appointments[0];
        }
        else{
            return $appointments;
        }

    }
}