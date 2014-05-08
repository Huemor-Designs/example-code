<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-inner">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="/"></a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
		        <li class="<?php if ($current == "home") echo "current"; ?>" ><a href="/"><span>Home</span></a></li>
		        <li class="<?php if ($current == "about") echo "current"; ?>"><a href="/about/"><span>About</span></a></li>
		        <li class="<?php if ($current == "contact") echo "current"; ?>"><a href="/contact/"><span>Contact</span></a></li>
		        <li class="nav-contact"><a href="/contact/"><span>516-555-5555</span></a></li>
		        <li class="nav-contact"><a href="/contact/"><span>sayhi@alisonanimal.com</span></a></li>
		  	</ul>
	  	</div>
  	</div>
</nav>