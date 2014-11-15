<?php
// some examples
// ax²+bx+c
// 4x²-3x+5 no solutions
// x²-x+1 no solutions
function delta($a,$b=1,$c=0)
{
	
	if (is_numeric($a) & $a!==0 & is_numeric($b) & is_numeric($c)) {

		$delta= ($b*$b) - 4*($a)*($c);

		if (($a+$b+$c)==0  ) {
			echo " delta = $delta ; first X = 1 and second X = $c/$a = ".$c/$a;
		}
		
		elseif ($delta>=0) 
		{
			$x1=(-$b- sqrt($delta))/(2*$a);
			$x2=(-$b+ sqrt($delta))/(2*$a);
			$s=array('x1'=>$x1,'x2'=>$x2);
			echo 'delta = '.$delta.' ; <br />x1 = '.$s['x1'].'<br />x2 = '.$s['x2'];
		}
		elseif ($delta<0) 
		{
			echo 'delta = '.$delta."  ; x1 = (".-$b." + i* square root of (".-$delta."))/".($a*2)."";

		}
	 	
	}// main if
	else{
		echo "Please enter a numbers without characters Or your first value is 0 ^^";
	}
}
// for testing and debugin 
delta(4,-3,5);
