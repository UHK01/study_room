<?php

if(empty($file_data)) {
    setcookie('error','エラー!ファイルが見つかりませんでした',['expires'=>time()+1,'path'=>'/']);
    header('Location: ../');
    // header('Location: ./error/404');
    exit();
}

if($file_data['status'] == 2) {
    setcookie('error','エラー!このファイルは削除されました',['expires'=>time()+1,'path'=>'/']);
    header('Location: ../');
    // header('Location: ./error/not_file');
    exit();
}

if($file_data['status'] == 1 && $file_data['plus'] == 0) {
    setcookie('error','エラー!このファイルは非公開です。',['expires'=>time()+1,'path'=>'/']);
    header('Location: ../');
    exit();
}

if($file_data['file_type'] == 0) {
    $add = '.pdf';
    $content_type = 'application/pdf';
} elseif($file_data['file_type'] == 1) {
    $add = '.png';
    $content_type = 'image/png';
} elseif($file_data['file_type'] == 2) {
    $add = '.jpg';
    $content_type = 'image/jpg';
} elseif($file_data['file_type'] == 3) {
    $add = '.jpeg';
    $content_type = 'image/jpeg';
} elseif($file_data['file_type'] == 4) {
    $add = '.mp4';
    $content_type = 'video/mp4';
}

$file_name = $file_data['file_name'];
$file_path = '../data/'.$file_data['folder_id'].'/data/'.$file_data['file_id'].$add;

if($file_data['file_type'] != 4) {
    header('Content-Type: '.$content_type);
    header('Content-Disposition: inline; filename="'.$file_name.'"');
    header('Content-Length: ' . filesize($file_path));
    readfile($file_path);
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../def/html.php');?>
    <title>動画再生</title>
</head>
<body>
    <div class="web" id="web">
        <video controls playsinline class=video><source src="<?php echo $file_path;?>" type="video/mp4">あなたのブラウザはvideoタグをサポートしていません。</video><br><br><a href="../">戻る</a>
    </div>
</body>
</html>