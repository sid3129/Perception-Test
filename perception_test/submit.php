<html>
<body>
<?php
	$str="";
	$filename="";
	$contents = "";
	
//	echo print_r($_POST);
	
	foreach($_POST as $x => $x_value)
	{
		if($x=="username")
			$username = $x_value;
		else if($x=="age")
			$age= $x_value;
		else if($x=="sex")
			$sex= $x_value;
		else if($x=="test")
			$test= $x_value;
		else
			{
				$temp = substr($x,0,4);
				if($temp =="type")
					$str=$str."File = " . $x ."     type = " .$x_value.chr (13). chr (10);
				else
				$str=$str."File = " . $x . ", Description =" . $x_value. "    ";
			}	
	}
	
	$contents = $contents."username = " .$username.chr (13). chr (10);
	$contents = $contents."age = " .$age.chr (13). chr (10);
	$contents = $contents."sex = " .$sex.chr (13). chr (10);
	$contents = $contents."test = " .$test.chr (13). chr (10);
	$contents = $contents.$str;
	$contents = $contents."--------------------".chr (13).chr (10); //delimiter
	

	$filename = "user_responses.txt";
	
	$myfile = fopen($filename, "a") or die("Unable to open file!");
	fwrite($myfile, $contents."\n");
	fclose($myfile);
	
	echo "your response has been saved  ";
	
	
	
?>
</body>
</html>