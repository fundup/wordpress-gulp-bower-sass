<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php wp_nav_menu( array(
            'theme_location' => 'main_menu',
            'menu_id' => 'top-menu',
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
            'menu_class'        => 'nav navbar-nav' ) );
        ?>
    </div>
</nav>
