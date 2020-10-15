<?php
// 受け取り処理
$time = date("Y-m-d H:i:s");
$name = $_POST['name'];
$mail = $_POST['mail'];
$place = $_POST['place'];
$tel = $_POST['tel'];

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}



$file = fopen('./data/data.txt','a');
// ./ = write.php の親フォルダのことを指す。

// ①ファイルに書き込み

$str = $time .' '. $name.' '. $mail .' '. $place .' '. $tel;

//文字作成
fwrite($file, h($time).","); // \nで改行。これはシングルクォーテーションでは動かない
fwrite($file, h($name).","); 
fwrite($file, h($mail).",");
fwrite($file, h($place).",");
fwrite($file, h($tel)."\n");

// fwrite($file,$str."\n");
// fwrite($どこに,$なにを);
// "\n"==htmlのbr と同じ 改行

fclose($file);
// fclose(なにを何を閉じるのか);


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>

    <table><tr><?= $str ?></tr></table>

    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
