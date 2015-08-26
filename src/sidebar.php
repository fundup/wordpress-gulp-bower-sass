<div id="wrap-sidebar" class="col-md-4">
  <?php if ( is_active_sidebar( 'sidebar-main' ) ) { ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </div>
  <?php } ?>
</div>
