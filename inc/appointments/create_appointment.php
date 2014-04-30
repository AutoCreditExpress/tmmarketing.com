<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($_POST){

    $time_in_24_hour_format  = date("H:i", strtotime($_POST['time']));
    $ApplicantAppointmentDAO = new ApplicantAppointmentDAO($local);

    if($_POST['statusID']){
        $statusID = $_POST['statusID'];
    }
    else{
        $statusID = 5;
    }
    //TODO: need to add in the active users id for the creator.
    $createAppointment = $ApplicantAppointmentDAO->createAppointment($_POST['appID'],$_POST['date'].' '.$time_in_24_hour_format,$_POST['interviewer'],$_POST['office'],$statusID,$_POST['note'],2);


    if($createAppointment){
        header('Location: '.$webPath.'pre_hire/?appID='.$_POST['appID'].'&type=interview&status=success');
    }
    else{
        header('Location: '.$webPath.'pre_hire/?appID='.$_POST['appID'].'&type=interview&status=error');
    }

}
else{
    header('Location: '.$webPath.'applicants/');
}