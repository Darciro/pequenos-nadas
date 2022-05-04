<div class="offcanvas offcanvas-top" tabindex="-1" id="sidenav" aria-labelledby="sidenav-label">
    <div class="offcanvas-header visually-hidden">
        <h5 class="offcanvas-title" id="sidenav-label">Navigation</h5>
    </div>
    <div class="offcanvas-body">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-lg-8 offcanvas-body-wrapper">
                    <div class="row py-5 py-lg-0">
                        <div class="col-lg-6 order-1 order-lg-0 mt-5 mt-lg-0">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <?php
                                if (is_active_sidebar('offcanvas-left')) {
                                    dynamic_sidebar( 'offcanvas-left' );
                                }
                                ?>
                                <!--<div class="d-flex justify-content-start mt-5 mt-lg-0">
                                    <a href="#" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                                        <?php echo get_icon('facebook', array('class' => 'facebook')); ?>
                                    </a>
                                    <a href="#" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                                        <?php echo get_icon('instagram', array('class' => 'instagram')); ?>
                                    </a>
                                    <a href="#" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                                        <?php echo get_icon('linkedin', array('class' => 'linkedin')); ?>
                                    </a>
                                    <a href="#" class="social-icon shadow-sm me-3 rounded-circle bg-purple">
                                        <?php echo get_icon('youtube', array('class' => 'youtube')); ?>
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1">
                            <?php
                            if (is_active_sidebar('offcanvas-right')) {
                                dynamic_sidebar( 'offcanvas-right' );
                            }
                            ?>

                            <h3 class="text-font-featured fw-bold text-white mt-5"><?php echo pll_current_language() === 'pt' ? 'Idioma' : 'Language'; ?></h3>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white <?php echo pll_current_language() === 'pt' ? 'cur-lang' : ''; ?>" aria-current="page" href="<?php echo pll_home_url('pt'); ?>">Português</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white <?php echo pll_current_language() === 'en' ? 'cur-lang' : ''; ?>" aria-current="page" href="<?php echo pll_home_url('en'); ?>">English</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>