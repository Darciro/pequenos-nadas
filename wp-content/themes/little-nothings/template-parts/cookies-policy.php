<?php
$privacy_policy = home_url('/politica-de-privacidade');
$cookies_policy = home_url('/politica-de-cookies');
?>

<div id="cookies-policy" class="p-3 p-lg-5 animate__animated animate__delay-5ss" data-animation="fadeInUp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center text-md-start">
                <p class="text-white mb-3">Utilizamos cookies para melhorar a experiência de navegação no nosso website. Os cookies ajudam-nos a perceber a forma como o nosso website é utilizado. Ao continuar, estás a aceitar a nossa <a href="<?php echo $cookies_policy; ?>" target="_blank" class="text-orange">Política de Cookies</a>. Ao continuar, estás a aceitar a nossa <a href="<?php echo $privacy_policy; ?>" target="_blank" class="text-orange">Política de Privacidade</a>.</p>
                <button type="button" class="btn btn-primary"><?php echo pll_current_language() === 'pt' ? 'Fechar' : 'Close'; ?></button>
            </div>
        </div>
    </div>
</div>
