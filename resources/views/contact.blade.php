@extends('layout.master')
@section('content')
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5CQCS9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5CQCS9');
</script>
<!-- End Google Tag Manager -->
<div id="fixedbg"></div>
<div id="setbackfix" class="holder">
	

@include('sections.header')

<!--Authentication Modal -->
<div class="modal fade" id="auth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content authent">
        <div class="modal-body">
			<div class="hdr_tx">
				<div class="tab_hd">Authentication</div>
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw">
                For your own business interest we require you to confirm that you own this listing by entering the verification code.
                <form class="form-horizontal">
                    <div class="form-group">
                            <div class="input-group">
                            <div class="input-group-addon">+91</div>
                            <input type="text" class="form-control bdr_fst" id="exampleInputAmount" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" id="exampleInputEmail1" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Click to Get Verification Code</button>
                        </div>
                    </div>
                </form>
				<div class="info_tx">(The verification SMS/Email will be on the Mobile number or Email id registered with Justdial) If you are unable to generate verification code, Please submit your request <a href="#">Here.</a></div>
			</section>
        </div>
    </div>
  </div>
</div>
<!-- Authentication Modal -->

<div class="modal fade" id="submitModaljob" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
	        <div class="modal-body">
				<div class="hdr_tx">
					<a type="button" href="javascript:void(0);" onclick="closePopUp('submitModaljob')" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
				</div><!--end of hdr_tx-->
				<div class="clearfix"></div>
				<section class="tab_flw thks">
					<div class="textjobthnks"></div>
					<div class="ok_btn text-center"><button type="button" onclick="closePopUp('submitModaljob')" class="btn btn-primary">Ok</button></div>
				</section>
	        </div>
	    </div>
		<!-- Modal content-->
	</div>
</div>

<!-- Thanks for Visiting Modal -->

<div class="modal fade" id="thankverifyupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content th_wdt dtable">
            <div class="modal-body">
                <div class="hdr_tx">
                    <a type="button" href="javascript:void(0);" onclick="closePopUp('thankverifyupdate')" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
                </div><!--end of hdr_tx-->
                <div class="clearfix"></div>
                <section class="tab_flw thks">
                    <div class="bg_tx">Thank you for your inputs.</div>
                    <div class="reglr_tx">We shall verify and update the same.</div>
                    <div class="ok_btn text-center"><button type="button" onclick="closePopUp('thankverifyupdate')" class="btn btn-primary">Ok</button></div>
                </section>
            </div>
        </div>
    </div>
</div>

<!--Share via mail  model-->
<div class="modal fade bs-example-modal-lg" id="shareviaemailpopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content sharevm_model">
		<div class="modal-header"> 
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button> 
		</div>
		<p class="shvem">Share via Email</p>
		<span id="etr" class="err"></span>
		<div id="frmshare_el"  name="frmshare_el" class="form-horizontal " style="display: table; width: 100%;">
	    <!--<form id="frmshare_el" method="Post" name="frmshare_el" class="form-horizontal " style="display: table; width: 100%;">-->
			<div class="col-md-12">
				<div class="form-group">
					<label class="col-sm-2 control-label">Your Name :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name="yname" id="yname" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g Raj Desai','yname','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g Raj Desai','yname','onfocus')"  value="e.g Raj Desai" />
						<input type="hidden" name="sharehid" id="sharehid" value=""/>
						<input type="hidden" name="sharefurl" id="sharefurl" value=""/>
					</div>
					<label class="col-sm-2 control-label">Your Email ID :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name ="yemailid" id="yemailid" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g xyz@abc.com','yemailid','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g xyz@abc.com','yemailid','onfocus')"  value="e.g xyz@abc.com"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Friend's Name :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name="fname1" id="fname1" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g Ravi Verma','fname1','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g Ravi Verma','fname1','onfocus')"  value="e.g Ravi Verma" />
					</div>
					<label class="col-sm-2 control-label">Friend's Email ID :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name ="femailid1" id="femailid1" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g abc@xyz.com','femailid1','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g abc@xyz.com','femailid1','onfocus')"  value="e.g abc@xyz.com"  />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Friend's Name :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name="fname2" id="fname2" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g Ravi Verma','fname2','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g Ravi Verma','fname2','onfocus')"  value="e.g Ravi Verma" />
					</div>
					<label class="col-sm-2 control-label">Friend's Email ID :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name ="femailid2" id="femailid2" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g abc@xyz.com','femailid2','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g abc@xyz.com','femailid2','onfocus')"  value="e.g abc@xyz.com"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Friend's Name :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name="fname3" id="fname3" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g Ravi Verma','fname3','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g Ravi Verma','fname3','onfocus')"  value="e.g Ravi Verma"/>
					</div>
					<label class="col-sm-2 control-label">Friend's Email ID :</label>
					<div class="col-sm-4 pad0">
						<input type="text" name ="femailid3" id="femailid3" class="gray form-control" onblur="stat=true;clear_text_share_mail('e.g abc@xyz.com','femailid3','onblur')" onkeyup="stat=false" onfocus="clear_text_share_mail('e.g abc@xyz.com','femailid3','onfocus')"  value="e.g abc@xyz.com"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Subject :</label>
					<div class="col-sm-10 pad0"><input id="Esubject" class="sutx form-control" type="text" readonly="" value="" name="subject"></div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Message :</label>
					<div class="col-sm-10 pad0">
						<textarea id="fmsg" class="sutx form-control" name="fmsg"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-10 pad0">
						<button type="submit"  onclick="return validate_shareviaemailfrm();" class="btn btn-primary pull-right">Send Email</button>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div><!--End share via mail  model-->

