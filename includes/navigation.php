<div class="main-wrapper"><!--main wrapper-->

<?php include('coming-soon.php'); ?>

<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-inner">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="/"></a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
		        <li class="<?php if ($current == "home") echo "current"; ?>" >
		        	<a href="/"><span class="hl">Home</span></a>
		        </li>
		        <li class="<?php if ($current == "about") echo "current"; ?>">
		        	<a href="/about/"><span class="hl">About</span></a>
		        </li>
		        <li class="<?php if ($current == "contact") echo "current"; ?>">
		        	<a href="/contact/"><span class="hl">Contact</span></a>
		        </li>
		        <li class="nav-contact">
		        	<a href="tel:+1-718-473-0081">
		        		<span class="phone-number"></span>
		        		<span class="hl">718-473-0081</span>
		        	</a>
		        </li>
		        <li class="nav-contact">
		        	<a href="/contact/">
		        		<span class="email"></span>
		        		<span class="hl">sayhi@alisonanimal.com</span>
		        	</a>
		        </li>
		        <li class="nav-emergency">
		        	<div class="btn-emergency" data-toggle="modal" data-target="#emergency-modal">
						<span class="emergency-icon"></span>
						<span class="emergency-type">For Emergencies</span>
					</div>
		        </li>
		  	</ul>
	  	</div>
  	</div>
</nav>