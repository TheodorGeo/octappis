<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>

<a href="/about/2">test</a>

<?= $data ?>

<?php $var = "thepdpr"?>


<link rel="stylesheet" type="text/css" href="<?= CSS::link('style') ?>">

<a href="ela">ela ligo</a>

<a href="<?= link_to("api/test/$var") ?> ">test</a>

<script type="text/javascript" src="<?= JS::script('main') ?>"></script>

<img src="<?= IMAGE::src('bear') ?>">

<script type="text/javascript" src="<?= ASSETS::load('js/main.js') ?>"></script>
<script type="text/javascript" src="<?= RAW::load('assets/js/main.js') ?>"></script>

</body>
</html>

