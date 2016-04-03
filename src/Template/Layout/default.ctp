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

$cakeDescription = 'BTracker Admin - ';
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#212121" />

	<title>
		<?= $cakeDescription ?>
		<?= $this->fetch('title') ?>
	</title>

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?= $this->Html->meta('icon') ?>
	<?= $this->Html->css('materialize.css') ?>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<?= $this->Html->script('bin/materialize.min'); ?>
	<?= $this->Html->script('main'); ?>

	<main>
		<div class="navbar-fixed" id="main-menu">
			<!-- Main menu -->
			<nav>
				<!-- Dropdown for users -->
				<ul class="dropdown-content" id="users1">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Users', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Users', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for beacons -->
				<ul class="dropdown-content" id="beacons1">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Beacons', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Beacons', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for stores -->
				<ul class="dropdown-content" id="stores1">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for zones -->
				<ul class="dropdown-content" id="zones1">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for products -->
				<ul class="dropdown-content" id="products1">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Products', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Products', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for stats -->
				<ul class="dropdown-content" id="stats1">
					<li><?= $this->Html->link(__('Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Purchases'), ['controller' => 'Purchases', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
				</ul>

				<!-- Dropdown for user action -->
				<ul class="dropdown-content" id="user_action">
					<li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
				</ul>

				<!-- Dropdown for users -->
				<ul class="dropdown-content" id="users2">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Users', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Users', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for beacons -->
				<ul class="dropdown-content" id="beacons2">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Beacons', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Beacons', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for stores -->
				<ul class="dropdown-content" id="storess">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for zones -->
				<ul class="dropdown-content" id="zones2">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Zones', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Zones', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for products -->
				<ul class="dropdown-content" id="products2">
					<li><?= $this->Html->link(__('List'), ['controller' => 'Products', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Add'), ['controller' => 'Products', 'action' => 'add']) ?></li>
				</ul>

				<!-- Dropdown for stats -->
				<ul class="dropdown-content" id="stats2">
					<li><?= $this->Html->link(__('Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Purchases'), ['controller' => 'Purchases', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>

				</ul>

				<!-- Dropdown for user action -->
				<ul class="dropdown-content" id="user_action_mobile">
					<li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
				</ul>

				<div class="nav-wrapper">
					<div class="brand-logo">
						<?= $this->Html->image('logo.png'); ?>
					</div>
					
					<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

					<ul class="right hide-on-med-and-down">
						<li>
							<?= $this->Html->link(__('Stats'), ['controller' => 'Stats', 'action' => 'index']) ?>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="users1"><?= __('Users') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="beacons1"><?= __('Beacons') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="stores1"><?= __('Stores') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="zones1"><?= __('Zones') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="products1"><?= __('Promotions') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button grey darken-2" href="#!" data-activates="user_action"><?= $userData['first_name'] . ' ' . $userData['last_name'] ?>
								<i class="material-icons left">account_circle</i>
								<!-- <i class="material-icons right">arrow_drop_down</i> -->
							</a>
						</li>
					</ul>

					<ul class="side-nav" id="mobile-menu">
						<li>
							<?= $this->Html->link(__('Stats'), ['controller' => 'Stats', 'action' => 'index']) ?>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="users2"><?= __('Users') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="beacons2"><?= __('Beacons') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="stores2"><?= __('Stores') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="zones2"><?= __('Zones') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button" href="#!" data-activates="products2"><?= __('Promotions') ?>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
						</li>
						<li>
							<a class="dropdown-button blue" href="#!" data-activates="user_action_mobile"><?= $userData['first_name'] . ' ' . $userData['last_name'] ?>
								<i class="material-icons left">account_circle</i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="container">
			<div class="section">
				<div class="row">
					<?= $this->Flash->render() ?>
					<?= $this->fetch('content') ?>
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
