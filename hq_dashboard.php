<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hq project</title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="hq_dashboard.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//UI datepicker
			$(".datepicker").datepicker();
			//hide dropdown div on page load
			$("#dropDownMenuCont").addClass("hidden");
			$("#dropDownMenuCont").children("div").addClass("hidden");
			//on click of nav bar change hidden class from main dropDownCont and selected div (email,social or tools)
			$("#navCont div").click(function() {
				$("#dropDownMenuCont").hide();
				$("#dropDownMenuCont").children("div").hide();
				$("#navCont div.slctd").removeClass("slctd");
				$(this).addClass("slctd");
				var slctd = $(this).attr("name");
				$("#dropDownMenuCont").show();
				$("#"+slctd).slideDown();
				if(slctd == "tools")
				{
					$("#subNavCont div:first-child").click();
				}
			});
			
			//on click of subNav under tools change hidden class of subNav selected div
			$("#subNavCont div").click(function() {
				$("#subNavDropDownCont").children("div").addClass("hidden");
				$("#subNavCont div.slctd").removeClass("slctd");
				$(this).addClass("slctd");
				var slctd = $(this).attr("name");
				$("#"+slctd).removeClass("hidden");
			});

			$("#subNavCont div:first-child").click(function() {
				$("#subNavCont div.slctd").removeClass("slctd");
				$(this).addClass("slctd");
				var slctd = $(this).attr("name");
				$("#subNavDropDownCont").removeClass("hidden");
				$("#"+slctd).removeClass("hidden");
			});

			//on click close hide dropDown page 
			$("#close").click(function() {
				$("#dropDownMenuCont").slideUp();
				$("#dropDownMenuCont").children("div").hide();
				$("#navCont div.slctd").removeClass("slctd");
			});

		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="topBarCont">
			<div id="profileCont">
				<img id="profileImg" class="floatLeft" src="profileImg.png">
				<h4>Jose Espinoza</h4>
				<a href=""><img id="logOutLock" src="logOutLock.png">Log Out</a>
			</div>
			<div id="navCont">
				<div id="left" name="email" class="floatLeft">
					<img src="emailSymbol.png">
					<p>Email</p>
				</div>
				<div id="center" name="social" class="floatLeft">
					<img src="socialSymbol.png">
					<p>Social</p>
				</div>
				<div id="right" name="tools" class="floatLeft">
					<img src="toolsSymbol.png">
					<p>Tools</p>
				</div>
			</div>
			<div id="rightBtnsCont">
				<button class="floatLeft">Edit Page</button>
				<button>Tour</button>
			</div>
		</div><!--end of topBarCont-->
		<div id="dropDownMenuCont">
			<a id="close" class="floatRight">Close<img src="xCloseSymbol.png"></a>
			<div id="email">
				<h2>Promote via Email</h2>
				<p>Messenger bag ethical vegan, sapiente wayfarers adipisicing</p>
				<form name="accountDetailsForm" action="" method="post">
					<div id="inputCont">
						<input type="text" class="size1" placeholder="Add contact" id="contactInput">
						<a href=""><img src="contactsListImg.png"></a>
						<a href=""><img src="yahooContactsImg.png"></a>
						<a href=""><img src="msnContactsImg.png"></a>
						<a href=""><img src="outlookContactsImg.png"></a>
						<a href=""><img src="googleContactsImg.png"></a>
						<p>Link your email address book</p>
					</div>
					<div id="messageCont">
						<input type="text" class="size2" placeholder="Subject" id="subInput">
						<select>
							<option>Template 1</option>
							<option>Template 2</option>
							<option>Template 3</option>
						</select>
						<textarea id="emailMessage" rows="6" placeholder="100/300"></textarea>
					</div>
					<div id="btnCont" class="floatRight">
						<input type="submit" class="btn" value="Save Template" name="saveTemp" id="saveTemp">
						<input type="submit" class="btn" value="Send" name="sendEmail" id="sendEmail">
					</div>
				</form>
			</div><!--end of email-->
			<div id="social">
				<h2>Promote via Social Media</h2>
				<p>Messenger bag ethical vegan, sapiente wayfarers adipisicing drinking vinegar brunch actually sed. Asymmetrical sed kale chips cred, odio incididunt sriracha shabby chic ethical trust fund pug Helvetica chia umami et. Leggings Austin PBR, authentic skateboard ea whatever literally cred et pour-over veniam.</p>
				<div id="linksCont">
					<a class="floatLeft" href=""><div id="twitter" class="rectImg"><img src="twitterImg.png"></div></a>
					<a class="floatLeft" href=""><div id="fb" class="rectImg"><img src="fbImg.png"></div></a>
					<a class="floatLeft" href=""><div id="linkedin" class="rectImg"><img src="linkedinImg.png"></div></a>
					<a class="floatLeft" href="">Autopost Settings</a>
				</div>
				<textarea id="socialMessage" rows="3" placeholder="100/140"></textarea>
				<div id="btnCont" class="floatRight">
					<input type="submit" class="btn" value="Send" name="sendSocialMessage" id="sendSocialMessage">
				</div>
			</div><!--end of social-->
			<div id="tools">
				<div id="subNavCont" class="floatRight">
					<div id="left" name="accountDetails" class="default floatLeft">
						<p>Account Details</p>
					</div>
					<div id="center" name="contactBook" class="floatLeft">
						<p>Contact Book</p>
					</div>
					<div id="center" name="offlineDonations" class="floatLeft">
						<p>Offline Donations</p>
					</div>
					<div id="right" name="socialMedia" class="floatLeft">
						<p>Social Media</p>
					</div>
				</div><!--end of subNavCont-->
				<div id="subNavDropDownCont">
					<div id="accountDetails">
						<h2>Page Settings</h2>
						<form name="accountDetailsForm" action="" method="post">
							<fieldset id="personalGoalField">
								<label for="personalGoal">Personal Goal:</label>
								<input type="text" id="personalGoal" class="size3" name="personalGoal">
							</fieldset>
							<fieldset id="personalUrlField">
								<label for="personalUrl">Personal URL</label>
								<p>demosite.rallybound.com/Fundraise?/<input type="text" name="personalUrl" id="personalUrl" class="size3"></p>
							</fieldset>
							<h4>Account Details</h4>
							<fieldset class="floatLeft">
								<label for="firstName">First Name</label>
								<input type="text" id="firstName" class="size3" name="firstName">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="lastName">Last Name</label>
								<input type="text" id="lastName" class="size3" name="lastName">
							</fieldset>
							<div class="clear"></div>
							<fieldset>
								<label for="emailField">Email Address</label>
								<input type="email" id="emailField" class="size5" name="email">
							</fieldset>
							<fieldset class="floatLeft">
								<label for="password">Password</label>
								<input type="password" id="password" class="size3" name="password">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="confirmPassword">Confirm Password</label>
								<input type="password" id="confirmPassword" class="size3" name="confirmPassword">
							</fieldset>
							<div class="clear"></div>
							<fieldset class="floatLeft">
								<label for="address">Address</label>
								<input type="text" id="address" class="size4" name="address">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="aptSuite">APT/SUITE</label>
								<input type="text" id="aptSuite" class="size1" name="aptSuite">
							</fieldset>
							<div class="clear"></div>
							<fieldset id="countryField">
								<label for="country">Country</label>
								<input type="text" id="country" class="size5" name="country">
							</fieldset>
							<fieldset class="floatLeft">
								<label for="city">City</label>
								<input type="text" id="city" class="size2" name="city">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="zipCode">Zip Code</label>
								<input type="text" id="zipCode" class="size1" name="zipCode">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="phone">Phone</label>
								<input type="text" id="phone" class="size2" name="phone">
							</fieldset>
							<div class="clear"></div>
							<label for="emailSettings"><input type="checkbox" id="emailSettings" name="emailSettings" value="true">Please do not send me emails where donations are made towards my goal</label>
							<div id="btnCont">
								<input type="submit" class="btn" id="updateAccntSettings" value="Update">
								<span id="btnLoader"></span>
							</div>
						</form>
					</div><!--end of accountDetails-->
					<div id="contactBook">
						<h2>Contact Book</h2>
						<div id="btnCont">
							<input class="floatLeft" type="button" id="importContactsBtn" value="+ Import Contacts">
							<a href=""><div id="actionsContactsBtn"><img class="floatLeft" src="toolsLrgSymbol.png">Action<img class="floatRight"src="downArrowImg.png"></div></a>
						</div>
						<div id="table">
							<table>
								<thead>
									<th><input type="checkbox" value="true"></th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email Address</th>
									<th>Last Emailed</th>
									<th>Greeting</th>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!--end of contactBook-->
					<div id="offlineDonations">
						<h2>Offline Donations</h2>
						<form name="accountDetailsForm" action="" method="post">
							<fieldset class="floatLeft">
								<label for="firstName">First Name</label>
								<input type="text" id="firstName" class="size3" name="firstName">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="lastName">Last Name</label>
								<input type="text" id="lastName" class="size3" name="lastName">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="emailField">Email Address</label>
								<input type="email" id="emailField" class="size3" name="email">
							</fieldset>
							<div class="clear"></div>
							<fieldset class="floatLeft">
								<label for="emailField">Donation Type</label>
								<select>
									<option>Check</option>
									<option>Template 2</option>
									<option>Template 3</option>
								</select>
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="amount">Amount</label>
								<input type="text" id="amount" class="size1" name="amount">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="dateReceived">Date Received</label>
								<input type="text" id="dateReceived" class="size2 datepicker" name="dateReceived" class="datepicker">
							</fieldset>
							<fieldset class="floatLeft marginLeft">
								<label for="checkNum">Check #</label>
								<input type="text" id="checkNum" class="size2" name="checkNum">
							</fieldset>
							<div id="btnCont" class="floatRight">
								<input type="submit" class="btn" id="submitOfflineDonation" value="Submit Donation">
								<span id="btnLoader"></span>
							</div>
						</form>
					</div><!--end of offlineDonations-->
					<div id="socialMedia">
						<h2>Social Media Settings</h2>
						<div class="socialCont" id="twitterSocialCont">
							<img class="floatLeft" src="twitterLrgLogo.png">
							<p>Connected to http://twitter.com/coolguy</p>
							<label for="twitterAutoSettings"><input type="checkbox" id="twitterAutoSettings" name="twitterAutoSettings" value="true">Autopost</label>
							<img class="floatRight" src="xCloseSmlSymbol.png">
						</div>
						<div class="socialCont" id="fbSocialCont">
							<img class="floatLeft" src="fbLrgLogo.png">
							<p>Connected to http://twitter.com/coolguy</p>
							<label for="fbAutoSettings"><input type="checkbox" id="fbAutoSettings" name="fbAutoSettings" value="true">Autopost</label>
							<img class="floatRight" src="xCloseSmlSymbol.png">
						</div>
						<div class="socialCont" id="linkedinSocialCont">
							<img class="floatLeft" src="linkedinLrgLogo.png">
							<p>Connected to http://twitter.com/coolguy</p>
							<label for="linkedinAutoSettings"><input type="checkbox" id="linkedinAutoSettings" name="linkedinAutoSettings" value="true">Autopost</label>
							<img class="floatRight" src="xCloseSmlSymbol.png">
						</div>
					</div><!--end of socialMedia-->
				</div><!--subNavDropDownCont-->
			</div><!--end of tools-->
		</div><!--end of dropDownMenuCont-->
		<div id="bckImgCont">
			<img src="bckImg.jpg">
		</div>
	</div>
</body>
</html>