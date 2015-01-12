<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kimono - php - json</title>
</head>
<body>
<h1>Kimono - php - json</h1>



<?php
	$request = "https://www.kimonolabs.com/api/bps730he?apikey=NaBkDGu2xJyEEoOftVtxQUBsfh6XJYty";
	$response = file_get_contents($request);
	$parsed_arr = json_decode($response, TRUE);


	$collection1=$parsed_arr['results']['collection1'];

		for($i=0;$i<count($collection1);$i++)
		{
			echo '<p><a href="'.$collection1[$i]['title']['href'].'" title="'.$collection1[$i]['title']['text'].'">'.$collection1[$i]['title']['text'].'</a></p>';

		}
?>



	
</body>
</html>