<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../def/html.php') ?>
    <title>Plus</title>
</head>
<body>
    <div class="web" id="web">
        <?php if(empty($_SESSION['plus_active'])):?>
            <h1>有料プラン</h1>
            <?php if(!empty($_COOKIE['success'])){echo '<div class=success>'.$_COOKIE['success'].'</div>';}?>
            <?php if(!empty($_COOKIE['error'])){echo '<div class=error>'.$_COOKIE['error'].'</div>';}?>
            <div>
                <span>ライセンスキーをお持ちですか？</span>
                <form method="post" action="./login/index.php">
                    <input type="hidden" value="<?php echo $token; ?>" name="token">
                    <label>ライセンスキーを入力してください</label>
                    <input type="text" class="key" name="key" required>
                    <input type="submit" value="認証">
                </form>
                <div class="hidden_box" id="hidden_box">※ライセンスキーとは？↓</div>
                <div class="hidden" id="hidden">ライセンスキーとは有料サービス契約時に送信されやURLからライセンスキーの発行をすることで取得できます。</div>
            </div>
            <br>
            <div>
                <a href="./info_plus" class="plus_info">有料プランってどんなの？</a>
            </div>
        <?php else:?>
            <h1>マイページ</h1>
            <?php if(!empty($_COOKIE['success'])){echo '<div class=success>'.$_COOKIE['success'].'</div>';}?>
            <?php if(!empty($_COOKIE['error'])){echo '<div class=error>'.$_COOKIE['error'].'</div>';}?>
            <div> <a href="./red_sheet">赤シート一覧</a></div>
            <br>
            <div>非公開ファイルや早期アクセスファイルはメインページから有料のものを選択するとご覧いただけます。(状態表記は公開となっています。)</div>
            <br>
            <div>
                <a href="./info_plus" class="plus_info">有料プランってどんなの？</a>
            </div>
        <?php endif; ?>
        <br>
        <br>
        <a href="../">戻る</a>
        <script type="text/javascript">
            document.getElementById('hidden_box').addEventListener('click', ()=> {
                document.getElementById('hidden').classList.toggle('visable');
            });
        </script>
    </div>
</body>
</html>