<!-- Thanks for submitting Modal -->
<div class="modal fade" id="testauth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="hdr_tx">
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
                </div>
                <section class="tab_flw tnks_visit">
                    <div class="congrts_popup"><b>Thank you</b> for submitting your testimonial for Justdial. <br>Your comment will appear on our site post the moderation.</div>
                    <br>
                    <div class="text-center"> <button type="submit" class="btn btn-primary" data-dismiss="modal">OK</button> </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- End Thanks for submitting Modal -->

<!--Mobile Verication Modal -->
<div class="modal fade" id="mob_verify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
	    <div class="modal-content authent dtable">
            <div class="modal-body">
                <div class="hdr_tx">
                    <div class="tab_hd">Mobile Verification</div>
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
                </div><!--end of hdr_tx-->
                <section class="tab_flw">
                    <p>Enter the verification code that we have sent to you </p>
                    <p>In order to confirm you own this listing, we have sent a verification code on "" and . Please enter the verification code below and click "Verify"</p>
                    <p>	(In case "" are not your contact details. Call us on 88888-88888) </p>
                    <div id="errormsg" class="dn"><font color="red"><span class="line_three">The code you have entered is invalid. Please enter a valid code.</span></font><br/></div>
                    <input type="hidden" name="catiddet" value="" autocomplete=off>
                    
                    <form class="form-inline v_code" name="codeverifier" >
                        <div class="prnt_div">
                            <div class="form-group col-xs-6 col-sm-6">
                            <input type="number" maxlength="3" class="inptlft_s form-control inpt_wdt" id="vcodelft" name="vcodelft" onkeyup="shiftFocusToNextTextBox('vcodelft','vcodert');" onInput="checkLength(this.id);" autocomplete="off">
                            </div>
                            <span class="hyfn">-</span>
                            <div class="form-group col-xs-6 col-sm-6">
                            <input type="number" maxlength="3" class="form-control inpt_wdt" id="vcodert" name="vcodert" autocomplete="off" onInput="checkLength(this.id);">
                            </div>
                            <input type="hidden" name="catiddet" value="" autocomplete=off>
                        </div>
                        
                        
                        
                        <div class="info_tx_autnt">Note: Any modification/change without verification will go live</div>
                        <div class="form-group wrapper">
                            <div class="text-center">
                                <button class="btn btn-primary" id="testing" onclick="testing1('');" type="button">Verify</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Verication Modal -->

<!-- Message Extended Modal -->
<div class="modal fade" id="failed_attempt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content authent dtable">
            <div class="modal-body">
                <div class="hdr_tx">
                    <div class="tab_hd">Mobile Verification</div>
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
                </div><!--end of hdr_tx-->
                <section class="tab_flw">
                    <p>You have reached your maximum limit of attempts for the day.</p>
                    <div class="clearfix"></div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Message Extended Modal -->

<!-- Need any assistance? Modal -->
<div class=" modal fade" id="auth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content authent dtable">
        <div class="modal-body">
			<div class="hdr_tx">
				<div class="tab_hd">Need any assistance?</div>
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw">
                <form class="form-horizontal">
                    <div class="form-group">
                        <input type="email" placeholder="Name*" id="exampleInputEmail1" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Mobile Number*" id="exampleInputEmail1" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email*" id="exampleInputEmail1" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Company Name*" id="exampleInputEmail1" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Query*"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
			</section>
      </div>
      
    </div>
  </div>
</div>
<!-- Need any assistance? Modal -->

<!-- Main Business Category Details Modal -->
<div class="modal fade" id="mainBusiness_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content pakg_dtl dtable">
        <div class="modal-body">
			<div class="hdr_tx">
				<div class="tab_hd">Main Business Category Details</div>
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw">
				<div class="cate_ttl">Category Name</div>
				<div class="pack_list">
					<ul>
                    </ul>
				</div>
			</section>
        </div>
    </div>
  </div>
</div>
<!-- End Main Business Category Details Modal -->

<!-- Platinum Category List Modal -->
<div class="modal fade" id="view_plus_platinum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog marginClass" role="document">
    <div class="modal-content pakg_dtl dtable">
      <div class="modal-body">
			<div class="hdr_tx">
				<div class="tab_hd">Package / Platinum Category list</div>
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw">
									
						
                </section>
            </div>
        </div>
    </div>
</div>
<!-- End Platinum Category List Modal -->

<!-- Thanks for Visiting Modal -->
<div class="modal fade" id="auth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content dtable">
      
      <div class="modal-body">
			<div class="hdr_tx">
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw tnks_visit">
				<div class="hlgt_tx">Thanks for Visiting Justdial.com</div>
				<div class="regul_tx">'Our Concerned Department will Contact you Shortly'</div>
				<br>
				<div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
			</section>
      </div>
      
    </div>
  </div>
</div>
<!-- End Thanks for Visiting Modal -->


<!-- BLOCK Virtual Number Modal -->
<div class="modal fade" id="block_unblock_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
            </div><!--end of hdr_tx-->
            <section class="tab_flw tnks_visit">
                <div class="hlgt_tx2 ">Do you really want to BLOCK Virtual Number?</div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" onclick="block_unblock_vn('','','','')">Yes</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close">No</button>
                </div>
            </section>
      </div>
      
    </div>
  </div>
</div>
<!-- End BLOCK Virtual Number Modal -->


<!-- Thanks for Visiting Modal -->
<div class="modal fade" id="compliaint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content dtable">
      
      <div class="modal-body">
			<div class="hdr_tx">
				<a type="button" class="close1 clsbtn" onclick="closePopUp('compliaint')" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw tnks_visit">
		
		<div class="hlgt_tx">Thanks you for your inputs.</div>
				<div class="regul_tx2">Our team shall revert to you shortly</div>
				<br>
				<div class="text-center"> <button type="submit" onclick="closePopUp('compliaint')" class="btn btn-primary">OK</button> </div>
			</section>
      </div>
      
    </div>
  </div>
</div>
<!-- End Thanks for Visiting Modal -->

