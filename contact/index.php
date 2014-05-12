<!DOCTYPE html>
<html lang="en">
	<?php
		$current = "contact";
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
							555-555-5555<br>
							555-555-5555
						</h5>
					</div>

					<div class="contact-column">
						<h5 class="info">
							alison's animal hospital<br>
							123 address<br>
							city, ny ZIP
						</h5>

						<h5 class="info">
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
							<a href="#technician" data-toggle="tab"><span>Ask a Technician</span></a>
						</li>
						<li>
							<a href="#appointment" data-toggle="tab"><span>Request an Appointment</span></a>
						</li>
						<li>
							<a href="#prescription" data-toggle="tab"><span> Prescription Re-fill Request</span></a>
						</li>
					</ul>
				</div>

				<div class="forms tab-content">
					<form id="general" class="tab-pane active fade in">
						<h2 class="form-title">General Inquiry</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone number" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone number" name="phone number" placeholder="phone number*" required>
							</div>
							
							<div class="form-column">
								<label for="company" class="sr-only">message</label>
								<textarea  class="form-input" id="message" name="message" rows="6" placeholder="message" required></textarea>
							</div>
						</div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT</button>
					</form>

					<form id="technician" class="tab-pane fade">
						<h2 class="form-title">A question or follow up that goes to a technician.</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone number" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone number" name="phone number" placeholder="phone number*" required>
							</div>

							<div class="form-column ">
								<label for="technician-name" class="sr-only">technician's name</label>
								<input type="text" class="form-input" id="technician-name" name="technician-name" placeholder="technician's name*" required>

								<label for="imageUpload" class="sr-only">image upload</label>
								<input type="file" class="form-input" id="imageUpload" name="imageUpload">
								<p class="help-block">Upload a jpg, png or pdf file</p>
							</div>
						</div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT</button>
					</form>

					<form id="appointment" class="tab-pane fade">
						<h2 class="form-title">Request an appointment</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone number" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone number" name="phone number" placeholder="phone number*" required>
							</div>

							<div class="form-column">
								<label for="appointment-date" class="sr-only">appointment date</label>
								<input type="text" class="form-input" id="appointment-date" name="appointment-date" placeholder="appointment date*" required>
								
								<label for="appointment-time" class="sr-only">appointment time</label>
								<input type="text" class="form-input" id="appointment-time" name="appointment-time" placeholder="appointment time*" required>

								<label for="company" class="sr-only">message</label>
								<textarea  class="form-input" id="message" name="message" rows="6" placeholder="message" required></textarea>
							</div>
						</div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT</button>
					</form>

					<form id="prescription" class="tab-pane fade">
						<h2 class="form-title">Directly request a re-fill for a prescription.</h2>

						<div class="form-group">
							<div class="form-column">
								<label for="name" class="sr-only">full name</label>
								<input type="text" class="form-input" id="name" name="name" placeholder="name*" required>

								<label for="email" class="sr-only">email</label>
								<input type="text" class="form-input" id="email" name="email" placeholder="email*" required>

								<label for="phone number" class="sr-only">phone number</label>
								<input type="text" class="form-input" id="phone number" name="phone number" placeholder="phone number*" required>

								<label for="medication-name" class="sr-only">medication name</label>
								<input type="text" class="form-input" id="medication-name" name="medication-name" placeholder="medication name*" required>
							</div>

							<div class="form-column">
								<label for="pet-type" class="sr-only">type of pet</label>
								<input type="text" class="form-input" id="pet-type" name="pet-type" placeholder="type of pet*" required>

								<label for="pet-sex" class="sr-only">sex of pet</label>
								<input type="text" class="form-input" id="pet-sex" name="pet-sex" placeholder="sex of pet*" required>

								<label for="pet-age" class="sr-only">age of pet</label>
								<input type="text" class="form-input" id="pet-age" name="pet-age" placeholder="age of pet*" required>

								<label for="prescription-name" class="sr-only">prescription name</label>
								<input type="text" class="form-input" id="prescription-name" name="prescription-name" placeholder="current prescription number*" required>
							</div>
						</div>

						<button type="submit" class="btn btn-submit btn-yellow" value="submit" name="submit">SUBMIT</button>
					</form>
				</div>
			</div>
		</section>

		<?php include("../includes/footer.php"); ?>
	</body>
</html>