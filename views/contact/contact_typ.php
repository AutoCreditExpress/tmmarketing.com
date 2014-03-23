<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              Classes & Data Access
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ContactDAO = new ContactDAO($local);

$succcess = false;

/** Process Contact */
if($_POST){
$createContact = $ContactDAO->createGeneralContact($_POST);

    if($createContact){
        $success = true;
    }
}
elseif($_SERVER['HTTP_REFERER']){header('location: '.$_SERVER['HTTP_REFERER']);}
else{
 header('location: '.$webPath);
}

$pageTitle = 'Thank you!';
$pageDescription = 'Thank you for contacting us!';
$pageKeywords = '';

include($docPath.'inc/template/header.php');
?>

    <section id="titlebar" class="titlebar style2" style="background-image:url(images/bg_titlebar.jpg)">
        <div class="titlebar-overlay"></div>
        <div class="container">
            <div class="row-fluid">
                <div class="titlebar-content">
                    <h1>
                        <?php if($success):?>
                            Thank You! We will be in contact with you shortly.
                        <?php else:?>
                            There was a problem submitting your contact info. Please try again.
                        <?php endif;?>

                    </h1>
                    <h2>Find out what we do and why our clients love us so much</h2>
                </div>
            </div>
        </div>
    </section>

<?php
include($docPath.'inc/template/footer.php');
?>