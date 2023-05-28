<?php 
date_default_timezone_set("Asia/Kolkata");
include "includes/config.php";
header('Content-Type: text/xml');
$feed="<?xml version='1.0' encoding='utf-8'?>
<rss version='2.0' xmlns:content='http://purl.org/rss/1.0/modules/content/' xmlns:dc='http://purl.org/dc/elements/1.1/'>

	<channel>
		<title>Birdlights Blog</title>
		<link><![CDATA[https://birdlights.com]]></link>
		<description>Here you will get to see and read many good reviews, national and international news, sports news, social news, all kinds of information through birdlights.com.</description>";
$sql="SELECT * FROM post WHERE visibility=1";
$result=$conn->query($sql);
if($result->num_rows>0){
    
while ($row=$result->fetch_assoc()) {
	

	$feed.=	"<item>
			<guid isPermaLink='false'>".$row['id']."</guid>
			<title>".$row['title']."</title>
			<link>https://birdlights.com/".$row['url_slug']."</link>
			<dc:creator>Administrator</dc:creator>
			<description>".$row['meta_desc']."</description>
			<pubDate>".$row['date']."</pubDate>";
if(!empty($row['thumbnail'])){
	$feed.=	"<enclosure url='https://birdlights.com/image/".$row['thumbnail']."' />";
}
	$feed.=	"</item>";
}
}
echo $feed.="	</channel>
</rss>";



?>