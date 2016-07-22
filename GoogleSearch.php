<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>    
  <title>Place Info Get</title> 
<style type="text/css">
a { color: #191970; text-decoration: none; font-family: 微軟正黑體}
a:hover { text-decoration: underline; color : #008B00; }
</style>
  </head>  
  <body style="background-color:#ffffff">
  <form action="GoogleSearch.php" method="get">
	<table>
	<tr><td>query:</td><td><input name='query' type='text' size='20'/></td></tr>
	<tr><td></td><td><input type="submit"></td></tr>
	</table>
	</form>
<?
	if( isset($query) )
	{
		$LisenceKey="AIzaSyCXTVNF_MdomnTNI8tk2X2_uytyokJ7glM"; 
		require_once("GoogleAPI/src/Google_Client.php");
		require_once("GoogleAPI/src/contrib/Google_CustomsearchService.php");
		
		$client = new Google_Client();
		$client->setApplicationName('Google CustomSearch PHP Starter Application');
		$client->setDeveloperKey($LisenceKey);
		$search = new Google_CustomsearchService($client);
		
		$result = $search->cse->listCse($_GET['query'], array(
		  'cx' => '010237709671417483262:o0v7-gn5pv0',
		));
		
		if ($result != null) {
			$count = $result["queries"]["request"][0]["count"];
			echo "<br>";
			$photo = 0;
			for($i=0; $i<$count; $i++)
			{
				if( $result["items"][$i]["pagemap"]["organization"][0]["photo"] != null && $photo == 0 )
				{
					echo "<center><img border=1 src=\"".$result["items"][$i]["pagemap"]["organization"][0]["photo"]."\" width=250></center><br>";
					$photo = 1;
				}
			}
			echo "<center><table width=250 align=center>";
			for($i=0; $i<$count; $i++)
			{
				echo "</tr><td valign=top style=\"font-size:12px\"><font color=#FFB90F>●</font></td><td style=\"font-size:12px\"> <a href=\"".$result["items"][$i]["link"]."\" target=balnk>".$result["items"][$i]["title"]."</a></td></tr>";
			}
			echo "</table></center>";
		}
	}
?>
  </body>
  </html>