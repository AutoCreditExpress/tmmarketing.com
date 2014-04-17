<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 3/14/14
 * Time: 6:56 PM
 */


$ApplicantDAO = new ApplicantDAO($local);
$allApplicants = $ApplicantDAO->getAllApplicants('2014-04-05','2014-04-07');


?>

<table>
    <thead>
    <tr>
        <td>Name</td>
        <td>Address</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($allApplicants as $applicant):?>
        <tr>
            <td><?= $applicant->getApplicantFirst(); ?></td>
            <td><?= $applicant->getApplicantStreet(); ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>