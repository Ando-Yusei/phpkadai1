<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border ="1">
<tr>
    <th>日時</th>
    <th>名前</th>
    <th>Email</th>
    <th>住所</th>
    <th>電話番号</th>
</tr>

<?php
// ファイルを開く
$file = fopen('./data/data.txt','r');
// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    //第1=ターゲット⽂字, 第2=元の⽂字列
    $array = explode("," , $str);
    echo '<tr>';
    echo '<td>'.$array[0].'</td>';
    echo '<td>'.$array[1].'</td>';
    echo '<td>'.$array[2].'</td>';
    echo '<td>'.$array[3].'</td>';
    echo '<td>'.$array[4].'</td>';
    echo '</tr>';
}    

// ファイルを閉じる
fclose($openFile);
?>


</body>

</html>








