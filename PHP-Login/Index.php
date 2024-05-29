<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require 'Controller/UserController.php';

	$controller = new UserController();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    		if (isset($_POST['action']) && $_POST['action'] === 'register') {
        		$controller->register();
    		} else {
        		$controller->login();
    	}
			} else {
    			$controller->showLogin();
		}
		
?>
	
</body>
</html>