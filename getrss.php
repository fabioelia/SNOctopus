<<<<<<< HEAD
<?php//get the q parameter from URL$q=$_GET["q"];//find out which feed was selected

if($q=="Blog")  {  $xml=("http://snoctopus.blogspot.com/rss.xml");  }else if($q=="Google")  {  $xml=("http://news.google.com/news?ned=us&topic=h&output=rss");  }elseif($q=="MSNBC")  {  $xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");  }$xmlDoc = new DOMDocument();$xmlDoc->load($xml);//get elements from "<channel>"$channel=$xmlDoc->getElementsByTagName('channel')->item(0);$channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;$channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;$channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;//output elements from "<channel>"echo("<p><a href='" . $channel_link  . "'>" . $channel_title . "</a>");echo("<br />");echo($channel_desc . "</p>");//get and output "<item>" elements$x=$xmlDoc->getElementsByTagName('item');for ($i=0; $i<=2; $i++)  {  $item_title=$x->item($i)->getElementsByTagName('title')  ->item(0)->childNodes->item(0)->nodeValue;  $item_link=$x->item($i)->getElementsByTagName('link')  ->item(0)->childNodes->item(0)->nodeValue;  $item_desc=$x->item($i)->getElementsByTagName('description')  ->item(0)->childNodes->item(0)->nodeValue;  echo ("<p><a href='" . $item_link  . "'>" . $item_title . "</a>");  echo ("<br />");  echo ($item_desc . "</p>");  }?>
=======
<?php
	/*****************
	*
	*       file:       getrss.php
	*		Revision:	0.1
	*       authors:    Fabio Elia, Lior Ben-kiki, Evan Cordeiro,
	*					Thomas Norden, Royce Stubbs, Elmer Rodriguez 
	*       license: 	GPL v3 
	*
	******************/


	//get the q parameter from URL
	$q=$_GET["q"];

	//find out which feed was selected
	if($q=="Blog")  
	{  
		$xml=("http://snoctopus.blogspot.com/rss.xml");  
	}
	else if($q=="Google")  
	{  
		$xml=("http://news.google.com/news?ned=us&topic=h&output=rss");  
	}
	elseif($q=="MSNBC")  
	{  
		$xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");  
	}
	elseif($q=="phd")  
	{  
		$xml=("http://www.phdcomics.com/gradfeed.php");  
	}
	elseif($q=="cs451")  
	{  
		$xml=("http://cs451-sp11.wikispaces.umb.edu/message/xml/Assignment+2+-+Scanning?v=rss_2_0&feedHashUsername=Lior.Benkiki001&feedHash=65243309d301cf3540e193a5c1f5d4e7a1e0cef3");  
	}

	


	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	//get elements from "<channel>"
	$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
	$channel_title= $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
	$channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
	$channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

	//output elements from "<channel>"
	echo("<p><a href='" . $channel_link  . "'>" . $channel_title . "</a>");
	echo("<br />");echo($channel_desc . "</p>");

	//get and output "<item>" elements
	$x=$xmlDoc->getElementsByTagName('item');
	for ($i=0; $i<=2; $i++)  
	{  
		$item_title=$x->item($i)->getElementsByTagName('title')  ->item(0)->childNodes->item(0)->nodeValue;  
		$item_link=$x->item($i)->getElementsByTagName('link')  ->item(0)->childNodes->item(0)->nodeValue;  
		$item_desc=$x->item($i)->getElementsByTagName('description')  ->item(0)->childNodes->item(0)->nodeValue;  
		echo ("<p><a href='" . $item_link  . "'>" . $item_title . "</a>");  
		echo ("<br />");  echo ($item_desc . "</p>");  
	}
?>
>>>>>>> 668c9607ad5ff441967e3940d782ad1ea4257728
