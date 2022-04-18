<div class="offcanvas offcanvas-end d-block d-lg-none" tabindex="-1" id="sidenav" aria-labelledby="sidenav-label">
    <div class="offcanvas-header visually-hidden">
        <h5 class="offcanvas-title" id="sidenav-label">Navigation</h5>
    </div>
    <div class="offcanvas-body">
        <h3 class="text-font-featured fw-bold">Menu</h3>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>#intro">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#about-us">Quem Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#collections">Edições</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#projects">Projetos de Impacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#team">Equipa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url('/events'); ?>#">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#">Noticias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>#">Blog</a>
            </li>
        </ul>

        <h3 class="text-font-featured fw-bold mt-5">Contactos</h3>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">geral@pequenosnadas.pt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">+351 220 000 000</a>
            </li>
        </ul>

        <button type="button" class="btn btn-primary mt-5">Contact Us</button>
        <div class="mt-3">
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
        </div>
    </div>
</div>