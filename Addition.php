<?php
	
	class Addition{
		public function filter($data){
			$first = $data['firstNumber'];
        	$second = $data['secondNumber'];
        	$third = $data['thirdNumber'];
        	$forth = $data['forthNumber'];
        	$last = $data['lastNumber'];
        	$result = $first+$second+$third+$forth+$last;
        	return $result;
		}
	}
?>