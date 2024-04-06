<?php
//error_display:
?>
<?php if(!empty($_COOKIE['success'])){echo '<div class=success>'.$_COOKIE['success'].'</div>';}?>
<?php if(!empty($_COOKIE['error'])){echo '<div class=error>'.$_COOKIE['error'].'</div>';}?>
<?php
//error_cookie:
setcookie('error','エラー!msg',['expires'=>time()+1,'path'=>'/']);
header('Location: ./');
exit();
//success_cookie:
setcookie('success','msg',['expires'=>time()+1,'path'=>'/']);
header('Location: ./');
?>