<?php

// readfile("./assets/files/test.txt");

// $myfile = fopen("./assets/files/testing.txt", "w+") or die("Unable to open file!");
// echo $myfile;
// $txt = "This is the first file\n";

// fwrite($myfile, $txt);

// $filecont = fread($myfile, filesize("./assets/files/testing.txt"));



// fclose($myfile);

// echo count($filecont);

// echo diskfreespace('/');

// unlink("./assets/files/testing.txt");

// mkdir("./assets/files/newFiles");

// rmdir("./assets/files/newFiles");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Handling</title>
</head>
<body>
	<h1>File Handling</h1>

	<h3>The below file was read:</h3>
	<?php
		// $myfile = readfile("./assets/files/test.txt");

	// $name = "John";
	// $acct_num = 1425374689;
	// $amount = 345;
	// $ref = 67834235730987;

	// $reciept = fopen("./assets/files/new_files/$acct_num.pdf", "w+") or die("Unable to open the file!");

	// $text = "This is the reciept for:\n Mr. John";

	// fwrite($reciept, $text);


	// fclose($reciept);

	// readfile("./assets/files/reciept.pdf");

	// unlink("./assets/files/new_files/.txt");


	// mkdir("./assets/files/new_files");

	// rmdir("./assets/files/new_files");

	require_once("./functions/del_fold.php");

	del_fold("./assets/files/new_file");

	?>
</body>
</html>