<?php

/*function sum($max){
    
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        
        $result += $i;
    }
    
    return $result;
}

echo sum(100);
*/

//課題1
/*function twice($o){
    
    $result = $o*2;
    
    return $result;
}

echo twice(10)
*/

//課題2
/*function f($a, $b){
    
    $result = $a + $b;
    
    return $result;
}
echo f(3,5);
*/

//課題3
/*function f($arr){
    
    $result = $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
    
    return $result;
}
$array = [1,3,5,7,9];
echo f($array);
*/

//課題4

$arr = array (2,4,6,8);

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];

/* foreach($arr as $a){

if($max_number < $a){
    
    $max_number = $a;
    }
else{
    
    $max_number = $max_number;
    }

 return $max_number;
 }
 */
 }
 
 echo 3;
 
 //課題5
 /*
 $str = "<p>使ってみた</p>";
 echo strip_tags($str);
 */
 
 /*
 $array(1,3);
 array_push($array, 5, 7);
 */
 
/*$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
*/

/*
現在の Unix タイムスタンプを返す
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
*/

/*
日付を Unix のタイムスタンプとして取得する
mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] ) : int
*/

/*
ローカルの日付/時刻を書式化する
date ( string $format [, int $timestamp = time() ] ) : string
*/
?>