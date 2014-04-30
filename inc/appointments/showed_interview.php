<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ApplicantActivityDAO = new ApplicantActivityDAO($local);

$ApplicantAppointmentDAO = new ApplicantAppointmentDAO($local);
$currentAppointment = $ApplicantAppointmentDAO->getCurrentAppointmentForApplicant($_SESSION['currentApplicant']);

if($currentAppointment){
    $appointmentID = $currentAppointment->getAppointmentID();
}
else{
    $appointmentID = '';
}

if($_GET['showed'] == 1){
    $updateStatus = $ApplicantActivityDAO->createActivity(7,$_SESSION['currentApplicant'],2,$appointmentID);
    $updateAppointment = $ApplicantAppointmentDAO->updateAppointmentStatus($appointmentID,7);
    if($updateStatus){
        header('Location: '.$webPath.'pre_hire/?appID='.$_SESSION['currentApplicant'].'&type=interview&status=showed');
    }
    else{
        header('Location: '.$webPath.'pre_hire/?appID='.$_SESSION['currentApplicant'].'&type=interview&status=showfailed');
    }
}
elseif($_GET['showed'] == 2){
    $updateStatus = $ApplicantActivityDAO->createActivity(6,$_SESSION['currentApplicant'],2,$appointmentID);
    $updateAppointment = $ApplicantAppointmentDAO->updateAppointmentStatus($appointmentID,6);

    if($updateStatus){
        header('Location: '.$webPath.'pre_hire/?appID='.$_SESSION['currentApplicant'].'&type=interview&status=noshow');
    }
    else{
        header('Location: '.$webPath.'pre_hire/?appID='.$_SESSION['currentApplicant'].'&type=interview&status=noshowfailed');
    }

}