<?php get_template_part('includes/header'); ?>

<div id="main-content">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-8">
        <div id="content" role="main">
          <?php get_template_part('includes/loops/content', 'single'); ?>
        </div><!-- /#content -->
      </div>
    
      <div class="col-md-3 sidebar">
          <?php get_template_part('includes/sidebar'); ?>
      </div>
    
    </div><!-- /.row -->
  </div><!-- /.container -->

</div>

<?php get_template_part('includes/footer'); ?>
