<?php


function del_fold($folder_dir){
	// echo $folder_dir;

	if (is_dir($folder_dir)) {
		$conts = scandir($folder_dir);

		// print_r($conts);

		// echo $conts[2];

		// foreach($conts as $cont){
		// 	echo "$cont<br>";
		// }

		$deleted = false;

		if (count($conts) > 2) {
			// echo "It has content";

			for ($i=2; $i < count($conts); $i++) { 
				// echo "$conts[$i]<br>";

				unlink($folder_dir . "/" . $conts[$i]);

				if (count($conts) <= 2) {
					$delete = true;
				}
			}

			rmdir($folder_dir);
		} else {
			// echo "No content found";

			rmdir($folder_dir);

			$deleted = true;
		}

		if ($deleted) {
			echo "The directory has been deleted";
		}
		clearstatcache();
	} else {
		echo "Directory does not exist!";
		clearstatcache();
	}

	

}