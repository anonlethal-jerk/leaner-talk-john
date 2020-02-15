<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $page_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/0__0/main.css" type="text/css">
	</head>

	<body class="body--<?= $page_slug; ?>">
		<main class="series--<?= $page_slug; ?>">
		<section class="header_info">
			<!-- <h1><cite><?= $page_title; ?></cite></h1> -->
<?php if ($page_slug != 'home' && $page_slug != 'check_ids') { ?>
			<!-- <h2><?= $projects['series'][$prj_index]['subtitle']; ?></h2> -->
<?php } ?>
