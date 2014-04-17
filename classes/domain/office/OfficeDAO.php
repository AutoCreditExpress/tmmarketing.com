<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class OfficeDAO{

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

    function getAllOffices(){
        $qAllOffices = $this->db->prepare("
            SELECT * FROM office;
        ");

        try{
            $qAllOffices->execute();
            $offices = $this->mapOfficeToObjects($qAllOffices);

            return $offices;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

    function createOffice(array $officeArray){

        $officeName = $officeArray['officeName'];
        $officeAddress = $officeArray['officeAddress'];
        $officeUnit = $officeArray['officeUnit'];
        $officeCity = $officeArray['officeCity'];
        $officeState = $officeArray['officeState'];
        $officeZip = $officeArray['officeZip'];
        $officePhone = $officeArray['officePhone'];
        $officeFax = $officeArray['officeFax'];
        $officeManagerID = $officeArray['officeManagerID'];

        $sql = $this->db->prepare("
            INSERT INTO office (
              office_id,office_name,office_address,office_unit,office_city,office_state,office_zip,office_phone,office_fax,office_manager_id
            ) values (
              :officeName,:officeAddress,:officeUnit,:officeCity,:officeState,:officeZip,:officePhone,:officeFax,:officeManager
            )
        ");

        try{
            $sql->execute(array(
                ':officeName' => $officeName,
                ':officeUnit'   => $officeUnit,
                ':officeAddress'    => $officeAddress,
                ':officeCity'   => $officeCity,
                ':officeState' => $officeState,
                ':officeZip'    => $officeZip,
                ':officePhone'  => $officePhone,
                ':officeFax'    => $officeFax,
                ':officeManagerID'  => $officeManagerID
            ));
            return $sql->lastInsertId();
        }catch(\PDOException $e){
            echo $e;
            return false;
        }

    }

    function getOfficeFromID($officeID){
        $qGetOffice = $this->db->prepare("
            SELECT * FROM office WHERE office_id = '".$officeID."'
        ");

        try{
            $qGetOffice->execute();
            $office = $this->mapOfficeToObjects($qGetOffice);

            return $office;

        }catch(Exception $e){
            echo $e;
            return false;
        }
    }

    protected function mapOfficeToObjects(PDOStatement $stmt){
        $offices = array(); //Array that will contain many Lists.

        try{
            //Checks to see if there are no office returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each office selected.
                $office = new Office();
                $office->setOfficeID($aRow['office_id']);
                $office->setOfficeName($aRow['office_name']);
                $office->setOfficeAddress($aRow['office_address']);
                $office->setOfficeUnit($aRow['office_unit']);
                $office->setOfficeCity($aRow['office_city']);
                $office->setOfficeState($aRow['office_state']);
                $office->setOfficeZip($aRow['office_zip']);
                $office->setOfficePhone($aRow['office_phone']);
                $office->setOfficeFax($aRow['office_fax']);
                $office->setOfficeManagerID($aRow['office_manager_id']);
                $office->setOfficeManager($aRow['office_manager']);
                $offices[] = $office; // office to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the office.
        if(count($offices) == 1){
            return $offices[0];
        }
        else{
            return $offices;
        }

    }


}