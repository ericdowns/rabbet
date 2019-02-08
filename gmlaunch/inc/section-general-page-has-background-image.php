<div class="full">
<div class="content-full">

    <?php if ( get_field( 'hero_image' ) ) { ?>
    <div class="section-gereral-hero-imageholder" style="background-image: url(<?php the_field( 'hero_image' ); ?>"/>
        <?php } else { ?>   
    <div class="section-gereral-hero-imageholder" style="background-image: url(https://dummyimage.com/2000x800/000/000)"/>             
    <?php } ?>

    <div class="section-gereral-hero-imageholder-gradient"></div>

    <div class="section-gereral-hero-content">
      <div class="page-title-wrapper-over-image"> 
          <h1 class="page-title"><?php the_title();?> </h1>            
      </div><!-- page-title-wrapper -->
    
    


    </div><!-- section-gereral-hero-content -->
    </div><!-- section-gereral-hero-imageholder -->


</div><!-- content-full -->
</div><!-- full -->