<?php
	// $myfile = fopen("webhook.txt", "w") or die("Unable to open file!");
	// $txt = "John Doe\n";
	// fwrite($myfile, $txt);
	// $txt = "Jane Doe\n";
	// fwrite($myfile, $txt);
	// $randNum = rand(0,100);
	// fwrite($myfile, $randNum);
	// fclose($myfile);
?>

<?php 
	// date_default_timezone_set("Asia/Bangkok");

	// $myfile = fopen("webhook.txt", "w") or die("Unable to open file!");

	// $data = $_REQUEST ?? null;
	// $data = json_encode($data) ?? null;

	// // $data = gettype($_REQUEST);
	// fwrite($myfile, $data."\n");

	// $method = $_SERVER['REQUEST_METHOD'];
	// fwrite($myfile, "method : ".$method);
	// fwrite($myfile, "\n");


	// fwrite($myfile, $_POST['object'] ?? "fail");
	// fwrite($myfile, "\n");

	// fwrite($myfile, print_r($_POST,true));
	// fwrite($myfile, "\n");

	// fwrite($myfile, var_dump($_POST));
	// fwrite($myfile, "\n");

	// fwrite($myfile, var_dump($_REQUEST,true));
	// fwrite($myfile, "\n");

	// fwrite($myfile, print_r($_REQUEST,true));
	// fwrite($myfile, "\n");

	// fwrite($myfile, print_r($_REQUEST['object'],true));
	// fwrite($myfile, "\n");

	// fwrite($myfile, print_r($_REQUEST['data'],true));
	// fwrite($myfile, "\n");

	// $dateTime = date('Y-m-d H:i:s');
	// fwrite($myfile, $dateTime."\n");

	// fclose($myfile);
?>

<?php
	// $GET_EMAIL = '○○';

	// $json_string = file_get_contents('php://input');
	// $JSON = json_decode($json_string, true);

	// $eventName = $JSON['key'] ?? null;

	// // $Event_Name = "{$JSON['key']}";
	// // $Complete_Au = "{$JSON['data']['authorized']}"; # trueなら1が入る
	// // $Complete_or = "{$JSON['data']['paid']}"; # trueなら1が入る

 // 	date_default_timezone_set("Asia/Bangkok");

	// $myfile = fopen("webhook.txt", "w") or die("Unable to open file!");

	// fwrite($myfile, $eventName ?? null);
	// fwrite($myfile, "\n");

	// $dateTime = date('Y-m-d H:i:s');
	// fwrite($myfile, $dateTime."\n");

	// fclose($myfile);
?>

<?php 
	$json_string = file_get_contents('php://input');
	date_default_timezone_set("Asia/Bangkok");

	$myfile = fopen("webhook.txt", "w") or die("Unable to open file!");

	$dateTime = date('Y-m-d H:i:s');
	fwrite($myfile, $dateTime."\n");

	fwrite($myfile, $json_string ?? null);

	fclose($myfile);
?>