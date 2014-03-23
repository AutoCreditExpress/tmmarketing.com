<?php
include('inc/config.php');
$pageTitle = 'TM Marketing | Door to Door Sales & Direct Marketing Company Focused on Energy Deregulation';
$pageDescription = 'TM Marketing is a direct marketing company specializes in the deregulation of natural gas and energy and can establish scalable teams all across the nation.';
$pageKeywords = 'door to door, marketing, direct marketing, energy, deregulation, gas, electricity';

include($docPath.'inc/template/header.php');
?>

<!-- rev  slider -->

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" >
    <ul>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="300" > <img src="images/slide-bg1.jpg"  alt="slide-bg1"  data-fullwidthcentering="on">
          <div class="tp-caption fade"
               data-x="50"
               data-y="0" 					 data-speed="500"
               data-start="500"
               data-easing="easeOutExpo"  ><img src="images/man1.png" alt="Image 2"> </div>
          <div class="tp-caption bg-title sfb"
               data-x="570"
               data-y="150" 					 data-speed="400"
               data-start="800"
               data-easing="easeOutExpo"  >Residential Marketers</div>
          <div class="tp-caption bg-title sfb"
               data-x="570"
               data-y="198" 					 data-speed="400"
               data-start="1100"
               data-easing="easeOutExpo"  > <span>Electricity &amp Natural Gas</span> </div>
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
               data-easing="easeOutExpo"  ><a href='<?php echo $webPath;?>contact_us/' class='button'>Connect With Us</a><a href='#learn' class='readmore'>Learn More<i class="icon-arrow-right6"></i></a> </div>
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
						videoJsPath:"revslider/videojs/",
						fullScreenOffsetContainer: ""	
					});
					
					revapi3.revnext(function(){alert(0)});
				}
				});	//ready
				
				
			</script> 

<!-- END REVOLUTION SLIDER --> 



<section class="section full-width section-padding-zero ">
  <div class="container">
    <div class="row-fluid">
      <div class="row-fluid teaser-boxes without-padding">
        <div class="span6"> <a class="teaser" href="<?php echo $webPath; ?>supplier/">
          <div class="image"> <img src="images/teaser_large.jpg" alt="Direct Marketing for Energy Suppliers">
            <div class="teaser-overlay"></div>
            <div class="info">
              <h3>Are You A Supplier?</h3>
              <p>We make reaching more customers easy! - Learn More </p>
            </div>
          </div>
          </a> </div>
        <div class="span6"> <a  href="<?php echo $webPath;?>marketing_companies/" class="teaser">
          <div class="image"> <img src="images/teaser_large2.jpg" alt="Door to door marketing companies">
            <div class="teaser-overlay"></div>
            <div class="info">
              <h3>Are You A Marketing Company?</h3>
              <p>We help achieve powerful results, every time! - See How</p>
            </div>
          </div>
          </a> </div>
       
      </div>
    </div>
  </div>
</section>
    <a name="learn"></a>
<section class="section  section-padding-large section-border-yes">
    <div class="container">
        <div class="row-fluid">
            <div class="stunning_text style2 clearfix">
                <div class="big-title">
                    <div>
                        <h4 class="first-title"><span>We Help Businesses Thrive With</span></h4>
                        <span>Unparalleled Door to Door marketing services </span> </div>
                </div>
                <p>TM Marketing has been driving success for <span class="highlighted">natual gas</span> and <span class="highlighted">electrical</span> companies who needed outstanding, professional <span class="highlighted">direct marketing for deregulation all across the nation</span>. <br />
                    Take a moment to <a href="<?php echo $webPath; ?>contact_us/">connect with us</a> to see how we can also help your business reach more customers.</p>
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
                    <h2 class="textuppercase">Why Work With Us?</h2>
                    <div class="hr border-tiny double-border"></div>
                    <p>When it comes to energy deregulation, <strong>we are the nations most superior door to door marketers</strong>. We understand what it takes to get our clients more customers and a greater ROI -
                        while staying true to their values and reinforcing their reputation. In addition we also provide:
                     </p>
                    <div class="row-fluid">
                        <div class="span6">
                            <ul class="styled-list">
                                <li><i class="icon-arrow-right8"></i>Highly trained representatives </li>
                                <li><i class="icon-arrow-right8"></i>Proven scripts and objections</li>
                                <li><i class="icon-arrow-right8"></i>No PUC or Utility complaints</li>
                                <li><i class="icon-arrow-right8"></i>Fully out of box solution</li>
                            </ul>
                        </div>
                        <div class="span6">
                            <ul class="styled-list">
                                <li><i class="icon-arrow-right8"></i>Quality customer acquisitions</li>
                                <li><i class="icon-arrow-right8"></i>Quick office launches nation wide</li>
                                <li><i class="icon-arrow-right8"></i>10+ years of major gas and electric experience</li>
                            </ul>
                        </div>
                    </div>
                    <div class="gap large"></div>
                </div>
            </div>
            <div class="content-right span6">
                <div class="inner-content">
                    <div class="image"><img src="images/portfolio-large.png" alt="More sales"></div>
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
      <div class="span6">
        <div class="inner-content">
            <h2 class="">Our Incredible <span style="color: dodgerblue;">Speed to Market</span> Will Have You <span style="color: dodgerblue;">Finishing First!</span></h2>
            <p>
                Every business is especially good at something - and we're no different. In addition to giving our clients quick increases in customer acquisitions, we
                have the nations quickest time-to-market in newly deregulated areas. Over the years we have mastered the process of getting the right resources and structure
                in place quickly; so our clients can be up and running before their competitors are.
            </p>
            <p>
                Our direct marketing experience has been specifically focused in deregulated energy from the start - giving us the unique ability to take a holistic approach when helping our clients.
                And because our sales forces understands what needs to be done on the ground to help our clients increase their customers acquisition, quality, and revenue, we can promise you that you will not
                regret it once you begin working with us. Connect with us today and start getting new customers tomorrow!
            </p>

        </div>
      </div>
      </div>
      <div class="gap large"></div>
</div></div></section>


<?php
include($docPath.'inc/template/footer.php');
?>