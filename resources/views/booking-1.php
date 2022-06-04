<html>
	<head>
		<?php include 'inc/all-links.php';?>
	</head>

	<body>
		<?php include 'inc/header.php';?>

		<div class="inner-banner">
			<img src="images/banner-2.jpg" alt="Booking">
			<div class="banner-text">
				<h1>Book Table</h1>
			</div>
		</div>

		<div class="cms-pages">
			<div class="book-table-page">
				<div class="send-money-tabs">
					<div class="container">
	                    <ul>
	                        <li class="active">
	                            <span class="tab-1"></span>
	                            <p>About</p>
	                        </li>
	                        <li class="active">
	                            <span class="tab-2"></span>
	                            <p>Booking</p>
	                        </li>
	                        <li>
	                            <span class="tab-3"></span>
	                            <p>Payment</p>
	                        </li>
	                    </ul>
	                </div>
                </div>

                <div class="book-box">
                	<div class="container">
	                	<div class="book-in-box">
	                		<h4>Select Date</h4>
	                		<div class="p-25">
		                		<div class="month-list">
		                			<span>May</span>
		                			<span>June</span>
		                			<span>July</span>
		                		</div>
		                		<div class="date-list">
		                			<span>01</span>
		                			<span>02</span>
		                			<span>03</span>
		                			<span>04</span>
		                			<span>05</span>
		                			<span>06</span>
		                			<span>07</span>
		                			<span>08</span>
		                			<span>09</span>
		                			<span>10</span>
		                			<span>11</span>
		                			<span>12</span>
		                			<span>13</span>
		                			<span>14</span>
		                			<span>15</span>
		                			<span>16</span>
		                			<span>17</span>
		                		</div>
		                	</div>
	                	</div>
	                	<div class="book-in-box">
	                		<h4>Choose Slot</h4>
	                		<div class="p-25">
	                			<div class="slot-timing">
	                				<span>Time</span>
	                				<span>Price</span>
	                			</div>
		                		<div class="slot-list">
		                			<div class="single-slot">
		                				<span>9:30 PM</span>
		                				<span>3,000</span>
		                			</div>
		                			<div class="single-slot">
		                				<span>9:30 PM</span>
		                				<span>3,000</span>
		                			</div>
		                			<div class="single-slot">
		                				<span>9:30 PM</span>
		                				<span>3,000</span>
		                			</div>
		                		</div>
		                	</div>
	                	</div>
	                	<div class="book-in-box">
	                		<h4>People</h4>
	                		<div class="p-25">
		                		<div class="date-list">
		                			<span>01</span>
		                			<span>02</span>
		                			<span>03</span>
		                			<span>04</span>
		                			<span>05</span>
		                			<span>06</span>
		                			<span>07</span>
		                			<span>08</span>
		                			<span>09</span>
		                			<span>10</span>
		                			<span>11</span>
		                			<span>12</span>
		                			<span>13</span>
		                			<span>14</span>
		                			<span>15</span>
		                			<span>16</span>
		                			<span>17</span>
		                			<span>18</span>
		                			<span>19</span>
		                			<span>20</span>
		                			<span>21</span>
		                			<span>22</span>
		                		</div>
		                	</div>
	                	</div>
	                	<div class="book-in-box">
	                		<h4>Addons (option)</h4>
	                		<div class="p-25">
		                		<div class="addon-list">
		                			<div class="single-addon">
		                				<img src="images/addon-1.png" alt="Addon">
		                				<input type="button" value="Add">
		                			</div>
		                			<div class="single-addon">
		                				<img src="images/addon-1.png" alt="Addon">
		                				<input type="button" value="Add">
		                			</div>
		                		</div>
		                		<div class="additional-sec">
		                			<label>Any special requests <small>(Optional)</small></label>
		                			<textarea name="special-requests" id="special-requests"></textarea>
		                		</div>


		                		<div class="gst-fields">
		                			<label onclick="gstDetailsFillToggle()">
		                				<input id="gstfill" onclick="gstDetailsFillToggle()" type="checkbox" name="gstfill" placeholder="gstfill" tabindex="1" value="" data-ph="gstfill" autocomplete="off" data-gtm-form-interact-field-id="3">  Fill GST Details
		                			</label>

		                			<div class="gst-details">
		                				<h5>GST Details</h5>

		                				<div class="single-field">
		                					<label for="gst-number">GST Number <span>(required)</span></label>
		                					<input type="text" id="gst-number" name="gst-number" placeholder="GST Number">
		                				</div>
		                				<div class="single-field">
		                					<label for="company-number">Company Name <span>(required)</span></label>
		                					<input type="text" id="company-number" name="company-number" placeholder="Company Name">
		                				</div>
		                				<div class="single-field">
		                					<label for="contact-number">Contact No <span>(required)</span></label>
		                					<input type="text" id="contact-number" name="contact-number" placeholder="Contact No">
		                				</div>
		                				<div class="single-field">
		                					<label for="state">State <span>(required)</span></label>
		                					<input type="text" id="state" name="state" placeholder="State">
		                				</div>
		                			</div>
		                		</div>
		                		<div class="single-field submit-button two-btn">
		                			<input type="button" value="Cancel" class="cancel-btn">
		                			<input type="button" value="Next" class="float-right">
		                		</div>
		                	</div>
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