<!-- Thanks for Visiting Modal for service feedback -->
<div class="modal fade" id="serv_compliaint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content dtable">
      
      <div class="modal-body">
			<div class="hdr_tx">
				<a type="button" class="close1 clsbtn" onclick="closePopUp('serv_compliaint')" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw tnks_visit">
				<div class="hlgt_tx">Thank you for your feedback</div>
				<div class="regul_tx2">Our team shall revert to you shortly</div>
				<br>
				<div class="text-center"> <button type="submit" onclick="closePopUp('serv_compliaint')" class="btn btn-primary">OK</button> </div>
			</section>
      </div>
      
    </div>
  </div>
</div>
<!-- End Thanks for Visiting Modal -->


<!-- Advertiser/website user Modal Start -->
<div class="modal fade" id="advertiser_website_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog model-md" role="document">
    <div class="modal-content adv_web dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
            </div><!--end of hdr_tx-->
            <section class="tab_flw cms_tow_tab">

                <div class="tab_hd">Contact us as:</div>

                <a href="https://www.justdial.com/cms/customer-care?jdlite=0&source=0&version=&nh=&investor=0&historyBack=0"><div class="adv_tab">
                        <span><i class="cms_sprt2 usr_icon"></i></span> Advertiser
                </div></a>

                <a href="https://www.justdial.com/cms/feedback?jdlite=0&source=0&version=&nh=&investor=0&historyBack=0"><div class="adv_tab webusr">
                        <span><i class="cms_sprt2 usr_icon"></i></span> Website user
                </div></a>

            </section>
      </div>
      
    </div>
  </div>
</div>
<!-- End Advertiser/website user Modal End-->




<!--Media Contact Modal -->
<div class="modal fade" id="mediaContactPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content media_cnt dtable">
      
      <div class="modal-body">
			<div class="hdr_tx">
				<div class="tab_hd">Media Contact</div>
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw">
                <form class="form-horizontal">
                    <div class="form-group">
                        <input type="text" placeholder="Name*" id="medianameid" class="form-control" value="">
                        <span id="err_medianameid" class="jerr dn"></span>
                    </div>
                    <div class="form-group">
                        <input type="number" onkeypress="return isNumber(event,this.id)" placeholder="Mobile Number*" maxlength="10" id="mediamobileid" class="form-control" value="">
                        <span id="err_mediamobile" class="jerr dn"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" id="mediaemailid" class="form-control" value="">
                        <span id="err_mediaemail" class="jerr dn"></span>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="mediacommentid" rows="3" placeholder="Comments*"></textarea>
                        <span id="err_mediacomment" class="jerr dn"></span>
                        <span class="smltx">*marked fields mandatory</span>
                    </div>
                    <div class="form-group">
                        <div class="text-right text-left-xs">
                            <button class="btn btn-primary"  onclick="mediacontactus();" type="button">Submit</button>
                        </div>
                    </div>
                </form>
				
			</section>
      </div>
      
    </div>
  </div>
</div>
<!-- Media Contact Modal -->


<!-- Thanks for Visiting Modal -->
<div class="modal fade" id="writeReviewForAll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content th_wdt dtable">
      <div class="modal-body">
            <div class="hdr_tx">
                <button type="button" class="close cls_tnks" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div><!--end of hdr_tx-->
            <section class="tab_flw thks">
                <div class="bg_tx text-center">Your Review Submitted successfully.</div>
                <div class="ok_btn text-center"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div>
            </section>
      </div>
    </div>
  </div>
</div>
<!-- End Thanks for Visiting Modal -->

<div class="modal fade" id="shareviaemailsuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content th_wdt dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                <button type="button" class="close cls_tnks" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div><!--end of hdr_tx-->
            <section class="tab_flw thks">
                <div class="bg_tx text-center">Email sent successfully.</div>
                <div class="ok_btn text-center"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div>
            </section>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="invalidCaptcha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content th_wdt dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                <button type="button" class="close cls_tnks" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div><!--end of hdr_tx-->
            <section class="tab_flw thks">
                <div class="bg_tx">The Captcha code was not entered correctly!</div>
                <div class="ok_btn text-center"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div>
            </section>
      </div>
      
    </div>
  </div>
</div>

<!-- Close non-paid business Modal -->
<div class="modal fade" id="close_business_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
            </div><!--end of hdr_tx-->
            <section class="tab_flw tnks_visit">
                <div class="hlgt_tx2 ">Do you really want to close your business?</div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" onclick="close_remove_business('','','closedown','')">Yes</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close">No</button>
                </div>
            </section>
      </div>
      
    </div>
  </div>
</div>
<!-- End Close non-paid business Modal -->

<!-- Remove non-paid business Modal -->
<div class="modal fade" id="remove_business_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
            </div><!--end of hdr_tx-->
            <section class="tab_flw tnks_visit">
                <div class="hlgt_tx2 ">Do you really want to remove your business listing ?</div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" onclick="close_remove_business('','','freeze','')">Yes</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close">No</button>
                </div>
            </section>
      </div>
      
    </div>
  </div>
</div>
<!-- End Remove non-paid business Modal -->

<!-- Thanks for Visiting Modal -->
<div class="modal fade" id="buss_close_remove_succ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content th_wdt dtable">
      <div class="modal-body">
            <div class="hdr_tx">
                <button type="button" class="close cls_tnks" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div><!--end of hdr_tx-->
            <section class="tab_flw thks">
                <div class="bg_tx text-center">Your Request Submitted successfully.</div>
                <div class="ok_btn text-center"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div>
            </section>
      </div>
    </div>
  </div>
</div>
<!-- End Thanks for Visiting Modal -->

