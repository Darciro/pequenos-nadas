<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Just_a_Change
 */

?>

<footer id="footer" class="bg-blue">
    <div class="container py-5">
        <div class="row align-items-start">
            <div class="col-lg-4 my-lg-5 mb-5 text-center text-lg-start animate__animated" data-animation="fadeInUp">
                <h3 class="text-font-featured text-white fw-bold">Mapa do site</h3>
                <ul class="p-0 m-0 list-unstyled menu">
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Notícias</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Blog</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Foobar</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 my-lg-5 mb-5 text-center text-lg-start animate__animated" data-animation="fadeInUp">
                <h3 class="text-font-featured text-white fw-bold">Legal</h3>
                <ul class="p-0 m-0 list-unstyled menu">
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Política de Privacidade</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Termos de Utilização</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">Política de Cookies</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 my-lg-5 mb-5 text-center text-lg-start animate__animated" data-animation="fadeInUp">
                <h3 class="text-font-featured text-white fw-bold">Contactos</h3>
                <ul class="p-0 m-0 list-unstyled menu">
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">geral@pequenosnadas.pt</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="text-decoration-none text-white" aria-current="page">+351 220 000 000</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row align-items-start mt-5">
            <div class="col-lg-6 text-center text-lg-start animate__animated" data-animation="fadeInUp">
                <p class="text-white mb-5 mb-lg-0 fs-6">2022 © Pequenos Nadas. Todos os direitos reservados.</p>
            </div>
            <div class="col-lg-6 text-center text-lg-end" data-animation="fadeInUp">
                <a href="#" class="social-icon shadow-sm ms-3 rounded-circle bg-purple">
                    <?php echo get_icon('facebook', array('class' => 'facebook')); ?>
                </a>
                <a href="#" class="social-icon shadow-sm ms-3 rounded-circle bg-purple">
                    <?php echo get_icon('instagram', array('class' => 'instagram')); ?>
                </a>
                <a href="#" class="social-icon shadow-sm ms-3 rounded-circle bg-purple">
                    <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                </a>
                <a href="#" class="social-icon shadow-sm ms-3 rounded-circle bg-purple">
                    <?php echo get_icon('youtube', array('class' => 'youtube')); ?>
                </a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
