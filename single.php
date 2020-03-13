<?php get_header( ); ?>

        
        <div class="container p-1">
            <div class="row ">
             <div class="col-sm-9">
                 <div class="single-title">
                     <h3><?php the_title();?>
                    </h3>
                    <hr class="pl-10">
                 </div>
                 <div class="single-content">
                     <p>
                         <?php the_post();?>
                        <?php the_content(); ?>
                     </p>
                 </div>
             </div>
            
               <?php get_sidebar(  ); ?>
<?php get_footer(  );?>