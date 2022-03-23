<?php
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "John Doe\n";
	fwrite($myfile, $txt);
	$txt = "Jane Doe\n";
	fwrite($myfile, $txt);
	$randNum = rand(0,100);
	fwrite($myfile, $randNum);
	fclose($myfile);
?>