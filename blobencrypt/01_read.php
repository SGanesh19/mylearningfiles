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
	$m = [];
	$img = file_get_contents('raw_000002');
	$data = base64_encode($img);
	$res = serialize($data);

	$file = fopen('ser_blob_code_64', 'w');
	fwrite($file, $res);

	$mycontent = file_get_contents('ser_blob_code_64');
	if (preg_match('/"([^"]+)"/', $mycontent, $m)) {
		$content =  $m[1];
	}

	$file2 = fopen('intermediatedata', 'w');
	fwrite($file2, $content);
	fclose($file2);



	?>

    <!-- <script>
			
			var decodedData = scope.atob(encodedData);
		</script> -->
</body>

</html>