<!-- Thanks for Visiting Modal -->
<div class="modal fade"  id="buss_close_remove_failure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content th_wdt dtable">
      <div class="modal-body">
            <div class="hdr_tx">
                <button type="button" class="close cls_tnks" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div><!--end of hdr_tx-->
            <section class="tab_flw thks">
                <div class="bg_tx text-center" id="bsn_process"></div>
                <div class="ok_btn text-center"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div>
            </section>
      </div>
    </div>
  </div>
</div>
<!-- End Thanks for Visiting Modal -->


<!-- Contactus Popup Modal Start -->
<div class="modal fade" id="cms_contactus_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog model-md" role="document">
    <div class="modal-content adv_web dtable">
      
      <div class="modal-body">
            <div class="hdr_tx">
                    <a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
            </div><!--end of hdr_tx-->
            <section class="tab_flw cms_tow_tab">
               <div class="tab_hd title1"> Please Click on the appropriate link to provide feedback: </div>
               <div class="tbsbx1">  <a onclick="_ct('rgcs', 'fdbck');" href="">    I am a Registered customer of Justdial. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('bsnlcs', 'fdbck');" href="">    I am not a customer but my business is listed on Justdial. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('fdjd', 'fdbck');" href="">    Feedback on information provided by Justdial. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('fdjdstf', 'fdbck');" href="">    Feedback on Justdial staff. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('onord', 'fdbck');" href="">    Issues with Online orders. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('newlst', 'fdbck');" href="">    New Listing with Justdial. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('suggn', 'fdbck');" href="">    Suggestions with User Interface. </a> </div>
               <div class="tbsbx1">  <a onclick="_ct('oissue', 'fdbck');" href="">    Any other issue. </a> </div>
            </section>
      </div>
      
    </div>
  </div>
</div>
<!-- Contactus Popup Modal End-->

<!-- No Mobile Modal Start -->
<div class="modal fade" id="nomobile_cms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content authent dtable">
      
      <div class="modal-body">
			<div class="hdr_tx">
				<div class="tab_hd">Mobile Verification</div>
				<a type="button" class="close1 clsbtn" data-dismiss="modal" aria-label="Close"></a>
			</div><!--end of hdr_tx-->
			<section class="tab_flw">
				<span class="line_three">As your Mobile number is not registered with us, we request you to call our representative on 
                	<a href="tel:+91-8888888888" style="color:#1274c0;">8888888888.</a>
           		</span>
				<div class="clearfix"></div>
			</section>
      </div>
      
    </div>
  </div>
</div>
<!-- No Mobile Modal End -->

