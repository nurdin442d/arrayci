<!DOCTYPE html>
<html>
<head>
	<title>Logic Array</title>
</head>
<body>
<?php
$arr1 = array('A', 'B', 'D', 'E', 'G', 'H', 'I', 'R', 'Q', 'O', 'N', 'K', 'S', 'T', 'U', 'V', 'Y');
$arr2 = array(32, 26, 37, 28, 27, 34, 31, 30, 41, 37, 25, 37, 33, 24, 27, 35, 34, 30, 36, 41, 24, 31, 26, 41, 33, 37, 40, 38, 41, 34, 30, 41, 40, 30, 24, 41, 39, 31, 31, 29, 28);


echo "<H2>Data Asli</H2>";
for($i=0; $i < count($arr1); $i++){
      echo $arr1[$i];
      echo " ,";
}
echo '<br/>';
for($i=0; $i < count($arr2); $i++){
      echo $arr2[$i];
      echo ",";
}
echo '<br/>';
echo '<br/>';


/// Logic 1
echo "<H2>Logic 1</H2>";
sort($arr1);
sort($arr2);
 for($i=0; $i < count($arr1); $i++){
      echo $arr1[$i];
      echo " ,";
}
echo '<br/>';
for($i=0; $i < count($arr2); $i++){
      echo $arr2[$i];
      echo ",";
}
echo '<br/>';
echo '<br/>';


///Logic 2
echo "<H2>Logic 2</H2>";
$duplikat = array_count_values($arr2);
echo 'Jumlah Data Yang Memiliki Data Duplikat: '.count($duplikat).'<br>';
print_r($duplikat);
echo '<br/>';
echo '<br/>';

     
///Logic 3
echo "<H2>Logic 3</H2>";
function findDuplicates($count) {
        return $count < 2;
    }
$nonduplikat = array_filter(array_count_values($arr2), "findDuplicates");
echo 'Jumlah Data Yang Tidak Memiliki Data Duplikat: '.count($nonduplikat).'<br>';
print_r($nonduplikat);
echo '<br/>';
echo '<br/>';


///Logic 4 
echo "<H2>Logic 4</H2>";
$hurufkecil = array_map('strtolower', $arr1);
for($i=0; $i < count($hurufkecil); $i++){
      echo $hurufkecil[$i];
      echo " ,";
}
echo '<br/>';
echo '<br/>';


//logic 5
echo "<H2>Logic 5</H2>";

	$total_data = array_sum($arr2);
	$rata_rata = number_format($total_data/count($arr2),2);
	$min = max($arr2);
	$max = min($arr2);

		echo "Total Data : ".$total_data."<br/>";
		echo "Rata-Rata : ".$rata_rata."<br/>";
		echo "Min : ".$min."<br/>";
		echo "Max : ".$max."<br/>";
	echo '<br/>';
	echo '<br/>';


///logic 6
echo "<H2>Logic 6</H2>";
function filterganjil($arr2) 
{ 
    return ($arr2 & 1); 
} 
   
function filtergenap($arr2) 
{ 
    return !($arr2 & 1); 
} 
  
$ganjil = array_filter($arr2, "filterganjil");  
$genap = array_filter($arr2, "filtergenap"); 
$ganjil = array_values(array_filter($ganjil)); 
$genap = array_values(array_filter($genap)); 
  
 
echo "Bilangan Ganjil : <br/>"; 
for($i=0; $i < count($ganjil); $i++){
      echo $ganjil[$i];
      echo " ,";
}
echo '<br/>';

echo "Bilangan Genap : <br/>"; 
for($i=0; $i < count($genap); $i++){
      echo $genap[$i];
      echo " ,";
}

echo '<br/>';
echo '<br/>';

/// Logic 7
echo "<H2>Logic 7</H2>";

foreach ($arr1 as $row) {
 if(preg_match('/^[AIUEO]/', $row[0]))
  {
   echo $row[0] ." = vokal <br >" ;
  }
  else
  {
  echo $row[0] ." = konsonan <br >";
 }
}



?>

</body>
</html>