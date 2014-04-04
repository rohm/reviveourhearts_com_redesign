<?php

$pageTitle = "Donate";
$bodyCss = "donate page page-simple";

?>
<?php include "_variables_forms.php" ?>
<?php include "_header.php"; ?>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active"><?php echo $pageTitle; ?></li>
	</ol>
	<article class="entry">
		<header class="entry-header" role="banner">

				<h1><?php echo $pageTitle; ?></h1>

		</header>


		<section class="main" role="main">

			<form role="form">
				<!-- Your Gift -->
				<div class="gift well">
          
					<div id="div_formtools_amount" class="form-group">

					<h2>Gift Amount</h2>

						<label for="formtools_amount_1">
						<input type="radio" id="formtools_amount_1" value="25" name="amount" required="" checked="">
							$25
						</label>
						<label for="formtools_amount_2">
						<input type="radio" id="formtools_amount_2" value="50" name="amount" required="">
							$50
						</label>
						<label for="formtools_amount_3">
						<input type="radio" id="formtools_amount_3" value="75" name="amount" required="">
							$75
						</label>
						<label for="formtools_amount_4">
						<input type="radio" id="formtools_amount_4" value="100" name="amount" required="">
							$100
						</label>
						<label for="formtools_amount_5"> Other:
							<input type="radio" id="formtools_amount_5" value="custom" name="amount" required="">
							<input type="text" class="form-control form-control-inline" name="amount_2" placeholder="$">
						</label>
					</div>

					<div id="div_formtools_recurrence" class="form-group  gift-frequency ">
						<label class="control-label">Frequency of your gift: </label>
						<label for="formtools_recurrence_1">
						<input type="radio" id="formtools_recurrence_1" value="Monthly" name="recurrence" required="">
							Monthly
						<a href="#" rel="popover" class="pop" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="&lt;p&gt;If you choose “Monthly”, this month’s gift will be charged &lt;strong&gt;today&lt;/strong&gt;. Beginning next month, all your monthly gifts will be charged on the &lt;strong&gt;20th.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;Note: A monthly gift of $30 or more will automatically enroll you in our &lt;a href='/test/donate/ministry-partner/'&gt;Ministry Partner Program&lt;/a&gt;.&lt;/em&gt;&lt;/p&gt;">
						<i class="fa fa-info-circle"></i>
						</a>
						</label>

						<label for="formtools_recurrence_2">
						<input type="radio" id="formtools_recurrence_2" value="One Time" name="recurrence" required="">
							One Time
						</label>
						<a href="/donate/ministry-partner/">Want to become a ministry partner?</a>
					</div>
				</div>
				<!-- Credit Card  -->
				<div id="billing">
          <h2>Billing Information</h2>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#cc_info" data-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
            <li><a href="#eft_info" data-toggle="tab"><i class="fa fa-long-arrow-down"></i> Electronic Funds Transfer</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="cc_info">
              <div class="form-group form-group-cc">
        
								<div id="div_formtools_credit_number" class="form-group  form-group-cc-1">


								  <label class="control-label full-width" for="formtools_credit_number">
								    Card Number:
								    <small class="cc-types-images"> We accept:
								      <img src="https://www.reviveourhearts.com/static/gui/icon-mastercard.png" alt="Mastercard">
								      <img src="https://www.reviveourhearts.com/static/gui/icon-visa.png" alt="Visa">
								      <img src="https://www.reviveourhearts.com/static/gui/icon-discover.png" alt="Discover Card">
								    </small>
								  </label>

								    <input class="form-control" type="text" name="credit_number" required="" pattern="[0-9]{13,16}" autocomplete="off" placeholder="XXXXXXXXXXXXXXX" id="formtools_credit_number">

								</div>
        				<div class="form-group-row">
									<div id="div_formtools_ccv_number" class="form-group form-group-cvv">

									  <label class="control-label" for="formtools_ccv_number">
									    CVV:<a href="#" rel="popover" class="pop" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content="The CVV is the three-digit “Card Verification Value” code on the back of your credit card. It's usually just to the right of the signature box. &lt;a href='http://en.wikipedia.org/wiki/Card_security_code' target='_blank'&gt;Read more . . .&lt;/a&gt;">
																	<i class="fa fa-info-circle"></i>
									  </a></label>

									    <input class="form-control" type="text" name="ccv_number" required="" autocomplete="off" placeholder="XXX" id="formtools_ccv_number">

									</div>
									<div class="form-group form-group-cc-expire">
										<label class="control-label">Expires</label>
										<select class="form-control" name="expiration_month" required="" id="formtools_expiration_month">
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>

										<select class="form-control" name="expiration_year" required="" id="formtools_expiration_year">
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
											<option value="2028">2028</option>
											<option value="2029">2029</option>
											<option value="2030">2030</option>
											<option value="2031">2031</option>
											<option value="2032">2032</option>
											<option value="2033">2033</option>
										</select>

	                </div>
								</div>
              </div>
            </div>
            <div class="tab-pane" id="eft_info">
              <p>Electronic Funds Transfer is only available to our <a href="/test/donate/ministry-partner/">Monthly Ministry Partners</a></p>
            </div>
          </div>
        </div>
				<!-- Your Name -->
				<label for="">Your Name</label>
				<div class="form-group-row">
					<div class="form-group">
						
						<input type="text" class="form-control" id="" placeholder="First"><small class="sr-only help-text">First Name</small>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="" placeholder="Last"><small class="sr-only help-text">Last Name</small>
					</div>
				</div>
				<!-- Email & Phone -->
				<div class="form-group-email-phone">
					<!-- Email Address -->
					<div class="form-group-row">
						<div class="form-group form-group-email">
							<label for="">Email address</label>
							<input type="email" class="form-control" id="" placeholder="Enter email">
						</div>
						<!-- Phone -->
						<div class="form-group form-group-phone">
							<label for="">Phone</label>
							<input type="tel" class="form-control" id="" placeholder="(optional)">
						</div>
					</div>
				</div>
				<!-- Address -->
				<div class="form-group-address">
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" id="" placeholder="Enter Street Address">
					</div>
					<div class="form-group form-group-address-2">
						<label for="">Address (cont.)</label>
						<input type="text" class="form-control" id="" placeholder="(optional)">
					</div>
					<div class="form-group-row">
						<div class="form-group">
							<select name="province" class="form-control">
								<?php echo $state_province_menu; ?>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="" placeholder="Zip/Postal Code">
							<small class="sr-only help-text">Zip/Postal Code</small>
						</div>
					</div>

					<div class="form-group form-group-country">
						<label for="">Country</label>
						<select class="form-control">
							<?php echo $country_menu; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">

						<input type="checkbox" id="" name="" value="" />
						<label> Sign up for email list <a href="#"><i class="glyphicon glyphicon-question-sign"></i></a></label>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg">Submit Donation</button>
				</div>
			</form>

	</section>

	<aside>
		<div class="well well-lg">
			<h3><a href="/donate/ministry-partner/">Become a Ministry Partner</a></h3>
		</div>
	</aside>

	</article>
</div>


<?php include "_footer.php"; ?>