<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
 
$selectName = "Selina";
 
require_once './src/Google_Client.php';
require_once './src/contrib/Google_CustomsearchService.php';
session_start();

$client = new Google_Client();
$client->setApplicationName('Google CustomSearch PHP Starter Application');
// Docs: http://code.google.com/apis/customsearch/v1/using_rest.html
// Visit https://code.google.com/apis/console?api=customsearch to generate
// your developer key (simple api key).
$client->setDeveloperKey('AAIzaSyCXTVNF_MdomnTNI8tk2X2_uytyokJ7glM');
$search = new Google_CustomsearchService($client);

// Example executing a search with your custom search id.
$getNextIndex = 55;
$result = $search->cse->listCse($selectName, array('cx' => '010237709671417483262:o0v7-gn5pv0', 'searchType' => 'image', 'start' => $getNextIndex));

//$totalResults = $result["queries"]["nextPage"]["totalResults"];
$totalResults = 100;

for( $j=0; $j<($totalResults/10); $j++ )
{
	echo $i." getNextIndex:".$getNextIndex;
	if ($result != null)
	{
		print "<pre>" . print_r($result, true) . "</pre>";
		$count = $result["queries"]["request"][0]["count"];
		echo "<br>";
		$photo = 0;
		for($i=0; $i<$count; $i++)
		{
			echo $i."<br>";
			echo "<img border=1 src=\"".$result["items"][$i]["link"]."\" width=250><br>";
			//file_put_contents('./image/'.$getNextIndex.'.jpg', file_get_contents($result["items"][$i]["link"]));
			//$getNextIndex = $getNextIndex + 1;			
		}
	}
	echo "<br>".$getNextIndex;
	$result = $search->cse->listCse($selectName, array('cx' => '010237709671417483262:mt2rrvj6sjw', 'searchType' => 'image', 'start' => $getNextIndex));	
}
?>