<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

	<!-- no 3 -->
	<?php
function filterarray($input, $query) {
  $jadi = array();

  foreach ($query as $word) {
    $count = 0;

    foreach ($input as $item) {
      if ($word == $item) {
        $count++; // menambah jumlah kemunculan jika ditemukan
      }
    }

    $jadi[] = $count; // menambahkan jumlah kemunculan ke dalam array hasil
  }

  return $jadi; // mengembalikan array hasil
}

$input = array('xc', 'dz', 'bbb', 'dz');
$query = array('bbb', 'ac', 'dz');
$jadi = filterarray($input, $query);
var_dump($jadi); // Array ( [0] => 1 [1] => 0 [2] => 2 )

echo "<br>";
echo "<br>";
//no4
function diagonalDifference($arr) {
    $n = count($arr);
    $leftSum = 0;
    $rightSum = 0;

    for ($i = 0; $i < $n; $i++) {
        // Menghitung jumlah elemen diagonal kiri ke kanan
        $leftSum += $arr[$i][$i];
        // Menghitung jumlah elemen diagonal kanan ke kiri
        $rightSum += $arr[$i][$n - $i - 1];
    }

    // Menghitung selisih kedua diagonal
    $result = abs($leftSum - $rightSum);

    return $result;
}

$matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]];
$result = diagonalDifference($matrix);
echo "Hasil = " . $result; // Output: Hasil = 3
?>

</body>

<script>
 //2
    function reverseString() {
 var currentString = 'NEGIE1';
 var newString = '';
for (let i = 4 ; i >= 0; i--) {
  newString = newString + currentString[i];
 }
 
 return newString + 1;
}
console.log(reverseString());

//3
function longestLength(str) {
  str = str.split(' ');
  const wordLengthArr = str.map(word => word = word.length);
  return Math.max(...wordLengthArr);
}
console.log(longestLength("Hello I love JavaScript"));



   

</script>

</html>