<?php
//function loadFromXML(){
	//$data;
	$data=array();
	$xml=simplexml_load_file("offices.xml") or die("Error: Cannot create object");
	//print_r($xml);
	foreach($xml->ofc as $st)
	{
		$ar=array();
			$ar["area"]=(string)$st->area;
			$ar["city"]=(string)$st->city;
			$ar["zip"]=(string)$st->zip;
			$data[]=$ar;
	}
	
	foreach($data as $v){
		echo "<p>";
		echo "area: ".$v["area"]."</br>";
		echo "city: ".$v["city"]."</br>";
		echo "Zip Code: ".$v["zip"]."</br>";
		echo "</p>";
		echo "<hr>";
	}
	if(sizeof($data)==0)
		echo "Not found";
	
	

?>