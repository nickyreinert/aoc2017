<?php

	require_once('php/header.php');

	for ($day = 1; $day <= 3; ++$day)
	{
		include_once('days/day'.$day.'.php');
		echo '<hr />';

	}

	includee_once('php/footer.php');
