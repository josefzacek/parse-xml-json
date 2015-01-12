<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parse XML in PHP</title>
</head>
<body>
	
<h1>The latest news parsed from strickybottle.com - feedburner </h1>


<?php
  $xml = simplexml_load_file('http://feeds.feedburner.com/StickyBottle') or die("feed not loading");

    foreach ($xml->channel->item as $pixinfo):
 		$pubDate=$pixinfo->pubDate;
        $title=$pixinfo->title;
		$link=$pixinfo->link;
		$description=$pixinfo->description;

		$date = substr($pubDate, 0, -9);
		$description_link = str_replace("[&#8230;]","<a href='$link'>.., read more...</a>", $description);

			echo "<p><strong><a href='$link'>" . $title . "</a></strong></p>";
			echo "<p><small>Published on: " . $date . "</small></p>";
			echo "<p>" . $description_link . "</p>";

    endforeach;

?>
</body>
</html>