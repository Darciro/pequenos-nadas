<div id="sidenav">
    <div class="sidenav-content">

        <nav class="navbar">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'depth' => 2,
                'container' => '',
                'menu_id' => 'main-navigation',
                'menu_class' => 'navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'items_wrap' => '<ul id="%1$s" class="%2$s text-font-just-nova">%3$s</ul>',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </nav>


    </div>
</div>