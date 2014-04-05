<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\office;




class OfficeDAO{

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
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


}