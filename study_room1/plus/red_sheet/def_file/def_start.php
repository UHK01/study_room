<?php
include('../../../def/all_php.php');
include('../../../def/plus.php');
$file_name = basename($_SERVER['REQUEST_URI']);

$data = detail_red_sheet($file_name);
if(empty($data)) {
    setcookie('error','エラー!この赤シートは見つかりませんでした。',['expires'=>time()+1,'path'=>'/']);
    header('Location: ../');
    exit();
}
$title = $data['display_name'];
if($data['active'] == 1) {
    setcookie('error','エラー!この赤シートはご利用いただけません。',['expires'=>time()+1,'path'=>'/']);
    header('Location: ../');
    exit();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../../def/html.php') ?>
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="akasheet">
        使い方
        <br>
        水色の部分をタップすることで答えが表示されます。
        <br>
        もう一度タップすると非表示になります。
        <br>
        一番下に全て表示及び全て隠すがあります。
        <br>
        ※全て機械で行っているためところどころにミスがあります。(見つけ次第修正はします)
        <hr>
        <div ontouchstart>