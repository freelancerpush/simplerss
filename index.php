<?php
$html = "";
$url = "https://news.google.com/news?cf=all&hl=en&pz=1&ned=in&topic=b&output=rss";
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
	$pubDate = $xml->channel->item[$i]->pubDate;
	
    $html .= "<a href='$link' target='_blank'><h3>$title</h3></a>";
	$html .= "$description";
	$html .= "<br />$pubDate<hr />";
}
echo $html;
?>