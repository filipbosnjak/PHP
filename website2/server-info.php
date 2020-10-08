<?php
	# $_SERVER SUPERGLOBAL - its actually an array containing information such as headers, paths, and script locations

	echo $_SERVER['SERVER_NAME']."<br>";//localhost
	echo $_SERVER['HTTP_HOST']."<br>";//localhost
	echo$_SERVER['SCRIPT_FILENAME']."<br>";//C:/xampp/htdocs/phpsandbox/PHP/website2/server-info.php
	
	
	$server = [
		'Host Server Name' => $_SERVER['SERVER_NAME'],
		'Host Header' => $_SERVER['HTTP_HOST'],
		'Server Software' => $_SERVER['SERVER_SOFTWARE'],
		'Document Root' => $_SERVER['DOCUMENT_ROOT'],
		'Current Page' => $_SERVER['PHP_SELF'],
		'Script Name' => $_SERVER['SCRIPT_NAME'],
		'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
	];
	
	print_r($server);
	/*
	( [Host Server Name] => localhost
	  [Host Header] => localhost
	  [Server Software] => Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.4.10
	  [Document Root] => C:/xampp/htdocs
	  [Current Page] => /phpsandbox/PHP/website2/server-info.php
	  [Script Name] => /phpsandbox/PHP/website2/server-info.php
	  [Absolute Path] => C:/xampp/htdocs/phpsandbox/PHP/website2/server-info.php )
	*/
	$client = [
		'Client System info' => $_SERVER['HTTP_USER_AGENT'],
		'Client IP' => $_SERVER['REMOTE_ADDR'], //Clients ip adress
		'Remote Port' => $_SERVER['REMOTE_PORT']
	];

?>
