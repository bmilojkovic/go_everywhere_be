<?php

function obradiUlaz0($text){
	$elements=explode("]",$text[0]);

	for($i=0; $i<count($elements)-1;$i++)
	{
		$property = explode("[", $elements[$i]);
		
		$value=$property[1];
		//var_dump($property);
		switch($property[0])
		{
			case "SZ":
				$game["size"]=$property[1];
				
				break;
			case "KM":
				$game["komi"]=$property[1];
				
				break;
			case "R":
				$game["result"]=$property[1];
			
				break;
		}
		
	}
	echo json_encode($game);
	return 1;
}

function obradiUlaz1($text){
	$moves=array();
	$text[1] = substr($text[1], 1);
	$text[1]=substr($text[1],0,strlen($text[1])-1);
	
	
	$elements=explode("];",$text[1]);
	
	
	//var_dump($elements);
	for($i=0; $i<count($elements);$i++)
	{
		$property = explode("]", $elements[$i]);
		if(count($property)>1)
		{
			$keyValue = explode("[", $property[0]);
		
			//var_dump($keyValue);
			$comment = explode("[", $property[1]);
			transform($keyValue,$comment,$moves,$i);
			//var_dump($keyValue);
			
		}
		else
		{
			
		$keyValue = explode("[", $property[0]);
		//var_dump($keyValue);
		transform($keyValue,null,$moves,$i);
			
		}
			
	}
	
	echo json_encode($moves);
	
	
	return 2;
}

function transform($element,$comment,&$moves,$i){
	

		$moves[$i]["color"]=$element[0];
		$moves[$i]["move"]=$element[1];
		if($comment!=null)
		{
			$moves[$i]["comment"]=$comment[1];
		}
		
	var_dump($moves);
	
}

?>