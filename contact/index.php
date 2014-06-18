<!DOCTYPE html>

<html lang="en">
	<?php
		$current = "contact";
		
		$meta = '<title>Contact A Care Specialist | Contact</title>
		
		      <meta name="description" content="Need an appointment, consultation, or help? Contact a care specialist at Alison Animal Hospital today. Learn More">
		      ';
		
		include("../includes/head.php");
	?>

	<body class="<?php echo $current; ?>" >
		<?php include("../includes/navigation.php"); ?>

		<section class="map">
			<div id="map-canvas" class="gmap"></div>

			<div class="contact-info">
				<div class="contact-info-inner">
					<div class="contact-column">
						<h5 class="info">
							<span class="x-small">Email:</span><br>
							sayhi@alisonanimal.com
						</h5>

						<h5 class="info">
							<span class="x-small">Phone:</span><br>
							<a href="tel:+1-718-473-0081">718-473-0081</a><br>
						</h5>
					</div>

					<div class="contact-column">
						<h5 class="info">
							<span class="x-small">Address:</span><br>
							224 Prospect Park West<br>
							Brooklyn, NY 11215
						</h5>

						<h5 class="info">
							<span class="x-small">Hours:</span><br>
							Monday-Friday: 10am - 8pm<br>
							Saturday: 10am - 9pm<br>
							Sunday: 9am-5pm
						</h5>
					</div>
				</div>
			</div>
		</section>

		<?php include("../includes/emergency-modal.php"); ?>

		<section class="forms">
			<div class="forms-inner">
				<div class="forms-nav dropdown">
					<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
						Select an Inquiry Type
						<span class="caret"></span>
					</button>

					<ul class="nav nav-tabs dropdown-menu">
						<li class="active">
							<a href="#general" data-toggle="tab"><span>General Inquiry</span></a>
						</li>
						<li>
							<a href="#technician" data-toggle="tab"><span>Upload a document or image</span></a>
						</li>
						<li>
							<a href="#appointment" data-toggle="tab"><span>Request an Appointment</span></a>
						</li>
						<li>
							<a href="#prescription" data-toggle="tab"><span>Prescription Re-fill Request</span></a>
						</li>
					</ul>
				</div>

				<div class="form-panels tab-content">
					<form id="general" class="tab-pane active fade in" action="/endpoints/general.php" method="post">
						<h2 class="form-title">General Inquiry</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone" name="phone" placeholder="phone number*" required>
							</div>
							
							<div class="form-column">
								<label for="message" class="sr-only">message</label>
								<textarea  class="form-input" id="message" name="message" rows="6" placeholder="message*" required></textarea>
							</div>
						</div>

						<div class="form-response"></div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT<img class="ajax-loader" src="/images/icons/ajax-loader.gif" alt=""></button>
					</form>

					<form id="technician" class="tab-pane fade" action="/endpoints/technician.php" method="post">
						<h2 class="form-title">Upload a document or image</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone" name="phone" placeholder="phone number*" required>
							</div>

							<div class="form-column ">
								<label for="doc-name" class="sr-only">technician's name</label>
								<input type="text" class="form-input" id="doc-name" name="doc-name" placeholder="Document or image title*" required>

								<label for="uploadFile" class="sr-only">image upload</label>
								<input type="file" class="form-input" id="uploadFile" name="uploadFile">
								<p class="help-block">Upload a jpg, png or pdf file</p>
							</div>
						</div>

						<div class="form-response"></div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT<img class="ajax-loader" src="/images/icons/ajax-loader.gif" alt=""></button>
					</form>

					<form id="appointment" class="tab-pane fade" action="/endpoints/appointment.php" method="post">
						<h2 class="form-title">Request an appointment</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone" name="phone" placeholder="phone number*" required>
							</div>

							<div class="form-column">
								<label for="appointment-date" class="sr-only">appointment date</label>
								<div class="datepicker">
									<input type="text" class="form-input" id="appointment-date" name="appointment-date" placeholder="appointment date*" required>
								</div>

								<label for="appointment-time" class="sr-only">appointment time</label>
								<input type="text" class="form-input" id="appointment-time" name="appointment-time" placeholder="appointment time*" required>

								<label for="company" class="sr-only">message</label>
								<textarea  class="form-input" id="message" name="message" rows="6" placeholder="message" required></textarea>
							</div>
						</div>

						<div class="form-response"></div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT<img class="ajax-loader" src="/images/icons/ajax-loader.gif" alt=""></button>
					</form>

					<form id="prescription" class="tab-pane fade" action="/endpoints/prescription.php" method="post">
						<h2 class="form-title">Directly request a re-fill for a prescription</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone" name="phone" placeholder="phone number*" required>

								<label for="medication-name" class="sr-only">medication name</label>
								<input type="text" class="form-input" id="medication-name" name="medication-name" placeholder="medication name*" required>
							</div>

							<div class="form-column">
								<label for="pet-type" class="sr-only">type of pet</label>
								<input type="text" class="form-input" id="pet-type" name="pet-type" placeholder="type of pet*" required>

								<label for="pet-sex" class="sr-only">sex of pet</label>
								<select class="form-input" id="pet-sex" name="pet-sex" placeholder="sex of pet*" required>
								  <option value="">sex of pet*</option>
								  <option value="Male">Male</option>
								  <option value="Female">Female</option>
								</select>

								<label for="pet-age" class="sr-only">age of pet</label>
								<input type="text" class="form-input" id="pet-age" name="pet-age" placeholder="age of pet*" required>

								<label for="prescription-number" class="sr-only">prescription number</label>
								<input type="text" class="form-input" id="prescription-name" name="prescription-number" placeholder="current prescription number*" required>
							</div>
						</div>

						<div class="form-response"></div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT<img class="ajax-loader" src="/images/icons/ajax-loader.gif" alt=""></button>
					</form>

				</div>
			</div>
		</section>

		<?php include("../includes/footer.php"); ?>

	</div>
	</body>
</html>