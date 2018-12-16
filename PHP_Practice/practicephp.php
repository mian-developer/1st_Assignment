<?php
//Printing Simple Text
echo "Practicing PHP Basics <br>";

echo "<br>";

//Printing For Loop
echo "<h3>For Loop PHP Basics</h3>";
echo "<br>";
for ($i=0; $i<5; $i++){
	echo "Numbers are : $i <br>";
}


//Printing While Loop 
echo "<br>";echo "<br>";

echo "<h3>While Loop PHP Basics</h3>";
echo "<br>";

$i=0;
While ( $i<5 ){
	echo "Numbers are : $i <br>";

	$i++;
}

//Printing Do While Loop 
echo "<br>";echo "<br>";

echo "<h3>Do While Loop PHP Basics</h3>";
echo "<br>";
$i=0;
do{
	echo "Numbers are : $i <br>";
    $i++;
}
While ( $i<5 );

//Printing Array 
echo "<br>";echo "<br>";

echo "<h3>Array's PHP Basics</h3>";
echo "<br>";
$arr=array(1,2,3,4);
foreach ($arr as  $value) {
	echo "Array value: $value <br>";
}


?>