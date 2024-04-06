<?php
include('../../def/all_php.php');
include('../../def/plus.php');
$data = list_red_sheet_2();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../def/html.php') ?>
    <title>赤シート</title>
</head>
<body>
    <div class="web" id="web">
        <h1>赤シート一覧</h1>
        <?php if(!empty($_COOKIE['success'])){echo '<div class=success>'.$_COOKIE['success'].'</div>';}?>
        <?php if(!empty($_COOKIE['error'])){echo '<div class=error>'.$_COOKIE['error'].'</div>';}?>
        <?php foreach($data as $d): ?>
            <div><a href="./data/<?php echo $d['file_name']; ?>"><?php echo $d['display_name'] ?></a></div>
        <?php endforeach;?>
        <br>
        <br>
        <a href="../">戻る</a>
    </div>
</body>
</html>