<?php
$data=array();
include("lib.php");
$sql="select * from admindata where email='".$_REQUEST["email"]."'";
//echo $sql;
loadFromMySQL($sql);


//print_r($data);
foreach($data as $v){
	echo "<p>";
	echo "<b>".$v["email"]."</b> is already taken ";
	echo "</p>";
}
if(sizeof($data)==0)
	echo "Not found";
//print_r($data);
$s="abc";
for($i=0;$i<1000000;$i++){
	$s.="abc";
}
?>