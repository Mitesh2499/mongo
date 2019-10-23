<?php
$client=new MongoClient();

$db=$client->mydb;
$col=$db->stud;

//Insert Records
//$doc1=array("roll"=>104,"name"=>"Groot");
//$col->insert($doc1);
/*
$docs=array(array("roll"=>105,"name"=>"Deadpool"),array("roll"=>106,"name"=>"Thor"));
foreach($docs as $doc)
{
	$col->insert($doc);
}

echo "Record Inserted";
*/


//Update Records
/*
$col->update(array("roll"=>103),array('$set'=>array("roll"=>101)));
echo "Record Updated";
*/

//Delete Records
$col->remove(array("roll"=>105),array('multi'=>1));
echo "Record deleted";

//Retrive Records
echo "Retrive Record";
$records=$col->find();
echo "<table>";
echo "<tr>
<th>Roll</th>
<th>Name</th>
</tr>";

foreach($records as $record)
{
	echo "<tr>";
	echo "<td>".$record["roll"]."</td>";
	echo "<td>".$record["name"]."</td>";
	echo "</tr>";

	
}
echo "</table>";
?>