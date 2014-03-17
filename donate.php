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
				<div class="well well-lg">
					<div class="form-group">
						<label for="">Your Gift</label>
						<div class="row">
							<div class="col-sm-6"><input type="text" class="form-control" id="" placeholder="Gift Amount"><small class="sr-only help-text">Amt </small></div>
							<div class="col-sm-6">
								<div class="checkbox">
									<label class="checkbox-inline">
										<input type="checkbox"> Make my gift monthly
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Credit Card  -->
				<div class="form-group">
					<label for=""><i class="fa fa-credit-card"></i> Credit Card</label>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<input type="text" class="form-control" id="cc_number" placeholder="xxx xxx xxx xxx xxx">
							<small class="help-text sr-only"> CC Number</small>
						</div>
						<div class="col-xs-6 col-sm-2">
							<?php
								$curr_month = date("m");
								$month = array (1=>
									"(1) January",
									"(2) February",
									"(3) March",
									"(4) April",
									"(5) May",
									"(6) June",
									"(7) July",
									"(8) August",
									"(9) September",
									"(10) October",
									"(11) November",
									"(12) December");
								$select = "<select class=\"form-control\" name=\"month\">\n";
								foreach ($month as $key => $val) {
										$select .= "\t<option val=\"".$key."\"";
										if ($key == $curr_month) {
												$select .= " selected=\"selected\">".$val."</option>\n";
										} else {
												$select .= ">".$val."</option>\n";
										}
								}
								$select .= "</select>";
								echo $select;
							?>
						</div>
						<div class="col-xs-6 col-sm-2">
							<select class="form-control">
								<option value="<?php echo date('y'); ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y'))){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y'); ?></option>
								<option value="<?php echo date('y')+1; ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y')+1)){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y')+1; ?></option>
								<option value="<?php echo date('y')+2; ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y')+2)){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y')+2; ?></option>
								<option value="<?php echo date('y')+3; ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y')+3)){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y')+3; ?></option>
								<option value="<?php echo date('y')+4; ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y')+4)){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y')+4; ?></option>
								<option value="<?php echo date('y')+5; ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y')+5)){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y')+5; ?></option>
								<option value="<?php echo date('y')+6; ?>" <?php if((isset($_POST['CCYear'])) && ($_POST["CCYear"]==date('y')+6)){echo "selected=\"selected\""; ?><?php } ?>><?php echo date('Y')+6; ?></option>
							</select>
						</div>
						<div class="col-sm-4"></div>
						<div class="col-xs-4"></div>
					</div>

				</div>
				<!-- Your Name -->
				<div class="form-group">
					<label for="">Your Name</label>
					<div class="row">
						<div class="col-xs-6"><input type="text" class="form-control" id="" placeholder="First"><small class="sr-only help-text">First Name</small></div>
						<div class="col-xs-6"><input type="text" class="form-control" id="" placeholder="Last"><small class="sr-only help-text">Last Name</small></div>
					</div>
				</div>
				<!-- Email Address -->
				<div class="form-group">
					<label for="">Email address</label>
					<input type="email" class="form-control" id="" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="tel" class="form-control" id="" placeholder="(optional)">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" id="" placeholder="Enter Street Address">
				</div>
				<div class="form-group">
					<label for="">Address (cont.)</label>
					<input type="text" class="form-control" id="" placeholder="(optional)">
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-4">

						<select name="province" class="form-control">
							<?php echo $state_province_menu; ?>
						</select>
					</div>
					<div class="col-xs-6 col-md-4">
						<input type="text" class="form-control" id="" placeholder="Zip/Postal Code">
						<small class="sr-only help-text">Zip/Postal Code</small>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="form-group form-group-country">
					<label for="">Country</label>
					<select class="form-control">
						<?php echo $country_menu; ?>
					</select>
				</div>
				<div class="form-group">

					<div class="checkbox">
						<label class="checkbox-inline">
							<input type="checkbox"> Sign up for email list <a href="#"><i class="glyphicon glyphicon-question-sign"></i></a>
						</label>
					</div>

				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg">Submit Donation</button>
				</div>
			</form>

	</section>

	<aside>
		<div class="well well-lg">
			<ul class="nav">
				<li><a href="#" class="btn btn-default btn-lg text-center">Become a Ministry&nbsp;Partner</a></li>
			</ul>
		</div>
	</aside>

	</article>
</div>


<?php include "_footer.php"; ?>