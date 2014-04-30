<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class ApplicantStatusDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function getLatestAppointmentStatusForUser($userID){
        $qAllStatuses = $this->db->prepare("
            SELECT as_name, as_id, DATE_FORMAT(aa_date, '%b %e, %Y') AS aa_date FROM applicant_status
            INNER JOIN applicant_status_group ON as_sg_id = asg_id AND asg_name = 'Appointment'
            INNER JOIN applicant_activity ON aa_as_id = as_id AND aa_applicant_id = '".$userID."' ORDER BY aa_id DESC LIMIT 1;
        ");

        try{
            $qAllStatuses->execute();
            $allStatuses = $this->mapStatusToObjects($qAllStatuses);

            return $allStatuses;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

    function getALLStatuses(){
        $qAllStatuses = $this->db->prepare("
            SELECT * FROM applicant_status;
        ");

        try{
            $allStatusResults = $qAllStatuses->ececute();
            $allStatuses = $this->mapStatusToObjects($allStatusResults);

            return $allStatuses;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

    function getALLStatusesFromGroup($groupID){
        $qAllStatuses = $this->db->prepare("
            SELECT * FROM applicant_status WHERE as_asg_id = ".$groupID.";
        ");

        try{
            $allStatusResults = $qAllStatuses->ececute();
            $allStatuses = $this->mapStatusToObjects($allStatusResults);

            return $allStatuses;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }


    function getStatusFromID($statusID){
        $qStatus = $this->db->prepare("
            SELECT * FROM applicant_status WHERE as_id = ".$statusID.";
        ");

        try{
            $qStatus->execute();

            $status = $this->mapStatusToObjects($qStatus);
            return $status;
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

    protected function mapStatusToObjects(PDOStatement $stmt){
        $statuses = array(); //Array that will contain many Status.
        try{
            //Checks to see if there are no Status returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $status = new ApplicantStatus();
                $status->setStatusID($aRow['as_id']);
                $status->setStatusName($aRow['as_name']);
                $status->setStatusGroup($aRow['as_asg_id']);
                $status->setStatusCreateUser($aRow['as_create_employee_id']);
                $status->setStatusDate($aRow['aa_date']);
                $statuses[] = $status; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        $count = count($statuses);
        if( $count == 1){
            return $statuses[0];
        }
        else{
            return $statuses;
        }

    }

    function generateApplicantInterviewWidget($applicantID){
        $aStatuses = array();
        $webPath = WEBPATH;

         $ApplicantActivityDAO = new ApplicantActivityDAO($this->db);
        $ApplicantActivities = $ApplicantActivityDAO->getAllActivitiesForUser($applicantID);

        //Check to make sure if only one activity was returned that we make it an array.
        $count = count($ApplicantActivities);
        if($count == 1){
            $ApplicantActivities = array($ApplicantActivities);
        }
//echo 'WE ARE HERE YP<br/>';
        //loop through each activity and put all of their statuses in an array
        foreach($ApplicantActivities as $Activities){
            $aStatuses[] = $Activities->getActivityStatusID();
        }

        $statusCounts = array_count_values($aStatuses);

        //Need to see if they have a status of 5 - interview Scheduled but
        //not a status of 12 - interview scheduled
        if($aStatuses[0] == 5 && !in_array(8,$aStatuses)){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-calendar-1 fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Interview Scheduled</a>
                                <p>
                                    <a href="{$webPath}showed_interview/?showed=1" class="btn btn-sm btn-success">Showed</a>
                                    <a href="{$webPath}showed_interview/?showed=2" class="btn btn-sm btn-danger"> No Show</a>
                                    <a href="{$webPath}schedule_appointment/?type=interview&status=reschedule" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
EOF;

        }
        elseif($aStatuses[0] == 8){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-calendar-1 fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rescheduled Interview Set-Up</a>
                                <p>
                                    <a href="{$webPath}showed_interview/?showed=1" class="btn btn-sm btn-success">Showed</a>
                                    <a href="{$webPath}showed_interview/?showed=2" class="btn btn-sm btn-danger"> No Show</a>
                                    <a href="{$webPath}schedule_appointment/?type=interview&status=reschedule" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
EOF;
        }
        elseif(in_array(5,$aStatuses) && $aStatuses[0] == 13){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class=" icon-happy-wink fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Interview Complete!</a>
                                <p>
                                    Let em' get educated! Off to training.
                                </p>
                            </div>
                        </div>
EOF;
        }
        elseif(in_array(13,$aStatuses)){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class=" icon-checkmark-thick fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Interview Process Finished</a>
                                <p>
                                    All done here!
                                </p>
                            </div>
                        </div>
EOF;
        }
        elseif($statusCounts['6'] > 1 && $aStatuses[0] == 6){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-surprised fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Interview Again!!</a>
                                <p>
                                    <a href="{$webPath}hire/?hire=2" class="btn btn-sm btn-danger"> Pass Over</a>
                                </p>
                            </div>
                        </div>
EOF;
        }
        elseif($aStatuses[0] == 6){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Interview!</a>
                                <p>
                                    <a href="{$webPath}hire/?hire=2" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="{$webPath}schedule_appointment/?type=interview&status=reschedule" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
EOF;
        }
        //This is for a person who has shown up for their first interview and have not had to reschedule
        elseif($aStatuses[0] == 7 && !in_array(12, $aStatuses) && !in_array(6, $aStatuses) && !in_array(8, $aStatuses)){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class=" icon-joyful fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Present for Interview</a>
                                <p>
                                    <a href="{$webPath}hire/?hire=1" class="btn btn-sm btn-success">Hire</a>
                                    <a href="{$webPath}hire/?hire=2" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="{$webPath}schedule_appointment/?type=interview&status=reschedule" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
EOF;
        }//This is for someone who showed up for an interview after not showing up for one after they committed to.
        elseif(in_array(7,$aStatuses) && !in_array(12, $aStatuses) && in_array(6, $aStatuses) && in_array(8, $aStatuses) && $aStatuses[0] == 7){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class=" icon-joyful fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Present for Interview After No Show</a>
                                <p>
                                    <a href="{$webPath}hire/?hire=1"" class="btn btn-sm btn-success">Hire</a>
                                    <a href="{$webPath}hire/?hire=2" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="{$webPath}schedule_appointment/?type=interview&status=reschedule" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
EOF;
        }
        //This is for someone who is showing up for an interview after they have already been scheduled for one.
        elseif(in_array(7,$aStatuses) && !in_array(12, $aStatuses) && !in_array(6, $aStatuses) && in_array(8, $aStatuses) && $aStatuses[0] == 7){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class=" icon-joyful fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Present for Rescheduled Interview</a>
                                <p>
                                    <a href="{$webPath}hire/?hire=1" class="btn btn-sm btn-success">Hire</a>
                                    <a href="{$webPath}hire/?hire=2" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="{$webPath}schedule_appointment/?type=interview&status=reschedule" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
EOF;
        }
        //This ios for someone who we didnt want to hire.
        elseif(in_array(18,$aStatuses)){
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-disappointed-1 fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse " style="color: #cc3a3a;">It Didn't Work out...</a>
                                <p>
                                    No need to process this applicant any further.
                                </p>
                            </div>
                        </div>
EOF;
        }
        else{
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover" onclick="location.href='{$webPath}schedule_appointment/?type=interview'">
                            <div class="innerAll text-center">
                                <i class="icon-calendar-2 fa fa-5x innerTB text-primary "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Schedule Interview</a>
                                <p>
                                    If this person look like a good candidate we should schedule them for an interview here.
                                </p>
                            </div>
                        </div>
EOF;
        }

    }

    function generateApplicantTrainingWidget($applicantID){
        $aStatuses = array();
        $webPath = WEBPATH;
        $ApplicantActivityDAO = new ApplicantActivityDAO($this->db);
        $ApplicantActivities = $ApplicantActivityDAO->getAllActivitiesForUser($applicantID);

        //Check to make sure if only one activity was returned that we make it an array.
        $count2 = count($ApplicantActivities);
        if($count2 == 1){
            $ApplicantActivities = array($ApplicantActivities);
        }
        //loop through each activity and put all of their statuses in an array
        foreach($ApplicantActivities as $Activities){
            $aStatuses[] = $Activities->getActivityStatusID();
        }

        //Need to see if they have a status of 5 - interview Scheduled but
        //not a status of 12 - interview scheduled

        if($aStatuses[0] == 12 && !in_array(22,$aStatuses)){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-graduation fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Training Set-Up</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Showed</a>
                                    <a href="" class="btn btn-sm btn-danger"> No Show</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;

        }
        elseif($aStatuses[0] == 11 && !in_array(22,$aStatuses) && !in_array(9,$aStatuses) && !in_array(10,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-joyful fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rep In Day 1 Training</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Day 1 Complete</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 11 && in_array(22,$aStatuses) && !in_array(9,$aStatuses) && !in_array(10,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-joyful fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rescheduled Rep In Day 1 Training</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Day 1 Complete</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 23){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-happy fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Scheduled For Day 2 Training</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Showed</a>
                                    <a href="" class="btn btn-sm btn-danger"> No Show</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 22 && $aStatuses[1] == 10){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-happy fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rescheduled For Day 2 Training</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Showed</a>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 21 && !in_array(24,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-identification fa fa-5x innerTB text-primary "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Needs Background Check</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Check Complete</a>
                                    <a href="" class="btn btn-sm btn-info"> Run Check</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 24 && !in_array(22,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-cool fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rep In Day 2 Training</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Day 2 Complete</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 24 && in_array(22,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-cool fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rescheduled Rep In Day 2 Training</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Day 2 Complete</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 20 && !in_array(22,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-angel fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Training Complete - No Issues</a>
                                <p>
                                    Awesome! Training is done - lets get a schedule set up.
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 20 && in_array(22,$aStatuses) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-happy-wink fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rescheduled Training Complete</a>
                                <p>
                                    Awesome! Training is done - lets get a schedule set up.
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif(in_array(20,$aStatuses) && $aStatuses[0] == 20){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class=" icon-checkmark-thick fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Training Finished</a>
                                <p>
                                    Education is fun!
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif(in_array(18,$aStatuses) && in_array(12,$aStatuses)){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-disappointed-1 fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse " style="color: #cc3a3a;">Issue With Training...</a>
                                <p>
                                    No need to process this applicant any further.
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 9 && !in_array(22, $aStatuses)){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Day 1!</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 10 && !in_array(22, $aStatuses)){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Day 2!</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 9 && in_array(22, $aStatuses)){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Rescheduled Day 1!</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 9 && in_array(22, $aStatuses) && in_array(9, array_shift($aStatuses)) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Day 1 Again!</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 10 && in_array(22, $aStatuses) && in_array(9, array_shift($aStatuses)) ){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Day 2 Again!</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 10 && in_array(22, $aStatuses)){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-looking-shocked fa fa-5x innerTB" style="color: #cc3a3a;"></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse" style="color: #cc3a3a;">Missed Rescheduled Day 2!</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-danger"> Pass Over</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;
        }
        elseif($aStatuses[0] == 22){
            return <<<HTML
            <div class="col-sm-4 bg-gray-hover">
                            <div class="innerAll text-center">
                                <i class="icon-graduation fa fa-5x innerTB text-success "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Rescheduled Training Set-Up</a>
                                <p>
                                    <a href="" class="btn btn-sm btn-success">Showed</a>
                                    <a href="" class="btn btn-sm btn-danger"> No Show</a>
                                    <a href="" class="btn btn-sm btn-info"> Reschedule</a>
                                </p>
                            </div>
                        </div>
HTML;

        }
        elseif(!in_array(13,$aStatuses)){
            return <<<EOF
            <div class="col-sm-4 ">
                            <div class="innerAll text-center">
                                <i class="icon-graduation fa fa-5x innerTB text-faded "></i>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-faded">Set-Up Training</a>
                                <p class="text-faded">
                                    Once the interview process is complete this will be available.
                                </p>
                            </div>
                        </div>
EOF;

        }
        else{
            return <<<EOF
            <div class="col-sm-4 bg-gray-hover" onclick="location.href='{$webPath}schedule_appointment/?type=training'">
                            <div class="innerAll text-center">
                                <i class="icon-graduation fa fa-5x innerTB text-primary "></i>
                                </a>
                                <div class="clearfix"></div>
                                <a class="lead innerTB strong text-inverse">Set-Up Training</a>
                                <p>
                                    Set-up training so the the applicant can begin to work as a rep.
                                </p>
                            </div>
                        </div>


EOF;
        }

    }

} 