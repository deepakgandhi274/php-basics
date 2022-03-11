<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php   

		$person=array("name"=>"Rajeev babu","age"=>31,"address"=>"Delhi","salary"=>56000);
		echo "<pre>";
		print_r($person);
		foreach ($person as $key => $value) {
			// code...

			echo "$key and $value <br/>";
		}
		echo "<pre>";
		foreach($person as $val)
		{
			echo "$val <br/>";
		}
		echo $person['name'];
		echo $person['address'];
	    

	    echo "<br/>";
	    $info=array(
	    	"Rajeev"=>array("name"=>"rajeev","age"=>31,"mob_no"=>4565677),
	    	"Raju"=>array("name"=>"raju","age"=>30,"mob_no"=>4565676),
	    	"Rajesh"=>array("name"=>"rajesh","age"=>33,"mob_no"=>4565675),
	    	"Ravi"=>array("name"=>"ravi","age"=>21,"mob_no"=>4565674)
	    );
	    echo "<pre>";
	    print_r($info);

	    foreach($info as $key => $value)
	    {
	    	// echo "$key and $value <br/>";
	    	foreach ($value as $key => $value) {
	    		// code...
	    		 echo "$key and $value <br/>";
	    	}
	    	// print_r($value);
	    }

	    echo $info['Rajeev']['age'];

?>
</body>
</html>