<div id="main-wrapper">
   <div class="go-top sprit" style="display:none"></div>
   <section class="cont_us">
      <div class="col-sm-12">
         <div class="hotkey-img cms_bnr">
            <img class="img-responsive full-width hidden-xs" src="https://akam.cdn.jdmagicbox.com/images/icontent/jdrwd/cms/contact-us.jpg">
            <img class="img-responsive full-width visible-xs-block" src="https://akam.cdn.jdmagicbox.com/images/icontent/jdrwd/cms/contact-us_mob.jpg">
            <span class="tx trhead">Contact Us</span>
         </div>
      </div>
      <div class="row m_content dt">
         <div class="col-sm-3 hidden-xs">
            <div class="cms_nav" id="menu">
               <ul>
                  <li id="abtli" >
                     <a  class="" href="" title="About-Us" ><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftabs">About Us </span></a>
                     <ul id="abs"class="sub_nav" style= "display:none;">
                        <li><a  href="" title="Company-Overview" class="tlftco">Company Overview </a></li>
                        <li><a  href="" title="Board of Directors" class="tlftbd">Board of Directors </a></li>
                        <!--<li class="slcted"><a  href="javascript:void(0);" title="Leadership Team" class="tlftleadshp">Leadership Team</a></li>-->
                        <!--<li><a  href="https://www.justdial.com/cms/management-team?jdlite=0&source=0&version=&nh=&investor=0&historyBack=0" title="Leadership" class="tlftleadshp">Leadership Team</a></li> -->
                        <li><a  href="javascript:void(0);" onclick="getTestimonials();" title="Testimonials" class="tlfttmnls">Testimonials </a></li>
                        <li><a  href="" title="Share-Your-Views" class="tlftshyvs">Share Your Views </a></li>
                        <li class="last"><a  href="" title="Success-Stories" class="tlftscs">Success Stories</a></li>
                     </ul>
                  </li>
                  <li id="media_li">
                     <a  class="" href="" title="Media-Speaks"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftmda">Media</span></a>
                     <ul class="sub_nav " id="media" style= "display:none;">
                        <li class="slcted"><a class="tlftprs" href="" title="Press" >Press </a>   
                        </li>
                        <li class="last"><a  href="" title="Videos" class="tlftvds">Videos </a>
                        </li>
                     </ul>
                  </li>
                  <li id="media_li">
                     <a  class="" href=""><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftmdnws">Market News</span></a>
                     <ul class="sub_nav " id="media" style= "display:none;">
                        <li><a class="tlftprs" href="" title="Press">Press</a> 
                        </li>
                        <li class="last"><a  href="" title="Videos" class="tlftvds">Videos </a>
                        </li>
                     </ul>
                  </li>
                  <li id="inv_li" >
                     <a  class="" href="" title="Investor Relations"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftinvrln">Investor Relations</span></a>
                     <ul class="sub_nav" id="investors" style= "display:none;">
                        <li ><a class="" href="" title="Whats-New"><span class='tlftcsbr'>What's New </span></a>                      
                        </li>
                        <li >
                           <a class="" href="" title="Financials"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftFinancials">Financials</span></a>                                                
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="Financial-Results"><span class="tlftFinancial-Results">Financial Results</span></a>
                              </li>
                              <li ><a class="" href="" title="Annual-Report"><span class="tlftAnnual-Report">Annual Report</span></a>
                              </li>
                              <li ><a class="" href="" title="Earnings-Call-Details"><span class="tlftEarnings-Call-Details">Earnings Call Details</span></a>                                                                    
                              </li>
                              <li class="last" ><a class="" href="" title="Earnings-Call-Transcripts-"><span class="tlftEarnings-Call-Transcripts-">Earnings Call Transcripts </span></a>
                              </li>
                           </ul>
                        </li>
                        <li ><a class="" href="" title="Press-Releases"><span class="tlftPress-Releases">Press Releases</span></a>
                        </li>
                        <li ><a class="" href="" title="Company-Presentation"><span class="tlftCompany-Presentation">Company Presentation</span></a>                                             
                        </li>
                        <li >
                           <a class="" href="" title="Reports-&-Filings"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftReports--Filings">Reports & Filings</span></a>                                                                                
                           <ul class="tc" id="ads" style= "display:none; ">
                              <li ><a class="" href="" title="Quarterly-Reports"><span class="tlftQuarterly-Reports">Quarterly Reports</span></a>
                              </li>
                              <li ><a class="" href="" title="EGM-AGM-Notice"><span class="tlftEGM-AGM-Notice">EGM AGM Notice</span></a>
                              </li>
                              <li ><a class="" href="" title="MOA-&-AOA"><span class="tlftMOA--AOA">MOA & AOA</span></a>
                              </li>
                              <li class="last" ><a class="" href="" title="Filings"><span class="tlftFilings">Filings</span></a>
                              </li>
                           </ul>
                        </li>
                        <li >
                           <a class="" href="" title="News-&-Events"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftNews--Events">News & Events</span></a>
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="Announcements"><span class="tlftAnnouncements">Announcements</span></a>
                              </li>
                              <li class="last" ><a class="" href="" title="Statutory-Ads"><span class="tlftStatutory-Ads">Statutory Ads</span></a>
                              </li>
                           </ul>
                        </li>
                        <li >
                           <a class="" href="" title="Corporate-Governance"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftCorporate-Governance">Corporate Governance</span></a>
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="Board-of-Directors"><span class="tlftBoard-of-Directors">Board of Directors</span></a>
                              </li>
                              <li ><a class="" href="" title="Committees"><span class="tlftCommittees">Committees</span></a>
                              </li>
                              <li ><a class="" href="" title="Code-of-Conduct"><span class="tlftCode-of-Conduct">Code of Conduct</span></a>
                              </li>
                              <li class="last" ><a class="" href="" title="Policies"><span class="tlftPolicies">Policies</span></a>
                              </li>
                           </ul>
                        </li>
                        <li >
                           <a class="" href="" title="Investor-Services"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftInvestor-Services">Investor Services</span></a>
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="Contact-Us"><span class="tlftContact-Us">Contact Us</span></a>
                              </li>
                              <li ><a class="" href="" title="About-Us"><span class="tlftAbout-Us">About Us</span></a>
                              </li>
                              <li ><a class="" href="" title="Unpaid-&-Unclaimed-Dividends"><span class="tlftUnpaid--Unclaimed-Dividends">Unpaid & Unclaimed Dividends</span></a>
                              </li>
                              <li ><a class="" href="" title="General-Meetings-&-Voting-Results"><span class="tlftGeneral-Meetings--Voting-Results">General Meetings & Voting Results</span></a>
                              </li>
                              <li ><a class="" href="" title="Downloads"><span class="tlftDownloads">Downloads</span></a>
                              </li>
                              <li class="last" ><a class="" href="" title="Dematerialization-of-Shares"><span class="tlftDematerialization-of-Shares">Dematerialization of Shares</span></a>
                              </li>
                           </ul>
                        </li>
                        <li ><a class="" href="" title="Share-Buyback"><span class="tlftShare-Buyback">Share Buyback</span></a>
                        </li>
                        <li  class="last" >
                           <a class="" href="" title="Corporate-Social-Responsibility"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftcsbr">Corporate Social<br> Responsibility</span></a>
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="Education"><span class="tlftEducation">Education</span></a>
                              </li>
                              <li ><a class="" href="" title="Tree-Plantation"><span class="tlftTree-Plantation">Tree Plantation</span></a>
                              </li>
                              <li class="last" ><a class="" href="" title="Share-With-Nepal"><span class="tlftShare-With-Nepal">Share With Nepal</span></a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li id="ads_li" >
                     <a  class="" href="" title="Ads"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftads">Ads</span></a>
                     <ul class="sc" id="ads" style= "display:none;">
                        <li >
                           <a class="" href="" title="Behind-The-Scenes"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftBehind-The-Scenes">Behind The Scenes</span></a>
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="Making-of-Justdial-Ads-2016"><span class="tlftMaking-of-Justdial-Ads-2016">Making of Justdial Ads-2016</span></a></li>
                              <li ><a class="" href="" title="The-Making-Day-2"><span class="tlftThe-Making-Day-2">The Making Day-2</span></a></li>
                              <li class="last" ><a class="" href="" title="The-Making-Day-1"><span class="tlftThe-Making-Day-1">The Making Day-1</span></a></li>
                           </ul>
                        </li>
                        <li >
                           <a class="" href="" title="TV-Ads"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftTV-Ads">TV Ads</span></a>
                           <ul class="tc" id="ads" style= "display:none;">
                              <li ><a class="" href="" title="AB-Ads-Films-New"><span class="tlftAB-Ads-Films-New">AB Ads Films New</span></a></li>
                              <li ><a class="" href="" title="IPL-Ad-Films"><span class="tlftIPL-Ad-Films">IPL Ad Films</span></a></li>
                              <li class="last" ><a class="" href="" title="Others"><span class="tlftOthers">Others</span></a></li>
                           </ul>
                        </li>
                        <li ><a class="" href="" title="Radio-Ads"><span class="tlftRadio-Ads">Radio Ads</span></a>
                        </li>
                        <li ><a class="" href="" title="Print-Ads"><span class="tlftPrint-Ads">Print Ads</span></a>
                        </li>
                     </ul>
                  </li>
                  <li id="liprodserv" class="">
                     <a  id="aprodserv" class=""  href="javascript:void(0);" onclick="show_div('prodserv')" title= "Product Services"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftprodsev">Product &amp; Services</span><span class="newln">New</span></a>
                     <a id="hideaprodserv" class="" href="javascript:void(0);" style="display:none" title= "Product Services" onclick="show_div('prodserv');"><span  id="selprodserv" class="tlftprodsev">Product &amp; Services</span></a>
                     <ul class="sub_nav" id="prodserv" style= "display:none">
                        <li class =""><a href="" title ="Jd Mart" class="tlftjdpy">Jd Mart  <span class="newribon"></span></a></li>
                        <li class =""><a href="" title ="Jd Xperts" class="tlftjdpy">Jd Xperts <span class="newribon"></span></a></li>
                        <li class =""><a href="" title ="Jd Omni" class="tlftjdpy">Jd Omni <span class="newribon"></span></a></li>
                        <li><a href="" title= "8888888888" class="tlft88">8888888888</a></li>
                        <li><a href="" title= "Free-Listing" class="tlftfrlst">Free Listing</a></li>
                        <li><a href="" title= "Advertise" class="tlftadvt">Advertise</a></li>
                        <li><a href="" title= "JD-Mobile" class="tlftjdmob">JD Mobile </a></li>
                        <li><a href="" title ="Events" class="tlftevnts">Events</a></li>
                        <li class =""><a href="" title ="JdPay" class="tlftjdpy">JdPay</a></li>
                     </ul>
                  </li>
                  <li><a href="" title ="Customer-Care"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftcustc">Customer Care</span></a></li>
                  <li id="careers_li" >
                     <a  class="" href="" title ="Careers"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftcrs">Careers</span></a>
                     <ul class="sc" id="jdca" style= "display:none;">
                        <li><a class="tlftfnwrks" href="" title ="Fun At Work">Fun At Work</a>
                        </li>
                        <li><a href="" title ="Corporate Social Responsibility"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftcsr">Corporate Social<br/>Responsibility</span></a></li>
                        <li><a class="tlftchr" href="" title ="Contact HR">Contact HR</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sm"><a class="slcted" href="" title ="Contact-Us"><span class="sel tlftconus">Contact Us</span></a></li>
                  <li id="limore" class="">
                     <a id="amore" class="" href="javascript:void(0);" onclick="show_div('more');" title ="More"><i class="cms_sprt2 menuarrow_rgt"></i><span class="tlftmor">More</span> </a>
                     <a id="hideamore" class="" href="javascript:void(0);" style="display:none;" href="javascript:void(0);" onclick="show_div('more');" title ="More"><span  id="selmore" class="tlftmor">More</span></a>
                     <ul class="sub_nav" id="more" style= "display:none;">
                        <li><a href="" title ="City-Trends" class="lftcttrnds">City Trends </a></li>
                        <li><a href="" title ="White-Pages" class="tlftwp">White Pages </a></li>
                        <li><a href="" title ="Latest Movie Reviews" class="tlftmvrws">Latest Movie Reviews </a></li>
                        <li><a href="" title ="Online-Food-Ordering-Service" class="tlftofos">Online Food Ordering Service </a></li>
                        <li><a href="" title ="Courier-Pickup-Service" class="tlftcps">Courier Pickup Service</a></li>
                        <li ><a href="" title ="Search-Tips" class="tlftstps">Search Tips </a></li>
                        <li ><a href="" title ="JustDial Android Application" class="tlftjdandapp">JustDial Android Application </a></li>
                        <li ><a href="" title ="JustDial iPhone Application" class="tlftjdiphnapp">JustDial iPhone Application </a></li>
                        <li class="last"><a href="" title ="JustDial Windows Application" class="tlftjdwapp">JustDial Windows Application</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-sm-9 pdng0-xs">
            <div class="rgt_cont_addrs">
               <aside class="addrs_tab addrs_tab_reset toppd" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">REGISTERED &amp; CORPORATE OFFICE</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>Palm Court Bldg M, 501/B, 5th Floor, New Link Road, Beside Goregaon Sports Complex, Malad (W), Mumbai - 400064.</p>
                  </span>
                  <span class="ablt_pstn tcon">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">AHMEDABAD</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>Just Dial Tower Shaiv Complex 19 Inquilab Society, Ambawadi, Opposite Sears Tower Gulbai Tekra, Ahmedabad – 380006.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">BANGALORE (Cunningham Road)</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>#29, SRT Street, Cunningham Road, Bangalore - 560052. </p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">BANGALORE (Manyata Tech Park)</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>4th Floor, Magnolia Building, Manyata Embassy Business Park, Outer Ring Road, Nagawara, Near JAI Hanuman Petrol Bunk, Opposite To B.E.L Corporate Office,  Bangalore - 560045. </p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">CHANDIGARH</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>Plot No. 66, 2nd floor, Near Honda Harmony Showroom, Industrial Area, Phase 2, Chandigarh - 160002. </p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">CHENNAI</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>B Wing, 3rd Floor, Temple Steps, 184-187 Anna Salai, Little Mount, Saidapet, Chennai - 600015. </p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">COIMBATORE</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p># 25, AGT Business Park, 3rd Floor, Avinashi Road, Coimbatore - 641014.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">DELHI</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>A, 39/40, Sector 16, Behind McDonalds, Noida - 201301. </p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">HYDERABAD</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>No: 7-1-23 First Floor, Roxana Building (Above Meena Bazar), Greenlands, Begumpet, Hyderabad - 500016.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">JAIPUR</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>4th Floor, SB 57, Ridhi Tower, Tonk Road,Opp SMS Stadium, Jaipur-302017.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">KOLKATA</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>No: 703, Godrej Waterside Tower One Sector V , Salt Lake City, Kolkata - 700091.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" onclick="openFeedback('0')">
                  <span class="hd_nm tcon">PUNE</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>S.No.67/1, 67/2A, 66A/1A & 66A/1B, Clover Lingfield Plaza, 1st Floor Above Reliance Fresh, Off Wanawarie Salunke Vihar Road, Pune-411040.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
               <aside class="addrs_tab addrs_tab_reset" data-toggle="modal" data-target="#mediaContactPopup">
                  <span class="hd_nm tcon">MEDIA CONTACT</span>
                  <span class="m_addrs tcon">
                     <p>Just Dial Limited</p>
                     <p>Palm Court Bldg M, 501/B, 5th Floor, New Link Road, Beside Goregaon Sports Complex, Malad (W), Mumbai - 400064.</p>
                  </span>
                  <span class="ablt_pstn">
                  <span class="cms_sprt2 rgt_arrw" ></span>
                  <a href="#" class="tcon">Contact Us</a>
                  </span>
               </aside>
            </div>
            <!--end of rgt_cont_addrs-->
         </div>
      </div>
      <!--end of office address-->
      <div class="clearfix"></div>
      <hr class="dn">
   </section>
   <!--end of contact_us-->
