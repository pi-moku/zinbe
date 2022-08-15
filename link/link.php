<?php
$url = $_POST["url"];
$title = $_POST["title_link"];
if(!strlen($url) || !strlen($title)){
    echo "urlかtitleを入力してください<br />";
    $url = "";
    $title = "";
} else{
    $why = file_get_contents($url);
    if(!$why){
        echo "存在するurlを入力してください<br />";
        $url = "";
        $title = "";
        $why = "";
    } else{
        $core = "\n<a href=".$url.">".$title."</a><br />";
        file_put_contents("link.html", $core, FILE_APPEND);
        $title = "";
        $url = "";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後</title>
</head>
<body>
    <a href="link.html">リンクを貼ろうに戻る</a><br />
    <a href="http://localhost/zinbe/index.html">zinbe サイト作成に戻る</a><br />
</body>
</html>
