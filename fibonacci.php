
<?php


$count = 0;

//コマンドで打った文字を取得する
$num1 = intval(fgets(STDIN));

$index[0] = 0;
$index[1] = 1;
for($i = 2; $i <= $num1; $i++){
    $index[$i] = $index[$i-1] + $index[$i-2];
}
echo $index[$num1-1];

// if($num1 ==0){
//     echo $index[0];
// } else if($num1 ==1){
//     echo $index[1];
// } else {
// }

?>
