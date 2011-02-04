<?
 function loadXmlDoc($xmlpath)
	{
			$doc = new DOMDocument();
			//$doc->validateOnParse = true;
			$doc->load($xmlpath);
			
			return $doc;
	}

	function getNews($id, $xml) {
		
		$doc = loadXMLDoc($xml);

		//$xml = simpledom_load_file($xml);

		$news = $doc->getElementsByTagName( "new" );

		//$news = $xml->sortedXPath('//new', 'date', SORT_DESC);

		$output = array();

		if ($id)
		{
			//$doc->validateOnParse = true;
			//echo "entro\r\n";
			$new = $doc->getElementById($id);

			if ($new != null)
			{
			
				$output [] = array(

					'id' => $new->getAttributeNode('xml:id')->nodeValue,

					'date' => $new->getElementsByTagName( "date" )->item(0)->nodeValue,

					'title' => htmlspecialchars_decode($new->getElementsByTagName( "title" )->item(0)->nodeValue),

					'description' => $new->getElementsByTagName( "description" )->item(0)->nodeValue,
					);
			}
			else
				$output [] = null;
		}
		else
		{

			foreach( $news as $new )
			{
				
				list($dd, $mm, $yyyy) = explode('/', $new->getAttributeNode('date')->nodeValue);

				$noewdate = mktime(0,0,0,$mm, $dd, $yyyy);
				$noewdate.= $new->getAttributeNode('xml:id')->nodeValue;


				//var_dump($new);
				$output[$noewdate] = array(
				
				
				'id' => $new->getAttributeNode('xml:id')->nodeValue,

				'date' => $new->getElementsByTagName( "date" )->item(0)->nodeValue,

				'title' => htmlspecialchars_decode($new->getElementsByTagName( "title" )->item(0)->nodeValue),

				'description' => $new->getElementsByTagName( "description" )->item(0)->nodeValue,
				
/*
				'date' => $new['date'],
				
				'title' => $new['title'],

				'description' => $new['description'],
*/				
				);

			}
		}
		
		//var_dump(krsort($output));
		krsort($output);
		$return = array();
		foreach ($output as $key)
			array_push($return, $key);
		return $return;
	}
	
	function writeNews ($date, $title, $description, $xml)
	{
		$doc = loadXMLDoc($xml);
		
		$news [] = array(
			'date' => $date,
			'title' => stripslashes(htmlentities($title, ENT_QUOTES)),
			'description' => $description,
		);
			
		$doc->formatOutput = true;

		$r = $doc->documentElement;
		//$doc->appendChild( $r );

		foreach( $news as $new )
		{
			$b = $doc->createElement( "new" );
			
			$b->setAttribute('xml:id', 'news_'.(getLastNewsId($xml) + 1));

			$b->setAttribute('date', $date);
			
			$author = $doc->createElement( "date" );
			$author->appendChild(
			$doc->createTextNode( $new['date'] )
			);
			$b->appendChild( $author );

			$title = $doc->createElement( "title" );
			$title->appendChild(
			$doc->createTextNode( $new['title'] )
			);
			$b->appendChild( $title );

			$publisher = $doc->createElement( "description" );
			$publisher->appendChild(
				$doc->createTextNode( $new['description'] )
				);
			$b->appendChild( $publisher );

			$r->appendChild( $b );
		}
		

		if ($doc->save($xml))
			return true;
		
	}
	
	function getLastNewsId($xml)
	{
		$doc = loadXMLDoc($xml);
		
		$news = $doc->getElementsByTagName( "new" );
		
		$newsA = array();
		
		foreach ($news as $new)
		{
			array_push($newsA, $new->getAttributeNode('xml:id')->nodeValue);
		}
		
		$lastNews = substr(end($newsA), 5, strlen(end($newsA)));
		
		return (int)$lastNews;
	}

	function updateNews($id, $date, $title, $description, $xml)
	{
		$doc = loadXMLDoc($xml);

		$root  = $doc->documentElement;

		$ori = $doc->getElementById($id);

		$date_     = $doc->createElement("date");
		$dateText_ = $doc->createTextNode($date);
		$date_->appendChild($dateText_);

		$title_     = $doc->createElement("title");
		$titleText_ = $doc->createTextNode(stripslashes(htmlentities($title, ENT_QUOTES)));
		$title_->appendChild($titleText_);

		$description_     = $doc->createElement("description");
		$descriptionText_ = $doc->createTextNode($description);
		$description_->appendChild($descriptionText_);
		
		$new   = $doc->createElement("new");
		$new->setAttribute('xml:id', $id);
		$new->setAttribute('date', $date);
		$new->appendChild($date_);
		$new->appendChild($title_);
		$new->appendChild($description_);
		
		//var_dump($new);
		
		$root->replaceChild($new,$ori);

		if ($doc->save($xml))
			return true;

	}

	function deleteNews($id,$xml)
	{
		$doc = loadXMLDoc($xml);

		$root  = $doc->documentElement;

		$ori = $doc->getElementById($id);

		$root->removeChild($ori);

		if ($doc->save($xml))
			return true;

	}
?>