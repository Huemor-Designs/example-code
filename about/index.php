<!DOCTYPE html>
<html lang="en">
	<?php
		$current = "about";
		
		$meta = '<title>An Animal Care Facility That Cares | About</title>
		
		      <meta name="description" content="Alison Animal Hospital grew from a dream that work can be pleasurable and helpful to one\'s community. Find out How">
		      ';
				
		include("../includes/head.php");
	?>

	<body class="<?php echo $current; ?>" >
		<?php include("../includes/navigation.php"); ?>

		<header class="header">
			<div class="header-inner">
				<h1>Where it all happens</h1>
			</div>
		</header>

		<?php include("../includes/emergency-modal.php"); ?>

		<section class="about-header">
			<div class="about-header-inner">
				<div class="about-header-content-wrapper">

					<div class="about-header-panels tab-content">
						<div id="story" class="about-header-pane tab-pane fade in active">
							<div class="pane-image">
								<h2 class="pane-title">Our Story</h2>
							</div>
							<div class="pane-copy">
								<p>
									Alison Animal Hospital grew out of Alex's conviction that one's work could and should be personally fulfilling, while being performed at the highest level of expertise and service. After college, he experienced corporate culture for a dozen years. But it was not until the loss of his beloved younger teenage sister, Alison, that Alex knew he must follow his heart: to care for animals as a medical doctor. After years of academic preparation, a lot of hard work, and hands-on animal experience as a veterinarian, his goal has reached fruition. AAH embodies Alex's very personal statement about what he has chosen to do for the rest of his life. It is a place where love, caring and professional expertise combine to form a wellspring of vitality for the companion animals whom we adore.
								</p>
							</div>
						</div>

						<div id="practice" class="about-header-pane tab-pane fade">
							<div class="pane-image">
								<h2 class="pane-title">Our Practice</h2>
							</div>
							<div class="pane-copy">
								<p>
									Our practice philosophy is to exemplify medicine's highest values: commitment to service, community involvement, altruism and leadership in and on behalf of the veterinary profession. 
Our approach is one of science, logic and compassion. Every pet is precious and individual. We are independent thinkers. We are not part of any group or larger entity and have worked hard to resist any contract pricing with vendors and reference labs which might compromise our freedom. 
We work solely for our patients and their owners. We believe that combining freedom of business with freedom of thought is the prerequisite for the highest level care.
								</p>
							</div>
						</div>

						<div id="hospital" class="about-header-pane tab-pane fade">
							<div class="pane-image">
								<h2 class="pane-title">Our Hospital</h2>
							</div>
							<div class="pane-copy">
								<p>
									Our brand new, innovatively designed hospital was built to reflect and support the high quality of medicine practiced within it. By incorporating noise management, odor/pathogen control and traffic flow, we have created a calm environment where animals, clients and staff feel comfortable and efficiency is prioritized. Our hospital has been designed to offer the latest technlogy in diagnostics, medicine and advanced surgery right in the heart of Windsor Terrace.
								</p>
							</div>
						</div>
					</div>

					<div class="about-header-nav dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
							Who we are
							<span class="caret"></span>
						</button>

						<ul class="nav nav-tabs dropdown-menu">
							<li class="active">
								<a href="#story" data-toggle="tab"><span>our story</span></a>
							</li>
							<li>
								<a href="#practice" data-toggle="tab"><span>our practice</span></a>
							</li>
							<li>
								<a href="#hospital" data-toggle="tab"><span>the hospital</span></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</section>

		<section class="team">
			<div class="team-inner">
				<h2>The Team <span>(Additional Bios Coming Soon)</span></h2>
				<div class="members">
					<div class="member alex">
						<div class="member-image-wrapper">
							<div class="member-image"></div>
							<h5 class="member-title">Alexander E. Klein, DVM</h5>
						</div>

						<div class="member-bio">
							
							<p class="member-description">
								Dr. Alex Klein grew up in Great Neck, New York with animal-loving parents. As a child, he was a puppy walker for Seeing Eyes for the Blind and endured the continual cycle of attaching to and separating from deliciously adorable Lab puppies. He served as a volunteer EMT/fireman during his high school and college years and always had an interest in medicine, but was also attracted to technology. He graduated from NYU's Tisch School of the Arts with a BFA in 1995. After a dozen years in the fast-paced corporate world, Alex decided to face the daunting and exciting challenge of transforming his career. He attended CCNY at night in order to complete post-baccalaureate coursework and worked on an upstate farm, ultimately leading to his acceptance into Cornell University Veterinary School. Alex has since worked in private practice and animal rescue/shelter facilities, most recently as a staff surgeon and veterinary associate at North Shore Animal League. Alex lives in Windsor Terrace with his wife Lisa, his son Noam and their three cats.
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section class="partners">
			<div class="partners-inner">
				<h2>Our Partners</h2>
				<div class="partners-wrapper">
					<div class="partners-row">
						<div class="partner one">
							<div class="partner-inner">
								<a target="_blank" href="http://www.infinitehopeonline.org/">
									<img src="/images/partners/Infinite Hope Logo.jpg" alt="Infinite Hope" title="Infinite Hope">
								</a>
							</div>
						</div>

						<div class="partner two">
							<div class="partner-inner">
								<a target="_blank" href="http://www.smallworldrescue.org/about.htm">
									<img class="small-world" src="/images/partners/Small World Logo.jpg" alt="Small World Animal Rescue" title="Small World Animal Rescue">
								</a>
							</div>
						</div>

						<div class="partner three">
							<div class="partner-inner">
								<a target="_blank" href="http://bluepearlvet.com/newyork/">
									<img class="blue-pearl" src="/images/partners/NYCVS logo.png" alt="Blue Pearl" title="Blue Pearl">
								</a>
							</div>
						</div>

						<div class="partner four">
							<div class="partner-inner">
								<a target="_blank" href="http://www.amcny.org/">
									<img src="/images/partners/logo.png" alt="Animal Medical Center" title="Animal Medical Center">
								</a>
							</div>
						</div>

						<div class="partner five">
							<div class="partner-inner">
								<a target="_blank" href="https://ahdc.vet.cornell.edu/">
									<img src="/images/partners/Cornell Lab Logo.jpg" alt="Cornell University College of Veterinary Medicine" title="Cornell University College of Veterinary Medicine">
								</a>
							</div>
						</div>

						<div class="partner six">
							<div class="partner-inner">
								<a target="_blank" href="http://www.verg-brooklyn.com/">
									<img src="/images/partners/verg-logo.gif" alt="Verg" title="Verg">
								</a>
							</div>
						</div>

						<div class="partner seven">
							<div class="partner-inner">
								<a target="_blank" href="http://www.vet-stem.com/">
									<img src="/images/partners/VetStem-logo.jpg" alt="Vet-Stem" title="Vet-Stem">
								</a>
							</div>
						</div>

						<div class="partner eight">
							<div class="partner-inner">
								<a target="_blank" href="http://cprpets.weebly.com/">
									<img src="/images/partners/CPR Logo.jpg" alt="CPR Pets" title="CPR Pets">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include("../includes/footer.php"); ?>
	</body>
</html>