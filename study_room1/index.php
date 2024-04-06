<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('./def/html.php') ?>
    <title>勉強ルーム</title>
</head>
<body>
    <div class="web" id="web">
        <h1>勉強ルーム</h1>
        <?php if(!empty($_COOKIE['success'])){echo '<div class=success>'.$_COOKIE['success'].'</div>';}?>
        <?php if(!empty($_COOKIE['error'])){echo '<div class=error>'.$_COOKIE['error'].'</div>';}?>
        <span class=news>お知らせ</span>
        <div class="box" id="box">
            <div class=red>
                ...
            </div>
        </div>
        <br>
        <div class="file_list_title">ファイルリスト</div>
        <div class="list">
            <table class="files">
                <tr>
                    <th class="border file_name">ファイル名</th>
                    <th class="border status">状態</th>
                    <th class="border plus_box">プラン</th>
                    <th class="border tag">タグ</th>
                    <th class="border other">/</th>
                </tr>
                <?php foreach($data as $d): ?>
                    <?php if ($d['status'] == 0):?>
                        <tr>
                            <td class="border file_name"><?php echo $d['file_name'] ?></td>
                            <td class="border status"><span class="delete"><?php echo status($d['status'],$_SESSION['plus_active'],$d['plus']) ?></span></td>
                            <td class="border plus_box"><?php if($d['plus'] ==1){echo '<span class=plus>有料</span>';}else{echo '<span class=free>無料</span> ';} ?></td>
                            <td class="border tag"><?php $tag = tag_select($tags,$d);if(!empty($tag)){echo $tag['tag_name'];}else{echo 'その他';} ?></td>
                            <td class="border other"><a href="view?file_id=<?php echo $d['file_id'] ?>" class="manage">閲覧</a></td>
                        </tr>
                    <?php endif;?>
                <?php endforeach;?>
                <?php foreach($data as $d): ?>
                    <?php if ($d['status'] == 1):?>
                        <tr>
                            <td class="border file_name"><?php echo $d['file_name'] ?></td>
                            <td class="border status"><span class="delete"><?php echo status($d['status'],$_SESSION['plus_active'],$d['plus']) ?></span></td>
                            <td class="border plus_box"><?php if($d['plus'] ==1){echo '<span class=plus>有料</span>';}else{echo '<span class=free>無料</span> ';} ?></td>
                            <td class="border tag"><?php $tag = tag_select($tags,$d);if(!empty($tag)){echo $tag['tag_name'];}else{echo 'その他';} ?></td>
                            <td class="border"><a href="view?file_id=<?php echo $d['file_id'] ?>" class="manage">閲覧</a></td>
                        </tr>
                    <?php endif;?>
                <?php endforeach;?>
                <?php foreach($data as $d): ?>
                    <?php if ($d['status'] == 2):?>
                        <tr>
                            <td class="border file_name"><?php echo $d['file_name'] ?></td>
                            <td class="border status"><span class="delete"><?php echo status($d['status'],$_SESSION['plus_active'],$d['plus']) ?></span></td>
                            <td class="border plus_box"><?php if($d['plus'] ==1){echo '<span class=plus>有料</span>';}else{echo '<span class=free>無料</span> ';} ?></td>
                            <td class="border tag"><?php $tag = tag_select($tags,$d);if(!empty($tag)){echo $tag['tag_name'];}else{echo 'その他';} ?></td>
                            <td class="border"><a href="view?file_id=<?php echo $d['file_id'] ?>" class="manage">閲覧</a></td>
                        </tr>
                    <?php endif;?>
                <?php endforeach;?>
            </table>
        </div>
        <br>
        <a href="./source_code_info" class="manage">当サイトについて</a>
    </div>
</body>
</html>
