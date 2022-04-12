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
                            <div class="col-md-12 text-center animate__animated" data-animation="fadeInUp">
                                <p class="text-white display-5">Coleção</p>
                                <h1 class="display-1 text-uppercase text-white font-weight-bold text-font-featured">Pequenos Nadas</h1>
                                <p class="text-white">Lisboa | 2021</p>
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


        <section id="about-the-project" class="panel w-100 vh-100 purple">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center animate__animated" data-animation="fadeInUp">
                            <p class="text-white display-5">No que acreditamos</p>
                            <h1 class="display-3 text-uppercase text-white font-weight-bold text-font-featured">Descrição do projeto</h1>
                            <p class="text-white">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                            <button type="button" class="btn btn-primary">Saiba mais</button>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/300/600?random=4"/>
                            <img style="margin-left: -60px;margin-top: 285px;" class="img-fluid animate__animated" data-animation="fadeInRight" src="https://picsum.photos/200/400?random=5"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="consulting-board" class="panel w-100 vh-100 orange">
            <div class="d-flex flex-row justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-5 position-relative z-index-1 animate__animated" data-animation="fadeInLeft">
                            <p class="text-white display-5">Os nossos experts</p>
                            <h1 class="display-3 text-uppercase text-white font-weight-bold text-font-featured">Conselho consultivo</h1>
                            <p class="text-white">Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar aroin eget tortor risus.</p>
                        </div>
                        <div class="col-md-7">
                            <div id="consulting-board-carousel">
                                <div class="mx-3 animate__animated" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=6)">
                                        <div class="p-3">
                                            <span>Psicologia das Organizações | Life Coaching</span>
                                            <h3>Nome do consultor</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-150ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=7)">
                                        <div class="p-3">
                                            <span>Psicologia das Organizações | Life Coaching</span>
                                            <h3>Nome do consultor</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=8)">
                                        <div class="p-3">
                                            <span>Psicologia das Organizações | Life Coaching</span>
                                            <h3>Nome do consultor</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-450ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=9)">
                                        <div class="p-3">
                                            <span>Psicologia das Organizações | Life Coaching</span>
                                            <h3>Nome do consultor</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3 animate__animated animate__delay-600ms" data-animation="fadeInRight">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=1)">
                                        <div class="p-3">
                                            <span>Psicologia das Organizações | Life Coaching</span>
                                            <h3>Nome do consultor</h3>
                                            <p>Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="consultant-card d-flex flex-column justify-content-end align-items-end" style="background-image:url(https://picsum.photos/1280/720?random=2)">
                                        <div class="p-3">
                                            <span>Psicologia das Organizações | Life Coaching</span>
                                            <h3>Nome do consultor</h3>
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

        <section class="panel w-100 vh-100 green">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-md-12 text-center mb-5 animate__animated" data-animation="fadeInUp">
                            <p class="text-white display-5">Ainda tens dúvidas?</p>
                            <h1 class="display-3 text-uppercase text-white font-weight-bold text-font-featured">Perguntas frequentes</h1>
                            <p class="text-white">Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar aroin eget tortor risus.</p>
                        </div>
                        <div class="col-md-8 animate__animated animate__delay-300ms" data-animation="fadeInUp">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="panel w-100 vh-100 green-light">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-md-12 text-center mb-5">
                            <p class="text-white display-5">Ainda tens dúvidas?</p>
                            <h1 class="display-3 text-uppercase text-white font-weight-bold text-font-featured">Perguntas frequentes</h1>
                            <p class="text-white">Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar aroin eget tortor risus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
