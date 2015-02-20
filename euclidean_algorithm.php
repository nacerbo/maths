<?php
// Index of the math revision
function euclidean_algorithm($a,$b){
	$a = (int) $a;
	$b = (int) $b;


	if($a < $b){
		$big_number 	= $b;
		$small_number 	= $a;
	}elseif ($a >= $b) {
		$big_number 	= $a;
		$small_number 	= $b;
	}

	$loop_r = array( -2 => array('modulus' 		=> $big_number) ,
					 -1 => array('modulus' 		=> $small_number) ,);

	$loop_b = true;
	$loop_i = 0;

	// bigger number will be divided on the smaller number we don't need to use $a and $b variables

	while ($loop_b) {
		$loop_i++;

		if ($loop_i == 1) 
		{
			$modulus = $big_number % $small_number ;
			$result  = (int) floor($big_number / $small_number);

			$old_modulus =  ($modulus == 0) ? $small_number : $modulus ;

			array_push($loop_r, array('modulus' 		=> $modulus,
									  'result' 			=> $result,
									  'bigger_number' 	=> $big_number,
									  'smaller_number'	=> $small_number ));
		}
		else
		{
		
			if ($modulus < $small_number) /* check who is the bigger :p */ 
			{
				$big_number   = $small_number; // the next number
				$small_number = $modulus;
			}
			elseif ($modulus > $small_number) // check who is the bigger :p 
			{
				$big_number   = $modulus;
				$small_number = $small_number;
			}

			$old_modulus = $modulus;
			$modulus = $big_number % $small_number;
			$result  = (int) floor($big_number / $small_number);

			array_push($loop_r, array('modulus' 		=> $modulus,
									  'result' 			=> $result,
									  'bigger_number' 	=> $big_number,
									  'smaller_number'	=> $small_number ));

		}
		if ($modulus == 0) {
			//echo "$old_modulus";
			$loop_r["PGCD"] = "$old_modulus";
			break;
		}
		
	}
	// debug purpose
	//echo "<pre>";
	//var_dump($loop_r);
	//echo "</pre>";
	return $loop_r;
}
