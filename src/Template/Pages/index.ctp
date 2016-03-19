<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
		throw new NotFoundException('Please replace Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'BTracker Admin';
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
			<?= $cakeDescription ?>
	</title>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?= $this->Html->meta('icon') ?>
	<?= $this->Html->css('materialize.css') ?>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="home">
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<?= $this->Html->script('bin/materialize.min'); ?>
	<?= $this->Html->script('main'); ?>

	<main>
		<div class="navbar-fixed">
			<!-- Dropdown Structure -->
			<nav>
				<ul id="dropdown1" class="dropdown-content">
					<li><a href="#!">one</a></li>
					<li><a href="#!">two</a></li>
					<li class="divider"></li>
					<li><a href="#!">three</a></li>
				</ul>
				<div class="nav-wrapper">
					<div class="brand-logo">
						<?= $this->Html->image('logo.png'); ?>
					</div>
					<!-- <a href="#!" class="brand-logo">Logo</a> -->
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<!-- Dropdown Trigger -->
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-1 white-bg" style="margin-top: 7%">
						<div class="row">
							<div class="container top-spacer">
								<div class="row">
									<h5>Login</h5>
									
									Please login with your credentials in order to manage your beacons.
									<form class="col s12">
										<div class="row">
											<div class="input-field">
												<i class="material-icons prefix">account_circle</i>
												<input id="name" type="text" class="validate">
												<label for="name">First Name</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<i class="material-icons prefix">vpn_key_circle</i>
												<input id="password" type="tel" class="validate">
												<label for="password">Password</label>
											</div>
										</div>
									</form>
									<a class="waves-effect waves-light btn right">Login</a>	
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</main>

	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				Diseño Dual © 2016
				<span class="right">
					Created by: <a href="#">Innovamos</a>
				</span>
			</div>
			</div>
	</footer>
</body>

</html>
