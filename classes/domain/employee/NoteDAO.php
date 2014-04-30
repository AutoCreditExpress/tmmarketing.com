<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class NoteDAO {

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

    function createNote($applicantID, $noteName, $noteValue, $appointmentID, $creator){

        $qCreateNote = $this->db->prepare("
            INSERT INTO note (note_applicant_id,note_name,note_value,note_appointment_id,note_create_employee_id,note_create_date)
            VALUES (:applicantID,:noteName,:noteValue,:appointmentID,:employeeID,:createDate)
        ");

        try{

            $qCreateNote->execute(array(
                ':applicantID'      => $applicantID,
                ':noteName'         => $noteName,
                ':noteValue'        => $noteValue,
                ':appointmentID'    => $appointmentID,
                ':employeeID'       => $creator,
                ':createDate'       => date('Y-m-d H:i:s')
            ));

            return $this->db->lastInsertId();
        }
        catch(PDOException $e){
            return false;
        }
    }

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

        $notes = array(); //Array that will contain many appointments.
        try{
            //Checks to see if there are no appointments returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $note = new Note();
                $note->setApplicantID($aRow['note_applicant_id']);
                $note->setNoteName($aRow['note_name']);
                $note->setNoteValue($aRow['note_value']);
                $note->setNoteAppointmentID($aRow['note_appointment_id']);
                $note->setNoteCreateEmployeeID($aRow['note_create_employee_id']);
                $note->setNoteCreateDate($aRow['note_create_date']);
                $notes[] = $note; // applicant to main array.
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

    function pdoExecute($sql){

        $stmt = $this->db->prepare($sql);

        try{
            $stmt->execute();
            $results = $this->mapNoteToObjects($stmt);

            return $results;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }

    }

} 