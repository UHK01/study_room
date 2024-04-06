<link rel="icon" href="<?php echo $icon; ?>">
<link rel="icon" type="image/png" href="<?php echo $icon; ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $icon; ?>">
<link rel="stylesheet" href="<?php echo $css; ?>">
<link rel="stylesheet" href="<?php echo $admin_css; ?>">
<script type="text/javascript">
    responce_check = false;

    function switchByWidth(){
        if (window.matchMedia('(max-width: 300px)').matches) {
            document.getElementById("web").innerHTML = "申し訳ございません。お客様の端末では当サイトを表示することができません。横画面もしくは他のデバイスをご利用ください。";
            responce_check = true;
        } else if (window.matchMedia('(min-width:300px)')) {
            if (responce_check) {
                location.reload();
                responce_check = false;
            }
        }
    }

    window.addEventListener('load' , () => {
        switchByWidth();
    })

    window.onresize = switchByWidth;
</script>