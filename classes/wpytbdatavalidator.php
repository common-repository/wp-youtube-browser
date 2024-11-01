<?php

/*public class for make number from invalid vars*//*public class for make number from invalid vars*//*public class for make number from invalid vars*/
/*public class for make number from invalid vars*//*public class for make number from invalid vars*//*public class for make number from invalid vars*/
/*public class for make number from invalid vars*//*public class for make number from invalid vars*//*public class for make number from invalid vars*/
/*public class for make number from invalid vars*//*public class for make number from invalid vars*//*public class for make number from invalid vars*/

class wpytbDataValidator{

	/*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*/
	/*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*/
	/*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*/
	/*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*//*make valid numbers in strings*/
	
	/*return: integer in string*/
	/*params: the var, allowed chars, default value, max value, min value*/
	
	public function iWantToBeNumber($number_in_string = '', $allowed_nums, $standard_value, $max, $min = null){
		if ( preg_match( "/[^".$allowed_nums.".]/", $number_in_string ) || $number_in_string == null ){
		$number_in_string = $standard_value;
		}
		else{
			$number_in_string = intval($number_in_string);
			if ($number_in_string > $max){
				$number_in_string = $max;
			}
			elseif($min != null && $number_in_string < $min){
				$number_in_string = $min;
			}
		}
		return $number_in_string;
	}
}
?>