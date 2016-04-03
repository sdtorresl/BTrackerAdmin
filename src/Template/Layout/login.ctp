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

$cakeDescription = 'BTracker Admin';
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

<body class="home">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <?= $this->Html->script('bin/materialize.min'); ?>
    <?= $this->Html->script('main'); ?>

    <main>
        <div class="navbar-fixed">
            <!-- Dropdown Structure -->
            <nav>
                <div class="nav-wrapper">
                    <div class="brand-logo">
                        <?= $this->Html->image('logo.png'); ?>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="section">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>

        <div class="container">
            <div class="section">
                <div class="row">
                    
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