</div>
<script type="text/javascript">
    var curPageName = "Contact Us";
    var PROTOCOL = "https://";
    var showMobileMenu = "";
    var CAPTCHA_ROOT = "";
    var ETRBO = "0";
    var CMSSOURCE = "0"
</script>
<script type="text/javascript">
	
	var cmslanguage = {
		getCmsDdata : function(){
			var getCmsDdataScop = this;
			if(curPageName == 'Board of Directors'){
				return getCmsDdataScop.getBODDetails();
			}
			if(pageName == 'Newcms' || pageName == "customercare"){
				return getCmsDdataScop.getTestDetails();
			}
		},

		getCmsDataIndex : function(){ // featching data for translate
			var arr ={};
			return arr;
		},
		getBODDetails : function(){
			var arr = {
				"trhead"   :[],
				"tcon"    : [],
				"namedta" : [],
				"desgdta" : [],
				"corpgov_story" : []
			};
			$('.trhead').each(function() {
				arr.trhead.push(this.innerHTML);
			});
			$('.tcon').each(function() {
				arr.tcon.push(this.innerHTML);
			});
			$('.tbodnmdg .fr').each(function() {
				arr.namedta.push(this.innerHTML);
			});
			$('.tbodnmdg .sec').each(function() {
				arr.desgdta.push(this.innerHTML);
			});
			$('.tcorpgov').each(function() {
				arr.corpgov_story.push(this.innerHTML);
			});
			return arr;
		},
		getTestDetails : function(){
			var arr = {
				"trhead"   :[],
				"tcon"    : [],
				"trat" : []
			};
			$('.trhead').each(function() {
				arr.trhead.push(this.innerHTML);
			});
			$('.tcon').each(function() {
				arr.tcon.push(this.innerHTML);
			});
			$('.trat').each(function() {
				arr.trat.push(this.innerHTML);
			});
			return arr;
		},
		changeCmsDataIndex : function(data){ // changing translated data on DOM for Static Page
			if(Object.keys(data.stat).length){	
				for(var key in data.stat){
					if (typeof(document.getElementsByClassName(key)) != 'undefined' && document.getElementsByClassName(key) != null)
					{
						$("."+key).text(data.stat[key]);
					}
				}
			}
			if(curPageName == 'Company Overview')
			{
				if(Object.keys(data.statcon).length){	
					for(var key in data.statcon){
						if (typeof(document.getElementsByClassName(key)) != 'undefined' && document.getElementsByClassName(key) != null)
						{
							if($("."+key) != 'undefined' && $("."+key) != null)
								$("."+key).text(data.statcon[key]);
						}
					}
				}
			}
			if(curPageName == 'Board of Directors')
			{
				if(Object.keys(data.trhead).length){	
					data.trhead.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".trhead")[index].innerHTML = currentValue;}
					})
				}
				if(Object.keys(data.tcon).length){	
					data.tcon.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".tcon")[index].innerHTML = currentValue;}
					})
				}
				if(Object.keys(data.namedta).length){	
					data.namedta.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".tbodnmdg .fr")[index].innerHTML = currentValue;}
					})
				}
				if(Object.keys(data.desgdta).length){	
					data.desgdta.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".tbodnmdg .sec")[index].innerHTML = currentValue;}
					})
				}
				if(Object.keys(data.corpgov_story).length){	
					data.corpgov_story.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".tcorpgov")[index].innerHTML = currentValue;}
					})
				}
			}
			if(pageName == 'Newcms' || pageName == 'customercare'){
				if(Object.keys(data.trhead).length){	
					data.trhead.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".trhead")[index].innerHTML = currentValue;}
					})
				}
				if(Object.keys(data.tcon).length){	
					data.tcon.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".tcon")[index].innerHTML = currentValue;}
					})
				}
				if(Object.keys(data.trat).length){	
					data.trat.map(function(currentValue , index , arr){
						if(currentValue!=''){$(".trat")[index].innerHTML = currentValue;}
					})
				}	
			}
			
					
		},
		
		init : function(lang){
		//if(lang!='eng'){
			var initCmsScop = this;
			var D_Cmsdata = initCmsScop.getCmsDdata();
			D_Cmsdata = JSON.stringify(D_Cmsdata);
			//console.log(D_Cmsdata);
			if(lang=='eng'){
				var date = new Date();
	            var minutes = 60;
	            date.setTime(date.getTime() + (minutes * 60 * 1000));
	            var expires = "; expires=" + date.toGMTString();
	            document.cookie = "web_lang=; expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;domain=" + cookieondomain;
	            location.reload();
        	}else{
				document.cookie = 'web_lang='+lang+';expires=0;path=/;domain='+cookieondomain;
			}
			
			$.ajax({
			  url: DOMAIN+'/languages/cmslanguage.php',
			  type : 'POST',
			  async: false,
			  data : { lan : lang , page : pageName , data : D_Cmsdata,curpage : curPageName },
			  dataType: 'json',
			  success: function (data) {			  	
			  		initCmsScop.changeCmsDataIndex(data);
			  	},
			  	error: function(e, ts, et){
			      //console.log("error msg",ts,e,et);//alert();
			   }
			  	
			});
		}
	}
