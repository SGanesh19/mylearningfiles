<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <!-- <div class="encode">
		<p class="decode"></p>
	</div> -->
    <?php

	//mimetypes
	// function detectFileMimeType($filename = '')
	// {
	// 	$filename = escapeshellcmd($filename);
	// 	$command = "file -b --mime-type -m raw_000001";

	// 	$mimeType = shell_exec($command);

	// 	echo trim($mimeType);
	// }
	//Encode
	//file_put_contents($file, $data);
	/*$result =  base64_decode($data);*/
	$img = file_get_contents('raw_000002');
	$data = base64_encode($img);
	$res = serialize($data);

	$file = fopen('ser_blob_code_64', 'w');
	fwrite($file, $res);

	$mycontent = file_get_contents('ser_blob_code_64');
	if (preg_match('/"([^"]+)"/', $mycontent, $m)) {
		print $m[1];
	} else {
		//preg_match returns the number of matches found, 
		//so if here didn't match pattern
	}

	// //Decode
	// $img2 = file_get_contents('blob_code_64');
	// $data2 = base64_decode($img2);
	// $temp2 = unserialize($data2);
	// $file2 = fopen('ser_engine.tex', 'w');
	// fwrite($file2, $data2);
	// echo $data2;
	// fclose($file2);


	?>

    <!-- <script>
			
			var decodedData = scope.atob(encodedData);
		</script> -->
</body>

</html>