<?php
$title = $_POST["title"];
$core = $_POST["core"];
$hihyazi = isset($_POST['hihyaozi']);
$d = date("Y/m/d");
if(file_exists($title.".php")){
    echo "すでに同じ名前のサイトが存在します";
    $title = "";
    $core = "";
} else{
    if(!strlen($title) || !strlen($core)){
        echo "タイトルか本文を入力してください";
    } else{
        if($hihyazi){  // 非表示のチェックボックスについていたら
            // homeにリンクを追加しない
            $dw = $title.".php";
        $nai = "<title>".$title."</title>".$core;
        // 本文ファイル
        file_put_contents($dw, $nai, FILE_APPEND);
        $title = "";
        $core = "";
        $dw = "";
        } else{
        $dw = $title.".php";
        $nai = "<title>".$title."</title>".$core;
        // 本文ファイル
        file_put_contents($dw, $nai, FILE_APPEND);
        // homeにリンクを追加
        file_put_contents("index.html", "\n<a href=".$dw.">".$title."</a> ".$d."<br />", FILE_APPEND);
        $title = "";
        $core = "";
        $dw = "";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サイトを作成したかしてないか</title>
</head>
<body>
    <a href="index.html">戻る</a>
</body>
</html>
