<div class="col-lg-3">
  <!-- <div class="card-body">
    <h4>Publicidad</h4>
    <hr>
    <img src="img/vertical.jpg" alt="" class="img-fluid">
  </div> -->
  <?php if ( is_active_sidebar( 'right-widget' ) ) : ?>
      <?php dynamic_sidebar( 'right-widget' ); ?>
  <?php else : ?>
      <!-- Time to add some widgets! -->
  <?php endif; ?>
</div>