</script>
<div class="fcon ">
    <div class="sec-1 col-sm-7 hidden-xs">
        <section class="brdot">
            <div class="left-sec-1">
                <section id="breadCrumb" class="jbrd breadCrumb">
                    <div  class="brdcms" style="overflow:hidden; position:relative;  width: 490px;">
                        <div>
                            <ul>
                                <li><a href="" title="Home" class="trhead">Home</a></li>
                                <li style="background:none;" class="trhead">Contact Us</li>
                                                                        </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <div class="sec-1 col-sm-5 hidden-xs">
        <section>
        </section>
    </div>
</div><!--End fcon-->

</div>

</div>
<div class="clearfix"></div>
<form action="" name="index_new" method="post">
	<input type="hidden" value="" name="search_id">
	<input type="hidden" value="" name="search_where">
</form>
@include('sections.footer')
</div>

<!--jdnew Wrapper closed-->
<!--Scripts -->

<script>
	var protocl = "https://";
	var HBWrapperAPI = '';
	var SID = '';
	var IMG_DOMAIN = '';
	var NSsearch = '';
	var JS_DOMAIN = "";
	var MINEXT = ".min";
	var IMGQLTY = "61";
	var VERSION = "49.65";
	var PAGE_NAME = "Newcms";
	var DOMAIN = "";
	var lnk_loc = "Newcms";
	var CMSDOMAIN = "";
	var JDDOMAIN = "";
	var WEBROOT = "";
	var getcity = "";
	var onloadFn = "Newcms";
	var pageName = "Newcms";
	var hiddencity = "Mumbai";
	var attn_user = "";
	var get_city = "Delhi";
	var vid = "";
	var AUTO_new = "Mumbai";
	var JDLITE = '0'
	var showMobileMenu = "";
	var source = '0';
	var historyBack = '0';
