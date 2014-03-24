<?php
$pageTitle = 'Apply for a position as a direct marketing rep for TM Marketing';
$pageDescription = 'Take your career to the next level by applying to be a direct marketing sales rep with TM Marketing. Many positions open.';
$pageKeywords = 'Door to door sales jobs';

include($docPath.'inc/template/header.php');
?>

<!-- rev  slider -->

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" >
    <ul>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="300" > <img src="<?php echo $webPath; ?>images/employment.jpg"  alt="direct marketing for energy suppliers"  data-fullwidthcentering="on">

          <div class="tp-caption bg-title sfb"
               data-x="570"
               data-y="150" 					 data-speed="400"
               data-start="800"
               data-easing="easeOutExpo"  >Hello Future Team Member!</div>
          <div class="tp-caption bg-title sfb"
               data-x="570"
               data-y="198" 					 data-speed="400"
               data-start="1100"
               data-easing="easeOutExpo"  > <span>Success is coming your way</span> </div>
          <div class="tp-caption bg-subtitle fade"
               data-x="575"
               data-y="270" 					 data-speed="300"
               data-start="1400"
               data-easing="easeOutExpo"  >Take your professional career to the next level and begin a life of success<br/> by applying online today.

          </div>
          <div class="tp-caption fade bg-buttons"
               data-x="570"
               data-y="360" 					 data-speed="300"
               data-start="1700"
               data-easing="easeOutExpo"  ><a href='#apply' class='button'>Apply in 1 min</a></div>
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
                        <h4 class="first-title"><span>We take pride in who we hire because</span></h4>
                        <span>Our Team is Our Greatest Asset</span> </div>
                </div>
                <p>If your the type who loves to work as a team towards common goals then your the perfect fit<br/>
                    for TM Marketing. We set out to add to our team inspiring individuals who love to help people<br/>
                    and better themselves. <span class="highlighted">We want you on our team</span>  - so take a moment and <a href="#apply">apply today!</a>
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
                    <h2 class="textuppercase">Why should you join our team?</h2>
                    <div class="hr border-tiny double-border"></div>
                    <p>
                        Here at TM Marketing we have spent years developing relationships with the leaders in the industry -
                        so you don’t have to. Our current programs have some of the highest pay outs and extend countless more
                        opportunities than other programs. If you are a team leader looking to increase your potential and paycheck,
                        we may have the answer.
                    </p>
                    <p>
                        We have a commitment to our teams to provide them with the support they need to tackle all the
                        obstacles they face. Whether you are an established company needing little to no assistance, or a new upcoming
                        team leader needing a little help to get started,  we can find a campaign to fit you.
                    </p>
                    <p>
                        Helping people is what we do - and we wouldn’t have it any other way. We never attempt to run
                        unscrupulous programs that do nothing to benefit the consumer. Every program we run is a win-win for
                        all parties involved.
                    </p>

                    <div class="gap large"></div>
                </div>
            </div>
            <div class="content-right span6">
                <div class="inner-content">
                    <div class="image"><img src="<?php echo $webPath; ?>images/welcome_to_the_team.png" alt="GEt hired at TM Marketing"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="apply"></a>
    <section class="section ">
        <div class="container">
            <div class="row-fluid">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="inner-content">
                            <div class="image"><img src="<?php echo $webPath; ?>images/apply_icon.png" alt="Connect with marketers"></div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="inner-content">
                            <h4 class="title style1 textuppercase" ><span>Your Future Starts Here - Apply Below </span></h4>
                            <div class="wpcf7" id="wpcf7-f2370-p20-o1">
                                Personal Information
                                <form action="<?php $webPath; ?>/employment_typ/" method="post" class="wpcf7-form" novalidate>
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
                                        <div class="wpcf7-form-control-wrap"> <span class="icon"><i class="icon-blandes-mail"></i></span>
                                            <input type="text" name="street"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Street Address" />
                                        </div>
                                    </div>

                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="wpcf7-form-control-wrap your-name"> <span class="icon"><i class="icon-blandes-location"></i></span>
                                                <input type="text" name="city"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="City" />
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="wpcf7-form-control-wrap your-last-name"> <span class="icon"><i class="icon-blandes-location"></i></span>
                                                <input type="text" name="state"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="State" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="wpcf7-form-control-wrap your-name"> <span class="icon"><i class="icon-blandes-location"></i></span>
                                                <input type="text" name="zip"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Zip" />
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="wpcf7-form-control-wrap your-last-name"> <span class="icon"><i class="icon-blandes-phone"></i></span>
                                                <input type="text" name="phone"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Phone" />
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="wpcf7-form-control-wrap your-email"> <span class="icon"><i class="icon-blandes-mail"></i></span>
                                            <input type="text" name="email"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" value="Email" />
                                        </div>
                                    </div>
                                    Employment History (Most recent first)

                                    <div>
                                        <div class="wpcf7-form-control-wrap"> <span class="icon"><i class="icon-blandes-shop"></i></span>
                                            <input type="text" name="company1"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Company Name" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="wpcf7-form-control-wrap"> <span class="icon"><i class="icon-blandes-tag"></i></span>
                                            <input type="text" name="position1"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Position Held" />
                                        </div>
                                    </div>

                                    <div class="wpcf7-form-control-wrap your-message">
                                        <textarea name="response1" rows="8" cols="5"  class="wpcf7-form-control wpcf7-textarea">Describe Your responsibilities for this position...</textarea>
                                        </span> </div>
                                    <div>

                                    More Employment -

                                    <div>
                                        <div class="wpcf7-form-control-wrap"> <span class="icon"><i class="icon-blandes-shop"></i></span>
                                            <input type="text" name="company2"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Company Name" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="wpcf7-form-control-wrap"> <span class="icon"><i class="icon-blandes-tag"></i></span>
                                            <input type="text" name="position2"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Position Held" />
                                        </div>
                                    </div>

                                    <div class="wpcf7-form-control-wrap your-message">
                                        <textarea name="response2" rows="8" cols="5"  class="wpcf7-form-control wpcf7-textarea">Describe Your responsibilities for this position...</textarea>
                                        </span> </div>
                                    <div>

                                        <input type="submit" value="Join the Team" class="wpcf7-form-control wpcf7-submit" />
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