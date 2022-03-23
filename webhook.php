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
	date_default_timezone_set("Asia/Bangkok");

	$myfile = fopen("webhook.txt", "w") or die("Unable to open file!");

	// $data = $_REQUEST ?? null;
	// $data = json_encode($data) ?? null;

	// // $data = gettype($_REQUEST);
	// fwrite($myfile, $data."\n");

	fwrite($myfile, print_r($_REQUEST['object'],true));
	fwrite($myfile, "\n");

	fwrite($myfile, print_r($_REQUEST['data'],true));
	fwrite($myfile, "\n");

	$dateTime = date('Y-m-d H:i:s');
	fwrite($myfile, $dateTime."\n");

	fclose($myfile);
?>