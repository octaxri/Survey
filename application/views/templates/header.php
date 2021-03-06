<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>SISTIK</title>
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">
	<link rel="shortcut icon" href="images/favicon.png">
	<link href="<?php echo base_url();?>assets/css/icon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
	<style>
		#view-source {
			position: fixed;
			display: block;
			right: 0;
			bottom: 0;
			margin-right: 40px;
			margin-bottom: 40px;
			z-index: 900;
		}

	</style>
</head>

<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">SURVEY TINGKAT KEPUASAN KECAMATAN CINAMBO</span>
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search">
						<label class="mdl-textfield__label" for="search">Enter your query...</label>
					</div>
				</div>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
      <header class="demo-drawer-header">
        <div class="demo-avatar-dropdown">
            <h1>SISTIK </h1>
          </div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<a class="mdl-navigation__link" href="<?php echo base_url();?>index.php/c_crud/lihat_data">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Dashboard</a>
				<a class="mdl-navigation__link" href="<?php echo base_url();?>">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">input</i>Input Data</a>
				<a class="mdl-navigation__link" href="<?php echo base_url();?>index.php/c_crud/export_data">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">cloud_download</i>Export Data</a>
				<div class="mdl-layout-spacer"></div>
			</nav>
		</div>

	