</script>

<form method="get" name="index" action="">
    <input type="hidden" name="city" id="city" value="Delhi" />
    <input type="hidden" name="insrch" id="insrch" value="" />
    <input type="hidden" name="what" id="what" value="" />
    <input type="hidden" name="where" id="where" value="" />
    <input type="hidden" name="catid" id="catid" value="" />
    <input type="hidden" name="type" id="type" value="2" />
    <input type="hidden" name="group" id="group" value="" />
    <input type="hidden" name="itab" id="itab" value="0" />
    <input type="hidden" name="classic" id="classic" value="" />
    <input type="hidden" name="asflg" id="asflg" value="1" />
    <input type="hidden" name="enflg" id="enflg" value="1" />
    <input type="hidden" name="prid" id="prid" value="" />
    <input type="hidden" name="ncatid1" id="ncatid1" value="" />
    <input type="hidden" name="psearch" id="psearch" value="" />
    <input type="hidden" name="sfsearch" id="sfsearch" value="" />
    <input type="hidden" name="reshref" id="reshref" value="" />
    <input type="hidden" name="jdg" id="jdg" value="" />
    <input type="hidden" name="token" id="token" value="" />
</form>

<script defer type="text/javascript" src="https://static.127777.com/mnbldr/?b=jd_rwd/public/minjs&g=cmnjs,cmscommon&ver_=49.65"></script>

<script>
	// WebFontConfig = {
	// 	custom: {
	// 		families: ['Roboto:400,300,700,500', 'Roboto+Slab:300,400,700'],
	// 		urls: ['https://static.127777.com/public/css/cfonts.css']
	// 	},
	// 	timeout: 10000,
    //                active: function() {
    //                   sessionStorage.fonts = true;
    //                 }
	// };


	// (function () {
	// 	var wf = document.createElement('script');
	// 	wf.src = 'https://static.127777.com/public/minjs/webfont.min.js?v=49.65';
	// 			wf.type = 'text/javascript';
	// 			wf.async = 'true';
	// 			var s = document.getElementsByTagName('script')[0];
	// 			s.parentNode.insertBefore(wf, s);
	// 		})();


</script>
<div class="phouter dn" id="phouter">
    <noscript>
        <style>
            .es-carousel ul{
                display:block;
            }
        </style>
    </noscript>
		
    <div class="phcontainer">
        <div class="ph_hdr">
            <h3 id="cn_name"></h3><span id="cn_add"></span>
            <a href="#" class="phcls" onclick="hideImageGall();return false;"></a>
        </div><!-- ph_hdr -->
        <span class="phloader" id="loader" ></span>
        <div id="gall_container" >
        
        </div><!--gall_container-->
    </div><!-- container -->
    <a class="jdlg" href="https://www.justdial.com/" title="Justdial - Local Search Engine"></a>
	<div id="addPhotoJs"></div>	
</div>

<a onclick="_ct('bflrhs', 'Newcms');" href="https://www.justdial.com/Free-Listing" class="frilst_rgt"></a> 	<script type="text/javascript" >var _cf = _cf || [];  _cf.push(['_setFsp', true]);  _cf.push(['_setBm', true]);  _cf.push(['_setAu', '/webcontent/92d8a6a4ui2400cbba221d26e3355d']); </script><script type="text/javascript"  src="/webcontent/92d8a6a4ui2400cbba221d26e3355d"></script>

@endsection