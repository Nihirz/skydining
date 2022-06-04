<html>
	<head>
		<?php include 'inc/all-links.php';?>
	</head>

	<body>
		<?php include 'inc/header.php';?>

		<div class="cms-pages">
			<div class="inner-banner">
				<img src="images/banner-2.jpg" alt="Booking">
				<div class="banner-text">
					<h1>Contact us</h1>
					<span>Got a question?</span>
				</div>
			</div>
			<div class="contact_content">
				<div class="container">
					<div class="row">
                        <div class="col-md-7 display_inline float_none vertical_middle margin_ri_4">
                            <div class="contact_pg_form">
                                <div class="incontformrow"><p class="smltextcont"></p></div>
                                <form class="incontform" method="post" onSubmit="return sendform();">
                                    <div class="row">
                                        <div class="col-xl-7 col-sm-6 col-xs-6 con_in_left">
                                            <div class="forms_field">
                                                <i class="fas fa-user-shield tx_color_white f_14 dark_blue_back text_center"></i>
                                                <input type="text" placeholder="Enter Your First Name*" name="sendername" id="sendername">
                                            </div>
                                            <div class="forms_field">
                                                <i class="fas fa-user-shield tx_color_white f_14 dark_blue_back text_center"></i>
                                                <input type="text" placeholder="Enter Your Last Name*" name="lastname" id="lastname">
                                            </div>
                                            <div class="forms_field">
                                                <i class="fas fa-envelope tx_color_white f_14 dark_blue_back text_center"></i>
                                                <input type="text" placeholder="Enter Your Email Address*" name="senderemail" id="senderemail">
                                            </div>
                                            <!-- <div class="forms_field">
                                                <i class="fas fa-key tx_color_white f_14 dark_blue_back text_center"></i>
                                                <input type="text" placeholder="Enter Your Password*">
                                            </div> -->
                                            <div class="forms_field">
                                                <i class="fas fa-comment tx_color_white f_14 text_center"></i>
                                                <textarea type="text" placeholder="Type Message here*" name="yourmessage" id="yourmessage"></textarea>
                                            </div>
                                                <div class="forms_field" style="padding-top:20px; clear:both;">
                                                <div class="cra_textbox" id="gggg">
                                                    <div class="g-recaptcha" data-sitekey="6Ld3DrgZAAAAAIny2h3qGbmVjgcqJK1vfvuLj80C"></div>
                                                </div>
                                            </div> 
                                            <button type="submit" class="f_14 txt_light tx_color_white blue_back contact_bn" name="btnsubmit" id="btnsubmit" >Submit</button>
                                        </div>
                                        <div class="col-xl-5 con_pg_right  col-sm-6 col-xs-6">
                                            <div class="con_details relative">
                                                <i class="fas fa-map-marker-alt f_14"></i>
                                                <div class="detials_contact f_14">
                                                    <p class="txt_semi_bold margin_zero line_height_22">Location</p>
                                                    <span><strong>OUT OF THE BOX</strong> <br> Nyari Dam 1 Road, <br> Kalawad Rd, <br> Rajkot, <br> Gujarat 360005</span>
                                                </div>
                                            </div>
                                            <div class="con_details relative">
                                                <i class="fas fa-phone-alt f_14"></i>
                                                <div class="detials_contact f_14">
                                                    <p class="txt_semi_bold margin_zero line_height_22">Contact</p>
                                                    <a class="tx_color_lightblack" href="tel:0435571873">0435 571 873</a>
                                                </div>
                                            </div>
                                            <div class="con_details relative">
                                                <i class="fas fa-envelope f_14"></i>
                                                <div class="detials_contact f_14">
                                                    <p class="txt_semi_bold margin_zero line_height_22">Email</p>
                                                    <a class="tx_color_lightblack" href="mailto:email@gmail.com">email@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="con_details relative">
                                                <a href="faq.php" class="f_14 txt_light tx_color_white blue_back contact_bn">Need Help ?</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 text_center display_inline float_none vertical_middle margin_ri_4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.6134559294!2d70.71847911442836!3d22.254740350172167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb4b66ee26cd%3A0xa34b15f9878a6bea!2sOUT%20OF%20THE%20BOX%20AMAZEMENT%20PARK%20(OTB)!5e0!3m2!1sen!2sin!4v1653674108248!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
			</div>
		</div>

		<!-- Footer -->
		<?php include 'inc/footer.php';?>
		<!-- End-Footer -->
	</body>
</html>