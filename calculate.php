<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>My mean grade is</h3>
	<?php 
		$maths=0;
		$english=0;
		$kiswahili=0;
		$physics=0;
		$chemistry=0;
		$biology=0;
		$geography=0;
		//then read variables from the HTML form
		$maths=$_POST["maths"];
		$english=$_POST["English"];
		$kiswahili=$_POST["Kiswahili"];
		$physics=$_POST["Physics"];
		$chemistry=$_POST["Chemistry"];
		$biology=$_POST["Biology"];
		$geography=$_POST["geography"];
		//we can now calculate the BMI
		$meangrade=($maths+$english+$kiswahili+$physics+$chemistry+$biology+$geography)/7;
		echo "<table>";


		echo "Maths ".$maths;
		echo "<br>";

		if($maths<30) {
		# code...
		echo "E";
		}
		elseif ($maths<50) {
		# code...
		echo "D";
		}
		elseif ($maths<60) {
		# code...
		echo "C";
		}
		elseif ($maths<70) {
		# code...
		echo "B";
	}
		elseif ($maths<=100) {
		# code...
		echo "A";
	}
		else{
		echo "A";
	}
	echo "<br>";
	echo "English ".$english;
		echo "<br>";

		if($english<30) {
		# code...
		echo "E";
		}
		elseif ($english<50) {
		# code...
		echo "D";
		}
		elseif ($english<60) {
		# code...
		echo "C";
		}
		elseif ($english<70) {
		# code...
		echo "B";
	}
		elseif ($english<=100) {
		# code...
		echo "A";
	}
		else{
		echo "A";
	}
	echo "<br>";
	echo "Kiswahili ".$kiswahili;
		echo "<br>";

		if($kiswahili<30) {
		# code...
		echo "E";
		}
		elseif ($kiswahili<50) {
		# code...
		echo "D";
		}
		elseif ($kiswahili<60) {
		# code...
		echo "C";
		}
		elseif ($kiswahili<70) {
		# code...
		echo "B";
	}
		elseif ($kiswahili<=100) {
		# code...
		echo "A";
	}
		else{
		echo "A";
		}
		echo "<br>";
		echo "Physics ".$physics;
		echo "<br>";

		if($physics<30) {
		# code...
		echo "E";
		}
		elseif ($physics<50) {
		# code...
		echo "D";
		}
		elseif ($physics<60) {
		# code...
		echo "C";
		}
		elseif ($physics<70) {
		# code...
		echo "B";
	}
		elseif ($physics<=100) {
		# code...
		echo "A";
	}
		else{
		echo "A";
	}
	echo "<br>";
		echo "Chemistry ".$chemistry;
		echo "<br>";

		if($chemistry<30) {
		# code...
		echo "E";
		}
		elseif ($chemistry<50) {
		# code...
		echo "D";
		}
		elseif ($chemistry<60) {
		# code...
		echo "C";
		}
		elseif ($chemistry<70) {
		# code...
		echo "B";
	}
		elseif ($chemistry<=100) {
		# code...
		echo "A";
	}
		else{
		echo "A";
	}
	echo "<br>";
		echo "Biology ".$biology;
		echo "<br>";

		if($biology<30) {
		# code...
		echo "E";
		}
		elseif ($biology<50) {
		# code...
		echo "D";
		}
		elseif ($biology<60) {
		# code...
		echo "C";
		}
		elseif ($biology<70) {
		# code...
		echo "B";
	}
		elseif ($biology<=100) {
		# code...
		echo "A";
	}
		else{
		echo "";
	}
	echo "<br>";
	echo "Geography ".$geography;
		echo "<br>";

		if($geography<30) {
		# code...
		echo "E";
		}
		elseif ($geography<50) {
		# code...
		echo "D";
		}
		elseif ($geography<60) {
		# code...
		echo "C";
		}
		elseif ($geography<70) {
		# code...
		echo "B";
	}
		elseif ($geography<=100) {
		# code...
		echo "A";
	}
		else{
		echo "";
	}
	echo "<br>";
	echo "MEANGRADE ".$meangrade;
	echo "<br>";

		if($meangrade<30) {
		# code...
		echo "E";
		}
		elseif ($meangrade<50) {
		# code...
		echo "D";
		}
		elseif ($meangrade<60) {
		# code...
		echo "C";
		}
		elseif ($meangrade<70) {
		# code...
		echo "B";
	}
		elseif ($meangrade<=100) {
		# code...
		echo "A";
	}
		else{
		echo "A";
	}
	echo "</table>";
	echo "<br>";

	 ?>
</body>
</html>