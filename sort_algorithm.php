<?php

// 標準入力からデータを読み込み、改行で分割して配列に格納
$input = explode("\n", file_get_contents("php://stdin"));

// 問題文
// 標準入力から受け取った整数のリストを昇順にソートして出力するプログラムを作成してください。ただし、ソートを直接行う関数の使用は禁止されています。

// 制約
// 整数のリストの長さは 1 <= N <= 10
// 各整数の範囲は -10000 <= a_i <= 10000
// 入力
// 1 行目に整数のリストの長さ N が与えられます。
// 2 行目にスペース区切りで N 個の整数 a_i (1 <= i <= N) が与えられます。
// 出力
// 昇順にソートされた整数のリストを、スペース区切りで 1 行に出力してください。

//標準入力された分for文を回す、与えられた分回す
// 隣り合う数を比較して、大きい方を左に持っていく
// 　→それを繰り返す

//配列の長さを取得
$length = $input[0];





// TODO: 結果を出力
echo $input[0];

?>