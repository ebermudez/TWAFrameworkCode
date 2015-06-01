<!-- 
	TWAFramework Sample Code
	Edgardo Bermúdez
	
	It renders the products. 
-->
<?php
    global $framework;
    global $app;
    $router = $framework->getRouter();
?>

<header>
<?php $this->LoadPositionData('header');  ?>
</header>

<div id="content">
	<div class="page-content" >
		<h1 class="page-h1" style='text-align: center;'>
			PRODUCTS
		</h1>
		<div class='section-buttons'>
			<div class="section-button" id="section-button-1" data-page='productThermometer'>
				<img src="<?php echo $app->siteurl; ?>images/thermometer_off.png" alt="" />
				<p>THERMOMETER</p>
			</div>
			<div class="section-button" id="section-button-2" data-page='fertilityKits'>
				<img src="<?php echo $app->siteurl; ?>images/kit_off.png" alt="" />
				<p>FERTILITY KITS</p>
			</div>
			<div class="section-button" id="section-button-3" data-page='fertilityCoaching'>
				<img src="<?php echo $app->siteurl; ?>images/coaching_off.png" alt="" />
				<p>FERTILITY COACHING</p>
			</div>
		</div>
	</div>
	
	<div id="bottom-part">
		<div class="page-content">
			<div class="mainProducts">
				<div class="mainProduct" id="productThermometer">
					
					<img src="<?php echo $app->siteurl; ?>images/thermometer.png" alt="" id="thermometer" />
					<div id="thermometer-info">
						<p class='products-level-1'>The Thermometer</p>
						<p class='products-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					
					<img src="<?php echo $app->siteurl; ?>images/app.png" alt="" id="app" />
					<div id="app-info">
						<p class='products-level-1'>Always With You</p>
						<p class='products-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<button class="black-button" type='button'>BUY IT NOW</button>
					</div>
					
					
				</div>
				<div class="mainProduct" id="fertilityKits">
					
					<img src="<?php echo $app->siteurl; ?>images/thermometer.png" alt="" id="thermometer" />
					<div id="thermometer-info">
						<p class='products-level-1'>The Thermometer</p>
						<p class='products-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					
					<img src="<?php echo $app->siteurl; ?>images/app.png" alt="" id="app" />
					<div id="app-info">
						<p class='products-level-1'>Always With You</p>
						<p class='products-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<button class="black-button" type='button'>BUY IT NOW</button>
					</div>
					
					
				</div>
				<div class="mainProduct" id="fertilityCoaching">
					
					<img src="<?php echo $app->siteurl; ?>images/thermometer.png" alt="" id="thermometer" />
					<div id="thermometer-info">
						<p class='products-level-1'>The Thermometer</p>
						<p class='products-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					
					<img src="<?php echo $app->siteurl; ?>images/app.png" alt="" id="app" />
					<div id="app-info">
						<p class='products-level-1'>Always With You</p>
						<p class='products-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<button class="black-button" type='button'>BUY IT NOW</button>
					</div>
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>

<footer>
	<?php $this->LoadPositionData('footer');  ?>
</footer>