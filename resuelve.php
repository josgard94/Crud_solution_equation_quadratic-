<?php

	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];

	function resolver_ecuacion($a, $b, $c)
	{
		$auxiliar  = (pow($b,2) - (4 * $a * $c));

		if($auxiliar >= 0)
		{
			$x1 = (-$b + sqrt($auxiliar)) / (2 * $a);
			$x2 = (-$b - sqrt($auxiliar)) / (2 * $a);

			if($x1 == $x2)
			{
				echo "ecuación con solución unica x:".$x1."<br>";
			}
			else
			{
				echo "Soluciones de la ecaución <br> x1: ".$x1."<br>x2: ".$x2."<br>";
			}
		}
		else
		{
			echo "Ecuación  con raices imaginarias";
		}
	}

	if($a == '0')
	{
		//throw new Exception("Error de división por cero");
		echo '2';
	}
	elseif($b == '0' || $c == '0')
	{
		resolver_ecuacion($a, $b, $c);
	}
	elseif(empty($a) || empty($b) || empty($c))
	{
		//echo "Llene todos los campos";
		echo "1";
	}
	else
	{
		resolver_ecuacion($a, $b, $c);
	}

?>