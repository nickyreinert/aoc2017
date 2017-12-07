<?php
    error_reporting(E_ERROR);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    set_time_limit (600);
    libxml_use_internal_errors(true);
    libxml_clear_errors();

    date_default_timezone_set("Europe/Berlin");

	DEFINE('JQUERY_SOURCE',						'https://code.jquery.com/jquery-1.11.1.min.js');
	DEFINE('JSCRIPT_SOURCE',					'js/script.js');

?>

<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="aoc">
    <meta name="author" content="Nicky Reinert">

    <title>aoc</title>

    <link rel="stylesheet" href="css/styles.css?v=1.1">

</head>

<body>

	<script src="<?php echo JQUERY_SOURCE; ?>" ></script>
	<script src="<?php echo JSCRIPT_SOURCE; ?>" ></script>
