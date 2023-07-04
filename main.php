<?php

// // 標準入力を受け取る
// $ch = fgets(STDIN);

// for ($i = ord($ch); $i <= ord("Z"); $i++) {
//     // 標準入力を受け取る
//     echo chr($i);
//     // 標準入力を出力する
// }



//コマンドで打った文字を取得する
$num1 = $argv[1];

//正規表現で半角英字以外の文字が入力されたらエラーを出す

$count = 0;
if(preg_match('/[^A-Z]/u',$num1)){
    echo "Error";
} else {
    //同じようにfor文で回す
    for ($i = ord($num1); $i <= ord("Z"); $i++) {
        //標準入力を出力する
        $count++;
        echo chr($i);
    }
    // 改行を出力して、自動で改行をしたことを示す文字の出力を防ぐ
    echo "\n";
    echo PHP_EOL;
    echo $count;

}
