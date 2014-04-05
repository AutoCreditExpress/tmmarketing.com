<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 4/5/14
 * Time: 12:22 PM
 */

namespace classes\domain\employee;


use OAuth2\Exception;

class ApplicantNoteDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function getAllNotes(){
        $qAllNotes = $this->db->prepare("
            SELECT * FROM note;
        ");

        try{
            $qAllNoteResults = $qAllNotes->execute();
            $allNoteResults = $this->mapNoteToObjects($qAllNoteResults);

            return $allNoteResults;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

    function getNoteFromID($noteID){
        $qNote = $this->db->prepare("
            SELECT * FROM note;
        ");

        try{
            $qNoteResult = $qNote->execute();
            $noteResults= $this->mapNoteToObjects($qNoteResult);

            return $noteResults;
        }
        catch(Exception $e){
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

    protected function mapNoteToObjects(PDOStatement $stmt){

        $notes = array(); //Array that will contain many Status.
        try{
            //Checks to see if there are no Status returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $note = new ApplicantNote();
                $note->setNoteID($aRow['note_id']);
                $note->setApplicantID($aRow['note_applicant_id']);
                $note->setNoteName($aRow['note_name']);
                $note->setNoteValue($aRow['note_value']);
                $note->setNoteAppointmentID($aRow['note_appointmentID']);
                $notes[] = $notes; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        if(count($notes) == 1){
            return $notes[0];
        }
        else{
            return $notes;
        }

    }



} 