<?php
$pageTitle = 'Direct Marketing Partnerships | Natural Gas And Electricity Deregulation Focused | TM Marketing';
$pageDescription = 'At TM Marketing we are an experienced, effective and agile door to door marketing company that focus in the deregulation of natural gas and electricity. Close more deals than the other guy.';
$pageKeywords = 'door to door marketing for energy deregulation.';

include($docPath.'inc/template/header.php');
?>

<!-- rev  slider -->

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" >
    <ul>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="300" > <img src="<?php echo $webPath; ?>images/suppliers.jpg"  alt="direct marketing for energy suppliers"  data-fullwidthcentering="on">

          <div class="tp-caption bg-title sfb"
               data-x="570"
               data-y="150" 					 data-speed="400"
               data-start="800"
               data-easing="easeOutExpo"  >Hello Suppliers!</div>
          <div class="tp-caption bg-title sfb"
               data-x="570"
               data-y="198" 					 data-speed="400"
               data-start="1100"
               data-easing="easeOutExpo"  > <span>Ready for More Customers?</span> </div>
          <div class="tp-caption bg-subtitle fade"
               data-x="575"
               data-y="270" 					 data-speed="300"
               data-start="1400"
               data-easing="easeOutExpo"  >Specializing in the deregulation of natural gas and electricity,<br /> TM Marketing can help you reach more customers with a greater ROI.
          </div>
          <div class="tp-caption fade bg-buttons"
               data-x="570"
               data-y="360" 					 data-speed="300"
               data-start="1700"
               data-easing="easeOutExpo"  ><a href='<?php echo $webPath;?>contact_us/' class='button'>Connect With Us</a></div>
      </li>
    </ul>
  </div>
</div>
<script type="text/javascript">


				var revapi3;

				jQuery(document).ready(function() {

				if (jQuery.fn.cssOriginal != undefined)
					jQuery.fn.css = jQuery.fn.cssOriginal;

				if(jQuery('#rev_slider_3_1').revolution == undefined)

					revslider_showDoubleJqueryError('#rev_slider_3_1');
				else {
				   revapi3 = jQuery('#rev_slider_3_1').show().revolution(
					{
						delay:9000,
						startwidth:1140,
						startheight:500,
						hideThumbs:200,

						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,

						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"round",

						touchenabled:"on",
						onHoverStop:"on",

						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:10,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:10,
						soloArrowRightVOffset:0,

						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",

						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"<?php echo $webPath; ?>revslider/videojs/",
						fullScreenOffsetContainer: ""
					});

					revapi3.revnext(function(){alert(0)});
				}
				});	//ready


			</script>

<!-- END REVOLUTION SLIDER -->


<section class="section  section-padding-large section-border-yes">
    <div class="container">
        <div class="row-fluid">
            <div class="stunning_text style2 clearfix">
                <div class="big-title">
                    <div>
                        <h4 class="first-title"><span>How people describe our services</span></h4>
                        <span>Innovative. Top-Notch. Effective. Worth It. </span> </div>
                </div>
                <p>There are plenty of companies out there that say they can <span class="highlighted">do great things</span>,<br/>
                    but we want to show you that we can! Take a moment to speak with us and you will see why working with us<br/>
                    will be <span class="highlighted">one of the best investments you make in <?php echo date('Y'); ?></span>.
                </p>
            </div>
            <div class="gap small"></div>
        </div>
    </div>
</section>

<section class="section section-padding-zero full-width-alternate section-grey">
    <div class="container">

        <div class="row-fluid">
            <div class="content-left span6">
                <div class="inner-content">
                    <div class="gap extra-large"></div>
                    <h2 class="textuppercase">Why Suppliers Love to Work With Us</h2>
                    <div class="hr border-tiny double-border"></div>
                    <p>
                        Companies are always in search of the next big thing - and at TM Marketing we're no different. That is why we
                        strive to incorporate cutting edge technology with an old fashion work ethic. Our company has one
                        focus, superior marketing -  and we do it well.
                    </p>
                    <p>
                        We're able to run successful direct marketing campaigns for energy suppliers with unparalleled results. We can do this because our company
                        is built on many years of insightful experience - experience that has helped us craft the successful process we use today for ourselves and our customers.
                        Another reason why we are able to create "big wins" for suppliers is for the simple fact that we can expand our umbrella very quickly. Our solid foundation
                        allows us to scale with minimal effort and gives us the flexibility to manage marketing campaigns of any size, anywhere in the country.
                    </p>

                    <div class="gap large"></div>
                </div>
            </div>
            <div class="content-right span6">
                <div class="inner-content">
                    <div class="image"><img src="<?php echo $webPath; ?>images/supplier_and_marketing_partnership.png" alt="More sales"></div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="section ">
        <div class="container">
            <div class="row-fluid">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="inner-content">
                            <div class="image"><img src="<?php echo $webPath; ?>images/suppliers_connect.png" alt="Connect with suppliers"></div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="inner-content">
                            <h4 class="title style1 textuppercase" ><span>Connect With Us to Learn More</span></h4>
                            <div class="wpcf7" id="wpcf7-f2370-p20-o1">
                                <form action="<?php $webPath; ?>/contact_typ/" method="post" class="wpcf7-form" novalidate>
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="2370" />
                                        <input type="hidden" name="_wpcf7_version" value="3.4.2" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2370-p20-o1" />
                                        <input type="hidden" name="_wpnonce" value="c1e8779b4f" />
                                    </div>


                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="wpcf7-form-control-wrap your-name"> <span class="icon"><i class="icon-blandes-user"></i></span>
                                                <input type="text" name="first"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="First Name" />
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="wpcf7-form-control-wrap your-last-name"> <span class="icon"><i class="icon-blandes-user"></i></span>
                                                <input type="text" name="last"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Last Name" />
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="wpcf7-form-control-wrap your-email"> <span class="icon"><i class="icon-blandes-mail"></i></span>
                                            <input type="text" name="email"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" value="Email" />
                                        </div>
                                    </div>
                                    <div class="wpcf7-form-control-wrap your-message">
                                        <textarea name="message" rows="8" cols="5"  class="wpcf7-form-control wpcf7-textarea">Message</textarea>
                                        </span> </div>
                                    <div>
                                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="gap large"></div>
            </div></div></section>



<?php
include($docPath.'inc/template/footer.php');
?>