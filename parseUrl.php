<?php
require_once('../workbench/php/includes/OpenGraph.php');

$graph = OpenGraph::fetch('http://localhost/notes/en/math/single-variable-calculus/integration/anitdifferentiation');
var_dump($graph->keys());
var_dump($graph->schema);

foreach ($graph as $key => $value) {
	echo $key . ' = ' . $value . '<br/>';
}
// Get cURL resource
//$curl = curl_init();
// Set some options - we are passing in a useragent too here
//curl_setopt_array($curl, array(
//		CURLOPT_RETURNTRANSFER => 1,
///		CURLOPT_URL => 'http://testcURL.com/?item1=value&item2=value2',
//		CURLOPT_USERAGENT => 'User Agent X'
//));
// Send the request & save response to $resp
//$resp = curl_exec($curl);
// Close request to clear up some resources
//curl_close($curl);

//print($resp);

//$response = http_get("http://www.example.com/", array("timeout"=>1), $info);
//print_r($info);



//$doc = new DomDocument();
//$doc->loadHTML('http://www.npr.org/2018/11/04/660299276/beyond-plastic-bans-creating-products-to-replace-it');
//$xpath = new DOMXPath($doc);
//$query = '//*/meta';
//$metas = $xpath->query($query);
//$rmetas = array();
//foreach ($metas as $meta) {
///	$property = $meta->getAttribute('property');
//	$content = $meta->getAttribute('content');
//	if(!empty($property) && preg_match('#^og:#', $property)) {
///		$rmetas[$property] = $content;
//	}
//}
//var_dump($rmetas);
?>
