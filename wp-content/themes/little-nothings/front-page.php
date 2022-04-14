<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just_a_Change
 */

get_header();
?>

    <main id="primary" class="site-main" xmlns="http://www.w3.org/1999/html">

        <section id="intro" class="panel w-100 vh-100 blue">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div id="intro-text" class="z-index-1 text-center w-100">
                    <div class="container">
                        <div class="row justify-content-center align-items-end">
                            <div class="col-md-10 text-center animate__animated" data-animation="fadeInUp">
                                <h1 class="display-1 text-white fw-bolder text-font-featured mb-3">Pequenos Nadas</h1>
                                <p class="fw-light mb-5 mw-900 ms-auto me-auto text-white">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                                <button type="button" class="btn btn-lg btn-primary">Saiba mais</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="intro-carousel" class="vh-100 w-100 z-index-0">
                    <div class="carousel-bg vh-100" style="background-image:url(https://picsum.photos/1280/720?random=1)"></div>
                    <div class="carousel-bg vh-100" style="background-image:url(https://picsum.photos/1280/720?random=2)"></div>
                    <div class="carousel-bg vh-100" style="background-image:url(https://picsum.photos/1280/720?random=3)"></div>
                </div>
            </div>
        </section>


        <section id="about-us" class="panel w-100 vh-100 purple bg-pattern-purple">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-end animate__animated pe-5" data-animation="fadeInUp">
                            <p class="text-white section-subtitle">Quem somos</p>
                            <h1 class="display-3 text-white fw-bold text-font-featured">Um pouco sobre nós</h1>
                            <p class="text-white mb-5">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.</p>
                            <button type="button" class="btn btn-lg btn-primary">Saiba mais</button>
                        </div>
                        <div class="col-md-6 ps-5">
                            <img class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/300/600?random=4"/>
                            <img style="margin-left: -60px;margin-top: 285px;" class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/200/400?random=5"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="collections" class="panel w-100 vh-100 orange">
            <div class="d-flex flex-row justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-5 position-relative z-index-1 animate__animated" data-animation="fadeInLeft">
                            <p class="text-white section-subtitle">Edições</p>
                            <h1 class="display-3 text-white fw-bold text-font-featured">Uma frase de efeito</h1>
                            <p class="text-white mb-5">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                            <button type="button" class="btn btn-lg btn-primary">Saiba mais</button>
                        </div>
                        <div class="col-md-7">
                            <div id="collections-carousel">
                                <div class="mx-3 animate__animated" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=6)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-150ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=7)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=8)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-450ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=9)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-600ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=1)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-750ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=1)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="panel w-100 vh-100 green bg-pattern-green">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-md-12 text-center mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle">Projetos de impacto</p>
                            <h1 class="display-3 text-white fw-bold text-font-featured">Projetos desenvolvidos com o apoio financeiro dos livros</h1>
                            <p class="text-white mb-5">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.</p>
                        </div>
                        <div id="features-carousel" class="row justify-content-center animate__animated animate__delay-150ms" data-animation="fadeInUp">
                            <div class="col-3 card-features text-center">
                                <img src="https://picsum.photos/120/120?random=1" class="rounded-circle custom-shadow mx-auto">
                                <h3 class="my-4 text-font-featured fw-bold text-white">Projeto #1</h3>
                                <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                            </div>
                            <div class="col-3 card-features text-center">
                                <img src="https://picsum.photos/120/120?random=2" class="rounded-circle custom-shadow mx-auto">
                                <h3 class="my-4 text-font-featured fw-bold text-white">Projeto #2</h3>
                                <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                            </div>
                            <div class="col-3 card-features text-center">
                                <img src="https://picsum.photos/120/120?random=3" class="rounded-circle custom-shadow mx-auto">
                                <h3 class="my-4 text-font-featured fw-bold text-white">Projeto #3</h3>
                                <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                            </div>
                            <div class="col-3 card-features text-center">
                                <img src="https://picsum.photos/120/120?random=4" class="rounded-circle custom-shadow mx-auto">
                                <h3 class="my-4 text-font-featured fw-bold text-white">Projeto #4</h3>
                                <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                            </div>
                            <div class="col-3 card-features text-center">
                                <img src="https://picsum.photos/120/120?random=5" class="rounded-circle custom-shadow mx-auto">
                                <h3 class="my-4 text-font-featured fw-bold text-white">Projeto #5</h3>
                                <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="panel w-100 vh-100 green-light">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-md-12 text-center mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle">Equipa</p>
                            <h1 class="display-3 fw-bold text-font-featured">Os nossos experts</h1>
                            <p class="mb-5">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer" class="panel w-100 vh-100 red">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-md-12 text-center mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle">Contato</p>
                            <h1 class="display-3 fw-bold text-font-featured text-white">Entre em contato connosco</h1>
                            <p class="mb-5 text-white">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mb-5 pb-5">
                        <div class="col-md-3 text-end animate__animated" data-animation="fadeInUp">
                            <h3 class="text-font-featured text-white fw-bold m-0">Newsletter</h3>
                        </div>
                        <div class="col-md-3 animate__animated" data-animation="fadeInUp">
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-md-3 animate__animated" data-animation="fadeInUp">
                            <button class="btn btn-light">Subscrever</button>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-md-4 mb-5 animate__animated" data-animation="fadeInUp">
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
                        <div class="col-md-4 mb-5 animate__animated" data-animation="fadeInUp">
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
                        <div class="col-md-4 mb-5 animate__animated" data-animation="fadeInUp">
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
                        <div class="col-md-6 mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white m-0 fs-6">2022 © Pequenos Nadas. Todos os direitos reservados.</p>
                        </div>
                        <div class="col-md-6 text-end mb-5 animate__animated" data-animation="fadeInUp">
                            <a href="#" class="social-icon ms-3 facebook">
                                <?php echo get_icon('facebook', array('class' => 'facebook')); ?>
                            </a>
                            <a href="#" class="social-icon ms-3 instagram">
                                <?php echo get_icon('instagram', array('class' => 'instagram')); ?>
                            </a>
                            <a href="#" class="social-icon ms-3 linkedin">
                                <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                            </a>
                            <a href="#" class="social-icon ms-3 youtube">
                                <?php echo get_icon('youtube', array('class' => 'youtube')); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
