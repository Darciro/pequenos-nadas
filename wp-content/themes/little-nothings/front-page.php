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

        <section id="intro" class="panel w-100 vh-100 bg-blue">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div id="intro-text" class="z-index-1 text-center w-100">
                    <div class="container">
                        <div class="row justify-content-center align-items-end">
                            <div class="col-lg-10 text-center animate__animated" data-animation="fadeInUp">
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


        <section id="about-us" class="panel bg-purple bg-pattern-circles">
            <div class="container">
                <div class="row align-items-center justify-content-center vh-100">
                    <div class="col-lg-6 order-2 order-lg-1 text-end animate__animated pe-lg-5" data-animation="fadeInUp">
                        <p class="text-white section-subtitle">Quem somos</p>
                        <h1 class="display-3 text-white fw-bold text-font-featured">Um pouco sobre nós</h1>
                        <p class="text-white mb-5">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.</p>
                        <button type="button" class="btn btn-lg btn-primary">Saiba mais</button>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 ps-lg-5">
                        <div class="d-none d-lg-block">
                            <img class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/300/600?random=4"/>
                            <img style="margin-left: -60px;margin-top: 285px;" class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/200/400?random=5"/>
                        </div>
                        <div class="d-block d-lg-none mb-5">
                            <img class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/600/300?random=4"/>
                            <img style="margin-left: 35%;margin-top: -135px;" class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/400/200?random=5"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="collections" class="panel bg-orange">
            <div class="d-flex flex-row justify-content-center align-items-center vh-100 bg-orange">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-5 position-relative z-index-1 animate__animated mb-5" data-animation="fadeInLeft">
                            <p class="text-white section-subtitle">Edições</p>
                            <h1 class="display-3 text-white fw-bold text-font-featured">Uma frase de efeito</h1>
                            <p class="text-white mb-5">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                            <button type="button" class="btn btn-lg btn-primary">Saiba mais</button>
                        </div>
                        <div class="col-lg-7">
                            <div id="collections-carousel">
                                <div class="mx-3 animate__animated" data-animation="fadeInRight">
                                    <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=6)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-150ms" data-animation="fadeInRight">
                                    <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=7)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=8)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-450ms" data-animation="fadeInRight">
                                    <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=9)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-600ms" data-animation="fadeInRight">
                                    <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=1)">
                                        <div class="p-3 custom-card-body">
                                            <h3 class="text-font-featured fw-bold">Nome do livro</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-750ms" data-animation="fadeInRight">
                                    <div class="collection-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=1)">
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

        <section id="projects" class="panel bg-green bg-pattern-circles green-circles">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 pe-lg-5 text-center mb-5 animate__animated" data-animation="fadeInUp">
                            <div class="row row-cols-2">
                                <div class="project-card">
                                    <img src="https://picsum.photos/360/280?random=1" alt="">
                                    <div class="overlay">
                                        <h2 class="fw-bold text-font-featured">Project Name</h2>
                                        <p class="m-0">Some small and cool description of the project goes here</p>
                                    </div>
                                </div>
                                <div class="project-card">
                                    <img src="https://picsum.photos/360/280?random=2" alt="">
                                    <div class="overlay">
                                        <h2 class="fw-bold text-font-featured">Project Name</h2>
                                        <p class="m-0">Some small and cool description of the project goes here</p>
                                    </div>
                                </div>
                                <div class="project-card">
                                    <img src="https://picsum.photos/360/280?random=3" alt="">
                                    <div class="overlay">
                                        <h2 class="fw-bold text-font-featured">Project Name</h2>
                                        <p class="m-0">Some small and cool description of the project goes here</p>
                                    </div>
                                </div>
                                <div class="project-card">
                                    <img src="https://picsum.photos/360/280?random=4" alt="">
                                    <div class="overlay">
                                        <h2 class="fw-bold text-font-featured">Project Name</h2>
                                        <p class="m-0">Some small and cool description of the project goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5 mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle">Projetos de impacto</p>
                            <h1 class="display-3 text-white fw-bold text-font-featured">Projetos desenvolvidos com o apoio financeiro dos livros</h1>
                            <p class="text-white mb-5">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus.</p>
                            <button type="button" class="btn btn-lg btn-primary">Saiba mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="panel bg-light-green">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-lg-10 text-center mb-lg-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white section-subtitle">Equipa</p>
                            <h1 class="display-3 fw-bold text-font-featured text-white">Os nossos experts</h1>
                            <p class="mb-5 text-white">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-end">
                        <div class="col-lg-10 text-center mb-lg-5 animate__animated animate__delay-150ms" data-animation="fadeInUp">
                            <div id="team-carousel" class="row justify-content-center">
                                <div class="col-3 card-features text-center">
                                    <img src="https://picsum.photos/120/120?random=1" class="rounded-circle shadow-md mx-auto">
                                    <h3 class="my-3 text-font-featured fw-bold text-white">Nome Apelido</h3>
                                    <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                                    <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                        </a>
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 card-features text-center">
                                    <img src="https://picsum.photos/120/120?random=2" class="rounded-circle shadow-md mx-auto">
                                    <h3 class="my-3 text-font-featured fw-bold text-white">Nome Apelido</h3>
                                    <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                                    <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                        </a>
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 card-features text-center">
                                    <img src="https://picsum.photos/120/120?random=3" class="rounded-circle shadow-md mx-auto">
                                    <h3 class="my-3 text-font-featured fw-bold text-white">Nome Apelido</h3>
                                    <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                                    <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                        </a>
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 card-features text-center">
                                    <img src="https://picsum.photos/120/120?random=4" class="rounded-circle shadow-md mx-auto">
                                    <h3 class="my-3 text-font-featured fw-bold text-white">Nome Apelido</h3>
                                    <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                                    <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                        </a>
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 card-features text-center">
                                    <img src="https://picsum.photos/120/120?random=5" class="rounded-circle shadow-md mx-auto">
                                    <h3 class="my-3 text-font-featured fw-bold text-white">Nome Apelido</h3>
                                    <p class="text-white fw-light">Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.</p>
                                    <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-5">
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('mail', array('class' => 'mail')); ?>
                                        </a>
                                        <a href="#" class="social-icon shadow-sm mx-3 rounded-circle bg-purple">
                                            <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="panel bg-red bg-pattern-circles red-circles">
            <div class="container py-lg-5">
                <div class="row justify-content-center align-items-end">
                    <div class="col-lg-10 text-center my-lg-5 animate__animated" data-animation="fadeInUp">
                        <p class="text-white section-subtitle">Contato</p>
                        <h1 class="display-3 fw-bold text-font-featured text-white">Assine nossa newsletter</h1>
                        <p class="mb-5 text-white">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt.</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="col-lg-6 animate__animated" data-animation="fadeInUp">
                        <div class="newsletter-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2">Subscrever</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
