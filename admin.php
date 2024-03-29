<?php

$phpVersion = phpversion();
if (version_compare($phpVersion, '8.0', '<'))
{
	die("PHP 8.0 or newer is required. $phpVersion does not meet this requirement. Please ask your host to upgrade PHP.");
}

$dir = __DIR__;
require($dir . '/src/XF.php');

XF::start($dir);
XF::runApp('XF\Server\src.php');
